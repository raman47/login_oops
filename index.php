<?php
require_once 'core/init.php';
if(Session::exists('home')){
   echo '<p>'. Session::flash('home') .'</p>'; 
}
//echo Session::get(Config::get('session/session_name'));
$user = new User();  //current
if($user->isLoggedIn()){
   ?>
<p>Hello <a href="#"><?php echo escape($user->data()->username);?></a>!</p>
<ul>
    <li><a href="logout.php">Log Out</a></li>
</ul>
<?php    
}else{
    echo '<p> You need to <a href="login.php">log in</a> or <a href="register.php">register</a>';
}
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