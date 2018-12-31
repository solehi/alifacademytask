@extends('layouts.register')

@section('content')
<div class="container">



                <div class="form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf



                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>





                            <div>
                                <input id="password" type="password" placeholder="Пароль" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>




                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Вход
                                </button>


                            </div><br>
                        <p class="message">Нет регистрации? <a href="register">Создайте акуант</a></p>

                    </form>
                </div>

</div>
@endsection
