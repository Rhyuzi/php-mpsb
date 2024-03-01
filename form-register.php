<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title><?php
$config = include 'config.php';
echo $config['site_title'];
?>
</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" onclick="back()" data-back-button class="header-title header-subtitle">Back to Pages</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-right"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" onclick="back()" data-back-button><i class="fa fa-arrow-left"></i></a>Sign Up</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg bg-20"></div>
        </div>

        <?php
            session_start();
            if (isset($_SESSION['login_error'])) {
        ?>
        <div class="ml-3 mr-3 mb-5 alert alert-small rounded-s shadow-xl bg-red2-dark" role="alert">
            <span><i class="fa fa-times"></i></span>
            <strong><?php echo $_SESSION['login_error']?></strong>
            <button type="button" class="close color-white opacity-60 font-16" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        <?php 
            unset($_SESSION['login_error']);
        }
        ?>

        <div class="card card-style">
            <form id="loginForm" method="POST">
            <div class="content mt-2 mb-0">
            <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <span>Name</span>
                    <em>(required)</em>
                    <input id="name" type="name" name="name" placeholder="Name">
                    <small id="name-error" class="text-danger" style="display:none">Revenue harus diisi</small>
                </div> 
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <span>Username</span>
                    <em>(required)</em>
                    <input id="user" type="name" name="user" placeholder="Username">
                    <small id="user-error" class="text-danger" style="display:none">Revenue harus diisi</small>
                </div>
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-envelope color-theme"></i>
                    <span>Email</span>
                    <em>(required)</em>
                    <input id="email" type="email" name="email" placeholder="Email">
                    <small id="email-error" class="text-danger" style="display:none">Revenue harus diisi</small>
                </div> 
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input id="password" type="password" name="password" placeholder="Password">
                    <small id="password-error" class="text-danger" style="display:none">Revenue harus diisi</small>
                </div> 

                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Confirm Password</span>
                    <em>(required)</em>
                    <input id="cpassword" type="password" name="cpassword" placeholder="Confirm Password">
                    <small id="cpassword-error" class="text-danger" style="display:none">Revenue harus diisi</small>
                </div> 

                <!-- <a href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900">Login</a> -->
                <button class="btn btn-m mt-2 mb-4 bg-green1-dark rounded-sm text-uppercase font-900 btn-lg btn-block" >Create Account</button>
                <!-- <button type="button" class="btn btn-dark">Dark</button> -->
                <div class="divider"></div>

                
                
                <!-- <a href="#" class="btn btn-icon btn-m btn-full shadow-l bg-facebook text-uppercase font-900 text-left"><i class="fab fa-facebook-f text-center"></i>Login with Facebook</a>
                <a href="#" class="btn btn-icon btn-m mt-2 btn-full shadow-l bg-twitter text-uppercase font-900 text-left"><i class="fab fa-twitter text-center"></i>Login with Twitter</a> -->

                <div class="divider mt-4 mb-3"></div>

                <div class="d-flex">
                    <!-- <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-left"><a href="#" class="color-theme">Create Account</a></div> -->
                    <!-- <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-right"><a href="#" class="color-theme">Forgot Credentials</a></div> -->
                </div>
            </div>
            </form>
        </div>

       
        <!-- footer and footer card-->
        <!-- <div class="footer" data-menu-load="menu-footer.html"></div>   -->
    </div>    
    <!-- end of page content-->
    
    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">  
    </div>
    
    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script>
    function back() {
        window.location.href = 'form-login.php'
    }
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();

            if (validateForm()) {
                // for (const input of this.elements) {
                //     if (input.tagName.toLowerCase() === 'input' && input.type !== 'submit') {
                //         console.log(`${input.name}: ${input.value}`);
                //     } else if (input.tagName.toLowerCase() === 'select') {
                //         console.log(`${input.name}: ${input.options[input.selectedIndex].value}`);
                //     }
                // }

                const formData = new FormData(this);
                // const cpassword = formData.get('cpassword');
                // const encryptedCPassword = bcryptHash(cpassword, 10);
                // formData.set('cpassword', encryptedCPassword);
                fetch('php/signup.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server
                    if (data.success) {
                        alert('Data saved successfully');
                        // Optionally, you can reset the form
                        this.submit();
                        this.reset();
                    } else {
                        alert('Error: ' + data.errorMsg);
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });
    });

    function validateForm() {
        var isValid = true;
        
        var name = document.getElementById('name').value;
        var user = document.getElementById('user').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var cpassword = document.getElementById('cpassword').value;

        var nameError = document.getElementById('name-error');
        var userError = document.getElementById('user-error');
        var emailError = document.getElementById('email-error');
        var passwordError = document.getElementById('password-error');
        var cpasswordError = document.getElementById('cpassword-error');
        

        if (name.trim() === '') {
            nameError.textContent = 'Nama harus diisi';
            nameError.style.display = 'block';
            isValid = false;
        } else{
            nameError.style.display = 'none';
        }

        if (user.trim() === '') {
            userError.textContent = 'Username harus diisi';
            userError.style.display = 'block';
            isValid = false;
        } else{
            userError.style.display = 'none';
        }

        if (email.trim() === '') {
            emailError.textContent = 'Email harus diisi';
            emailError.style.display = 'block';
            isValid = false;
        } else{
            emailError.style.display = 'none';
        }

        if (password.trim() === '') {
            passwordError.textContent = 'Password harus diisi';
            passwordError.style.display = 'block';
            isValid = false;
        } else{
            passwordError.style.display = 'none';
        }

        if (cpassword.trim() === '') {
            cpasswordError.textContent = 'Confirm Password harus diisi';
            cpasswordError.style.display = 'block';
            isValid = false;
        }else if (cpassword.trim() !== password.trim()) {
            cpasswordError.textContent = 'Password harus sama';
            cpasswordError.style.display = 'block';
            isValid = false;
        }else{
            cpasswordError.style.display = 'none';
        }

        return isValid;
    }
    
    
</script>
</body>
