@extends('main')

@section('title','|create new post')
    
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <h3>Create New Allbum</h3>
            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
                {{Form::label('title','Album Name:')}}
                {{Form::text('title',null,array('class'=>'form-control'))}}
                {{Form::label('body','Post Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control'))}}
                {{Form::submit('Create Album',array('class'=>'btn btn-success btn-md','style'=>'margin-top:20px;'))}}

    
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection