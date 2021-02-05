@extends('layouts.defalt')

@section('content')
<div style="margin-top:50px;">
  <h4>検索結果</h4>
  @if(isset($books))
    @foreach($books as $book)
    <div class="flex-direction: column">
      <div class="contener d-flex justify-content-around">
        <div class="text-box border">
          <div class="text-header d-flex justify-content-between">
            <div class="text-header-left d-flex justify-content-start">
              <div class="icon ">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7jN5pjOL2v84vqdmzhEMUqjt9juliUvIx_g&usqp=CAU" alt="" class="rounded-circle img-fluid icon-img" width=80 height=60>
              </div>
              <div class="y-name">
                <p>投稿者の名前</p>
              </div>
            </div>
            <div class="text-header-right d-flex justify-content-end" >
              <form action="/{{ $book->id }}/edit" method="GET">
                <button class="btn btn-primary btn-e">編集</button>
              </form>
              <form style="display:inline" action="book/{{ $book->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary btn-e" >削除</button>
              </form>
            </div>
          </div>
          <div class="text-body border-top">
            <div class="description-box">
              <div class="dis-box">
                <div class="description">
                  <p>{{ $book->description }}</p>
                </div>
              </div>
              <div class="details-box d-flex justify-content-start"> 
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQip7Z4XUodxuOB7yDd1Ho8YfQ-D39H8PMA6g&usqp=CAU" alt="" class="rounded img-fluid" width=200 height=300>
                <div>
                <div class="title-box">
                  <div class="title">
                    <p>{{ $book->title }}</p>
                  </div>
                  <div class="author">
                  <p>著者:{{ $book->author }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>


@endsection