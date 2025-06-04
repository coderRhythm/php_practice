<?php

  // connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database = "pp";

  // connect to the database 
  $conn = mysqli_connect($servername,$username,$password,$database);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>php crud operations:!!</title>

  </head>
  <body>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
  Launch demo modal
</button>

<!--edit  Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us </a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <?php






    ?>

      <div class="container my-4">
        <h1>Add a note</h1>
        <form action = "crud.php" method = "post">
            <div class="form-group">
              <label for="title">Note title</label>
              <input type="text" class="form-control" id="title" name = "title" aria-describedby="emailHelp" placeholder="Enter the note: ">
            </div>
            <div class="form-group">
                <label for="description">Note description: </label>
                <textarea class="form-control" id="description" name = "description" rows="3" placeholder = "enter the description: "></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Add note</button>
          </form>
      </div>



      <!-- data -->
      <?php
          if($_SERVER['REQUEST_METHOD']== "POST")
          {
              $title = $_POST['title'];
              $description = $_POST['description'];

              $sql = "insert into `nodes`(`title`,`description`) values('$title','$description');";

              $result  = mysqli_query($conn,$sql);


              if($result){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Recorded has been added successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
              }
              else{
                echo "not saved !!";
              }

          }
          


    ?>



          <!-- displying the container -->
          <div class="container">
          <table class="table" id ="myTable">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql1 = "select * from `nodes`";

$result = mysqli_query($conn,$sql1);
$i=1;
while($row = mysqli_fetch_assoc($result))
{
    echo ' <tr>
    <th scope="row">'.$i.'</th>
    <td>'.$row["title"].'</td>
    <td>'.$row["description"].'</td>
    <td><button class="edit btn btn-sm btn-primary">edit</button> <button class="delete btn btn-sm btn-primary">Delete</button></td>
  </tr>';
    $i++;
}



?>
  </tbody>
</table>
   
          </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
   <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    let table = new DataTable('#myTable');

   </script>
  </body>
</html>