


<!DOCTYPE html>
<html>
<head>
  <script src="jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Table with Database</title>
  <style type="text/css">
    
.navbar-nav > li{
  margin-left:30px;
  margin-right:30px;
  margin-top: 15px;
  border-radius: 30px;
}
li {
 font-weight: bold;
  }
  .navbar-nav > .active > a { 
    background-color: orange ;
    color: white;
    border-radius: 20px;

}
.btn {
  background-color: orange ;
    color: white;
    border-radius: 20px;

}
.about {
  background-color: orange ;
    color: white;
    margin-left: 5px;
    margin-top: 3px;
    margin-bottom: 0px;
    padding:5px;
    border-radius: 20px;

}
.navbar-nav > li{
  padding-left:30px;
  padding-right:30px;
}
.navbar-nav > li{
  margin-left:30px;
  margin-right:30px;
  margin-top: 15px;
}
li {
 font-weight: bold;
  }
  .navbar-nav > .active > a { 
    background-color: orange ;
    color: white;

}
.container {
  display: flex;
  justify-content: center;
  padding-left: 0px;
  
}

.image1, .image2 {
  opacity: 0.5;
}

.image1:hover {
  opacity: 1.0;
}
.image2:hover {
  opacity: 1.0;
}
.form {
  
  display: flex;
  justify-content: center;
}
.back {
  background-image: url("https://www.goprac.com/images/logo1.png");
  height: 250px;
  opacity: 0.2px;
  max-width: 100%;
}
.out {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSY8AB1cg3D7Ewb5ePbCToOuAzR7HMCU7hETQ&usqp=CAU");
}
h3 {
  color: orange;
}





  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand about" href="#"><i class="icon fa fa-address-card"></i> GoPrac</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="icon fa fa-align-justify"></i> Categories<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-check"></i> Why Practice</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>

<div class="container out">
  <img class="image1" src="http://csharp.net-informations.com/string/img/random-string.png">
<img class = "image2"src="https://atcodex.com/wp-content/uploads/2020/07/Generates-a-random-alphanumeric-string-in-PHP-700x400.jpg">

</div>
<div class="back">

<div class="container">
  <h3>Enter below the number of codes you want to generate</h3>
</div>











<form class="form" action="return.php" method="post" id="form1">
    <input type="number" name="num_of_codes" id="num_of_codes" placeholder="number of codes<100"> 
   
  </form>
  <div style="text-align: center; margin-top: 3px;">
    <button class="btn" type="submit" form="form1" name="submit">Submit</button>
  </div>
</div>


</body>
</html>

  

  




  

  


