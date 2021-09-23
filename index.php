<?php
    /*
    * Date: 2021-09-22
    * Author: boss
    * Description: This file the contient de html (index)
    */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>Document</title>
    </head>
    <body>
        
        <div class="row">
            <div class="column" id="left_column" style="background:#d5d5d5">
                <div id="left_container">
                    <div id="feedback_box"></div>
                    <div id="input_container">
                        <input type="text" id="input_todo" placeholder="write your todo to do">
                    </div>
                    <div id="todo_controller">
                        <button id="submit_todo" onclick="send_todo()">add it to your todo!</button>
                    </div>
                </div>
            </div>
            <div class="column" id="right_column" style="background:lightblue">
                <div id="todo_log"></div>
            </div>
        </div>
        
        <script>
                function send_todo() {

                    var task_to_add = document.getElementById("input_todo").value;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("feedback_box").innerHTML = xhttp.responseText;
                            get_todos();
                        }
                    };
                    xhttp.open("POST", "insert_todo.php", true);
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("todo_to_add=" + task_to_add);

                }

                function get_todos() {

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("todo_log").innerHTML = xhttp.responseText;
                        }
                    };
                    xhttp.open("GET", "get_todos.php", true);
                    xhttp.send();
                }

                window.addEventListener('load', function() {
                    get_todos();
                })
        </script>
    </body>
</html>