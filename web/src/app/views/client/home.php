    <!DOCTYPE html>
    <html>
    <head>
    <title><?php echo  $_SESSION['company']; ?></title>

    
    </head>
    <body class="body-home" >                  
                
         <?php

         include ('layout/layout.php');
         ?>
                    

 <div class="container-fluid">
    <div class="row">



    <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
            <h1> Active Cotract</h1><hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Contract Title</th> 
                                <th>Staff Name</th>
                                <th>Phone Number</th> 

                                <th>Month Limit</th>
                                <th>Payment</th>  
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>  
                        <?php
                        if($data != null){ 
                        foreach ($data as $contract) {
                             
                         
                         ?>     
                           
                            <tr>
                                 <td><?php echo $contract['contrac_titile'] ; ?></td>
                                <td><?php echo $contract['staff_name'] ; ?></td>
                                <td><?php echo $contract['contact_no'] ; ?></td>
                                <td><?php echo $contract['month_limit'] ; ?></td>

                                <td>
                            <?php 
                            echo $contract['payment_from_client_monthly'] ; 
                            ?>   
                            </td>
                                                           
                                     <td > <a class="button-radious-8 button-send  button-hover-blue"  href="/?url=client/send_payment_view/<?php echo $contract['id']; ?>">
                                        Send Payment
                                    </a>
                                 </td>
                            </tr>
                            <?php
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





    </body>
    </html>