<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="../../assets/design.css">
</head>

<body>
    <div class="signup_form">
        <form action="../../controller/Signup_check.php" method="post" enctype="multipart/form-data"
            onsubmit="return CheckPass()">
            <div class="background">

                <table class="area">

                    <tr>
                        <th><button class="signup_here">SIGNUP HERE</button></th>
                    </tr>

                    <tr>

                        <td>FirstName</td>
                        <td><input type="text" id="firstname" name="firstName" value=""> <span id="message2"
                                style="color:red;font-size:20px;"> </span></td>
                    </tr>
                    <br>
                    <tr>
                        <td>LastName</td>
                        <td><input type="text" id="lastname" name="lastName" value=""><span id="message3"
                                style="color:red;font-size:20px;"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>PhoneNo.</td>
                        <td><input type="phone" id="phoneno" name="phoneno" value=""><span id="message4"
                                style="color:red;font-size:20px;"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" id="email" name="email" value=""><span id="message5"
                                style="color:red;font-size:20px;"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" id="gender" name="gender" value="Male" required> Male
                            <input type="radio" id="gender" name="gender" value="Female" required> Female

                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Address</td>
                        <td>
                            <Address><input type="address" id="address" name="address"></Address>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" id="username" name="username" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" id="txtPassword" name="password" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Confirm_Password</td>
                        <td><input type="password" id="txtConfirmPassword" name="confirmpassword" value=""></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Upload Your Picture</p>
                        </td>

                        <td><input type="file" id="pic" name="image" value=""></td>
                    </tr>
                    <br>
                    <tr>

                        <td><input class="signup_submit" id="btnSubmit" onclick=" return Validate() " type="submit"
                                name="submit" value="Register">
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><a class="link" href="../login/Login.php">Student Login</a></td>
                        <td><a class="link" href="../login/faculty_login.php">Faculty Login</a></td>
                    </tr>



                </table>
                <script>
                    $(document).ready(function () {

                        $("#txt_username").keyup(function () {

                            var username = $(this).val();
                            var usernameRegex = /^[a-zA-Z0-9]+$/;

                            if (usernameRegex.test(username) && username != '') {

                                $.ajax({
                                    url: 'ajaxfile.php',
                                    type: 'post',
                                    data: { username: username },
                                    success: function (response) {

                                        $('#uname_response').html(response);

                                    }
                                });
                            } else {
                                $("#uname_response").html("<span style='color: red;'>Enter valid username</span>");
                            }

                        });

                    });






                    function Validate() {
                        var firstname = document.getElementById("firstname").value;
                        var lastname = document.getElementById("lastname").value;
                        var phoneno = document.getElementById("phoneno").value;
                        var email = document.getElementById("email").value;
                        var password = document.getElementById("txtPassword").value;
                        var confirmPassword = document.getElementById("txtConfirmPassword").value;
                        var fileInput = document.getElementById('pic');
                        var filePath = fileInput.value;
                        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                        if (firstname == "") {
                            document.getElementById("message2").innerHTML = " <br>**Fill the firstname please!";
                            return false;
                        }
                        if (lastname == "") {
                            document.getElementById("message3").innerHTML = " <br>**Fill the lastname please!";
                            return false;
                        }
                        if (phoneno == "") {
                            document.getElementById("message4").innerHTML = " <br>**Fill the phoneno please!";
                            return false;
                        }
                        if (email == "") {
                            document.getElementById("message5").innerHTML = " <br>**Fill the email please!";
                            return false;
                        }

                        else if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        else if (!allowedExtensions.exec(filePath)) {
                            alert('Invalid file type');
                            fileInput.value = '';
                            return false;
                        }
                        else {
                            return true;
                        }


                    }






                </script>


            </div>



        </form>
    </div>
    </div>


</body>

</html>