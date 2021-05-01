<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Registration form</title>
</head>
<style>

form {
        background: black;
        border-radius: 20px;
        padding: 1.3rem;
        width: 500px;
        margin: 2rem auto;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        
        
    }

    .btn {
        padding: 15px;
        border: 0;
        text-shadow: 1px 1px 0px rgba(0, 0, 0, .4);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .btn:hover {
        color: #fff;
        background: linear-gradient(90deg, #0700b8 0%, #00ff88 100%);
        border-color: blue;
    }
    
</style>
<body>
  <div>
    <h1 class = "text-primary mt-5 text-center">
      Crud by the Power of CodeIgniter
    </h1>
  </div>
  <div class="container mt-5 mb-5" style = " box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
    <div class="row">
      <div class="col-sm">
        <img src="https://img.freepik.com/free-vector/add-user-concept-illustration_114360-458.jpg?size=338&ext=jpg" 
        alt="..." class="" style = "height:100%; width:100%;">
      </div>
      <div class="col-sm">
      <form method="post">
        <h3 class="mt-3 text-center mb-3 text-primary">
          Insert Data
        </h3>
        <div class="input-group col-lg-12 mb-4">
          <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
              </span>
          </div>
          <input id="name" type="text" name="name" placeholder="Enter Name"
          class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
        </div>

        <div class="input-group col-lg-12 mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
              <i class="fa fa-envelope text-primary" style=" font-size:25px;padding:10px;"></i>
            </span>
          </div>
          <input id="name" type="text" name="email" placeholder="Enter Email Address"
          class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
        </div>

        <div class="input-group col-lg-12 mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
              <i class="fa fa-mobile text-primary ml-3" style=" font-size:43px;"></i>
            </span>
          </div>
          <input id="name" type="text" name="mobile" placeholder="Enter Mobile Number"
          class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px;">
        </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary mb-2" name="save" value="Save Data"><h4><i class="fa fa-paper-plane" aria-hidden="true">
            </i> Submit</h4>
        </button>
        </div>  
    	</form>
      </div>
    </div>
  </div>
	
</body>
</html>