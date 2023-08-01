<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿詳細</title>
    <link reßl="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header>
        <nav>
            <div>
                <a href="{{ route('posts.index') }}">投稿アプリ</a>
            </div>
        </nav>
    </header>
    <main>
        <article>
            <div>
                <h1>投稿詳細</h1>
                @if (session('flash_message'))
                    <p>{{ session('flash_message') }}</p>
                @endif
                <div>
                    <a href="{{ route('posts.index') }}">&lt; 戻る</a>
                </div>
                <div>
                    <div>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>

                        <div>
                            <a href="{{ route('posts.edit', $post) }}">編集</a>
                        </div>
                        <div>
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">削除</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <footer>
        <p>&copy; 投稿アプリ All rights reserved.</p>
    </footer>    
</body>
</html>