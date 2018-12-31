@extends('layouts.layout')
@section('title','Изменить курс')
@section('content')

  <div class="container">
      <h1>Изменить курс</h1>
      <form method="POST" action="/courses/{{$course->id}}/update">
          {{method_field('PATCH')}}
          {{csrf_field()}}
          <div class="col-md-10">
              <div class="form-group">
                  <label for="disabledTextInput">Название</label>
                  <input name="name" type="text" id="disabledTextInput" class="form-control" placeholder="Название" value="{{$course->name}}" required>
              </div>
          </div>


          <div class="col-md-10">
              <div class="form-group">
                  <label for="disabledTextInput">Информация</label>
                  <input name="info" type="text" id="disabledTextInput" class="form-control" placeholder="Информация" value="{{$course->info}}" required>
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

