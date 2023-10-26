@include('layouts.header')
<div class="main">
<section class="sign-in">
    <div class="container1">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{asset('assets/img/car-1.png')}}" alt="sing up image"></figure>
                <a class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Log In</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-wrap ">
                        <input class="signin-input " id="form-location" type="email" placeholder="enter your e-mail" name="pickup-address"
                            data-constraints="@Required">
                        <label class="login-label d-flex flex-md-row justify-content-between " for="form-location">E-mail</label>
                    </div>
                    <div class="form-wrap ">
                        <input class="signin-input " id="form-location" type="password" placeholder="enter your password" name="pickup-address"
                            data-constraints="@Required">
                        <label class="login-label d-flex flex-md-row justify-content-between " for="form-location">Password</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>
@include('layouts.footer')