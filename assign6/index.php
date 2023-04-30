#!/usr/local/bin/php
<?php
$servername = "mysql.cise.ufl.edu";
$username = "christianmosey";
$password = "Buddy2020";

// Create connection
$conn = new mysqli($servername, $username, $password, "CMreviews");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$sql = "Select * FROM Reviews;";  //edit your table name here
$res = $conn->query($sql);
print "
  <table>
   <tr>
   <th>Review ID:</th>
   <th>First Name:</th> 
   <th>Last Name:</th> 
   <th>Snack:</th> 
   <th>Beverage:</th>
   <th>Country:</th>
   <th>Rating:</th> 
  <th>Comments:</th>
  </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr>";
    print "<td>" . $row['id'] . "</td>";
    print "<td>" . $row['First_Name'] . "</td>";
    print "<td>" . $row['Last_Name'] . "</td>";
    print "<td>" . $row['Snack'] . "</td>";
    if ($row['Beverage'] == "1"){
        print "<td>" . "true" . "</td>";
    }
    else {
        print "<td>" . "false" . "</td>";
    }
    print "<td>" . $row['Country'] . "</td>";
    print "<td>" . $row['Rating'] . "/5" . "</td>";
    print "<td>" . $row['Comments'] . "</td>";
    print "</tr>";
}
print "</table>";
?>
<!doctype html>
<html>
<head>
    <title>Snack Reviews</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
<hr>
<div id="options">
<a class="btn btn-primary" data-toggle="collapse" href="#insert" role="button" aria-expanded="false" aria-controls="insert">
    Insert your Review
</a>
<a class="btn btn-primary" data-toggle="collapse" href="#delete" role="button" aria-expanded="false" aria-controls="delete">
    Delete a Review
</a>
<a class="btn btn-primary" data-toggle="collapse" href="#update" role="button" aria-expanded="false" aria-controls="delete">
    Update a review
</a>
</div>
<div class="collapse" id="update" data-parent="#options">
    <div class="card card-body">
        <form id="updateForm" action="update.php" method="post">
            <div id="updateDiv" class="d-block my-3">
                <label for="updateID">ID to Update:</label>
                <input type="text" class="form-control" name="updateID" id="updateID" placeholder="0" value="" required>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstNameUpdate">First name</label>
                    <input type="text" class="form-control" name="fName" id="firstNameUpdate" placeholder="John" value=""  required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastNameUpdate">Last name</label>
                    <input type="text" class="form-control" name="lName" id="lastNameUpdate" placeholder="Doe" value="" required>
                </div>
            </div>
            <hr>
            <div id="rating" class="d-block my-3">
                <label for="snackNameUpdate">Snack Name</label>
                <input type="text" class="form-control" name="sName" id="snackNameUpdate" placeholder="Pretzel" value="" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="bev" id="bevUpdate">
                <label class="form-check-label" for="bevUpdate">
                    Beverage
                </label>
            </div>
            <br>
            Rating
            <div id="rating" class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="1starUpdate" value="1star" name="rating" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="1starUpdate">⭐</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="2starUpdate" value="2star" name="rating" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="2starUpdate">⭐⭐</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="3starUpdate" value= "3star" name="rating" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="3starUpdate">⭐⭐⭐</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="4starUpdate" value= "4star" name="rating" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="4starUpdate">⭐⭐⭐⭐</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="5starUpdate" value= "5star" name="rating" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="5starUpdate">⭐⭐⭐⭐⭐</label>
                </div>
                <br>
                <label for="countryUpdate">County of Origin</label>
                <select class="custom-select d-block w-100" id="countryUpdate" name="country" required>
                    <option value="">Choose...</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    <option>United States</option>
                    <option>Australia</option>
                    <option>United Kingdom</option>
                    <option>Japan</option>
                </select>
            </div>
            <hr>
            <div id="prime" class="d-block my-3">
                <label for="commentsUpdate">Comments</label>
                <textarea name="comments" class="form-control" id="commentsUpdate" rows="3"></textarea>
            </div>
            <hr>
            <button id="submitUpdate" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            <button id="buttonUpdate" type="button" class="btn btn-secondary" onclick="document.getElementById('myForm').reset()">Clear</button><br><br>
        </form>
    </div>
</div>
<div class="collapse" id="delete" data-parent="#options">
    <div class="card card-body">
    <form id="deleteForm" action="delete.php" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="deleteID">Review ID to delete:</label>
                <input type="text" class="form-control" name="deleteID" id="deleteID" placeholder="0" value=""  required>
                <button id="submit" type="submit" class="btn btn-primary btn-md btn-block">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>
<div class="collapse" id="insert" data-parent="#options">
    <div class="card card-body">
    <form id="myForm" action="insert.php" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="fName" id="firstName" placeholder="John" value=""  required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lName" id="lastName" placeholder="Doe" value="" required>
            </div>
        </div>
        <hr>
        <div id="rating" class="d-block my-3">
            <label for="snackName">Snack Name</label>
            <input type="text" class="form-control" name="sName" id="snackName" placeholder="Pretzel" value="" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="bev" id="bev">
            <label class="form-check-label" for="bev">
                Beverage
            </label>
        </div>
        <br>
        Rating
        <div id="rating" class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="1star" value="1star" name="rating" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="1star">⭐</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="2star" value="2star" name="rating" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="2star">⭐⭐</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="3star" value= "3star" name="rating" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="3star">⭐⭐⭐</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="4star" value= "4star" name="rating" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="4star">⭐⭐⭐⭐</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="5star" value= "5star" name="rating" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="5star">⭐⭐⭐⭐⭐</label>
            </div>
            <br>
            <label for="country">County of Origin</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
                <option value="">Choose...</option>
                <option>Canada</option>
                <option>Mexico</option>
                <option>United States</option>
                <option>Australia</option>
                <option>United Kingdom</option>
                <option>Japan</option>
            </select>
            <div id="yearError" class="alert alert-warning" style="display:none">
                <strong>Warning!</strong> Please provide a valid country of origin.
            </div>
        </div>
        <div id="ratingError" class="alert alert-warning" style="display:none">
            <strong>Warning!</strong> Please select a rating.
        </div>

        <hr>
        <div id="prime" class="d-block my-3">
            <label for="comments">Comments</label>
            <textarea name="comments" class="form-control" id="comments" rows="3"></textarea>
        </div>
        <hr>
        <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        <button id="button" type="button" class="btn btn-secondary" onclick="document.getElementById('myForm').reset()">Clear</button><br><br>
    </form>
    </div>
</div>
<a href="../index.html" class="btn btn-link" role="button" aria-pressed="true">Home</a>
<a href="./erd.PNG" class="btn btn-link" role="button" aria-pressed="true">ERD Diagram</a>
<a href="./protection.txt" class="btn btn-link" role="button" aria-pressed="true">SQL injection protection</a>


</body>
</html>



