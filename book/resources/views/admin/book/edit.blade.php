<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{asset('css/header.css')}}" type="text/css" rel="stylesheet">
    <title>Document</title>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger text-light py-3 main-nav">
            <div class="container">
                <img src="https://image.shutterstock.com/image-vector/book-logo-260nw-572103406.jpg" alt="Logo" style="height: 50px">
                <span>Book store</span>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-uppercase" href="">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="">Category</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-content">
            <h1>Category Edit</h1>
            <form action="/admin/category/{{$obj -> id}}" method="post" class="input-form">
                @method('PUT')
                {{csrf_field()}}
                <div class="user">
                    <label>Name</label>
                    <div>
                        <input type="text" name="name" class="user-input" placeholder="Name..."
                               value="{{$obj -> name}}"></div>
                </div>
                <div class="user">
                    <label>Description</label>
                    <div>
                        <input type="text" name="description" class="user-input" placeholder="Description..."
                               value="{{$obj -> description}}">
                    </div>
                </div>
                <div class="user">
                    <label>Image</label>
                    <div>
                        <input type="text" name="images" class="user-input" placeholder="Image..."
                               value="{{$obj -> image}}">
                    </div>
                </div>
                <div class="user">
                    <input class="btn btn-primary" type="submit" value="Save">
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </body>
</html>