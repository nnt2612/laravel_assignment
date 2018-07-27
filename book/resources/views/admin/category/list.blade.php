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
            <div class="main">
                <h1>
                    List category
                </h1>
                <table width="100%" class="table table-condensed">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($list_obj as $item)
                        <tr>
                            <td>{{$item -> name}}</td>
                            <td>{{$item -> description}}</td>
                            <td><img src="{{$item -> images}}" style="width: 100px"></td>
                            <td class="id">{{$item -> status}}</td>
                            <td><span class="btn-delete" id="{{$item-> id}}">Delete</span></td>
                            <td><a href="/admin/category/{{$item -> id}}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <script>

            var listDeleteButton = document.getElementsByClassName('btn-delete');
            for (var i = 0; i < listDeleteButton.length; i++) {
                listDeleteButton[i].onclick = function () {
                    if (confirm('Are you sure ?')) {
                        var params = '_token={{csrf_token()}}';
                        var currentId = this.id;
                        var xhttp = new XMLHttpRequest();
                        xhttp.open("DELETE", "/admin/article/" + currentId, true);
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                alert('Delete success!');
                                window.location.reload();
                            }
                        };
                        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhttp.send(params);
                    }
                }
            }

            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;
            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }

        </script>
    </body>
</html>