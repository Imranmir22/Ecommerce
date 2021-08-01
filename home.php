<html>

<head>
    <title>

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="main">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">

                        <button class="btn btn-outline-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </nav>



    </div>

    <div class="header">
    </div>


<?php
include("api.php");

$size=sizeof($result);
$j=0;
for($i=0; $i < 20; $i++){
    $j++;
    $img=$result[$i]->image;
    $title=$result[$i]->title;
    $price=$result[$i]->price;

   if($i%3==0){
    echo '    <div class="container cardcontain" style="height:500px; "> ';  
       echo '<div class="row"> ';
   }
          echo '  <div class="col">
                <div class="card" style="width: 15rem; height:300px ; margin-top:30px">
                    <img src= "'.$img.'"  class="card-img-top" alt="..." style="height:50% ;width:90%">
                    <div class="card-body">
                        <h5 class="card-title">'.$title.'</h5>
                        <p class="card-text">'.$price.'</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div> ';
   if($j==3){
       $j=0;
     echo '</div> </div>';
   }    

    
}   
?>
</body>

</html>