<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="{{url('assets/css/logregstyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <div class="message">
                @include('partial.error')
                @include('partial.flash')
            </div>
            <form action="{{ route('login') }}" method="POST" class="signin-form">
                @csrf
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input id="password-field" name="password" type="password" placeholder="Password">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="{{url('register')}}">Register now</a></div>
            </form>
        </div>
    </div>
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{url('assets/js/logreg.js')}}"></script>
  </body>
</html>