<x-layout-login>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <div class="logo align-items-center w-auto text-center">
                  <h3>FLMS</h3>
                  <p>Family Library Management System</p>
                </div>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">User Authorization</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <x-flash/>

                  <form class="row g-3" method="POST" action="{{ url('login') }}">

                    @csrf

                    <input type="hidden" name="refferer" value="{!! $_GET['refferer'] ?? '' !!}">

                    <div class="col-12">

                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <x-form.input name="email" type="email" required />
                      </div>

                      <x-form.error name="email"/>

                    </div>

                    <div class="col-12">

                      <label for="yourPassword" class="form-label">Password</label>
                      <x-form.input name="password" type="password" required />
                      <x-form.error name="password"/>

                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12 text-center">
                      <p class="small mb-0">
                        Don't have an user account? <a href="{{ url('registration') }}">Register!</a>
                      </p>
                    </div>
                    <div class="col-12 text-center">
                      <a href="{{ url('/') }}">Back to Main Page</a>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits mt-3">
                Develped and Maintained by <a href="http://kadir.tech/" target="_blank">Md. Abdul Kadir</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div> <!-- End #container -->

  </main> <!-- End #main -->

</x-layout-login>
