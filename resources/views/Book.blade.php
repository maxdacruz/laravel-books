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


  <div id="test">
    @include('includes.book-list')
  </div>

  <div id="res" ></div>




  <script
  src="https://code.jquery.com/jquery-3.5.0.js"
  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>
   $(".delete").click(function(){
        event.preventDefault();
        var id = $(this).data("id");
        var token = $(this).data("token");
        $.ajax(
        {
            url: "book/delete/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function (res)
            {

              
              $( "#res" ).html(res.success);
              $('#test').load('book-list');

              
              
              console.log("it Work");
            }
        });

    });
    </script>
</body>
</html>