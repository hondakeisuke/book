<head>
  <title>Laravel Sample</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style>
    .contener{
      height: 100vh;
      width: 100vw;
    }
    .text-box{
      height: 500px;
      width: 80%;
      margin: 50px;
      border
    }
    .text-header{
      height: 100px;
      width: 100%;
    }
    .text-body{
      height: 400px;
      width: 100%;
    }
    .rounded{
      margin: 30px;
    }
    .icon-img{
      margin:20px;
    }
    .y-name{
      margin-top:20px;
    }
    .description{
      padding-top: 20px;
    }
    .dis-box{
      height:160px;
      width:70%;
      margin: 0 80px 0 30px;
    }
    .title-box{
      margin-top:30px;
    }
    
  </style>
</head>
<!-- <div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">書籍一覧</h3>
  </div>
</div>
<div class="row">
  <div class="d-flex justify-content-between mb-3">
    <div class="p-2 bd-highlight">
      @foreach($books as $book)
      <div class="box">
        <th class="text-center">ID</th>
        <th class="text-center">書籍名</th>
        <th class="text-center">説明</th>
        <th class="text-center">著者</th>
        <th class="text-center">削除</th>
      
      
        <div class="d-flex flex-column bd-highlight mb-3">
          <td>
            <a href="/book/{{ $book->id }}/edit">{{ $book->id }}</a>
          </td>
          <td>{{ $book->title }}</td>
          <td>{{ $book->description }}</td>
          <td>{{ $book->author }}</td>
          <td>
            <form action="/book/{{ $book->id }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </div>
      </div>
      @endforeach
      </div>
    </div>
    <div><a href="/book/create" class="btn btn-default">新規作成</a></div>
  </div>
</div> -->
@foreach($books as $book)
<div class="flex-direction: column">
  <div class="contener d-flex justify-content-around">
    <div class="text-box border">
      <div class="text-header d-flex justify-content-start">
        <div class="icon ">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7jN5pjOL2v84vqdmzhEMUqjt9juliUvIx_g&usqp=CAU" alt="" class="rounded-circle img-fluid icon-img" width=80 height=60>
        </div>
        <div class="y-name">
          <p>坂本</p>
        </div>
      </div>
      <div class="text-body border-top">
        <div class="description-box">
          <div class="dis-box">
            <div class="description">
              <p>ここに本で紹介をする{{ $book->description }}</p>
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
              <p>著者:へのへのもへじ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach