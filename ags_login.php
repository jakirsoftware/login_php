<?php session_start(); /* Starts the session */
    
    /* Check Login form submitted */    
    if(isset($_POST['Submit'])){
        /* Define username and associated password array */
        $logins = array('ags' => 'username');
        
        /* Check and assign submitted Username and Password to new variable */
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';

            $_SESSION['UserData']['Username']=$logins[$Username];
            header("location:ags_index.php");
            exit;
        } else {
            /*Unsuccessful attempt: Set error message */
            $msg="<span style='color:red'>Please</span>";
        }    
?>









<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Js-iT</title>

    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link href="mdb.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        #background {
            background-color: #F9A825;
        }

        .poppins {
          font-family: 'Poppins', sans-serif;
        }

    </style>

</head>

<body class="poppins" id="background">

    <div>
        <div style="margin-top: 54px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form method="post" class="bg-white rounded-5 shadow-5-strong p-5">



                           

                        



<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="center" valign="top"><h3>Enter Code</h3></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="Username" type="text" class="Input"></td>
    </tr>

    <tr>
      
      <td colspan="2" align="center"><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>



<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
  

        <tr>        
      <td colspan="2" align="center"><a href="tel:+8801631590346">Call: 01631590346</a></td>
    </tr>
    <tr>      
      <td colspan="2" align="center"><a href="https://api.whatsapp.com/send?phone=+8801631590346">Chat: Whatsapp</a></td>
    </tr>


  </table>














                            <br>
                            <div align="center">
                                Copyright © 2022 <a href="https://js-it.tk" target="_blank">Js-iT</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

</body>

</html>