<?php

session_start();


?>

<html>
<head>
	<title> Home Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome </h1>
    <button type="button" class="btn btn-info btn-block">
       GAMES
    </button>
        <button type="button" class="btn btn-info btn-block">
       FILMS
    </button>
        <button type="button" class="btn btn-info btn-block">
       SERIES
    </button>
        <button type="button" class="btn btn-info btn-block">
       SPACE
    </button>
        </button>
     <button type="button" class="btn btn-info" style="position: relative;top: 10px;left: 510px;">
       add topic
    </button>
    </div>

    <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
			  	
	</script>

    <script>
    	$("form").submit(function(e){
           e.preventDefault();
    	});
    </script>
</body>
</html>