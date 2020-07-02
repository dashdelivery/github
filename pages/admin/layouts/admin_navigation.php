
 <nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Dash Delivery</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shipments<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="new_shipment.php">Add shipment</li>
          <li><a href="manage_shipments.php">Manage shipments</a></li>
        </ul>
    
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bookings<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="manage_bookings.php">Bookings</a></li>
        </ul>
       </li>   
     <ul class="nav navbar-nav navbar-right">
        <li class="dropdown nav ">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Admin<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../logout.php">Log Out</a></li>
        </ul>
       </li> 
    </ul>

  </div>
</nav>