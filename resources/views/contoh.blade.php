<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Filters</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Lexend", sans-serif;
            background-color: #8db8f9;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        #myInput {
            margin-bottom: 20px;
        }

        .list-group-item {
            font-size: 18px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Bootstrap Filter</h2>

    <input class="form-control" id="myInput" type="text" placeholder="Search item...">

    <br>

    <ul class="list-group" id="myList">
        <li class="list-group-item">Pir</li>
        <li class="list-group-item">Banana</li>
        <li class="list-group-item">Orange</li>
        <li class="list-group-item">Mango</li>
        <li class="list-group-item">Strawberry</li>
        <li class="list-group-item">Watermelon</li>
        <li class="list-group-item">Pineapple</li>
        <li class="list-group-item">Grapes</li>
    </ul>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>