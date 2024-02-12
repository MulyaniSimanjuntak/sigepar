<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  card">
         
                <!-- /.login-logo -->
                   <div class="login-logo">
                  <a href="{{url('/')}}"><b>HKI</b>Parsoburan</a><br>
                  <img src="{{(asset('assets/img/gereja.jpg'))}}" class="img-circle " style="max-height: 100px;"  alt="SIGEPAR">
                </div>
                  <div class="card-body login-card-body">
                    
                    <p class="login-box-msg">Sistem Informasi Gereja HKI Parsoburan</p>
              
                    <form action="{{url('/postlogin')}}" method="POST">
                        @csrf
                      <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-solid fa-id-card"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="password"  name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>


                    <!-- /.social-auth-links -->
                    @if(session('gagal_login'))
                    <p class="mb-1">
                   <p style="color: crimson;font-style:oblique"><small>{{session('gagal_login')}}</small></p>
                    </p>
                    @endif
                    <p class="mb-0">
                        <small>  <i>Jika Anda Jemaat gereja Klik</i></small> 
                        <a href="/register" class="text-center">
                            <small>Register</small></a>
                        <small>  <i>Untuk Mendaftar</i></small> 
                      
                    </p>
                  </div>
                  <!-- /.login-card-body -->
                </div>
            </div>

        </div>
      </div>
    </div>
  </div>