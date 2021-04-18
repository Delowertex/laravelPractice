<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2>Post header <a href="/add-post" class="btn btn-primary">Add Post</a></h2>
                </div>
                <div class="card-body">
                @if(Session::has('delete_post'))
                    <div class="alert alert-danger">
                        {{Session::get('delete_post')}}
                    </div>
                @endif
                    <table class="table stripe">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Action</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($post as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->body}}</td>
                                    <td>
                                        <a href="/posts/{{$item->id}}" class="btn btn-info">Details</a>
                                        <a href="/delete-post/{{$item->id}}" class="btn btn-info">Delete</a>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
            </div>
               
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

</body>
</html>