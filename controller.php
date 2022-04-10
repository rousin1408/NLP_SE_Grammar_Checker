<?php
 session_start();
 session_regenerate_id(true);
 include 'koneksi.php';

 $data = $_REQUEST;
 switch($data['aksi']){
    case 'login':
        if(isset($data['submit'])){
            $Email = $_POST['Email']; //menampung data yang dikirim dari input username
            $Password = $_POST['Password']; //menampung data yang dikirim dari input password
            $esc_email = mysqli_real_escape_string($koneksi, $Email);
            $esc_password = mysqli_real_escape_string($koneksi, $Password);
            $data=$koneksi->query("SELECT * FROM member WHERE Email='$esc_email'");
            $cek_login = mysqli_num_rows($data);
            //menghitung jumlah data yang didapat
            if($cek_login > 0){ //jika data yang ditemukan lebih dari 0
                $row = mysqli_fetch_assoc($data);
                $password = $row['Password'];
                $verify = password_verify($esc_password, $password);
                if($verify){
                 $_SESSION['id'] = $row['id'];
                 $_SESSION['Name'] = $row['Name'];
                 $_SESSION['Email'] = $row['Email'];
                 $_SESSION['Type_Account'] = $row['Type_Account'];
                 $_SESSION['status'] = "login";
                    header("location:index.php"); //berpindah ke halaman beranda
                }else{
                    header("location:login.php?pesan=password salah");
                }
            }
            else{
            header("location:login.php?pesan=gagal");
            //  alert("Gagal simpan Data");
            }
        }   
        break;

    case 'signup':
            $Name=$_POST['Name'];
            $esc_nama = mysqli_real_escape_string($koneksi, $Name);
            $Email=$_POST['Email'];
            $esc_email = mysqli_real_escape_string($koneksi, $Email);
            $Password=$_POST['Password'];
            $esc_password = mysqli_real_escape_string($koneksi, $Password);
            // $Type_Account=$_POST['Type_Account'];
            // $esc_type_account = mysqli_real_escape_string($koneksi, $Type_Accountl);
            // Hash password
            $hash_pw = password_hash($esc_password, PASSWORD_DEFAULT); 
            $sql= "INSERT INTO `member`(`Name`, `Email`, `Password`,`Type_Account`) VALUES ('$esc_nama','$esc_email','$hash_pw','GET TO PREMIUM')";
            $hasil=mysqli_query($koneksi,$sql);
            if($hasil){
                header("location: login.php?pesan1=sukses_register");
            }else{
                header("location: signup.php.php?pesan0=gagal_register");
            }
        break;
    case 'logout':
        unset($_SESSION['status']);
        session_unset();
        session_destroy();
        // $_SESSION['status'] = "berhasil logout";
        header("location:login.php");
        break;
   


    default:
    echo 'Error';
}
?>