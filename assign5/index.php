#!/usr/local/bin/php
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Florida Quiz</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<h3>Florida Quiz!</h3>
<form id="myForm" action="process.php" method="post">
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
    What is the capital of Florida?
    <div id="capital" class="d-block my-3">
        <div class="custom-control custom-radio">
            <input id="Washington D.C." name="capital" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="Washington D.C.">Washington D.C.</label>
        </div>
        <div class="custom-control custom-radio">
            <input id="Gainesville" name="capital" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="Gainesville">Gainesville</label>
        </div>
        <div class="custom-control custom-radio">
            <input id="Tallahassee" value= "tallahassee" name="capital" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="Tallahassee">Tallahassee</label>
        </div>
    </div>
    <div id="capitalError" class="alert alert-warning" style="display:none">
        <strong>Warning!</strong> Please select an answer.
    </div>
    <hr>
    Select all of the colleges in Florida?
    <div id="prime" class="d-block my-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="uf" id="UF">
            <label class="form-check-label" for="UF">
                UF
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="fsu" id="FSU">
            <label class="form-check-label" for="FSU">
                FSU
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="lsu" id="LSU">
            <label class="form-check-label" for="LSU">
                LSU
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="yale" id="Yale">
            <label class="form-check-label" for="Yale">
                Yale
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="ucf" id="UCF">
            <label class="form-check-label" for="UCF">
                UCF
            </label>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="year">What year was Florida Incorporated?</label>
            <select class="custom-select d-block w-100" id="year" name="year" required>
                <option value="">Choose...</option>
                <option>1800</option>
                <option>1801</option>
                <option>1802</option>
                <option>1803</option>
                <option>1804</option>
                <option>1805</option>
                <option>1806</option>
                <option>1807</option>
                <option>1808</option>
                <option>1809</option>
                <option>1810</option>
                <option>1811</option>
                <option>1812</option>
                <option>1813</option>
                <option>1814</option>
                <option>1815</option>
                <option>1816</option>
                <option>1817</option>
                <option>1818</option>
                <option>1819</option>
                <option>1820</option>
                <option>1821</option>
                <option>1822</option>
                <option>1823</option>
                <option>1824</option>
                <option>1825</option>
                <option>1826</option>
                <option>1827</option>
                <option>1828</option>
                <option>1829</option>
                <option>1830</option>
                <option>1831</option>
                <option>1832</option>
                <option>1833</option>
                <option>1834</option>
                <option>1835</option>
                <option>1836</option>
                <option>1837</option>
                <option>1838</option>
                <option>1839</option>
                <option>1840</option>
                <option>1841</option>
                <option>1842</option>
                <option>1843</option>
                <option>1844</option>
                <option>1845</option>
                <option>1846</option>
                <option>1847</option>
                <option>1848</option>
                <option>1849</option>
            </select>
            <div id="yearError" class="alert alert-warning" style="display:none">
                <strong>Warning!</strong> Please provide a valid state.
            </div>
        </div>
        <hr class="mb-4">
        <br>
    </div>
    <hr>
    <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    <button id="button" type="button" class="btn btn-secondary" onclick="document.getElementById('myForm').reset()">Clear</button><br><br>
</form>
<a href="../index.html" class="btn btn-link" role="button" aria-pressed="true">Home</a>
<a href="./admin.php" class="btn btn-link" role="button" aria-pressed="true">Admin</a>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>
</html>
