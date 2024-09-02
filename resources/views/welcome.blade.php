<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-size: 24px;
            font-family: 'Nunito', sans-serif;
            text-align: center;
            background: rgb(34,109,195);
            background: linear-gradient(0deg, rgba(34,109,195,1) 0%, rgba(34,193,195,1) 100%);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            text-align: center;
        }

        .start {
            margin-top: 40px;
        }

        .start a {
            margin: 0 20px;
            text-decoration: none;
            color: #d9d9d9;
            font-size: 20px;
        }

        .start a:hover {
            color: white;
        }

    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome to Laravel</h1>
        <p>This is the welcome page.</p>

        <div class="start">
            <a href="/login">Login</a> 
            <a href="/register">Register</a> 
        </div>
    </div>
</body>
</html>
