<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
    }

    body {
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 400px;
        margin: auto;
        padding: 20px;
    }

    .form-box {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 14px;
        margin-bottom: 20px;
        color: #666;
    }

    .input-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .error {
        color: red;
        font-size: 12px;
    }

    .toggle-password {
        position: absolute;
        margin-left: -30px;
        margin-top: -25px;
        cursor: pointer;
    }

    .btn {
        background-color: #3B4A3C;
        color: white;
        border: none;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #E4B062;
    }

    .signup-text {
        margin-top: 15px;
    }

    .signup-text a {
        color: #3b82f6;
        text-decoration: none;
    }
</style>

<div class="login-container">
    <div class="form-box">
        <h1 class="title">REGİSTER</h1>
        <p class="subtitle">Create your account to get started.</p>

        @if (session()->has('register') && session('register') == 'fail')
            Kayıt işlemi hatalı
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Full Name*</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="email">Email address*</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required>
                <span class="toggle-password">&#128065;</span>
            </div>

            <div class="input-group">
                <label for="password_confirmation">Confirm Password*</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn">Sign Up</button>

            <p class="signup-text">
                Already have an account? <a href="{{ route('login') }}">Log in</a>
            </p>
        </form>
    </div>
</div>

<script>
    //şifre görünürlüğü için:
    const togglePassword = document.querySelector('.toggle-password'); //.toggle-password(buton)
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });

    $('#password-confirm').on('change', function() {
        if ($('#password').val() != $('#password-confirm').val()) {
            alert('Passwords do not match');
            $('#password-confirm').val('');
        }
    });
</script>
