<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
  @include('includes.header')

  <h2>Add new Book</h2>

  <form  method="post">
    @csrf
    @method('put')
    <label for="title">Title</label> <br>
    <input type="text" name="title">
    <label for="price">Price</label> <br>
    <input type="number" name="price"><br>
    <input type="submit" value="Create">
  </form>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>