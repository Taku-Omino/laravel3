@extends('front.layouts.master')

@section('title', 'book')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">著書一覧ページです。</h1>
        <h2>著書一覧</h2>
        @foreach($books as $book)
        <div class="user-card">
            <a href="{{ route('books.index',$book->id)}}"><p>{{ $book->title }}</p></a>
            <p>著者:{{ $book->user->name }}</p>
            <p>コメント:{{ $book->comment }}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection
