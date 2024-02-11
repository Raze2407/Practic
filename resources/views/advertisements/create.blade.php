@extends('layouts.app')

@section('content')
    <h1>Create Advertisement</h1>
    <form method="POST" action="{{ route('advertisements.store') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
