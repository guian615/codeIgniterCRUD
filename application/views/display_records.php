<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Display Records</title>
</head>

<body>
<div class="">

<table width="1000" border="1" cellspacing="5" cellpadding="5" class="mx-auto mt-5 bg-dark text-light text-center">
  <div class="float-right" style="margin-left: -200px;">
    <a href='savedata' style="margin-right:60px;"><button type='submit' class='btn btn-primary ' name='save' value='Save Data'><h4><i class='fa fa-edit ' aria-hidden='true'>
    </i> Add </h4>
    </button></a>
  </div>
  <tr class="text-success">
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
	<th>Delete</th>
	<th>Update</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->mobile."</td>";
  
  echo "<td><a href='deletedata?id=".$row->user_id."'><button type='submit' class='btn btn-danger' name='save' value='Save Data'><h4><i class='fa fa-trash' aria-hidden='true'>
  </i> Delete </h4>
  </button></a></td>";

  // echo "<td><a href='updatedata?id=".$row->user_id."'>Update</a></td>";

  echo "<td><a href='updatedata?id=".$row->user_id."'><button type='submit' class='btn btn-primary ' name='save' value='Save Data'><h4><i class='fa fa-edit ' aria-hidden='true'>
  </i> Update </h4>
  </button></a></td>";
 

  echo "</tr>";
  $i++;
  }
   ?>
</table>
</div>
</body>
</html>