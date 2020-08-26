@extends('layouts.main')
@section('title')
    @parent Добавление новости
@endsection
@section('menu')
    @include ('admin.menu')
@endsection

@section('title_page')
    Добавление новости
@endsection

@section('content')
        <form enctype="multipart/form-data" method="POST" action="@if($news->id){{ route('Admin.Update', $news) }}@else{{ route('Admin.Create') }}@endif">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Заголовок новости</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ $news->title ?? old('title') }}" required autofocus>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="category_id" class="col-md-4 col-form-label text-md-right">Категория новости</label>

                <div class="col-md-6">
                    <select id="category_id" class="form-control" name="category_id">
                        @forelse ($categories as $item)
                            <option @if ($news->category_id || old($item->id)) selected @endif value="{{ $item->id }}">{{ $item->title }}</option>
                        @empty
                            <option selected value="0">Нет категорий</option>
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="text" class="col-md-4 col-form-label text-md-right">Текст новости</label>

                <div class="col-md-6">
                    <textarea name="text" class="form-control" id="text" cols="30" rows="10">{{ $news->text ?? old('text') }}</textarea>
                </div>
            </div>
            <div class="form-group col-md-12 text-md-center">
                <input type="file" name="image">
            </div>
            <div class="form-group row">
                <label for="isprivate" class="col-md-4 col-form-label text-md-right">Приватная</label>
                <div class="col-md-6">
                    <input id="isprivate" @if($news->isprivate==1 || old('isprivate')==1) checked @endif type="checkbox" class="form-check-input" name="isprivate" value="1">
                </div>   
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-md-4">
                    <input type="submit" class="btn btn-primary" value="@if($news->id) Изменить@else Добавить@endif новость">
                </div>
            </div>
        </form>
        @if(session('status') == 'error')
        <div class="alert alert-danger" role="alert">
            Заполните все текстовые поля
        </div>
        @endif
@endsection