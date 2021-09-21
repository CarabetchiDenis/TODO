<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
</head>
<body>
    <h1>Welcome to TODO</h1>
    <div class="row">
        <div id="formulaire " class="column">        
            <input type="text" id="name" placeholder="Name">
            <button type="button" id="btn1">Send</button>        
        </div>
        <div id="afficher" class="colum" style="background:#ec4343;" >
            <ol>
                <li>do this </li>
                <li>buy milk </li>
                <li>code mew app</li>
            </ol>
        </div>
    </div>
</body>
   ////////
   <script>
        $(document).ready(function(){
         $("#btn1").click(function(){
            $("ol").append("<li>text</li>");
        });
        });
    </script>

   
</html>