<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
      <form action="{{ route('create_post') }}" method="POST">
          {!! csrf_field() !!}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Body</label>
                            <textarea name="body" class="form-control" placeholder="Body" style="height:100px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <br>
                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
      </form>
       
        
    <h1>
        Posts:
    </h1>
    @foreach($posts as $post)
    <h2>
        <a href="{{route('posts', $post->id) }}">{{$post->title}} </a>
    </h2>
    <h4>{{$post->created_at->format('d/m/Y H:i')}}</h4>
    <h3>
        {{$post->body}}
    </h3>
    <hr>
    @endforeach
    
    <div>
        {{ $posts->links() }}
    </div>
    </div>
</body>
</html>