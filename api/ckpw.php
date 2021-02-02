<?php include_once "../base.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$ck=$Mem->count(['acc'=>$acc,'pw'=>$pw]);

if($ck){
  echo 1;
}else{
  echo 0;
}


?>