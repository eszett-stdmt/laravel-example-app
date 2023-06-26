<x-layout title="TOP | つぶやきアプリ">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">つぶやきアプリ</h2>
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>
</x-layout>

<!--
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    @auth
    <div class="postForm">
        <p>投稿フォーム</p>
        @if (session('feedback.success'))
            <p style="color:green">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ route('tweet.create') }}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力"></textarea>
            @error('tweet')
                <p style="color:red">{{ $message }}</p>
            @enderror
            <button type="submit">投稿する</button>
        </form>
    </div>
    @endauth
    <div class="postList">
        @foreach($tweets as $tweet)
        <details>
            <summary>{{ $tweet->content }} by {{ $tweet -> user -> name }}</summary>
            @if(\Illuminate\Support\Facades\Auth::id() === $tweet -> user_id)
            <div>
                <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </div>
            @else
                編集できません
            @endif
        </details>
        @endforeach
    </div>
</body>
</html>
-->