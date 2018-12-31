@extends('layouts.layout')
@section('title','Изменить персональные данные студента')
@section('content')


    <form method="POST" action="/students{{$student->id}}/update">
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="container">
            <h1>Изменить персональные данные студента</h1>
            <div class="col-md-10">
                <div class="form-group">
                    <label for="disabledTextInput">ФИО</label>
                    <input name="name" type="text" id="disabledTextInput" class="form-control" placeholder="ФИО" value="{{$student->name}}">
                </div>
            </div>

        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">Дата рождения</label>
                <input name="date_of_birth" type="text" id="disabledTextInput" class="form-control" placeholder="Дата рождения" value="{{$student->date_of_birth}}">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">Адрес</label>
                <input name="address" type="text" id="disabledTextInput" class="form-control" placeholder="Адрес" value="{{$student->address}}">
            </div>
        </div>

        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">Почта</label>
                <input name="email" type="text" id="disabledTextInput" class="form-control" placeholder="Email" value="{{$student->email}}">
            </div>
        </div>

        <div class="col-md-10">
            <div class="form-group">
                <label for="disabledTextInput">Телефон</label>
                <input name="phone" type="text" id="disabledTextInput" class="form-control" placeholder="Телефон" value="{{$student->phone}}">
            </div>
        </div>

        <div class="col-md-10">
            <br>
            <button class="btn btn-warning" type="submit">
                изменить
            </button>
        </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    <p>ошибка!!!</p>
                </ul>
            </div>
        @endif
    </form>

@endsection