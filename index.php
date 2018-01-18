<?php
require_once 'core/init.php';
if(Session::exists('home')){
   echo '<p>'. Session::flash('home') .'</p>'; 
}
//echo Session::get(Config::get('session/session_name'));
$user = new User();  //current
echo $user->
//$user = DB::getInstance()->query("SELECT * FROM users ");

//$user = DB::getInstance()->get('users',array('username', '=','alex'));

//if (!$user->count()){
//    echo 'NO USER';
//}else{
//    foreach ($user->results() as $row){
//        echo $user->username."<br>";
//    }
//$user = DB::getInstance()->insert('users', array(
//       'username' => 'Dale',
//       'password' => 'password',
//       'salt' => 'salt'
//   ));
//$user = DB::getInstance()->update('users',4, array(
//       'username' => 'Daly',
//       'password' => 'password2'
//      
//   ));

//if($user){
//    echo "success";
//} else {
//    echo "not inserted";
//}
//}
//echo Config::get('mysql/host');
?>
<!--You need to <a href="login.php" >Login</a> Or <a href="register.php">Register</a>-->