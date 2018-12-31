@extends('layouts.register')

@section('content')
<div class="container">



                <div class="form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">



                                <input id="name" type="text" placeholder="Имя" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group row">


                                <input id="email" type="email" placeholder="Адрес электронного почта" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group row">



                                <input id="password" type="password" placeholder="Пароль" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group row">



                                <input id="password-confirm" type="password" placeholder="Подтвердите пароль" class="form-control" name="password_confirmation" required>

                        </div>

                        <div class="form-group row mb-0">

                                <button type="submit" class="">
                                    Регистрация
                                </button>

                        </div>
                    </form>
                </div>

</div>
@endsection
