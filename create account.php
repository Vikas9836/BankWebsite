<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <style>
            .cont{
                background:linear-gradient(#242b64,white);
                height:1000px;
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
    <div class="cont"><br><br>
      <h2 style="font-family:garamond;color:black">&emsp;CREATE YOUR ACCOUNT</h2>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form>
            <input type="text" name='p' class="form-control my-5" placeholder="enter Pin">
            <div class="row">
            <div class="col"><input class="form-control " name='n' type="text" placeholder="enter name"></div>
            <div class="col"><input class="form-control " name='fn' type="text" placeholder="enter father name"></div>
            </div>
            <input type="text" placeholder="enter phone" name='ph' class="form-control my-5">
            <input type="text" placeholder="enter email" name='em' class="form-control my-5">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="enter country" name='c' class="form-control ">
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="enter state" name='s' class="form-control ">
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="enter city" name='ct' class="form-control ">
                </div>
            </div>
            <input type="text" class='form-control my-5' name='g' placeholder="gender">
            <input type="text" class='form-control my-5' name='am' placeholder="Amount">
            <button class='btn btn-outline-dark' name='submit'>create Account</button>
            </form>
        </div>
      </div>


      <?php
$con=mysqli_connect('localhost','root','','account');
if(isset($_REQUEST['submit']))
{
    $pin=$_REQUEST['p'];
    $name=$_REQUEST['n'];
    $fname=$_REQUEST['fn'];
    $email=$_REQUEST['em'];
    $phone=$_REQUEST['ph'];
    $country=$_REQUEST['c'];
    $state=$_REQUEST['s'];
    $city=$_REQUEST['ct'];
    $gender=$_REQUEST['g'];
    $amount=$_REQUEST['am'];
    $a="SBI";
    $q="select * from createac";
    $rs=mysqli_query($con,$q);
    $x=mysqli_num_rows($rs);
    if($x>0){
        $x=$x+101;
        $a=$a.$x;
    }else
    $a="SBI101";
    $q="insert into createac values('$a','$pin','$name','$fname','$email','$phone','$country','$state','$city','$gender','$amount')";
    $q=mysqli_query($con,$q);
    if($x>0)
    echo "<br><h2>account opened with account number $a";
    else
    echo "<br><h2>error";
    
}

?>
      </div>
</body>
</html>
   