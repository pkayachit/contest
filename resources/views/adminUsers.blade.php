@extends('layouts.app')

@section('content')


<div class="container-fluid">

   <section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Users</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Users</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="card">
      <div class="card-header">
         <h3 class="card-title">Users</h3>
         <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
         </div>
      </div>
      <div class="card-body p-0">
         <table class="table table-striped projects">
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
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     William
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
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     James
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
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                     </div>
                     <small>
                     47% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Sandeep
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
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%"></div>
                     </div>
                     <small>
                     77% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Prashanth
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
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                     </div>
                     <small>
                     60% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Gary
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
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                        </li>
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%"></div>
                     </div>
                     <small>
                     12% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Robin
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
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
                     </div>
                     <small>
                     35% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Andy
                     </a>
                     <br>
                     <small>
                     Created 01.01.2019
                     </small>
                  </td>
                  <td>
                     <ul class="list-inline">
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                        </li>
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                     </div>
                     <small>
                     87% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Krishna
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
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%"></div>
                     </div>
                     <small>
                     77% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>
                     #
                  </td>
                  <td>
                     <a>
                     Raj
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
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                        <li class="list-inline-item">
                           <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                        </li>
                     </ul>
                  </td>
                  <td class="project_progress">
                     <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%"></div>
                     </div>
                     <small>
                     77% Complete
                     </small>
                  </td>
                  <td class="project-state">
                     <span class="badge badge-success">Active</span>
                  </td>
                  <td class="project-actions text-right">
                     <a class="btn btn-primary btn-sm" href="#">
                     <i class="fas fa-folder">
                     </i>
                     View
                     </a>
                     <a class="btn btn-info btn-sm" href="#">
                     <i class="fas fa-pencil-alt">
                     </i>
                     Edit
                     </a>
                     <a class="btn btn-danger btn-sm" href="#">
                     <i class="fas fa-trash">
                     </i>
                     Disable
                     </a>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</section>
      </div><!-- /.container-fluid -->
@endsection
