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
        <div class="title"><span>Registration Form</span></div>
        <div class="message">
            @include('partial.error')
            @include('partial.flash')
        </div>
        <form method="POST" action="{{ route('register') }}" class="signin-form">
            @csrf
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="name">
          </div>
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" name="email">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input id="password-field" type="password" name="password" placeholder="Password">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input id="confirm-password" type="password" name="confirm_password" placeholder="Confirm Password">
            <span toggle="#confirm-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="row button">
            <input type="submit" value="Register">
          </div>
          <div class="signup-link">Already registred? <a href="{{url('login')}}">Login now</a></div>
        </form>
      </div>
    </div>
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{url('assets/js/logreg.js')}}"></script>
  </body>
</html>