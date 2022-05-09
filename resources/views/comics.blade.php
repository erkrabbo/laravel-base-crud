@extends('templates.base')


@section('pageTitle', 'Comics - List')

@section('main')
    <main>
        <div class="container">
            <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-lg-4">
                @foreach ($comicsList as $comic)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-image-top">
                            <div class="card-body">
                                <h5 class="card-title w-100">{{ $comic->title }}</h5>
                                <small class="w-100">€{{ $comic->price }}</small>
                                <p class="card-text h-100 align-self-end">{{ $comic->type }}</p>
                                <a href="{{ route('comics.show', $comic) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
