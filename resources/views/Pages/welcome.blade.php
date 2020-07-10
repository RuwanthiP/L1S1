  @extends('main')
  @section('title','|Home')
  
  @section('content')
      
 
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Wellcome to my Blog</h1>
                <p class="lead">Thank you for visiting my blog</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="#" role="button">Populer Post</a>
            </div>
        </div><!--End of header.col-->
    </div><!--End of header.row-->
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias facilis fuga placeat pariatur hic dicta, aliquid eligendi reprehenderit magni numquam voluptatem commodi at corporis doloremque quos vel asperiores illum voluptas!</p>
                <a class="btn btn-primary" href="#">Read more</a>
                <hr>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias facilis fuga placeat pariatur hic dicta, aliquid eligendi reprehenderit magni numquam voluptatem commodi at corporis doloremque quos vel asperiores illum voluptas!</p>
                <a class="btn btn-primary" href="#">Read more</a>
                <hr>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias facilis fuga placeat pariatur hic dicta, aliquid eligendi reprehenderit magni numquam voluptatem commodi at corporis doloremque quos vel asperiores illum voluptas!</p>
                <a class="btn btn-primary" href="#">Read more</a>
                <hr>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h1>Side bar</h1>
        </div>
    </div>
    @endsection