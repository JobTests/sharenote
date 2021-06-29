@extends('layouts.app')
@section('title', __('Add Note'))
@section('content')
        <div class="container">
            <form action="{{ route('notes.store') }}" method="post">
                @csrf
                    <div class="form-group">
                       <label for="descriptionInput"></label>
                       <textarea name="description" id="descriptionInput" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                       @error('description')
                           <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                   </div>
                    <div class="form-group">
                        <button class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
            </form>
        </div>
@endsection
