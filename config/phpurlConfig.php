<?php
  function checkIsIndexPhp()
  {
      if(substr_count($_SERVER['REQUEST_URI'], "index.php")<1)
      {
      	echo "<script>window.location.href='../htmlndex.php'</script>";
      	return 1;
      }
      else
      {
      	return 0;
      }

  }

?>