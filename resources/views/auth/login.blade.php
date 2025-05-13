<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - QalisFit</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    html, body {
      height: 100%;
      background-color: #000;
      color: white;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      padding: 1.5rem;
    }

    .brand {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 2rem;
    }

    .logo {
      background-color: white;
      color: black;
      padding: 0.4rem;
      border-radius: 0.5rem;
      margin-right: 0.5rem;
    }

    .logo i {
      font-size: 1rem;
    }

    .brand-name {
      font-size: 1.5rem;
      font-weight: bold;
    }

    h1 {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    label {
      font-size: 0.875rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
      display: block;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.5rem 0.75rem;
      border: 1px solid #444;
      background-color: #111;
      color: white;
      border-radius: 0.5rem;
      font-size: 0.875rem;
      outline: none;
    }

    input:focus {
      border-color: white;
    }

    .form-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.75rem;
      color: #ccc;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .form-options label {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      font-weight: normal;
    }

    .form-options a {
      color: white;
      text-decoration: none;
    }

    .form-options a:hover {
      text-decoration: underline;
    }

    .submit-btn {
      background-color: white;
      color: black;
      font-weight: bold;
      padding: 0.5rem;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      font-size: 0.875rem;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #ddd;
    }

    .register-link {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.75rem;
      color: #ccc;
    }

    .register-link a {
      color: white;
      text-decoration: underline;
    }

    @media (max-height: 600px) {
      html, body {
        overflow-y: auto;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <div class="login-container">
    <div class="brand">
      <div class="logo">
        <i class="fas fa-dumbbell"></i>
      </div>
      <h1 class="brand-name">QalisFit</h1>
    </div>

    <h1>Welcome Back</h1>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required placeholder="you@example.com">
      </div>

      <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required placeholder="Your password">
      </div>

      <div class="form-options">
        <label>
          <input type="checkbox" name="remember">
          Remember me
        </label>
        <a href="{{ route('password.request') }}">Forgot password?</a>
      </div>

      <button type="submit" class="submit-btn">Login</button>
    </form>

    <div class="register-link">
      Don't have an account? <a href="{{ route('register') }}">Register</a>
    </div>
  </div>

</body>
</html>