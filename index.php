<!DOCTYPE html>
<html>

<head>
    <title>Chat App- Intro Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #323232;
            font-family: 'Niconne', cursive;
        }

        h1 {
            font-size: 5vw;
            text-align: center;
            color:  #ffac41;
        }

        .container {
            text-align: center;

        }

        .intro {
            display: inline-block;
            width: 700px;
            padding: 10px;
            align-items: center;
            margin-top: 50px;
            line-height: 10rem;
            border-radius: 10px;
            background-color:#ff1e56 ;
            color: black;
        }

        h2 {
            font-size: 3vw;
        }
        h3{
            font-size: 3vw;
        }

        .button{
            margin-top:50px;
           
        }
        .btn{
            margin-right: 50px;
            margin-left: 50px;
            display: inline-block;
            background-color: #ffac41;
            color: black;
        }
        a{
            color:black;
        }
    </style>
</head>

<body>
    <h1>Welcome to the Chat App</h1>
    <div class="container">
        <div class="intro">
            <h2>Here you can chat with your friends. What's new??? Here you can listen to your favourite songs (or
                playlist) from youtube. <br> ANDD?????</br> And you can play games as well. All this during chatting
                with your friends.</h2>
        </div>
        <div class="button">
            <button class="btn" id="login"><a href="public/index.php"><h3>Login</h3></a></button>
            <button class="btn" id="signup"><a href="public/signup.php"><h3>Sign-UP</h3></a></button>
        </div>
    </div>
</body>

</html>