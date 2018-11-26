@extends('layout.layout')
@section('title_page','Login')
@section('content_page')
<style>
    body{
        background: #171029;
    }
</style>
    <div class="login mt-5">
        <div class="login-title col-md-8 mx-auto d-flex flex-column justify-content-center align-items-center">
            <span class="">Log in to Nerve</span>
            <hr class="col-md-12 p-0" />
        </div>
        <form action="">
            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-nerve-group">
                    <input type="text" name="username" id="username" class="input-nerve" placeholder="Enter your username:" autocomplete="off">
                    <i class="fa fa-user"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-nerve-group">
                    <input type="password" name="password" id="password" class="input-nerve" placeholder="Enter your password:">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <div class="form-group">
                <button type="button" id="submit" class="btn btn-block">Log in</button>
            </div>
        </form>
    </div>
@endsection