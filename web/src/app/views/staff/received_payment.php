<!DOCTYPE html>
<html>
<head>
	<title><?php echo  $_SESSION['company']; ?></title>
	<link href="http://agent.dgted.com/css/style.css" rel="stylesheet" type="text/css" >
</head>
<body class="body-home">
	<?php 
		include ('layout/layout.php');
	?>
	<div class="container-fluid">
    <div class="row">
    <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1>Payment</h1><hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Duty Date</th>                                 
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>  
                        <?php
                        if($data != null){ 
                        foreach ($data as $duty) {
                           
                           if($duty['payment_appove_by_staff'] == 0) 
                           { 
                         
                         ?>     
                           
                            <tr>
                                <td><?php echo $duty['duty_date'] ; ?></td>
                                                               

                                <td>
                                    
                                     <a class=" button-radious-8 button-send  button-hover-blue" href="/?url=staff/send_payment_by_staff/<?php echo $duty['id']; ?>/<?php echo $duty['contract_id'];?>">Receive</a>
                                     
                                 </td>

                            </tr>

                            <?php
                                }
                             } 
                            }
                             ?>
                                
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>


        
        </div>
    </div>

    <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1>Payment Received</h1><hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            	
                                <th>Duty Date</th>   
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>  
                        <?php
                        if($data != null){ 
                        foreach ($data as $duty) {
                           
                           if($duty['payment_appove_by_staff'] == 1) 
                           { 
                         
                         ?>     
                           
                            <tr>
                                
                            
                                <td><?php echo $duty['duty_date'] ; ?></td>
                                <td>Received</td>

                                 
                            </tr>
                            <?php
                                }
                             } 
                         }
                             ?>
                                
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>        
        </div>
    </div>