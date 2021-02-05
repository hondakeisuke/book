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
    .btn-e{
      height:40px;
      width:70px;
      padding:auto;
      margin:20px 10px 0 0;
    }
    .text-header-right{
      padding-right:10px;
    }

    
  </style>
</head>
<body>

@include('parts.header')
<script src="{{ mix('js/app.js') }}"></script>

</body>
@yield('content')