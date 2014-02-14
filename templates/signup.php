<!-- Start of signup section -->
        <div id="signupForm">
            <div class="form">
                <div class="label heading">Sign up here</div>
                <p class="information">All fields are mandatory.</p>
                <div class="label">
                    <label>Email Address</label>
                </div>
                <input id="signupEmailId" class="formInput" type="text" value="myemail@example.com">
                <div class="label">
                    <label>Password</label>
                </div>
                <div input="signupPassword">
                    <input id="signup_password" type="password" class="formInput">
                </div>
                <div class="label">
                    <label>Repeat Password</label>
                </div>
                <input id="signupPasswordRepeat" type="password" onkeypress="signup()">
                <div id="signupButton">
                    <a href="/" onclick="signup()">Sign Up!</a>
                </div>
                Already have an account? <a id="loginButton" href="/login.php" >Login here</a>.
            </div>
        </div>
        <!-- End of signup section -->