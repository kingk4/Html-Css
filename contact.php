<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ContactUS</title>

    <style>
      .logo{
        width: 38%;
        height: 15%;
        padding-left: 30%;

    }
     form {
        /* background-color: #fff; */
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        margin: 50px auto;
        max-width: 500px;
        padding: 20px;
        
      }
      
      h1 {
        text-align: center;
        margin-top: 0;
        color: rgb(77, 75, 75);
      }
      
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color:rgb(68, 67, 67)
      }
      
      input[type="text"], select, input[type="email"] {
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        display: block;
        font-size: 16px;
        margin-bottom: 15px;
        padding: 10px;
        width: 100%;
      }
      
      select {
        appearance: none;
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 10 5'%3E%3Cpath fill='%23ccc' d='M5 5L0 0h10z'/%3E%3C/svg%3E");
        background-position: right center;
        background-repeat: no-repeat;
        background-size: 10px 5px;
        padding-right: 30px;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        padding: 10px;
        transition: background-color 0.3s ease;
        width: 100%;
      }
      
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }

      .hr{
        width: 70%;
      }
      a[href="Login.html"]:hover{
          color: blue;
      }
      .p{
        padding-right: 10%;
      }
      .P_number{
        display: flex;
      }
      .enter_num{
        padding-left: 5%;
      }
      textarea {
        width: 100%;
        height: 200px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        }

    </style>
  </head>
  <body background="images\background.jpg">

    <form method ="POST" name = "myForm" onsubmit = "return validate()">
        
      <img class="logo" src="images\logo.png"  width="300" height="300">
      <hr class="hr">

      <h1>
        Schedule a call 📞
      </h1>
      
      <label for="UserName" >UserName: </label>
      <input type="text"  name="firstname" ></input>

      
      <label for="company-size">Company Size:</label>
      <select id="company-size" name="company-size">
        <option value="">--Select--</option>
        <option value="1-10">1-10</option>
        <option value="11-50">11-50</option>
        <option value="51-100">51-100</option>
        <option value="101+">101+</option>
      </select>
      
      <label for="workemail">Work Email:</label>
      <input type="email" name="workemail" ></input>
      <label for="country">Country:</label>

    <div class="P_number" style="width:55%">
        <select id="country-code" name="country-code" >
          <option value="+1">USA (+1)</option>
          <option value="+44">UK (+44)</option>
          <option value="+61">Australia (+61)</option>
          <option value="+64">New Zealand (+64)</option>
          <option value="+91">India (+91)</option>
          <!-- Add more options for other countries as needed -->
        </select>
        &nbsp;

        <div><input id="tel" type="tel" name= "phonenumber" pattern="[0-9]{7,14}" placeholder="Enter phone number" style="height: 24%"> </div>
      </div>
      <textarea id="message" name="message" placeholder="What kinds of insights & web data do you need?*"></textarea>


      <input type="submit" value="Submit"></input>

      <label for="license">
        <input type="checkbox" id="license" name="license" >
        I have read and agree to the terms
    </form>
    
    <?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";

        // $conn = mysqli_connect($servername,$username,$password);
        // if(!$conn)
        // {
        //     die("Sorry we failed to connect: ".mysqli_connect_error());
        // }
        // else
        // {
        //     echo "Connection was successful <br>"; 
        // }
        // $sql = "create database web_development";
        // $result = mysqli_query($conn, $sql);

        // if($result)
        // {
        //     echo "The db was created successfully! <br>";
        // }
        // else
        // {
        //     echo "The db was not created successfully because of this error --->".mysqli_error($conn);
        // }
    // ?> 

    <!-- Table for Patient -->
    <?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $database = "web_development";
        // $conn = mysqli_connect($servername, $username, $password, $database);
        // if(!$conn)
        // {
        //     die("Sorry we failed to connect: ".mysqli_connect_error());
        // }
        // else
        // {
        //     echo "Connection was successfull <br>";
        // }

        // $sql = "CREATE TABLE `web_development`.`ContactUS` (
        //     `ID` INT(5) NOT NULL AUTO_INCREMENT,
        //     `username` VARCHAR(20) NULL DEFAULT NULL,
        //     `workemail` VARCHAR(32) NULL DEFAULT NULL,
        //     `Phone_num` INT(20) NULL DEFAULT NULL,
        //     PRIMARY KEY (`ID`)
        //     ) ENGINE = InnoDB";

        // $result = mysqli_query($conn, $sql);

        // if($result)
        // {
        //     echo "The table was created successfully <br>";
        // }
        // else
        // {
        //     echo "The table was not created successfully because --->".mysqli_error($conn);
        // }
        ?>

        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "web_development";

            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn)
            {
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else
            {
                echo "Connection was successful<br>";
            }
            $username = $_POST['firstname'];
            $workEmail = $_POST['workemail'];
            $phone_num = $_POST['phonenumber'];
            $sql ="INSERT INTO `ContactUS` (`username`, `workemail`, `Phone_num`) VALUES
            ('$username', '$workEmail', '$phone_num')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                echo "The record has been inserted successfully successfully!<br>";
            }
            else
            {
                echo "The record was not inserted successfully because of this error -
                --> ". mysqli_error($conn);
            }
          }
        ?>
    
  </body>
<script src="javascript.js"></script>

  
</html>