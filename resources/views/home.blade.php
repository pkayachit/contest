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
            <div class="card card-teal card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

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

                <a href="#" class="btn btn-teal btn-block"><b>View Ongoing Contest</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            {{-- <div class="card card-teal">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Email</strong>

                <p class="text-muted">
                  mathew@gmail.com
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted">11, Lake View Villas, 8th Main, Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Postal Code</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">560085</span>
                 </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Country</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">USA</span>
                 </p>

                <hr>


                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->




          </div>
          <!-- /.col -->
          <div class="col-md-9">
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
                            <div class="card card-teal">
                                <div class="card-header">
                                    <h3 class="card-title">Address</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">


                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                                    <p class="text-muted">11, Lake View Villas, 8th Main, Malibu, California</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Postal Code</strong>

                                    <p class="text-muted">
                                    <span class="tag tag-danger">560085</span>
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
                            <div class="card card-teal">
                                <div class="card-header">
                                    <h3 class="card-title">Contact</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                    <p class="text-muted">
                                    mathew@gmail.com
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Phone</strong>

                                    <p class="text-muted">8888899999</p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Mobile</strong>

                                    <p class="text-muted">878787889</p>

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
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Phone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Mobile">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Age">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Address"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Country">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Zipcode</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Zipcode">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
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
