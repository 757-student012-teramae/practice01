@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
<form action="{{ route('messages.store') }}" method="post">
    <textarea name="content" rows="5" cols="20" placeholder="メッセージを入力"></textarea><br>
    <button>投稿する</button>
</form>
<form action="{{ route('logout') }}" method="post">
    @csrf 
    <button>ログアウト</button>
</form>

<!-- STEP4オプション問題用 -->
<p><a href="{{ route('profile.edit') }}">プロフィール編集</a></p>

<!-- STEP5オプション問題用 -->
<form action="{{ route('users.delete') }}" method="post">
    @csrf 
    @method('delete')
    <button>退会する</button>
</form>

<hr>
<!-- この辺にループがいる -->
<hr>


@endsection