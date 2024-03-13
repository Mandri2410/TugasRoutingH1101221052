<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f1f1;
        }

        .content {
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .content .text {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .field {
            position: relative;
            margin-bottom: 20px;
        }

        .field input {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .field input:focus {
            outline: none;
            border-color: #3498db;
        }

        .field .fas {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            color: #777;
        }

        .field label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 45px;
            color: #777;
            transition: top 0.3s, font-size 0.3s;
        }

        .field input:focus~label,
        .field input:valid~label {
            top: 5px;
            font-size: 12px;
            color: #3498db;
        }

        .forgot-pass {
            margin-bottom: 10px;
            text-align: right;
        }

        .forgot-pass a {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        .sign-up {
            margin-top: 15px;
            text-align: center;
        }

        .sign-up a {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }

        .sign-up a:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="content">
        <div class="text">
            {{$login}}
        </div>
        <form action="#">
            <div class="field">
                <input type="email" required>
                <i class="fas fa-envelope"></i>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="password" required>
                <i class="fas fa-lock"></i>
                <label>Password</label>
            </div>
            <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
            </div>
            <button>Sign in</button>
            <div class="sign-up">
                Not a member? <a href="#">Sign up now</a>
            </div>
        </form>
    </div>
</body>

</html>
