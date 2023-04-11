@include('layouts.header')
<main id="main">

    <!--title-->
    <!-- <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">For Demo, Login Your Account </h1>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--Titlte close-->
    <!--form-->
    <div class="container">
        <!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->
            <div class="p-5 bg-image" style="
                    background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
                    height: 300px;
                    "></div>
            <!-- Background image -->
            <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                    margin-top: -100px;
                    background: hsla(0, 0%, 100%, 0.8);
                    backdrop-filter: blur(30px);
                    ">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Register Your Self</h2><p>Welcome to Flexible<span style="color: #2eca6a;">Space</span>, Please fill this form to create an account</p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="form3Example2">First Name</label>
                                    <div class="col-md-6">
                                        <input id="first_name" class="form-control" type="text" name="first_name"
                                            :value="old('first_name')" required autofocus autocomplete="first_name" />
                                        @if($errors->has('first_name'))
                                        <div class="error"> {{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="form3Example2">Last Name</label>
                                    <div class="col-md-6">
                                        <input id="last_name" class="form-control" type="text" name="last_name"
                                            :value="old('last_name')" required autofocus autocomplete="last_name" />
                                        @if($errors->has('last_name'))
                                        <div class="error"> {{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="form3Example2">CNIC Number <br/> (format: xxxxx-xxxxxxx-x)</label>
                                    <div class="col-md-6">
                                        <input id="staff_id" class="form-control" type="tel"pattern="^\d{5}-\d{8}-\d{1}$" required name="staff_id" autofocus autocomplete="staff_id" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="form3Example2">Location</label>
                                    <div class="col-md-6">
                                        <input id="department" class="form-control" type="text" name="department" autofocus autocomplete="department" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="form3Example2">Phone Number</label>
                                    <div class="col-md-6">
                                        <input id="position" class="form-control" type="tel" name="position" autofocus required autocomplete="position" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="form3Example3">Email Address</label>
                                    <div class="col-md-6">
                                        <input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                        @if($errors->has('email'))
                                        <div class="error"> {{ $errors->first('email') }}</div>
                                        @endif

                                    </div>
                                </div>

                                <!-- Password input -->
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="password"
                                        :value="__('Password')">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="new-password" />
                                    </div>

                                    @if($errors->has('password'))
                                    <div class="error"> {{ $errors->first('password') }}</div>
                                    @endif
                                </div>

                                <!-- Confirm Password -->
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="password_confirmation"
                                        :value="__('Confirm Password')">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input id="password_confirmation" class="form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                    @if($errors->has('password_confirmation'))
                                    <div class="error"> {{ $errors->first('password_confirmation') }}</div>
                                    @endif

                                </div>

                                <div class="row mb-3" style="margin-left: 10px;">
                                <div class="col-md-8 offset-md-2">
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Section: Design Block -->
</main>
@include('layouts.footer')
