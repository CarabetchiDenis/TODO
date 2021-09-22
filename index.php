<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css "href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TODO List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
</head>
<body>
    <form action="" method="post" >
        <h1>Welcome TO DO</h1>
        <div class="wrapper">
            <div class="inputFields">
                <input type="text" id="taskValue" placeholder="Écrire qqch...">
                <button class="btn" type="submit">Send</button>
            </div>
            <hr>
            <div class="content"  >
                <ul>
                    <li>
                        <span class="text">new record.</span>
                        <i class="fa fa-trash" aria-hidden="true"></i>

                    </li>
                    <li>
                        <span class="text">create.</span>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </li>
                    <li>
                        <span class="text">read.</span>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </li>
                    <li>
                        <span class="text">blabla.</span>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </li>                    
                </ul>
                <div class="pending-text">Total 4 Écriture</div>
            </div>
        </div>
        
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function)
    </script>








	
	<script>
	
        // Add Task
        $("#addBtn").on("click", function(e) {
            e.preventDefault();

            var task = $("#taskValue").val();

            $.ajax({
                url: "traitement.php",
                type: "POST",
                data: {task: task},
                success: function(data) {
                    loadTasks();
                    $("#taskValue").val('');
                    if (data == 0) {
                        alert("Something wrong went. Please try again.");
                    }
                }
            });
        });
	</script>
</body>
</html>