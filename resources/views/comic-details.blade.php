@extends('templates.base')

@section('pageTitle', "Details - $comic->title")

@section('main')
    <main>
        <div class="container text-center">
            <h2>{{ $comic->title }}</h2>
            <img class="mb-5" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale date</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                    </tr>
                </tbody>
            </table>

            <p class="pb-5">{{ $comic->description }}</p>

            <button class="btn btn-primary">BUY NOW</button>


        </div>
    </main>
@endsection
