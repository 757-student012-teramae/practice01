@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
<form action="{{ route('messages.store') }}" method="post">
    <textarea name="content" rows="5" cols="20" placeholder="メッセージを入力"></textarea><br>
    <button>投稿する</button>
</form>
</form>
<form action="{{ route('logout') }}" method="post">
    @csrf 
    <button>ログアウト</button>
</form>
@endsection
