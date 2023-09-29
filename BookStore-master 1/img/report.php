<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
    <title></title>
     <style>
      .modal-header {background:#D67B22;color:#fff;font-weight:800;}
      .modal-body{font-weight:800;}
      .modal-body ul{list-style:none;}
      .modal .btn {background:#D67B22;color:#fff;}
      .modal a{color:#D67B22;}
      .modal-backdrop {position:inherit !important;}
       #login_button,#register_button{background:none;color:#D67B22!important;}       
       #query_button {position:fixed;right:0px;bottom:0px;padding:10px 80px;
                      background-color:#D67B22;color:#fff;border-color:#f05f40;border-radius:2px;}
    @media(max-width:767px){
        #query_button {padding: 5px 20px;}
    }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
<div id="fullscreen_bg" class="fullscreen_bg"/>
 <form class="form-signin">
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
        
        <div class="panel panel-default">
        
        <div class="panel panel-primary">
        
            
            <div class="text-center">
                <h3 style="color:#2C3E50" ></h3>
                <h4> <label for="Choose Report"  style="color:#E74C3C">Choose Report</label></h4>
                                        
               
                                
                                <div class="customer" >
                                    
                                </div>
                </br><button type="button" class="btn btn-primary btn-lg btn3d"><span class="glyphicon glyphicon-search"></span> View</button> 
            </div>                 
        <div class="panel-body">    
 
  <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th class="text-center" width="115px">Customer</th>
                      <th class="text-center" width="115px">Product</th>
                      <th class="text-center" width="115px">Quantity</th>                    
                  </tr>
              </thead>   
              <tbody>
                <?php
    // Include your database connection file
    include("dbconnect.php");

    // SQL query to fetch data from the 'cart' table
    $sql = "SELECT customer, product, Quantity FROM cart";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='text-center'>" . $row["customer"] . "</td>";
            echo "<td class='text-center'>" . $row["product"] . "</td>";
            echo "<td class='text-center'>" . $row["Quantity"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3' class='text-center'>No items in the cart.</td></tr>";
    }

    // Close the database connection (assuming you have a $conn variable in dbconnect.php)
    $con->close();
    ?>
</tbody>
              </tbody>
              </table>
     <div class="text-center">
             </div>

              
              
  </div>
       </div>
        </div>
   

</form>
</body>
</html>