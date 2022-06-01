<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/register.css">
    </head>
    <body>
        <!-- <script src="../javaScript/register.js"></script> -->
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>
            <div id="box">
             <h2>Registration</h2>
                <form name="form1" action="../api/register.php" method="POST"   enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob"  placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 73%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 73%">
                        Upload Passport photo: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 73%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    <div id= "newUser">
                        Already user? <a href="../">Login here</a>
                    </div>
                </form>
            </div>    
            </center>
    </body>
</html>