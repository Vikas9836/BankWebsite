<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <style>
            .cont{
              background:linear-gradient(#242b64,white);
                height:550px;
            }
            .form-control{
                background:none;
                border:2px solid black;
                border-top:none;
                border-left:none;
                border-right:none;
                border-radius:10px;
                color:black;
            }
            .btn{
                border:2px solid black;
                border-radius:10px;
            }
        </style>
</head>
<body style="background:linear-gradient(#242b64,white)">
  <div class="container">
  <?php
include('nav.php');
  ?>
  <div class='cont'><br><br>
    <h2 style="font-family: garamond;color:black" >&emsp;BALANCE ENQUIRY</h2>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <form>
        <input type="text" class='form-control my-5' name='ac' placeholder='Enter Account' />
        <input type="text" class='form-control my-5' name='p' placeholder='Enter Pin' />
        <button class='btn btn-outline-dark' name='submit'>check balance</button>
        </form>
      </div>
    </div>
 
  <?php
$con=mysqli_connect('localhost','root','','account');
if(isset($_REQUEST['submit']))
{
  $account=$_REQUEST['ac'];
  $pin=$_REQUEST['p'];
  $q="select * from createac where acno='$account' && pin='$pin'";
  $rs=mysqli_query($con,$q);
  $x=mysqli_num_rows($rs);
  $camt=0;
  if($x>0){
$r=mysqli_fetch_array($rs);
$camt=$r[10];
echo "<h3> your account balance is =$camt";
  }
  else
  echo "<center><h3>invalid account or pin";
}

?>


</div>
  </div>
  </div>
</body>
</html>
