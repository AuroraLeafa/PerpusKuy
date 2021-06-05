<?php

//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "perpuskuy";
$conn = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($conn)); 

//FUNGSI CREATE/DAFTAR pada signup.php
function daftar($data){
    global $conn;
        $nama = stripslashes(htmlspecialchars($data["nama"])); 
        $email = htmlspecialchars($data["email"]); 
        $password = mysqli_real_escape_string($conn, $data["pwd"]); 
        $password = password_hash($password, PASSWORD_DEFAULT);
        //query insert data
        $date = time();
        $query = "INSERT INTO user VALUES 
        ('', '$nama', '$email', '$password', '', '', '', 'default.jpg', '$date')";
    
        //Cek Email 
        $cek = "SELECT email FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $cek);  
        
        if( mysqli_fetch_assoc($result) ){
            echo"<script>
                alert('Email Sudah Terdaftar!!');
                </script>";
            return false;
        }


        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

//FUNGSI DELETE pada tombol delete
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($conn);
}


//FUNGSI UPDATE(EDIT PROFILE) pada Ubah data
function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $hobi = htmlspecialchars($data["hobi"]);

    //query insert data
    $query = "UPDATE user SET
            nama = '$nama',
            email = '$email',
            alamat = '$alamat',
            nohp = '$nohp',
            hobi = '$hobi'
            WHERE id = $id;
            ";
            
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

//Query Ubah Password
function ubahpw($data){
    global $conn;
    $id = $data["id"];
    
    $cek = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $cek);
    $row = mysqli_fetch_assoc($result);
    

    $pwdbaru = mysqli_real_escape_string($conn, $data["pwd2"]);
    $pwdbaru2 = mysqli_real_escape_string($conn, $data["pwd3"]);
    if(password_verify($data["pwd"], $row["pwd"])){
        if($pwdbaru == $pwdbaru2){
            $new_pwd = mysqli_real_escape_string($conn, $data["pwd2"]);
            $new_pwd = password_hash($new_pwd, PASSWORD_DEFAULT);
            //query insert data
            $query = "UPDATE user SET
            pwd = '$new_pwd'
            WHERE id = $id;
            ";
                mysqli_query($conn, $query);
                return mysqli_affected_rows($conn);
    }  else{
        echo"<script>alert('Kata Sandi Baru dan Verifikasi tidak sama! silahkan coba lagi!');</script";
    }
}else{
    echo"<script>alert('Kata Sandi lama tidak sesuai! silahkan coba lagi!');</script";
}
}



?>