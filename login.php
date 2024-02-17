<div class="box-container">
    <div class="box-image">
        <img src="Root/images/CHED-LOGO.png" alt="">
    </div>
    <div class="box-login">
        <h1 style="font-size: 32px;">CHED-NCR Inventory System</h1>
        <form method="POST" action="">
            <div class="input-container">
                <i class="material-icons-sharp">person</i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-container">
                <i class="material-icons-sharp">lock</i>
                <input type="password" name="password" id="password" placeholder="Password">
                <span class="toggle-password" onclick="togglePasswordVisibility()" >
                    <i class="material-icons-sharp" id="password-icon">visibility</i>
                </span>
            </div>
            <input type="submit" name="login-submit" value="Login" class="submit-button">
        </form>
    </div>
</div>