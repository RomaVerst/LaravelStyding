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
        <h3>{{ $item->title }}</h3>
        <div class="card-img" style="background-image: url({{ $item->image ?? asset('storage/default.jpg') }})"></div>
        @if (!$item->isprivate)
            <a href="{{ route('NewsOne', $item->id) }}">Подробнее...</a>
            <hr>
        @else
            <p>Эта новость приватна, <a href="{{ route('register') }}">зарегистрируйтесь</a></p>
            <hr>
        @endif
    @endforeach
    {{ $news->links() }}
@endsection