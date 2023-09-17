@extends('layouts.app')

@section('content')


<div class="container-fluid">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                <p class="text-muted text-center">Photographer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>My Images</b> <a class="float-right">250</a>
                  </li>
                  <li class="list-group-item">
                    <b>My Contests</b> <a class="float-right">6</a>
                  </li>
                  <li class="list-group-item">
                    <b>Contest Won</b> <a class="float-right">2</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>View Ongoing Contest</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-9">
          @include('adminlte-templates::common.errors')
          @include('flash::message')
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">My Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">My Recent Photos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->

                    <div class="row">
                        <div class="col-md-4">
                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Address</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">


                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                                    <p class="text-muted">{{ $user->address }}</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Postal Code</strong>

                                    <p class="text-muted">
                                    <span class="tag tag-danger">{{ $user->zipcode }}</span>
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Country</strong>

                                    <p class="text-muted">
                                    <span class="tag tag-danger">USA</span>
                                    </p>

                                    <hr>



                                </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.md-4 -->
                        </div>

                        <div class="col-md-4">
                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Contact</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                    <p class="text-muted">
                                    {{ $user->email }}
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Phone</strong>

                                    <p class="text-muted">{{ $user->phone }}</p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Mobile</strong>

                                    <p class="text-muted">{{ $user->mobile }}</p>

                                    <hr>


                                </div>
                            <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.md-4 -->
                    </div>
                    <!-- /.row -->

                    <!-- /.card -->
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                            <span class="username">
                            <a href="#">Wildlife</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                        <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                    </div>

                                    <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                    </div>

                                </div>

                            </div>
                        </div>

                        <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> View All</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Add More</a>
                        <span class="float-right">
                        <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Total Images (5)
                        </a>
                        </span>
                        </p>
                        </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    {{-- <form class="form-horizontal"> --}}




                    {!! Form::model($user, ['route' => ['updateProfile'], 'method' => 'post']) !!}
                      <div class="form-group row">
                        {!! Form::label('first_name', 'First Name',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::hidden('id', $user->id, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'First Name']) !!}
                          {!! Form::text('first_name', $user->first_name, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'First Name']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('last_name', 'Last Name',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('last_name', $user->last_name, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'First Name']) !!}
                        </div>
                      </div>
                       <div class="form-group row">
                        {!! Form::label('email', 'Email',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('email', $user->email, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Email' , 'disabled' => 'disabled']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('phone', 'Phone',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('phone', $user->phone, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Phone']) !!}
                        </div>
                      </div>
                       <div class="form-group row">
                        {!! Form::label('mobile', 'Mobile',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('mobile', $user->mobile, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Mobile']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('age', 'Age',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('age', $user->age, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Age']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('address', 'Address',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('address', $user->address, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Address']) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('country', 'Country',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {{-- {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Country']) !!} --}}

                           @if($errors->has('firstname'))
                                {!! Form::select('country_id',  ['' => 'Please Select Country']+$countries,$user->country_id, array('class' => 'form-control is-invalid','value' => old('country_id'))) !!}
                           @else
                                {!! Form::select('country_id',  ['' => 'Please Select Country']+$countries,$user->country_id, array('class' => 'form-control','value' => old('country_id'))) !!}
                           @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        {!! Form::label('zipcode', 'Zipcode',['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                          {!! Form::text('zipcode', $user->zipcode, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500, 'placeholder' => 'Zipcode']) !!}
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    {!! Form::close() !!}
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
      </div><!-- /.container-fluid -->
@endsection
