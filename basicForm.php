<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php basic form test.</title>
</head>
<body>
<h1 style="text-align: center; margin-top: 10px; background-color: #ddd; padding: 10px 0 " >PHP form test</h1>



<!-- form start -->
<div style="display:flex; align-items:center; justify-content:center; padding: 10px; border: 1px solid #ddd; height: 400px; width: 400px; margin: 0 auto; " class="form-container">
    <form action="bio.php" method="POST">
        <label for="Name" >Name</label>
        <br />
        <input type="text" name="name" >
        <br />
        <label for="Gender" >Gender</label>
        <br />
        <input type="radio" name="gender" value="Men"> Men
        <input type="radio" name="gender" value="Women"> Women
        <br />
        <label for="Name" >Date of Birth</label>
        <br />
        <input type="date" name="dob" >
        <br />
        <label for="Name" >Mobile Number</label>
        <br />
        <input type="tel" name="number" >
        <br />
        <label for="Email" >Email</label>
        <br />
        <input type="email" name="email" >
        <br />
        <label for="Password" >Password</label>
        <br />
        <input type="password" name="password" >
        <br />
        <label for="Message" >Message</label>
        <br />
        <textarea name="message" rows="6" cols="40" > </textarea>
        <br />

        <div style="display: flex; margin: 5px; padding: 5px;" class="set-reset">
        <input style=" margin: 5px; padding: 5px;" type="submit" name="submit" value="Submit" >
        <br />
        <input style=" margin: 5px; padding: 5px;" type="reset" name="submit" value="Reset" >
        </div>
    </form>
    </div>
<!-- form end -->

</body>
</html>