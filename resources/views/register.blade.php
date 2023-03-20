<x-layout-login>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <div class="logo align-items-center w-auto text-center">
                  <h3>FLMS</h3>
                  <p>Family Library Management System</p>
                </div>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create user account</p>
                  </div>

                  <x-flash/>

                  <form class="row g-3" method="POST" action="{{ url('registration') }}">

                    @csrf

                    <div class="col-md-6 col-sm-12">

                      <label for="name" class="form-label">Name <x-form.field-required/></label>
                      <div class="input-group has-validation">
                        <x-form.input name="name" type="text" required />
                      </div>

                      <x-form.error name="name"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <label for="name_bn" class="form-label">Name (In Bangla, optional)</label>
                      <div class="input-group has-validation">
                        <x-form.input name="name_bn" type="text"/>
                      </div>

                      <x-form.error name="name_bn"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <label for="avatar" class="form-label">Gravatar ID (optional, if any)</label>
                      <div class="input-group has-validation">
                        <x-form.input name="avatar" type="text"/>
                      </div>

                      <x-form.error name="avatar"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <label for="mobile" class="form-label">Mobile <x-form.field-required/></label>
                        <div class="input-group has-validation">
                            <x-form.input name="mobile" type="text" required/>
                        </div>

                        <x-form.error name="mobile"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <label for="email" class="form-label">Email <x-form.field-required/></label>
                      <div class="input-group has-validation">
                        <x-form.input name="email" type="email" required />
                      </div>

                      <x-form.error name="email"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <label for="username" class="form-label">Username <x-form.field-required/></label>
                      <div class="input-group has-validation">
                        <x-form.input name="username" type="text" required />
                      </div>

                      <x-form.error name="username"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <label for="password" class="form-label">Password <x-form.field-required/></label>
                      <x-form.input name="password" type="password" required />
                      <x-form.error name="password"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <label for="password_confirmation" class="form-label">Confirm Password <x-form.field-required/></label>
                      <x-form.input name="password_confirmation" type="password" required />
                      <x-form.error name="password_confirmation"/>

                    </div>

                    <div class="col-md-6 col-sm-12">

                      <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>

                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="agree" value="true" id="agree">
                        <label class="form-check-label" for="agree">I agree with the Terms and Conditions.</label>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                      <button class="btn btn-primary w-auto" type="submit">Create Account</button>
                    </div>
                    <div class="col-12 text-center">
                      <p class="small mb-0">
                        Already have an account? <a href="{{ url('login') }}">Login</a>
                      </p>
                    </div>
                    
                    <div class="col-12 text-center">
                      <a href="{{ url('/') }}">Back to Main Page</a>
                    </div>
                    
                  </form>

                </div>
              </div>

              <div class="credits mt-3">
                Developed and Maintained by <a href="http://kadir.tech/" target="_blank">Md. Abdul Kadir</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div> <!-- End #container -->

  </main> <!-- End #main -->

</x-layout-login>
