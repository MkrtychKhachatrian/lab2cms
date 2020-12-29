@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="{{ route('admin.pages.create')}}">
                    <button type="button" class="btn btn-dark btn-lg">Додати товар</button>
                    <!--<a href="{{url('admin/pages/defl')}}" style="margin-left:19%"><button type="submit" class="btn btn-outline-dark">За замовчуванням</button></a>
                    <a href="{{url('admin/pages/sorted')}}"><button type="submit" class="btn btn-outline-dark">За назвою</button></a>
                    <a href="{{url('admin/pages/created')}}"><button type="submit" class="btn btn-outline-dark">За датою додавання</button></a>
                    <a href="{{url('admin/pages/updated')}}"><button type="submit" class="btn btn-outline-dark">За датою оновлення</button></a>-->
                </a>
                <div class="card">
                    <div class="card-header">{{ __('Товари') }}</div>
                    <div class="card-body">
                        @foreach($pages as $page)

                        <div class="card" style="width: 55rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$page->title}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Виробник: {{$page->company}}</h6>
                                <p class="card-text">{{$page->main_content}}</p>
                                <hr>
                                <p class="card-subtitle mb-2 text-muted">Додання товару: {{$page->created_at}}</p>
                                <p class="card-subtitle mb-2 text-muted">Оновлення даних: {{$page->updated_at}}</p>
                                @can('edit-pages')
                                    <a href="{{ route('admin.pages.edit', $page->id) }}"><button type="button" class="btn btn-dark">Редагувати</button></a>
                                @endcan
                                @can('delete-pages')
                                    <form action="{{ route('admin.pages.destroy' , $page) }}" method="POST" class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-dark">Видалити</button>
                                    </form>
                                @endcan
                                <a href="{{ url("$page->path") }}"><button type="button" class="btn btn-dark">Переглянути</button></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
