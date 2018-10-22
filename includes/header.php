<?php 

$signup = "<li class=\"nav-item\"><a class=\"nav-link\" href=\"signup.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>";
$logout = "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">
  <span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>";
$signin = "<li class=\"nav-item\">
  <span class=\"glyphicon glyphicon-log-in\"></span>
  <a class=\"nav-link\" href=\"signin.php\">Sign In</a></li>";


if(isset($_SESSION['id'])){

  $signin = "";
  $signup = "";

}else{

	$logout = "";
}

$head = "<html lang=\"en\">
<head>
  <title>Origin</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"shortcut icon\" href=\"icon.ico\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\">
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
</head>
<body>

    <div class=\"container\">
      <header>
        <nav class=\"navbar fixed-top navbar-expand-md nav-style\">
          <a href=\"#\"><img src=\"feignn_logo.png\" style=\"width:auto; height:80px\"></a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
              <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse justify-content-end\" id=\"collapsibleNavbar\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Services</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                </li>
                
                ".$signin.$signup.$logout."
            </ul>
          </div>  
        </nav> 
      </header>
    </div>";

echo $head;


?>