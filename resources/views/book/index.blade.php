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
      margin: 50px ;
    }
    .text-header{
      height: 100px;
      width: 100%;
      background-color: #198754;
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
<body>
@include('parts.header')
@yield('content')
<script src="{{ mix('js/app.js') }}"></script>


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

</body>