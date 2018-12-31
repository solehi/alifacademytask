@extends('layouts.layout')
@section('title','Студенты')
@section('content')

    <h2>Студенты курс <strong>{{$course->name}}</strong></h2>
    <div class="container">
        <div class="row">

            <form method="post" action="/courses/{{$course->id}}/view/addstudent">
                @csrf
                <h4>Добавить студент на курс</h4>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="disabledTextInput">Имя</label>
                        <span class="custom-dropdown big">
                          <select id = "idstudent" name="idstudent" >
                            <option value="">Пожалуйста, выберите студенту:</option>



                            @foreach($allstudents as $allstudent)
                                 @if(!$students->contains($allstudent))
                                 <option value="{{$allstudent->id}}">{{$allstudent->name}}</option>
                                 @endif

                            @endforeach

                          </select>
                        </span>
                        <script>

                        </script>
                    </div>
                </div>










                <div class="col-md-2">
                    <br>
                    <button class="btn btn-success" type="submit">
                        добавить
                    </button>
                </div>

            </form>

        </div>


        <div class="row">
            <br><br>
            @if(sizeof($students) > 0)

                <h4>Список студентов</h4>
            <table class="table table-striped table-hover table-bordered" style="width: 1100px">
                <thead>
                <th>Имя</th>
                <th>Номер телефона</th>



                </thead>

                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td> {{ $student->name }} </td>
                        <td> {{ $student->phone }}
                           <div style="float: right">
                            <a href="/courses/{{$course->id}}/{{$student->id}}/delete" class="btn btn-danger" type="submit"> удалить </a>
                           </div>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
             @else
                <div class="alert alert-danger" role="alert">В этом курсе ещё не добавлено студентов  </div>
              @endif





@endsection

