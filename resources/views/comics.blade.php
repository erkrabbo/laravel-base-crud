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
                                <h4 class="card-title font-weight-bold w-100">{{ $comic->title }}</h4>
                                <p class="card-text">{{ strtoupper($comic->type) }}</p>
                                <small class="w-100 align-self-end">€{{ $comic->price }}</small>
                                <a href="{{ route('comics.show', $comic) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $comicsList->onEachSide(3)->links('pagination::bootstrap-4') }}
        </div>
    </main>
@endsection
