<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    private $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,)
    {
        $id = Auth::user()->id;

        $user = $this->userRepository->find($id);
        $countries = Country::pluck('name', 'id')->toArray();
        return view('home')
                ->with('user', $user)
                ->with('countries', $countries);


        // return view('home');
    }

    public function adminUsers(){
        return view('adminUsers');
    }


    public function updateProfile(Request $request)
    {

        $user = $this->userRepository->find($request->input('id'));

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('home'));
        }

        // $user = $this->userRepository->update($request->all(), $id);

        $validation = Validator::make($request->all(), [
            'name' => 'nullable',
            'first_name' => 'required|string|max:500',
            'last_name' => 'required|string|max:500',
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required|string|max:100',
            'mobile' => 'required|string|max:100',
            'age' => 'required|numeric',
            'address' => 'required|string',
            'country_id' => 'nullable|integer',
            'zipcode' => 'required|string|max:250',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
        ]);

        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)->withInput();
        } else {

            $user = User::find($request->input('id'));
            $user->name      =  $request->input('first_name').' '.$request->input('last_name');
            $user->first_name      =  $request->input('first_name');
            $user->last_name      =  $request->input('last_name');
            $user->age =  $request->input('age');
            $user->phone =  $request->input('phone');
            $user->mobile =  $request->input('mobile');
            $user->address =  $request->input('address');
            $user->zipcode =  $request->input('zipcode');
            $user->save();


            Flash::success('Your profile was updated successfully.');

            return redirect(route('home'));
        }
    }
}
