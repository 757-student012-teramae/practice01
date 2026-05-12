@extends('layouts.app')

@section('content')
<h1>プロフィール編集</h1>
@include('commons.flash')
<form action="{{ route('profile.update') }}" method="post">
    @csrf 
    @method('patch')
    <p>
        <label>名前</label><br>
        <input type="text" name="name" value="{{ $user->name }}">
    </p>
    <p>
        <button>更新する</button>
    </p>
</form>
<a href="#" onclick="deleteBook()">削除する</a>
<form action="{{route('messages.destroy',$message)}}" method="post" id="delete-form">
    @csrf
    @method('delete')
</form>
<script type="text/javascript">
    function deleteMessage() {
        event.preventDefault();
        if (window.confirm('本当に削除しますか？')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>
@endsection