<?php
if(!isset($_SESSION)) {
     session_start();
}

if(isset($_SESSION['username'])){
?>
<script language=javascript>document.location.href="admin";</script>
<?php
}else{
?>
<script language=javascript>document.location.href="webite";</script>
<?php
}
?>
