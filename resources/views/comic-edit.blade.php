@extends('templates.base')

@section('pageTitle', 'Comics - Add a comic')

@section('main')
<main>
    <div class="container">
            @yield('error')
            <form name="edit-form" method="POST" action="{{ route('comics.update', $comic) }}" class="needs-validation col-lg-6 m-auto py-2" novalidate>
                @csrf
                @method('PUT')

                <a class="btn btn-primary mb-3" href="{{ URL::previous() }}"> &LeftArrow; BACK</a>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control {{ $errors->has('title')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="title" placeholder="Insert the title here..." name="title" value="{{ count($errors) ? old('title') : $comic->title }}">
                    <div id="titleFeedback" class="invalid-feedback">
                        Please enter a valid title( Max 255 characters ).
                    </div>
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" class="form-control {{ $errors->has('thumb')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" placeholder="Insert the thumb here..." name="thumb" id="thumb" placeholder="Insert the thumb here..." name="thumb" value="{{ count($errors) ? old('thumb') : $comic->thumb }}">
                    <div id="thumbFeedback" class="invalid-feedback">
                        Please enter a valid URL.
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control {{ $errors->has('price')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="price" placeholder="Insert the price here..." name="price" value="{{ count($errors) ? old('price') : $comic->thumb }}">
                    <div id="priceFeedback" class="invalid-feedback">
                        Please enter a valid price.
                    </div>
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control {{ $errors->has('series')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="series" placeholder="Insert the series here..." name="series" value="{{ count($errors) ? old('series') : $comic->series }}">
                    <div id="seriesFeedback" class="invalid-feedback">
                        Please enter a valid serie( Max 255 characters ).
                    </div>
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale date</label>
                    <input type="date" class="form-control {{ $errors->has('sale_date')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="sale_date" placeholder="Insert the sale date here..." name="sale_date" value="{{ count($errors) ? old('sale_date') : $comic->sale_date }}">
                    <div id="sale_dateFeedback" class="invalid-feedback">
                        Please enter a valid sale_date.
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control {{ $errors->has('type')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="type" placeholder="Insert the type here..." name="type" value="{{ count($errors) ? old('type') : $comic->type }}">
                    <div id="typeFeedback" class="invalid-feedback">
                        Please enter a valid type.
                    </div>
                </div>

                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control {{ $errors->has('description')? 'is-invalid' : (count($errors) ? 'is-valid' : '') }}" id="description" rows="3" name="description" placeholder="Insert the description here...">{{ count($errors) ? old('description') : $comic->description }}</textarea>
                  <div id="descriptionFeedback" class="invalid-feedback">
                    Please enter a valid description.
                </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                    DELETE
                  </button>
            </form>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form onclick="deleteModal()" method="POST" action="{{route('comics.destroy', $comic)}}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">DELETING COMIC</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">Are you sure?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </main>
@endsection
