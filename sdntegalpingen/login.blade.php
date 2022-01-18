@extends('Lagout.auth-master')

    <div class="login">
      <div class="login-header">
        <P></P>
        <h1>Login</h1>
      </div>
      <div class="login-form">
        <h3>Username:</h3>
        <input type="text" placeholder="username/email"/><br>
        <h3>Password:</h3>
        <input type="password" placeholder="Password"/>
        <br>
        <input type="button" value="Login" class="login-button"/>
        <br>
        <a class="sign-up">Sign Up!</a>
        <br>
        <h6 class="no-access">Can't access your account?</h6>
        <a href="/register" class="btn btn-more">register </a>
      </div>
    </div>

