<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="login.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="YOUR_GOOGLE_CLIENT_ID">
  <script src="https://connect.facebook.net/en_US/sdk.js"></script>
  <script src="scripts.js" defer></script>
</head>
<style>
body {
display: flex;
align-items: center;
justify-content: center;
min-height: 100vh;
background-color: #f0f0f0;
font-family: Arial, sans-serif;
}

.login-section {
/* background: rgba(0, 0, 0, 0.7); */
padding: 2rem;
border-radius: 8px;
}

.form-container {
background: white;
padding: 2rem;
border-radius: 8px;
max-width: 400px;
width: 100%;
text-align: center;
}

.logo svg {
margin-bottom: 1rem;
}

h2 {
font-size: 1.5rem;
font-weight: bold;
color: black;
}

p {
margin-top: 0.5rem;
color: #666;
}

.create-account-link {
color: black;
text-decoration: underline;
font-weight: bold;
}

.login-form .input-group {
margin-bottom: 1rem;
text-align: left;
}

.login-form label {
display: block;
font-weight: bold;
color: #333;
}

.login-form input {
width: 100%;
padding: 0.5rem;
border: 1px solid #ccc;
border-radius: 4px;
margin-top: 0.5rem;
}

.forgot-password-link {
float: right;
font-size: 0.875rem;
color: black;
text-decoration: underline;
}

.submit-btn {
width: 100%;
padding: 0.75rem;
border: none;
background: black;
color: white;
font-weight: bold;
border-radius: 4px;
cursor: pointer;
}

.oauth-buttons {
margin-top: 1rem;
}

.google-btn, .facebook-btn {
width: 100%;
padding: 0.75rem;
border: 1px solid #ccc;
border-radius: 4px;
margin-bottom: 0.5rem;
cursor: pointer;
font-weight: bold;
}

.google-btn {
background: white;
color: #666;
}

.facebook-btn {
background: #3b5998;
color: white;
}
</style>
<body>
  <section class="login-section">
    <div class="form-container">
      <div class="logo">
        <svg width="50" height="56" viewBox="0 0 50 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- SVG content -->
        </svg>
      </div>
      <h2>Sign in to your account</h2>
      <p>Don't have an account? <a href="#" class="create-account-link">Create a free account</a></p>
      <form action="#" method="POST" class="login-form">
        <div class="input-group">
          <label for="email">Email address</label>
          <input type="email" id="email" placeholder="Email">
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <a href="#" class="forgot-password-link">Forgot password?</a>
          <input type="password" id="password" placeholder="Password">
        </div>
        <button type="button" class="submit-btn" id="submit-btn">Get started</button>
      </form>
     
       
     
    </div>
  </section>
 
</body>
</html>
