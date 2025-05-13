<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - QalisFit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    html, body {
      height: 100%;
      overflow: hidden;
      background-color: #f3f4f6;
    }

    .container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    form {
      width: 100%;
      max-width: 320px;
    }

    .brand {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
      gap: 0.5rem;
    }

    .logo {
      background-color: black;
      color: white;
      padding: 0.5rem;
      border-radius: 0.5rem;
      font-size: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .brand-name {
      font-size: 1.5rem;
      font-weight: bold;
      color: black;
    }

    h2 {
      font-size: 1.1rem;
      font-weight: bold;
      margin-bottom: 0.25rem;
      color: black;
      text-align: left;
    }

    .subtitle {
      color: #6b7280;
      margin-bottom: 1rem;
      font-size: 0.8rem;
      text-align: left;
    }

    .form-group {
      margin-bottom: 0.75rem;
    }

    label {
      display: block;
      font-weight: 600;
      color: black;
      margin-bottom: 0.25rem;
      font-size: 0.8rem;
      text-align: left;
    }

    .input-wrapper {
      position: relative;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.4rem 0.7rem;
      border: 1px solid #d1d5db;
      border-radius: 0.5rem;
      font-size: 0.8rem;
      outline: none;
    }

    input:focus {
      border-color: transparent;
      box-shadow: 0 0 0 2px black;
    }

    .input-icon,
    .password-toggle {
      position: absolute;
      right: 0.75rem;
      top: 50%;
      transform: translateY(-50%);
      color: #9ca3af;
      font-size: 0.8rem;
      cursor: pointer;
    }

    .strength-meter {
      height: 3px;
      background: #e5e7eb;
      margin-top: 4px;
      border-radius: 2px;
      overflow: hidden;
    }

    .strength-meter-fill {
      height: 100%;
      width: 0;
      transition: width 0.3s, background 0.3s;
    }

    .password-hint {
      font-size: 0.65rem;
      color: #6b7280;
      margin-top: 0.25rem;
      text-align: left;
    }

    .level-options {
      display: flex;
      justify-content: space-between;
      gap: 0.4rem;
    }

    .level-option {
      display: none;
    }

    .level-label {
      flex: 1;
      text-align: center;
      padding: 0.4rem;
      border: 2px solid #e5e7eb;
      border-radius: 0.5rem;
      font-size: 0.7rem;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.25rem;
    }

    .level-option:checked + .level-label {
      border-color: black;
      background-color: black;
      color: white;
    }

    .submit-btn {
      width: 100%;
      background-color: black;
      color: white;
      font-weight: bold;
      padding: 0.5rem;
      border-radius: 0.5rem;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      margin: 0.75rem 0 0;
      font-size: 0.8rem;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #1f2937;
    }

    .submit-btn:disabled {
      background-color: #9ca3af;
      cursor: not-allowed;
    }

    .login-link {
      text-align: left;
      font-size: 0.7rem;
      color: #6b7280;
      margin-top: 0.75rem;
    }

    .login-link a {
      color: black;
      font-weight: 600;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="registerForm" method="POST" action="{{ route('register') }}">
      @csrf

      <div class="brand">
        <div class="logo"><i class="fas fa-dumbbell"></i></div>
        <h1 class="brand-name">QalisFit</h1>
      </div>

      <h2>Create Your Account</h2>
      <p class="subtitle">Join our brotherhood of strength and discipline</p>

      <div class="form-group">
        <label for="name">Name</label>
        <div class="input-wrapper">
          <input type="text" name="name" id="name" required placeholder="Enter your full name"
                 value="{{ old('name') }}">
          <i class="fas fa-user input-icon"></i>
        </div>
        @error('name')
          <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <div class="input-wrapper">
          <input type="email" name="email" id="email" required placeholder="your@email.com"
                 value="{{ old('email') }}">
          <i class="fas fa-envelope input-icon"></i>
        </div>
        @error('email')
          <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-wrapper">
          <input type="password" name="password" id="password" required placeholder="Create a strong password">
          <i class="fas fa-eye password-toggle" id="togglePassword"></i>
        </div>
        @error('password')
          <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        <div class="strength-meter"><div class="strength-meter-fill" id="strengthMeter"></div></div>
        <p class="password-hint" id="passwordHint">Use 8+ characters with mix of letters, numbers & symbols</p>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <div class="input-wrapper">
          <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Re-enter your password">
          <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
        </div>
      </div>

      <div class="form-group">
        <label>Your Fitness Level</label>
        <div class="level-options">
          <input type="radio" name="level" id="beginner" value="beginner" class="level-option"
                 {{ old('level', 'beginner') == 'beginner' ? 'checked' : '' }}>
          <label for="beginner" class="level-label"><i class="fas fa-seedling"></i> Beginner</label>

          <input type="radio" name="level" id="intermediate" value="intermediate" class="level-option"
                 {{ old('level') == 'intermediate' ? 'checked' : '' }}>
          <label for="intermediate" class="level-label"><i class="fas fa-fire"></i> Intermediate</label>

          <input type="radio" name="level" id="advanced" value="advanced" class="level-option"
                 {{ old('level') == 'advanced' ? 'checked' : '' }}>
          <label for="advanced" class="level-label"><i class="fas fa-bolt"></i> Advanced</label>
        </div>
        @error('level')
          <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
      </div>

      <button type="submit" class="submit-btn">
        <i class="fas fa-dumbbell"></i> CREATE MY ACCOUNT
      </button>

      <div class="login-link">
        Already forged your path? <a href="{{ route('login') }}">Login here</a>
      </div>
    </form>
  </div>
  <script>
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    const strengthMeter = document.getElementById('strengthMeter');
    const passwordHint = document.getElementById('passwordHint');
    const form = document.getElementById('registerForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const submitBtn = form.querySelector('button[type="submit"]');

    // Fungsi untuk memeriksa kelengkapan form
    function checkFormCompletion() {
      const isNameValid = nameInput.value.trim() !== '';
      const isEmailValid = emailInput.value.trim() !== '' && emailInput.checkValidity();
      const isPasswordValid = password.value.trim() !== '';
      const isConfirmPasswordValid = confirmPassword.value.trim() !== '' && 
                                    confirmPassword.value === password.value;
      
      submitBtn.disabled = !(isNameValid && isEmailValid && isPasswordValid && isConfirmPasswordValid);
    }

    // Tambahkan event listener untuk semua input
    [nameInput, emailInput, password, confirmPassword].forEach(input => {
      input.addEventListener('input', checkFormCompletion);
    });

    function capitalizeWords(str) {
  return str.replace(/\b\w/g, char => char.toUpperCase());
}

nameInput.addEventListener('input', function () {
  const cursorPosition = this.selectionStart;
  const capitalized = capitalizeWords(this.value);
  if (this.value !== capitalized) {
    this.value = capitalized;
    this.setSelectionRange(cursorPosition, cursorPosition); // menjaga posisi cursor
  }
  checkFormCompletion();
});


    // Panggil sekali saat load untuk set initial state
    checkFormCompletion();

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });

    toggleConfirmPassword.addEventListener('click', function () {
      const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
      confirmPassword.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });

    password.addEventListener('input', function () {
      const strength = calculatePasswordStrength(this.value);
      updateStrengthMeter(strength);
      checkFormCompletion();
    });

    confirmPassword.addEventListener('input', function() {
      checkFormCompletion();
      if (this.value !== password.value && this.value !== '') {
        this.setCustomValidity("Passwords don't match");
      } else {
        this.setCustomValidity('');
      }
    });

    function calculatePasswordStrength(password) {
      let strength = 0;
      if (password.length >= 8) strength += 1;
      if (password.length >= 12) strength += 1;
      if (/[A-Z]/.test(password)) strength += 1;
      if (/[0-9]/.test(password)) strength += 1;
      if (/[^A-Za-z0-9]/.test(password)) strength += 1;
      return Math.min(strength, 5);
    }

    function updateStrengthMeter(strength) {
      const percentages = ['0%', '20%', '40%', '60%', '80%', '100%'];
      const colors = ['#ef4444', '#f97316', '#eab308', '#3b82f6', '#22c55e'];
      const hints = ['Very weak', 'Weak', 'Moderate', 'Strong', 'Very strong'];
      if (strength > 0) {
        strengthMeter.style.width = percentages[strength];
        strengthMeter.style.backgroundColor = colors[strength - 1];
        passwordHint.textContent = `Password strength: ${hints[strength - 1]}`;
        passwordHint.style.color = strength < 3 ? '#ef4444' : strength < 4 ? '#eab308' : '#22c55e';
      } else {
        strengthMeter.style.width = '0%';
        passwordHint.textContent = 'Use 8+ characters with mix of letters, numbers & symbols';
        passwordHint.style.color = '#6b7280';
      }
    }

    form.addEventListener('submit', function () {
    const button = this.querySelector('button[type="submit"]');
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating...';
    button.disabled = true;
  });
  </script>
</body>
</html>