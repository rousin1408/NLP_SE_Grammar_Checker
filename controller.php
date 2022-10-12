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
            echo "<script>alert('Pesan Sukses Terkirim');</script>"; 
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
                header("location: signup.php?pesan0=gagal_register");
            }
        break;
        case 'contact':
            $Nama=$_POST['Nama'];
            $esc_nama = mysqli_real_escape_string($koneksi, $Nama);
            $Email=$_POST['Email'];
            $esc_email = mysqli_real_escape_string($koneksi, $Email);
            $Nomor_Telepon = $_POST['Nomor_Telepon'];
            $esc_Nomor_Telepon = mysqli_real_escape_string($koneksi, $Nomor_Telepon);
            $Pesan=$_POST['Pesan'];
            $esc_Pesan = mysqli_real_escape_string($koneksi, $Pesan);
            $sql= "INSERT INTO `contact`(`Nama`, `Email`, `Nomor_Telepon`,`Pesan`) VALUES ('$esc_nama','$esc_email','$esc_Nomor_Telepon','$esc_Pesan')";
            $hasil=mysqli_query($koneksi,$sql);
            if($hasil){
                header("location: index.php?pesan1=sukses_terkirim");
                // alert("Pesan sukses terkirim");
                
            }else{
                header("location: index.php?pesan0=gagal_terkirim");
            }
        break;
    case 'logout':
        unset($_SESSION['status']);
        session_unset();
        session_destroy();
        // $_SESSION['status'] = "berhasil logout";
        header("location:login.php");
        break;
    case 'Update':
        session_start();
        $id = $_GET['id'];
        // $Name = $_POST['Name'];
        // $Email = $_POST['Email'];
        // $Password = $_POST['Password'];
        $Type_Account="PREMIUM";
        
        // Escape
        $esc_id = mysqli_real_escape_string($koneksi, $id);
        // $esc_nama = mysqli_real_escape_string($koneksi, $Name);
        // $esc_email = mysqli_real_escape_string($koneksi, $Email);
        $esc_type_account = mysqli_real_escape_string($koneksi,  $Type_Account);
        // Hash PW
        // $hash_pw = password_hash($esc_password, PASSWORD_DEFAULT);
        
        $query = "UPDATE member SET Type_Account = '$esc_type_account' WHERE id = '$esc_id'";
        // echo "$esc_type_account";

        $exec = mysqli_query($koneksi, $query);

        if($exec){
            $_SESSION['Type_Account']=$esc_type_account;
            header("location: index.php?pesan=sukses_bayar");
        }else{
            header("location: index.php?pesan=gagal_bayar");
        }
        break;   
    default:
    echo 'Error';
}
?>