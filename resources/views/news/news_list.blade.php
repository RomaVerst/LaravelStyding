@extends('layouts.main')

@section('title')
    @parent Список новостей
@endsection

@section('menu')
    @include ('menu')
@endsection

@section('title_page')
    Список новостей
@endsection

@section('content')
    @foreach($news as $item)
        @if (!$item['isprivate'])
            <h3>{{ $item['title'] }}</h3>
            <a href="{{ route('NewsOne', $item['id']) }}">Подробнее...</a>
            <hr>
        @else
            <h3>{{ $item['title'] }}</h3>
            <p>Эта новость приватна, <a href="{{ route('register') }}">зарегистрируйтесь</a></p>
            <hr>
        @endif
    @endforeach
@endsection