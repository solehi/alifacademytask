@extends('layouts.layout')
@section('title','Студенты')
@section('content')

    <div class="container">
        <h1>Студенты</h1>
        <form method="post" action="/students">
            @csrf
           <div class="row">



            <div class="col-md-4">
                <div class="form-group">
                    <label for="disabledTextInput">ФИО</label>
                    <input name="name" type="text" id="disabledTextInput" class="form-control {{$errors->has('name') ?'is-invalid':''}}" placeholder="ФИО">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="disabledTextInput">Дата рождения<span class="data_of_birth">(гг.мм.дд)</span></label>
                    <input name="date_of_birth" type="text" id="disabledTextInput" class="form-control {{$errors->has('date_of_birth') ?'is-invalid':''}}" placeholder="Дата рождения">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="disabledTextInput">Адрес</label>
                    <input name="address" type="text" id="disabledTextInput" class="form-control {{$errors->has('address') ?'is-invalid':''}}" placeholder="Адрес">
                </div>
            </div>
           </div>

            <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="disabledTextInput">Почта</label>
                    <input name="email" type="text" id="disabledTextInput" class="form-control {{$errors->has('email') ?'is-invalid':''}}" placeholder="Email">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="disabledTextInput">Телефон</label>
                    <input name="phone" type="text" id="disabledTextInput" class="form-control {{$errors->has('phone') ?'is-invalid':''}}"" placeholder="Телефон">
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
             @if($errors->any())
             <div class="alert alert-danger" role="alert">
                 <ul>
                     <p>ошибка!!!</p>
                 </ul>
             </div>
             @endif

        <hr>
        <h2>Список студентов</h2>
        <div class="row">
            <table class="table table-striped table-hover table-bordered" style="width: 1055px">
                <thead>
                    <th>ФИО</th>
               <!--     <th> Дата рождения</th>
                    <th> Адрес</th>  -->
                    <th> Почта</th>
                    <th> Телефон</th>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td onclick="location='/students/{{$student->id}}/show'">{{ $student->name }}</td>
                        <td onclick="location='/students/{{$student->id}}/show'"> {{$student->email}} </td>
                        <td onclick="location='/students/{{$student->id}}/show'">{{$student->phone}}

                          <div style="float: right">

                                  @csrf
                                  <a href="/students/{{$student->id}}/edit" type="button" class="btn btn-warning">изменить</a>



                                  <a href="students/{{$student->id}}/delete" class="btn btn-danger">удалить</a>


                          </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

