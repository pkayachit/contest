 <div class="row">

        <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-teal card-outline">
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

                <a href="#" class="btn btn-teal btn-block"><b>View Ongoing Contest</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
                        <div class="col-md-4">
                            <!-- About Me Box -->
                            <div class="card card-teal">
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
                            <div class="card card-teal">
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
