@extends('layouts.layout')
@section('title','Информация о студенте')
@section('content')
<div class="row">

    <div class="col-md-1"></div>
    <div class="col-md-7">
    <br>
     <br>
  <h3>Студент {{$student->name}}</h3>


  <h4>Информация:</h4>
     <p><strong>ФИО:</strong></p><p>{{$student->name}}</p>
        <p><strong>Почта:</strong></p><p>{{$student->email}}</p>
     <p><strong>Дата рождение:</strong></p><p>{{$student->date_of_birth}}</p>
     <p><strong>Адрес:</strong></p><p>{{$student->address}}</p>
     <p><strong>Телефон:</strong></p><p>{{$student->phone}}</p>



    <h3>Курсы</h3>
     @foreach($courses as $course)
          <p>{{$course->name}}</p>
     @endforeach
        <a href="/students/{{$student->id}}/edit" type="" class="btn btn-warning">изменить</a>
        <a  href="/students/{{$student->id}}/delete" class="btn btn-danger" >удалить</a>
    </div>
</div>
@endsection
