<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Thefacebook</title>
  <link rel="StyleSheet" href="style.css" type="text/css" title="8-bit Color Style">
  <link rel="Shortcut icon" href="images/favicon.ico">
</head>
<?php

session_start();

if (isset($_POST['submit'])){
  if (($_POST['email'] == 'demo') && ($_POST['pass'] == 'demo')){
    $_SESSION['id'] = '1';
    header('Location: profile.php?id='.'1');
  } else {
    header('Location: login.php');
  };
}

if ($_GET['logout'] == 1){
  session_unset();
  session_destroy();
}

?>
<body>
  <center>
    <table class="bordertable" width="700" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td>
            <table class="bottomborder" width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td width="350" bgcolor="#3B5998"><img src="./images/logo-left.jpg"></td>
                  <td>
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td>
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                <tr>
                                  <td bgcolor="#3B5998"><a href="index.php"><img src="./images/logo-right.jpg" border="0"></a></td>
                                  <td width="100%" bgcolor="#3B5998">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table width="100%" cellspacing="0" cellpadding="4" border="0">
                              <tbody>
                                <tr height="21">
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="login.php">login</a></td>
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="register.php">register</a></td>
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="about.php">about</a></td>
                                  <td valign="bottom" bgcolor="#3B5998">&nbsp;<a class="menu" href="faq.php">faq</a></td>
                                  <td width="100%" bgcolor="#3B5998">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table width="100%" cellspacing="0" cellpadding="2" border="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <table width="105" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td>
                            <table class="dashedtable" width="100%" cellspacing="0" cellpadding="2">
                              <tbody>
                                <tr>
                                  <td align="right">
                                    <center>
                                      &nbsp;<br><a href="index.php">[ main ]</a>
                                      <p><a href="login.php">[ login ]</a>
                                      </p>
                                      <p><a href="register.php">[ register ]</a>
                                      </p>
                                      <p>
                                      </p>
                                    </center>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td width="595" valign="top">
                    <table class="bordertable" width="100%" cellspacing="0" cellpadding="0" border="1">
                      <tbody>
                        <tr>
                          <td>


                            <script language="JavaScript" type="text/javascript">
                              if (top != self) top.location.href = self.location.href;
                            </script>


                            &nbsp;<center>
                              <p class="title">[ Login ]</p>
                              <p>
                              </p>
                              <form method="post" action="login.php">
                                <input type="hidden" name="page" value="">
                                <table cellspacing="0" cellpadding="2" border="0">
                                  <tbody>
                                    <tr>
                                      <td>Email:</td>
                                      <td><input placeholder="demo" type="text" class="inputtext" name="email" id="email" value="" size="30"></td>
                                    </tr>
                                    <tr>
                                      <td>Password:</td>
                                      <td><input placeholder="demo" type="password" class="inputtext" name="pass" id="pass" size="30"></td>
                                    </tr>
                                    <tr height="7">
                                      <td></td>
                                      <td></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <input type="submit" value="Login" class="inputsubmit" name="submit">&nbsp;&nbsp;
                                <input type="button" value="Register" class="inputsubmit" onclick="javascript:document.location='register.php';">
                              </form>
                              <p>&nbsp;<br>If you have forgotten your password, click <a href="reset.php">here</a> to reset it.<br>&nbsp;
                              </p>
                            </center>

                            <script type="text/javascript" language="JavaScript">
                              document.getElementById('email').focus()
                              if (document.getElementById('email').value) document.getElementById('pass').focus();
                            </script>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <center>
              <p><a href="about.php">about</a>&nbsp;&nbsp;
                <a href="contact.php">contact</a>&nbsp;&nbsp;
                <a href="jobs.php">jobs</a>&nbsp;&nbsp;
                <!--<a href="faq.php">faq</a>&nbsp;&nbsp;-->
                <a href="announce.php">announce</a>&nbsp;&nbsp;
                <a href="media.php">advertise</a>&nbsp;&nbsp;
                <a href="terms.php">terms</a>&nbsp;&nbsp;
                <a href="policy.php">privacy</a>&nbsp;&nbsp;<span title="ik">&nbsp;</span>&nbsp;&nbsp;
                <br>a Mark Zuckerberg production
                <br>Thefacebook <span title="7ms">??</span> <span title="">20</span><span title="361712">05</span>
                <br>
              </p>
            </center><br>
          </td>
        </tr>
      </tbody>
    </table>
  </center>
</body>

</html>
