<div class="table-responsive">

      <table class="table table-striped projects" id="users-table">
            <thead>
               <tr>
                  <th style="width: 1%">
                     #
                  </th>
                  <th style="width: 20%">
                     Name
                  </th>
                  <th style="width: 30%">
                     Recent Photos
                  </th>
                  <th>
                     Contest Progress
                  </th>
                  <th style="width: 8%" class="text-center">
                     Status
                  </th>
                  <th style="width: 20%"></th>
               </tr>
            </thead>
            <tbody>
             @foreach($users as $user)
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     {{ $user->name }}
                     </a>
                     <br>
                     <small>
                     Created 01.01.2019
                     </small>
                  </td>
                  <td>
                     <ul class="list-inline">
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div>
                     </div>
                     <small>
                     57% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="{{ route('users.show', [$user->id]) }}">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="{{ route('users.edit', [$user->id]) }}">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>

                     {!! Form::button('<i class="far fa-trash-alt"></i> Disable', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                     {{-- <a class="btn btn-danger btn-sm" href="#">
                     <i class="far fa-trash-alt"></i>
                     Disable
                     </a> --}}
                  </td>
               </tr>
             @endforeach

            </tbody>
         </table>

{{--
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Age</th>
        <th>Address</th>
        <th>Country Id</th>
        <th>Zipcode</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email_verified_at }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->remember_token }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->country_id }}</td>
            <td>{{ $user->zipcode }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> --}}
</div>
