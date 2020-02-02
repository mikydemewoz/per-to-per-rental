<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">RentET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_item.html ">Add item</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">categories</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Electronics</a>
                <a class="dropdown-item" href="#">Cars</a>
                <a class="dropdown-item" href="#">Houses</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <div class="container add-item" style="margin-top:10vh;border:1px">
        <center>
            <div class="header">
                <h3>Add new item</h3>
            </div>
        </center>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="{{ url('/add_item') }}" method="post" class="form-group">

                {{ csrf_field() }}

                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                    <label for="name">Name of item</label>
                    <input type="text" name="item-name" id="item-name" class="form-control"><br>
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="electronics">Electronics</option>
                        <option value="house">House</option>
                        <option value="cars">Car</option>
                    </select><br>
                    <label for="description">Description</label>
                    <textarea name="descriptions" id="descriptions" class="form-control" cols="30" rows="3"></textarea><br>
                    <label for="Price">Price:</label>
                    <input type="number" name="price" class="form-control" id="price"><br>
                    <!-- <label for="image">Image:</label> -->
                    <!-- <input type="file" name="image" id="image" class="form-control"><br> -->
                    <input type="submit" value="Submit" class="btn btn-primary">

                </form>
            </div>
        </div>
    </div>
</body>
</html>