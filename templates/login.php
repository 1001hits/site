        <!-- Start of login section -->
        <div id="loginAll">
            <div class="loginForm">
                <div class="label heading">Login</div>
                <div class="group">
                    <div class="label"><label>Email Address</label></div>
                    <input type="text" name="email" id="loginEmailId">
                </div>
                <div class="group">
                    <div class="label"><label>Password</label></div>
                    <div class="inputPassword"><input type="password" class="input password" name="password" id="loginPassword" onkeypress="login()">
                    </div>
                </div>
                <div class="group">
                    <button id="loginButton" onclick="login()">Login</button>
                </div>
            </div>
            
            <div id="socialForm">
                <div class="group">
                    <span class="label">Sign in with </span>
                </div>
                <div class="social login">
                    <a href="http://www.google.com" class="social Button"><img src="/images/googleLogin.png"/></a>
                    <a href="http://www.facebook.com" class="social Button"><img src="/images/facebookLogin.png"/></a>
                </div>
            </div>
        </div>
        <!-- End of login section -->