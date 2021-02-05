<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>書籍登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store')
            <form action="{{ route('book.store')}}" method="POST">
            @elseif($target == 'update')
            <form action="/book/{{ $book->id }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">書籍名</label>
                    <input type="text" class="form-control" name="title" value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label for="description">本の紹介文</label>
                    <input type="text" class="form-control" name="description" value="{{ $book->description }}">
                </div>
                <div class="form-group">
                    <label for="author">著者</label>
                    <input type="text" class="form-control" name="author" value="{{ $book->author }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/">戻る</a>
            </form>
        </div>
    </div>
</div>