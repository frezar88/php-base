<?php
# htmlspecialchars - нужен что бы стрипт не выполнялся, а просто показывался
echo htmlspecialchars($_POST['msg']);
//echo $_POST['msg'];