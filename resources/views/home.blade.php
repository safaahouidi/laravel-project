
@extends('layouts.app-home')  
@section('content')  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home-style.css">
</head>
<body>
<div class="container mt-5">
    <form action="" class="form-valid">
        <div class="columns">
           <h2 class="title text-white text-center ">Login</h2>
            <div class="column username-col">
                <label for="">username :</label>
                <input type="text" class="username" placeholder="Enter your username">
            </div>
            
            <div class="column password-col">
                <label for="">Password :</label>
                <input type="Password" class="pass" placeholder="Enter your password">
            </div>
           
                <div class="column col-btn mt-3">
                    <input type="button" value="login" class="button btn" onclick="myClick()">
                </div>


        </div>
    </form>
</div>
</body>
</html>
@endsection 
