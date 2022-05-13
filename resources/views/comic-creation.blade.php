@extends('templates.base')

@section('pageTitle', 'Comics - Add a comic')

@section('main')
<main>
    <div class="container">
            @yield('error')
            <form method="POST" action="{{ route('comics.store')}}" class="needs-validation py-2" novalidate>
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control {{ $errors->has('title')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="title" placeholder="Insert the title here..." name="title" value="{{ old('title') }}">
                    <div id="titleFeedback" class="invalid-feedback">
                        Please enter a valid title( Max 255 characters ).
                    </div>
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" class="form-control {{ $errors->has('thumb')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" placeholder="Insert the thumb here..." name="thumb" id="thumb" placeholder="Insert the thumb here..." name="thumb" value="{{ old('thumb') }}">
                    <div id="thumbFeedback" class="invalid-feedback">
                        Please enter a valid URL.
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control {{ $errors->has('price')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="price" placeholder="Insert the price here..." name="price" value="{{ old('price') }}">
                    <div id="priceFeedback" class="invalid-feedback">
                        Please enter a valid price.
                    </div>
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control {{ $errors->has('series')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="series" placeholder="Insert the series here..." name="series" value="{{ old('series') }}">
                    <div id="seriesFeedback" class="invalid-feedback">
                        Please enter a valid serie( Max 255 characters ).
                    </div>
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale date</label>
                    <input type="date" class="form-control {{ $errors->has('sale_date')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="sale_date" placeholder="Insert the sale date here..." name="sale_date" value="{{ old('sale_date') }}">
                    <div id="sale_dateFeedback" class="invalid-feedback">
                        Please enter a valid sale_date.
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control {{ $errors->has('type')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="type" placeholder="Insert the type here..." name="type" value="{{ old('type') }}">
                    <div id="typeFeedback" class="invalid-feedback">
                        Please enter a valid type.
                    </div>
                </div>

                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control {{ $errors->has('description')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="description" rows="3" name="description" placeholder="Insert the description here...">{{ old('description') }}</textarea>
                  <div id="descriptionFeedback" class="invalid-feedback">
                    Please enter a valid description.
                </div>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </main>
@endsection
