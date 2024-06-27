@extends('layouts.app')

@section('auth')
    <div class="form form--signup">
        <h1 class="form__title">Create Account for free</h1>
        <form class="form__fields" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" class="form__input" placeholder="Full Name" name="name" value="{{ old('name') }}" required
                autofocus>
            <input type="email" class="form__input" placeholder="Email" name="email" value="{{ old('email') }}"
                required>
            <input type="password" class="form__input" placeholder="Create Password" name="password" required>
            <input type="password" class="form__input" placeholder="Confirm Password" name="password_confirmation" required>
            <div class="form__checkbox" id="su">
                <input type="checkbox" id="terms" name="terms" {{ old('terms') ? 'checked' : '' }} required>
                <label for="terms">I agree with the Terms &amp; Conditions</label>
            </div>
            <button type="submit" class="form__button">Create Account</button>
            <div class="form__alt-action">
                <a href="{{ route('login') }}" class="form__link">
                    <p class="black">Already have an account?</p> Log in
                </a>
            </div>
        </form>
    </div>
@endsection
