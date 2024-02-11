@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <ul>
        @if(isset($categories))
            @foreach ($categories as $category)
                <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
            @endforeach
        @else
        <div>Пусто</div>
        @endif
    </ul>
@endsection
