@extends('layouts.app')

@section('content')
<h1>メッセージ編集</h1>

<form action="{{ route('update') }}" method="post">
    @csrf
    @method('patch')
    <textarea> </textarea>
    <div style="display:flex">
        <button>更新</button>
        <a href="{{ route('home') }}">キャンセル</a>
    </div>
</form>

@endsection