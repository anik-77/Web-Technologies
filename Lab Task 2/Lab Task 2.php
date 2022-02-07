<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title></title>
<style type="text/css">
.red{
color: red;
}
</style>
</head>
<body>
<?php
//define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dateofbirthErr =$degreeErr=$bloodgroupErr= "";
$name = $email = $gender = $dateofbirth = $degree =$bloodgroup= "";if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
} if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
} if (empty($_POST["dateofbirth"])) {
$dateofbirthErr = "Cannot be Empty";
} else {
$dateofbirth = test_input($_POST["dateofbirth"]);
} if (empty($_POST["gender"])) {
$genderErr = "At least on of them must be selected";
} else {
$gender = test_input($_POST["gender"]);
} if (empty($_POST["degree"])) {
$degree ="";
} else {
$degree =test_input($_POST["degree"]);
}
if (empty($_POST["BloodGroup"])) {
$bloodgroup ="Must be selected";
} else {
$bloodgroup =test_input($_POST["bloodgroup"]);
}}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?><b>NAME</b><br>
<input type="text" name="Name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<b>EMAIL</b><br>
<input type="text" name="Email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<b>DATE OF BIRTH</b><br>
<input type="date" name="DateofBirth">
<span class="error">*<?php echo $dateofbirthErr;?></span>
<br><br>
<b>GENDER</b><br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<b>DEGREE</b><br>
<input type="checkbox" id="d1" name="degree" value="SSC">SSC
<input type="checkbox" id="d2" name="degree" value="HSC">HSC
<input type="checkbox" id="d3" name="degree" value="BSc">BSc
<input type="checkbox" id="d4" name="degree" value="MSc">MSc<br><br>
<b>BLOOD GROUP</b><br>
<select name="BloodGroup">
<option value=""></option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br><input type="submit" name="submit" value="Submit"></form>
<?phpfunction test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<?php
echo "<h1>INPUT :</h1>";
echo $Name."<br>";
echo $Email."<br>";
echo $DateofBirth."<br>";
echo $Gender."<br>";
echo $Degree."<br>";
echo $BloodGroup."<br>";
?>
</body>
</html>

