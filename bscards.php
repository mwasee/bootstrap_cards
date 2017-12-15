<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>        
        <title>cards</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-black bg-light text-center">
                        
                        <div class="card-header"><h1>APPLICATION FORM</h1></div>
            
            <div class="card-body">
                
                <h3 class="card-title">SSC</h3>
                
                <p class="card"><h3>FORM<span class="glyphicons glyphicons-leaf"></span></h3></p>
            
            <form id="my" action="cardaction.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" name="name"> 
                    </div>
                     <div class="form-group">
                        <label for="father">FATHER'S NAME</label>
                        <input type="text" class="form-control" name="father"> 
                    </div>
                     <div class="form-group">
                        <label for="address">ADDRESS</label>
                        <input type="text" class="form-control" name="address"> 
                    </div>
                     <div class="form-group">
                        <label for="email">E-MAIL</label>
                        <input type="text" class="form-control" name="email"> 
                    </div>
                    <div class="form-group">
                        <label for="contact">CONTACT</label>
                        <input type="number" class="form-control" name="contact"> 
                    </div>
                    <div class="form-group">
                        <label for="photo">PHOTO</label>
                        <input type="file" class="form-control" name="photo"> 
                    </div>
                    
                <button class="btn btn-secondary btn-lg" type="submit">SUBMIT</button>
                <button class="btn btn-secondary btn-lg" type="reset">RESET</button>
            </form>
                </div>
            </div>
        </div>
            </div>
        </div>
            
             
            
             <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
            <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
            <script src="js/popper.min.js" type="text/javascript"></script>
            <script src="js/bootstrap.js" type="text/javascript"></script>

             
            </body>
</html>
