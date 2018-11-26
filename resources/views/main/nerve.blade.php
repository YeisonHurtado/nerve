@extends("layout.layout")
@section("title_page","Home")
@section("content_page")
<style>

    body {
        height: 100vh;
        background: #131212;
    }

    div.name_page {
        width: 100%;
        display: flex;  
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
        align-content: center;
    }

    div.name_page span {
        color: #E6FB04;
        height: 400px;
        font-family: 'PT Sans Narrow', sans-serif;
        font-weight: 500;
        text-align: center;
        font-size: 300px;
    }

    div.links-page {
        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        align-items: center;
        align-self: center;
        width: 80%;
        background: #E6FB04;
        border-radius: 2px;
        text-align: center;
    }

    a.link {
        margin-right: 1rem;
        font-family: 'PT Sans Narrow', sans-serif;
        font-size: 20px;
        display: block;
        color: #000!important;
    }

    a.link:hover{
        transform: scale(1.1);
        transition: ease .3s all;
        text-decoration: none;
    }
</style>
<div class="name_page">
    <span>NERVE</span>
    <div class="links-page">
        <a href="{{url('login')}}" class="link">Login</a>
        <a href="" id="sign_up" class="link">Sign up</a>
    </div>
</div>
@include('modal.personalized.rol')
@endsection