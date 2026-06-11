<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
        }

        /* Background */
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #dbeafe, #ffffff, #bfdbfe);
            padding: 20px;
        }

        /* Card */
        .login-card {
            width: 100%;
            max-width: 420px;
            background: rgba(255,255,255,0.92);
            padding: 32px;
            border-radius: 22px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            backdrop-filter: blur(10px);
        }

        /* Header */
        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo {
            width: 62px;
            height: 62px;
            margin: 0 auto;
            background: #1e3a8a;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 18px;
            box-shadow: 0 10px 20px rgba(30,58,138,0.3);
        }

        .login-header h1 {
            font-size: 20px;
            margin-top: 12px;
            color: #1e3a8a;
        }

        .login-header p {
            color: #6b7280;
            font-size: 13px;
            margin-top: 4px;
        }

        /* Form */
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        label {
            font-size: 13px;
            color: #374151;
        }

        input[type="email"],
        input[type="password"] {
            padding: 11px 12px;
            border-radius: 12px;
            border: 1px solid #d1d5db;
            outline: none;
            transition: 0.2s;
            font-size: 14px;
        }

        input:focus {
            border-color: #1e3a8a;
            box-shadow: 0 0 0 3px rgba(30,58,138,0.15);
        }

        /* Remember */
        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #6b7280;
        }

        /* Button */
        button {
            margin-top: 10px;
            padding: 12px;
            background: #1e3a8a;
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.2s;
        }

        button:hover {
            background: #0f2a6a;
            transform: translateY(-1px);
        }

        /* Back link */
        .back {
            margin-top: 12px;
            text-align: center;
            display: block;
            font-size: 13px;
            color: #1d4ed8;
            text-decoration: none;
        }

        .back:hover {
            text-decoration: underline;
        }

        /* Error */
        .error-box {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 10px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .success-box {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 10px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <div class="login-header">
            <div class="logo">AE</div>
            <h1>Data Alumni Elektro UNSRI</h1>
            <p>Login Admin Panel</p>
        </div>

        <!-- Laravel validation -->
        <x-validation-errors class="error-box" />

        @session('status')
            <div class="success-box">
                {{ $value }}
            </div>
        @endsession

        <!-- FORM -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <div class="remember">
                <input type="checkbox" name="remember">
                <span>Ingat saya</span>
            </div>

            <button type="submit">Login</button>

            <a class="back" href="{{ url('/') }}">← Kembali ke Beranda</a>
        </form>

    </div>

</div>

</body>
</html>