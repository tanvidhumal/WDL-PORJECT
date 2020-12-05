<?php 
    $con = new mysqli('localhost','root','','mybank');
    define('bankName', 'Dena Bank',true);
    $ar = $con->query("select * from useraccounts,branch where id = '$_SESSION[userId]' AND useraccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>