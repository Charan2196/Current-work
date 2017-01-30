$count=$dbo->prepare("select password,username from users where userid=:username");
$count->bindParam(":userid",$userid,PDO::PARAM_STR);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
if($row->password==md5($password)){
echo " Inside ";
// Start session n redirect to last page
$_SESSION['id']=session_id();
$_SESSION['userid']=$row->userid;
$_SESSION['mem_id']=$row->mem_id;
//echo " Inside session  ". $_SESSION['userid'];
$msg=" welcome $_SESSION[userid] loging successfully , please wait ... ";
echo $msg;
echo "<script language='JavaScript' type='text/JavaScript'>
<!--
window.location='welcome.php';
//-->
</script>
";

}else{
$msg = " Login failed, tray again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
}
echo $msg;