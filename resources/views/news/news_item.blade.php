@extends('layouts.main')

@section('title')
    @parent {{ $news['title'] }}
@endsection

@section('menu')
    @include ('menu')
@endsection

@if(isset($news))
    @section('title_page')
        {{ $news['title'] }}
    @endsection
    @section('content')
        @if (!$news['isprivate'])
            <p>{{ $news['text'] }}</p>
        @else
            <p>Эта новость приватна, <a href="{{ route('register') }}">зарегистрируйтесь</a></p>
        @endif      
    @endsection
@else
    @section('title_page')
        Ошибка
    @endsection
    @section('content')
        <i>Такой новости нет</i>
    @endsection
@endif