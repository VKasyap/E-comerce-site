<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css" type="text/css">

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container-fluid"><br><br><br><br>
			<div class="row">
                        <div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
                                            <h4>Mobile 1</h4>
                                        </div>
							
                                        <div class="panel-body">
                                            <center><img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1566365459.97049471.png" height="300px"></center>
                                                <div class="caption">
                                                        <center><p>Mi A3 4GB+64GB, Kind of Grey. ₹12,999</p></center>
                                                        <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                                </div>
                                        </div>
                        
				</div>	
                        </div>

                        <div class="col-sm-4">
				<div class="panel panel-default">
                                    <div class="panel-heading">
					<h4>Mobile 2</h4>
                                    </div>
							
                                    <div class="panel-body">
                                        <center><img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1588906276.48578306.png" height="300px"></center>
                                            <div class="caption">
                                                                                            <center><p>Mi 10 8GB+128GB. ₹49,999</p></center>
                                                                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                            </div>
                                    </div>
                        
				</div>	
                        </div>

                         <div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 3</h4>
					</div>
							
					<div class="panel-body">
                                            <center><img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1583933001.12278893.png" height="300px"></center>
                                            <div class="caption">
                                                    <center><p>Redmi Note 9 Pro Max 6GB+128GB. ₹18,499</p></center>
                                                    <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                            </div>
                                        </div>
                        
				</div>	
                        </div>
                    </div>
	</div>
					
	<div class="container-fluid">
		<div class="row">
                        <div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 4</h4>
					</div>
							
                                        <div class="panel-body">
                                                <center><img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1563366044.04348167.png" height="300px"></center>
                                                <div class="caption">
                                                        <center><p>Redmi K20 6GB+128GB. ₹24,999</p></center>
                                                        <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                                </div>
                                        </div>
                        
				</div>	
                        </div>

                        <div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 5</h4>
					</div>
						
					<div class="panel-body">
                                            <center><img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1574917468.09496657.jpg" height="300px"></center>
                                            <div class="caption">
                                                                                            <center><p>Redmi Note 8 Pro 6GB+128GB. ₹16,999</p></center>
                                                                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                            </div>
                                        </div>
                        
				</div>	
                        </div>

                        <div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Mobile 6</h4>
					</div>
							
					<div class="panel-body">
                                            <center><img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1551330127.97677803.png" height="300px"></center>
                                            <div class="caption">
                                                                                            <center><p>Redmi Note 7 Pro 64 GB. ₹13,999</p></center>
                                                                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                            </div>
                                        </div>
                        
				</div>	
                        </div>
						
                    </div>
				</div>
                
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
