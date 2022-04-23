@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .container {
           max-width: 900px;
       }
       .backgroundColor{
           background-image:repeating-linear-gradient(45deg,tomato,purple)
       }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body class="backgroundColor">

    <section style="padding-top: 60px">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" align='center'>
                          <h3>  All Post</h3>
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_deleted')}}
                            </div>

                            @endif
                       <table class="table table-hover">
                           <thead>
                               <tr>

                                   <th>Post Title</th>
                                   <th>Post description</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($posts as $post )
                               <tr>

                                   <td>{{$post->title}}</td>
                                   <td>{{$post->body}}</td>
                                   <td>
                                       <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                       <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                   </td>
                               </tr>

                               @endforeach

                           </tbody>

                       </table>
                            <div align='center'>
                                <a href="/add-post" class="btn btn-success">Add new post</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>



</body>
</html>
@endsection
