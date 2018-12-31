@extends('layouts.layout')
@section('title','Изменить данные')
@section('content')

    <div class="container">
        <form method="POST" action="/teachers/{{$user->id}}/update">
            {{method_field('PATCH')}}
            {{csrf_field()}}
        <h1>Изменить данные</h1>
        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">ФИО</label>
                <input name="name" type="text" id="disabledTextInput" class="form-control" placeholder="ФИО" value="{{$user->name}}">
            </div>
        </div>


        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">Почта</label>
                <input name="email" type="email" id="disabledTextInput" class="form-control" placeholder="Email" value="{{$user->email}}" required>
            </div>
        </div>

        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">Пароль</label>
                <input disabled  name="password" type="password" id="disabledTextInput" class="form-control" placeholder="Телефон" value="{{$user->password}}" required>
            </div>
        </div>
        <div class="col-md-10">
            <br>
            <button class="btn btn-warning" type="submit">
                изменить
            </button>
        </div>
        </form>
    </div>

@endsection