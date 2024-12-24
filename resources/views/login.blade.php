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

    .input-group input[type="checkbox"] {
        vertical-align: middle;
        margin-right: 3px;
        transform: translateY(15px);
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
        <h1 class="title">LOGİN</h1>
        <p class="subtitle">Login to your account</p>

        @if (session()->has('login'))
            {{ session('login') }}
        @endif
        @if (session()->has('register'))
            {{ session('register') }}
        @endif

        @guest

            <form action="{{ route('login') }}" method="POST">
                @csrf
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
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <button type="submit" class="btn">Login</button>

                <p class="signup-text">
                    Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                </p>
            </form>
        @endguest

        @auth
            <a href="{{ route('logout') }}">Logout</a>
        @endauth
    </div>
</div>

<script>
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });
</script>
