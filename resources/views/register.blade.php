<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/register.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="form-wrapper">
        <div class="banner">
          <h1>Tadika Laundry</h1>
          <p>Your One Stop Solution for Every Single Sheets</p>
        </div>
        <div class="blue-bg">
          <button type="button">Get Started</button>
        </div>

        <form class="signup-form" action="insertData" method="post">
          @csrf 
          <a href="/login"></a>
          <h1>Create Account</h1>
          <div class="social-media">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
          <p>or use your email for registration.</p>
          <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="name" />
          </div>
          <div class="input-group">
            <i class="fas fa-vcard"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="input-group">
            <i class="fas fa-phone"></i>
            <input type="text" placeholder="Phone" name="phone" />
          </div>
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <!--kalo tamu udah ada akun, ke page login-->
          <p href="login.html">Already have an account? 
            <a href="/login">Log In</a></p>
          <button type="submit">
            Sign Up
          </button>
        </form>

      </div>
    </div>

    <script src="js/register.js"></script>
  </body>
</html>
