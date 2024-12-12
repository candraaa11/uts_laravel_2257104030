<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
      /* Global Styles */
      body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 12px;
            width: 100%;
            max-width: 350px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #1d3557;
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #1d3557;
            outline: none;
        }

        .button-container {
            display: flex;
            justify-content: space-between; 
            gap: 15px;
            margin-top: 20px;
        }

        button {
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            background-color: #1d3557;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #457b9d;
            transform: translateY(-2px);
        }

        button:active {
            background-color: #1d3557;
            transform: translateY(2px);
        }

        footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
        }

        .highlight {
            color: #d97706;
            font-weight: bold;
        }

        /* Responsive Design for Mobile */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 24px;
            }
            .button-container {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container border">
        <div class="row align-items-center py-3 px-xl-5">
            <div>
                <h1>LOGIN</h1>

                <form action="" method="POST">
                    <label for="email">Email :</label><br>
                    <input type="email" name="email" id="email"><br><br>
                    <label for="password">Password :</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <div class="button-container">
                        <a href="{{ route('home') }}">
                            <button type="button">Login</button>
                        </a>
                        <a href="{{ route('welcome') }}">
                            <button type="button">Kembali</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>     
    </div>
</body>
</html>