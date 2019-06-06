<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
     
     <div class="container">
       <div class="row">
          <div class="col-md-12">                
                <form method="post" id="register">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" value="John Doe">                    
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" value="28">                    
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john@gmail.com" value="john@gmail.com">
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Gender</label>
                    </div>  
                    <label class="radio-inline">Male
                      <input type="radio" name="gender" value="male">                      
                    </label>
                    <label class="radio-inline">Female
                      <input type="radio" name="gender" value="female">                      
                    </label>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Skills</label>
                    </div>  
                    <label class="checkbox-inline">PHP
                      <input type="checkbox" name="skills[]" value="php"  checked>                      
                    </label>
                    <label class="checkbox-inline">Python
                      <input type="checkbox" name="skills[]" value="python"  checked>                      
                    </label>
                    <label class="checkbox-inline">Nodejs
                      <input type="checkbox" name="skills[]" value="nodejs">                      
                    </label>
                  </div>
                  
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" value="password">
                  </div>
                  
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </form>
          </div>
       </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

 