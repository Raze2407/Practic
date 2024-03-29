@extends('layouts.app')

@section('content')
    <h1>{{ __('Login') }}</h1>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        
        <div>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <button type="submit">{{ __('Login') }}</button>
    </form>
@endsection