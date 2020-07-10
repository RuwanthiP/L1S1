@extends('main')
@section('title','|Gallery')
@section('content')
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>

<h2>Image Gallery</h2>

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src={{URL('/images/elder.jpg')}} alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src={{URL('/images/elder.jpg')}} alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src="{{URL('/images/elder.jpg')}}" alt="Forest" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src="{{URL('/images/elder.jpg')}}" alt="Northern Lights" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src="{{URL('/images/elder.jpg')}}" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src={{URL('/images/elder.jpg')}} alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src={{URL('/images/elder.jpg')}} alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="{{URL('/images/elder.jpg')}}">
        <img src={{URL('/images/elder.jpg')}} alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Album name</div>
    </div>
  </div>
  
  <div class="clearfix"></div>
  
  

@endsection
