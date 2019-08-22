<?php

session_start();
?>
<?php

session_abort();


echo "Thank You";
header("Refresh: 2; URL = index.php");
?>