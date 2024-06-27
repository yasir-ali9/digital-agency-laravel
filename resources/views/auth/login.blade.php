@extends('layouts.app')

@section('auth')
    <div class="form form--login">
        <h1 class="form__title">Log In to your account</h1>
        <form class="form__fields" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" class="form__input" placeholder="Email" name="email" value="{{ old('email') }}" required
                autofocus>
            <input type="password" class="form__input" placeholder="Password" name="password" required>

            <a href="{{ route('password.request') }}" class="form__link form__link--forgot">Forgot password?</a>
            <div class="form__checkbox">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember me</label>
            </div>

            <button type="submit" class="form__button">Sign in</button>
            <div class="form__alt-action">
                <a href="{{ route('register') }}" class="form__link">
                    <p class="black">Don't have an account?</p> Create account
                </a>
            </div>
        </form>
    </div>
@endsection
