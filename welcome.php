<?php
session_start();
echo '<center>';
echo '<font color="blue" size="7">'."welcome: ".$_SESSION['name'].'</font>';
echo '<br>';
echo '<font color="gold" size="7">'."your account is successfully created".'</font>'.'<br>';
echo '<font color="red" size="7">'."To access your account click below link:".'</font>'.'<br>';
echo '<html>'.'<a href="index.php" title="click here">Click Here</a>'.'</html>';
echo '</center>';
?>