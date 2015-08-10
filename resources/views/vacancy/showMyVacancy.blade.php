@extends('app')

@section('content')
    <ul class="nav navbar-nav navbar-right">
        <li> <a href="{{$vacancy->id}}/destroy" onclick="return ConfirmDelete();">Видалити</a></li>
        <li> <a href="{{$vacancy->id}}/edit">Редагувати</a></li>
    </ul>
    <h1>Перегляд вакансії</h1>
    Дата розміщення : {{$vacancy->created_at}}<br>
    Компанія :        {{$company_name->company_name}}<br>
    Зарплата :        {{$vacancy->salary}}<br>
    Позиція :         {{$vacancy->position}}<br>
    Місто :           {{$vacancy->city}}<br>
    Галузь :          {{$vacancy->branch}}<br>
    Опис :            {{$vacancy->description}}<br>
    Від кого :        {{$user->name}}<br>

    <script>

        function ConfirmDelete()
        {
            var conf = confirm("Ви дійсно хочете видалити вакансію?");

            if(conf) return true;

            else return false;
        }
    </script>

@stop