<?php
    //Một số kỹ thuận validate form được xử lý  ở Js
    //tôi coi các vấn đề không tồn tại ở đây
    if(!isset($_POST['btnSignup'])) {
        header("location:SignUp.php"); 
    }

    //toi coi moi du lieu la hop le
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPass'];


    //Mục tiêu: Chèn bản ghi đăng ký TK vào CSDL nhưng phải ktra nó tồn tại ko đã
    //Bước 1: Kết nối Database Server
    $conn = mysqli_connect('localhost' , 'root', '', 'linkedin_61thnb');
    if(!$conn){
        die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
        }
    //Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * from db_nguoidung where email = '$email' ";
    //ở đây còn có các vấn đề về tính hợp lệ dl nhập vào form

    $result = mysqli_query($conn,$sql01);

    if(mysqli_num_rows($result) > 0){
        $error = "Email is existed";
        header("location: SignUp.php?error=$error"); //Chuyển hướng về trang quản trị
    }
    else{
        $sql02 = "INSERT INTO db_nguoidung(account,email,matkhau) values ('$user','$email', '$pass') ";
        mysqli_set_charset($conn,"utf8");
        $result02 = mysqli_query($conn,$sql02);
        if($result02 == TRUE){
            header("location: login.php");
        }
        else{
        $error = "Can not Insert record. Please check!";
        header("location: signup.php?error=$error"); //Chuyển hướng về trang quản trị
        }
    }
    //Buoc 03: Đóng kết nối
    mysqli_close($conn);
?>