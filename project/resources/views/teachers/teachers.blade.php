@extends('layouts.layout')
@section('title','Список препадавателей')
@section('content')

  <div class="container">
    <h1>Препадаватели</h1>

    <div class="container">
      <h3>Список препадавателей</h3>

      <div class="row">
        <table class="table table-striped table-hover border-top" style="width: 1000px">
           <thead>
           <th>ФИО</th>
           <th>Почта</th>
           </thead>
             <tbody>
             @foreach($users as $user)
             <tr>
               <td> {{ $user->name }} </td>
               <td> {{ $user->email }}



               <div style="float: right">
                 <form action="teachers/{{$user->id}}" method="post">
                  @csrf
                  <a href="/teachers/{{$user->id}}/edit" type="button" class="btn btn-warning"> изменить </a>

                  <button class="btn btn-danger" type="submit"> удалить </button>

                  </form>
                  </div>
                 </td>
                </tr>
                 @endforeach
                </tbody>
         </table>
      </div>
    </div>










  </div>

@endsection

