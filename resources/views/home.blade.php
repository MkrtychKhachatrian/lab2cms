@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron">
                <h3 class="display-4">{{$page->title}}</h3>
                <p class="lead">{{$page->main_content}}</p>
                <hr class="my-4">
                <h3 class="lead">Виробник: {{$page->company}}</h3>
                <p>
                <p>Додання товару: {{$page->created_at}}
                <p>Оновлення даних: {{$page->updated_at}}
            </div>
        </div>
    </div>
</div>
@endsection
