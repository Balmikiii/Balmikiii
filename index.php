
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mohad sahil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
      <div class="row">
      <h1 class="text-center mt-5 mb-3">Fill thise form</h1>
        <div class="col-lg-6 col-sm-12 bg-light pt-3 pb-3">
          <form action="db_conection.php" method="post" enctype="multipart/form/data">
            <lable for="name">Name :-</lable>
                <input class="form-control mb-3" type="text" name="name" placeholder="Enter your name">
            <lable for="Father name">Father Name :-</lable>
            <input class="form-control mb-3" type="text" name="fname" placeholder="Enter your father name">
            <lable for="dob">D.O.B :-</lable>
            <input class="form-control mb-3" type="date" name="dob" placeholder="Enter your Date of Birth">
            <div class="d-flex">
              <lable for="Gender" class="me-5">Gender :-</lable>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="male" value="male" name="gender">
                <label class="form-check-label me-5" for="male">Male</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="female" value="female" name="gender">
                <label class="form-check-label me-5" for="female">Female</label>
              </div>
              <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="other" value="other" name="gender">
                <label class="form-check-label" for="other">Other</label>
              </div>
            </div>
            <lable>E-mail :-</lable>
            <input class="form-control mb-3" type="text" name="email" placeholder="Enter your email ID">
            <lable>Phone no :-</lable>
            <input class="form-control mb-3" type="text" name="contact" placeholder="Enter your mobile number">
            <input type=submit name="submit" class="btn btn-success" value="submit"></input>
          </form>
        </div>
        <div class="col-lg-6 col-sm-12 bg-light pt-3 pb-3">
          <div class="container parent">
            <div  class="chiled">
              <h2>Fill your personal detail for ID card </h2>
              <p>show your detail you write input.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

 
</div>

</body>
</html>
<?php /*
error_reporting(0);
?>
<?php
$folder = "image/";
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".filename;
echo $folder;
move_uploaded_file($tempname,$folder);
*/
?> 

