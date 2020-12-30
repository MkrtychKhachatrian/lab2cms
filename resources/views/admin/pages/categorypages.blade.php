@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">{{$theme->title}}</div>
                <div class="card-body">
                    @foreach($pages as $people)
                        @if ($people->alias_of != NULL)
                            <?php $newpeople=App\Models\Page::find($people->alias_of);
                            $people->title = $newpeople->title;
                            $people->main_content = $newpeople->main_content;
                            $people->company = $newpeople->company;
                            $people->created_at = $newpeople->created_at;
                            $people->updated_at = $newpeople->updated_at;?>
                        @endif

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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
