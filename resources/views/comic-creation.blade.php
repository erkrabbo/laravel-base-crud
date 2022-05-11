@extends('templates.base')

@section('pageTitle', 'Comics - Add a comic')

@section('main')
    <main>
        <div class="container">
            <form method="POST" action="{{ route('comics.store')}}" class="py-2">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Insert the title here..." name="title">
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Insert the thumb here..." name="thumb">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Insert the price here..." name="price">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" placeholder="Insert the series here..." name="series">
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale date</label>
                    <input type="text" class="form-control" id="sale_date" placeholder="Insert the sale date here..." name="sale_date">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Insert the type here..." name="type">
                </div>

                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control" id="description" rows="3" name="description" placeholder="Insert the description here..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
              </form>
        </div>
    </main>
@endsection
