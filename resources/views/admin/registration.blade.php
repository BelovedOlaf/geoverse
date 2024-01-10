@extends('admin.layout')
@section('title','registration')
@section('content')

  <main>

    <div class="container">



      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

        <div class="container">

          <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



              <div class="d-flex justify-content-center py-4">

                <a href="index.html" class="logo d-flex align-items-center w-auto">

                  <img src="assets/img/logo.png" alt="">

                  <span class="d-none d-lg-block">Basket Brigade</span>

                </a>

              </div><!-- End Logo -->



              <div class="card mb-3">



                <div class="card-body">



                  <div class="pt-4 pb-2">

                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>

                    <p class="text-center small">Enter your personal details to create account</p>

                  </div>



                  <form action="{{ route('register.custom') }}" method="POST" class="row g-3 needs-validation" novalidate>
                  @csrf
                    <div class="col-12">

                      <label for="yourName" class="form-label">Your Name</label>
                       <input type="text" placeholder="Name" id="yourName" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif

                      <!-- <input type="text" name="name" class="form-control" id="yourName" required> -->

                      <div class="invalid-feedback">Please, enter your name!</div>

                    </div>



                    <div class="col-12">

                      <label for="yourEmail" class="form-label">Your Email</label>

                     <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>

                    </div>



                   <!--  <div class="col-12">

                      <label for="yourUsername" class="form-label">Username</label>

                      <div class="input-group has-validation">

                        <span class="input-group-text" id="inputGroupPrepend">@</span>

                        <input type="text" name="username" class="form-control" id="yourUsername" required>

                        <div class="invalid-feedback">Please choose a username.</div>

                      </div>

                    </div> -->



                    <div class="col-12">

                      <label for="yourPassword" class="form-label">Password</label>

                     <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif

                      <div class="invalid-feedback">Please enter your password!</div>

                    </div>



                    <div class="col-12">

                      <div class="form-check">
                          <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>

                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>

                        <div class="invalid-feedback">You must agree before submitting.</div>

                      </div>

                    </div>

                    <div class="col-12">

                      <button class="btn btn-primary w-100" type="submit">Create Account</button>

                    </div>

                    <div class="col-12">

                      <p class="small mb-0">Already have an account? <a href="/admin">Log in</a></p>

                    </div>

                  </form>



                </div>

              </div>



              <div class="credits">

                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->

              </div>



            </div>

          </div>

        </div>



      </section>



    </div>

  </main>

  @endsection
