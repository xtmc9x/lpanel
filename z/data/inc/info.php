<?php
//////////////////////////////////////////////////////
//			Gmanager mod by Tmc
//			File này lưu trử thông tin đăng nhập
//			Sửa cận thận
//			Mật khẩu phải mã hoá md5 2 lần trước khi viết vào
//////////////////////////////////////////////////////
//Phần thông tin đăng nhập
$setadmin = "Tmc";
//Mật khẩu được mã hoá
$setpass = "14e1b600b1fd579f47433b88e8d85291";
//số dòng chỉnh sửa
$setdong = "50";
//Công cụ sửa văn bản
$setedit = "d";
//Giao diện
$setstyle = "cam.css";
//Email Admin
$setmail = "mailcuaban@domain.com";
//Câu hỏi bí mật
$setcauhoibimat = "";
$setch1 = "Câu hỏi bí mật 1?";$setch2 = "Câu hỏi bí mật 2?";
$setda1 = "";$setda2 = "";
//Thời gian chặn một truy cập nguy hiểm
$setthoigianban = "30";
//Phương thức đăng nhập
$settype = "0";
//Chặn index trang
$setxacnhannham = "ok";
//Tắt thông báo lỗi
$settatloi = "ok";
//Ngôn ngữ
$setngonngu = "vi.php";
//Chặn boot index
$setgoogle = "ok";
//Thời gian thực thi sửa văn bản
setcookie("edit",$setedit,time()+24*365*3600);
setcookie("ngonngu",$setngonngu,time()+24*365*3600);
//Tmc - fb.com/xtmc9x
