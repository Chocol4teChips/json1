<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span id="textResult"> - </span>
    <input type="text" id="x">
    <input type="text" id="y">
    <button id="post2" > post </button>
    <button id="get1" > get </button>
    <hr/>
    <hr/>
    <button id="json1"> JSON </button>



</body>

<script>
    $(() => {
        $("#get1").click(() => {
            var x = $("#x").val();
            var y = $("#y").val();
            var url="http://cj-android-demon.herokuapp.com/add2.php"
            $.post(
                url, {
                    "x":x,
                    "y":y,
                },
                (data,status) => {
                console.log(data);
                console.log(status);
                $("#textResult").text(data);
            })
        });
        
        $("#post2").click(() => {
            var x = $("#x").val();
            var y = $("#y").val();
            var url="http://cj-android-demon.herokuapp.com/add.php?x="+ x +"&y=" + y;
            $.get(
                url, {
                    "x":x,
                    "y":y,
                },
                (data,status) => {
                console.log(data);
                console.log(status);
                $("#textResult").text(data);
            })
        });

        $("#json1").click(() => {
            var url = "";
        })
    });
</script>
</html>
