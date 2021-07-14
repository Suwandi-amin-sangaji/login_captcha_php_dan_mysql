<?php 
include 'koneksi.php';
if(isset($_POST['login'])){
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $secret_key = "6LfZl4EbAAAAAJpx50yPKsmCZx_jbpDaC0WfG_br";
    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
    $response = json_decode($verify);
    if($response -> success){
        if($email){
            $cek = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE email='$email' AND password='$password'");
            $assoc = mysqli_fetch_assoc($cek);
            if(mysqli_num_rows($cek) > 0 ){
                ob_start();
                session_start();
                $_SESSION['id']   = "$assoc[id]"; 
                $_SESSION['email'] = "$assoc[email]";
                header('location:admin/index.php');
            }else{
                header('location:login.php?pesan=salah');
            }
        }
    }else{
        header('location:login.php?pesan=chaptca');
    }
}

?>