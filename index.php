<!-- php for equipment reg -->
<?php
if(isset($_POST['item'])){

$server="localhost";
$username="root";
$password="";
  
$conn=new mysqli('localhost','root','',);
if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}
$item =$_POST['item'];
$name1 =$_POST['name1'];
$detail=$_POST['detail'];
$spec=$_POST['spec'];
$loca=$_POST['loca'];
$date=$_POST['date'];
$sql="INSERT INTO `itu-imul lab`.`itu-imul lab` (`Item`, `Name1`, `Details`, `Specifications`, `location`, `Entry date`) VALUES ('$item', '$name1', '$detail','$spec', '$loca', CURRENT_Date());";
//echo  $sql;
if($conn->query($sql) == true){
  echo "successfully inserted";
 
}
else{
  echo"ERROR: $sql <br> $conn->error";
}
$conn->close();
 }
?> 


<!-- php for equipment issue-->

<?php
if(isset($_POST['Item'])){

$server="localhost";
$username="root";
$password="";
  
$conn=new mysqli('localhost','root','',);
if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}
$Item =$_POST['Item'];
$Issueto =$_POST['Issueto'];
$Issueby=$_POST['Issueby'];
$Date=$_POST['Date'];
$sql="INSERT INTO `itu`.`itu` (`Item`, `Issue to`, `Issue by`, `Date`) VALUES ('$Item', '$Issueto', '$Issueby', CURRENT_Date());";
//echo  $sql;
if($conn->query($sql) == true){
  echo "successfully inserted";
 
}
else{
  echo"ERROR: $sql <br> $conn->error";
}
$conn->close();
 }
?> 




<!-- php for Login -->

<?php
if(isset($_POST['name'])){

$server="localhost";
$username="root";
$password="";
  
$conn=new mysqli('localhost','root','',);
if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}
$name =$_POST['name'];
$id =$_POST['id'];
$email=$_POST['email'];
$location=$_POST['location'];
$Designation=$_POST['Designation'];

$sql="INSERT INTO `login`.`login` (`name`, `id`, `email`, `location`, `Designation`) VALUES ('$name', '$id', '$email', '$location', '$Designation');";
//echo  $sql;
if($conn->query($sql) == true){
  echo "successfully inserted";
 
}
else{
  echo"ERROR: $sql <br> $conn->error";
}
$conn->close();
 }
?> 

<!-- php for equi list -->
<?php
if(isset($_POST['sno'])){

$server="localhost";
$username="root";
$password="";
  
$conn=new mysqli('localhost','root','',);
if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}
$sno =$_POST['sno'];
$Name =$_POST['Name'];
$quantityto=$_POST['quantityto'];
$quantitya=$_POST['quantitya'];
$location=$_POST['location'];

$sql="INSERT INTO `equi-list`.`equi-list` (`sno`, `Name`, `quantity total`, `quantity available`, `location`) VALUES ('$sno', '$Name', '$quantityto', '$quantitya', '$location');";
//echo  $sql;
if($conn->query($sql) == true){
  echo "successfully inserted";
 
}
else{
  echo"ERROR: $sql <br> $conn->error";
}
$conn->close();
 }
?> 


  
  

<!-- html code  -->


  <!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Robotics and Automation</title>
</head>
<style>
  .we {
    color: black;

    font-size: 30px;
    overflow: hidden;
  }

  .ty {
    color: black;

    font-size: 22px;
    overflow: hidden;
  }

  #navbarSupportedContent {
    padding-top: 8px;

  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">𝐼𝒯𝒰 𝑅&𝒜</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-2">
          <li class="nav-item">
            <button class="collapsenavbar-collapse btn btn-light " id="navbarSupportedContent" data-bs-toggle="modal"
              data-bs-target="#Reg">Equipments Reg</button>
          </li>

          <div class="mx-3 ">

            <button class="collapse navbar-collapse btn btn-light" id=" navbarSupportedContent" data-bs-toggle="modal" data-bs-target="#Issue">Issue Equipments</button>
          </div>


          <div class="max-3">
            <button  class="collapsenavbar-collapse btn btn-light " id="navbarSupportedContent"  data-bs-toggle="modal"
              data-bs-target="#table">Equipment List</button>
          </div>

          <div class="mx-3">
          <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=itu&table=itu&pos=0">
            <button class="collapse navbar-collapse btn btn-light" id="/">History</button>
            </a>
          </div>

        </ul>

        <div class="mx-2">
          <button class="collapse navbar-collapse btn btn-light" id="navbarSupportedContent" data-bs-toggle="modal"
            data-bs-target="#LoginModal">Login</button>
        </div>
      </div>
    </div>

    <!-- Login -->
    <form action="index.php" method="POST">
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="Login ModalLabel" aria-hidden="true" o>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Login ModalLabel">Login to ITU-R&A</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Enter your Name</label>
                  <input type="text" class="form-control"  Name="name" id="name">
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Enter your ID</label>
                  <input type="number" class="form-control" name="id" id="id">
                </div>
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Job Location</label>
                 <input type="text" class="form-control" name="location" id="location"> 
              </div>
              <div class="col-md-4">
                <label for="validationServer04" class="form-label">Job Designation</label>
                <select class="form-select is-valid" name="Designation" id="Designation"  aria-describedby="validationServer04Feedback" placeholder="None" required>

                  <option name="Designation"id="Designation" >Unknown</option>
                  <option name="Designation"id="Designation">Trainee</option>
                  <option name="Designation"id="Designation">Employee</option>
                </select>

              </div><br>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </form>
    <!-- ISSUE EQUIPMENTS -->
    <form action="index.php" method="POST"> 
    <div class="modal fade" id="Issue" tabindex="-1" aria-labelledby="Issue ModalLabel" aria-hidden="true" o>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Issue ModalLabel">ISSUE EQUIPMENTS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Item#</label>
                  <input type="text" class="form-control" name="Item" id="Item">
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Issue To:</label>
                  <input type="text" class="form-control" name="Issueto" id="Issueto">
                </div>
                <label for="exampleInputEmail1" class="form-label">Issue By:</label>
                <input type="text" class="form-control" name="Issueby" id="Issueby" aria-describedby="issueHelp">

              </div>
              <div>
                Date: <input type="date" name="Date" id="Date">
              </div>

              <br>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
</form>
    <!--  Equipment reg -->
    <form action="index.php" method="POST"> 
    <div class="modal fade" id="Reg" tabindex="-1" aria-labelledby="Reg ModalLabel" aria-hidden="true" o>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Issue ModalLabel">Equipment Registration</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"> Item#</label>
                    <input type="text" name="item" id="item" class="form-control">
                 
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Name:</label>
                  <input type="text" id="name1" name="name1" class="form-control" >
                </div>
                <div>
                    
                  Details: <textarea name="detail" id="detail" placeholder="Item Details" cols="60" rows="4"
                    ></textarea>
                </div>
                <label for="exampleInputEmail1" class="form-label">Specifications:</label>
                <input type="text" name="spec" id="spec" class="form-control" 
                  aria-describedby="issueHelp">

                <label for="exampleInputEmail1" class="form-label">Location:</label>
                <input type="number" id="loca" name="loca" class="form-control" aria-describedby="issueHelp">
              </div>


              <div>
                Entry Date: <input type="date" name="date" id="date">
              </div>

              <br>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- EQUIPMENT LIST-->
  <form action="index.php" method="POST">
    <div class="modal fade" id="table" tabindex="-1" aria-labelledby="table ModalLabel" aria-hidden="true" o>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Issue ModalLabel">ADD Equipment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"> serial no#</label>
                    <input type="text" name="sno" id="sno" class="form-control">
                 
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Name:</label>
                  <input type="text" id="Name" name="Name" class="form-control" >
                </div>
                <div>
                <label for="exampleInputPassword1" class="form-label">Quantity Total:</label>
                  <input type="text" name="quantityto" id="quantityto" class="form-control" >
                  
                </div>
                <label for="exampleInputEmail1" class="form-label">Quantity Available:</label>
                <input type="text" name="quantitya" id="quantitya" class="form-control" 
                  aria-describedby="issueHelp">

                <label for="exampleInputEmail1" class="form-label">Location:</label>
                <input type="number" id="location" name="location" class="form-control" aria-describedby="issueHelp">
              </div>


              

              <br>

              <button type="submit" class="btn btn-primary">Add to list</button>
            
              <a href ="http://localhost/phpmyadmin/index.php?route=/sql&db=equi-list&table=equi-list&pos=0" class="btn btn-primary">Check list</a>
              <!-- <button type="submit" class="btn btn-primary">Check list</button> -->
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
    </form>

  </nav>

  <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="first.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <container class="we">Wellcome to Robotics and Automation</container><br>
          <container class="ty">Search any type of Equipments.</container>


        </div>
      </div>
      <div class="carousel-item">
        <img src="second.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <container class="we">Wellcome to Robotics and Automation</container><br>
          <container class="ty">Search any type of Equipments.</container>


        </div>
      </div>
      <div class="carousel-item">
        <img src="third.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <container class="we">Wellcome to Robotics and Automation</container><br>
          <container class="ty">Search any type of Equipments.</container>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <script src="index.js"></script>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
<!-- INSERT INTO `equipment reg` (`Item no.`, `Name`, `Details`, `Specifications`, `location`, `Entry date`) VALUES ('23', 'testname', 'here we write some details of our item', 'here we write some specifications about our item', '12', 'current_timestamp()'); -->

</html>