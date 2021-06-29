@extends('layouts.app')

@section('content')

    <div class="container">

        @markdown($note->description)


        @can('edit', $note)
             can
        @endcan
    </div>
@endsection
