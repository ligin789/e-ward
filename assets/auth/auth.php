<?php
        include '../assets/include/dbcon.php';
        //check houseno exisit
        if(isset($_POST['houseNo']))
        {
            extract($_POST);
            $chk = "SELECT * FROM registration WHERE houseno='$houseno'";
            $res = mysqli_query($conn, $chk);
            if(mysqli_num_rows($res)>0)
            {
                 // Toast should appear
                 echo '<div class="alertt alert-visible">
                 <div class="content">
                     <img src="./assets/images/warning.svg" alt="warning">
                     <div class="text">
                         House already registered
                     </div>
                 </div>
                 <img src="./assets/images/close.svg" alt="close" class="alert-close">
             </div>';
            }
        }
        
        if(isset($_POST["regbtn"])){
            $name=$_POST["fname"];
            $email=$_POST["email"];
            $phno=$_POST["phno"];
            $wardno=$_POST["wrdno"];
            $houseno=$_POST["houno"];
            $rationno=$_POST["rano"];
            $chk = "SELECT * FROM registration WHERE houseno='$houseno'";
            $res = mysqli_query($conn, $chk);
            if(mysqli_num_rows($res) > 0){
                // Toast should appear
                echo '<div class="alertt alert-visible">
                    <div class="content">
                        <img src="./assets/images/warning.svg" alt="warning">
                        <div class="text">
                            House already registered
                        </div>
                    </div>
                    <img src="./assets/images/close.svg" alt="close" class="alert-close">
                </div>';
              }else{
                $ins="INSERT INTO `registration`(`fname`, `email`, `phno`, `wardno`, `houseno`, `rationno`, `status`) VALUES ('$name','$email',' $phno','$wardno',' $houseno',' $rationno','0')";
                mysqli_query($conn,$ins);
              }
        }
    ?>