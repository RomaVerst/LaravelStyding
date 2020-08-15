@extends('layouts.main')
@section('title')
    @parent Панель администратора
@endsection
@section('menu')
    @include ('admin.menu')
@endsection

@section('title_page')
    Админка
@endsection

@section('content')
    <p> Панель администратора</p> 
@endsection