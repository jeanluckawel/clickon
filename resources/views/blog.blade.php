@foreach($blogs as $blog)
    <div style="background-color: #9ca3af; padding: 10px ;">
    <p>{{$blog->title}}</p>
    <p>{{$blog->content}}</p>
    <p>{{$blog->picture}}</p>
    <p>{{$blog->like}}</p>
    <p>{{$blog->dislike}}</p>
    </div>
    <br>
@endforeach
