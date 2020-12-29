@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           <div class="card" style="width: 55rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$people->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Виробник: {{$people->company}}</h6>
                            <hr>
                            <p class="card-subtitle mb-2 text-muted">Додання товару: {{$people->created_at}}</p>
                            <p class="card-subtitle mb-2 text-muted">Оновлення даних: {{$people->updated_at}}</p>
                            <a href="{{ url("$people->path") }}"><button type="button" class="btn btn-dark">Переглянути повністю</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
