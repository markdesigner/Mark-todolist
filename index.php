

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Mark ToDoList</title>
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1 id="big-title">打自己想打的標題</h1>
            <button class="add m-5" type="button"><i class="far fa-plus-square"></i></button>

            <ul id="todolist">
            <script id="entry-template" type="text/x-handlebars-template">
                <li>
                    <button class="complete mx-2 my-1" type="button"></button>
                    <div class="item" contenteditable="true">{{thing}}</div>
                    <button class="delete ml-auto" type="button"><i class="fas fa-trash"></i></button>
                </li>             
            </script>
            </ul>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/handlebars-v4.1.0.js"></script>
    <script src="js/action.js"></script>


</body>

</html> 