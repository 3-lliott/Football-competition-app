<?php
if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $school = $_POST['school'];
    $level = $_POST['level'];
    $weight = $_POST['weight'];

    $message = "";
    $class = "";

    if (strtolower($school) == 'school of computing') {

        if ($level == 100 && $weight <= 60) {
            $message = "Qualified to play";
            $class = "success";
        }
        else if ($level == 200 && $weight <= 80) {
            $message = "Qualified to play";
            $class = "success";
        }
        else if ($level == 300 && $weight <= 90) {
            $message = "Qualified to play";
            $class = "success";
        }
        else if ($level == 400 && $weight <= 100) {
            $message = "Qualified to play";
            $class = "success";
        }
        else {
            $message = "Not qualified";
            $class = "fail";
        }

    } 
    else {
        $message = "You aren't in BUCC";
        $class = "fail";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Football Qualification</title>

<style>

body{
    font-family: Arial;
    background: linear-gradient(to right,#4e54c8,#8f94fb);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    background:white;
    padding:30px;
    border-radius:10px;
    text-align:center;
    width:400px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.success{
    color:green;
    font-size:28px;
}

.fail{
    color:red;
    font-size:28px;
}

.info{
    margin-top:15px;
    font-size:18px;
}

button{
    margin-top:20px;
    padding:10px 20px;
    border:none;
    background:#4e54c8;
    color:white;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#353ab3;
}

</style>
</head>

<body>

<div class="card">

<h1>BUCC Player Card</h1>

<h2 class="<?php echo $class; ?>">
<?php echo $message; ?>
</h2>

<div class="info">
<p><b>Name:</b> <?php echo $fullname; ?></p>
<p><b>Level:</b> <?php echo $level; ?></p>
<p><b>Weight:</b> <?php echo $weight; ?> kg</p>
</div>
</div>

</body>
</html>
