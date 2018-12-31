@extends('layouts.layout')
@section('title','Курсы')
@section('content')
<h1>Курсы</h1>

<div class="container">

    <form method="post" action="/courses">
        @csrf
      <div class="row">


            <div class="col-lg-4">
                <div class="form-group">
                    <label for="disabledTextInput">Название</label>
                    <input name="name" type="text" id="disabledTextInput" class="form-control" placeholder="Название" required>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="form-group">
                    <label for="disabledTextInput">Информация</label>
                    <input name="info" type="text" id="disabledTextInput" class="form-control" placeholder="Информация" required>
                </div>
            </div>


            <div class="col-md-2">
                <br>
                <button class="btn btn-success" type="submit">
                    добавить
                </button>
            </div>



    </div>
    </form>

    <div class="row">
        <h2>Список курсов</h2>
        <table class="table table-striped table-hover table-top" style="width: 1100px">
            <thead>
            <th>Название</th>
            <th>информация</th>



            </thead>
            
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td> {{ $course->name }} </td>
                    <td> {{ $course->info }}</td>
                    <td style="width: 300px">


                        <div style="float: right">
                            <form action="courses/{{$course->id}}" method="post">
                                @csrf
                                <a type="button" class="btn btn-warning" href="/courses/{{$course->id}}/edit"> изменить </a>

                                <a href="/courses/{{$course->id}}" class="btn btn-danger" type="submit"> удалить </a>
                                <a href="/courses/{{$course->id}}/view" class="btn btn-success">Студенты</a>


                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>















    </div>
@endsection