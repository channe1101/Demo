<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
    <link rel="stylesheet" href="css/thuthu.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="tong">
        <div class="chinh">
            <div class="tren">
                <div class="trai">
                    <ul>
                            <li class="li">
                                <span class="material-symbols-outlined">
                                    call
                                    </span>
                                0978868688
                            </li>                        
                            <li>
                                <span class="material-symbols-outlined">
                                    mail
                                </span>
                                ictu@gmail.com
                            </li>
                    </ul>
                    <a href="index.php?task=pagehome" class="logo">
                        <img src="image/hi.png" alt="Cổng thông tin thư viện" class="anhlogo">
                        <h1> ICTU
                        </h1>
                        <p>THƯ VIỆN</p>
                    </a>  
                </div>
                <div class="phai">
                    <img src="image/truong.webp" alt="" class="anh1">
                    <img src="image/truong2.jpg" alt="" class="anh2">
                </div>
                <ul>
                    <a href="index.php?task=pagelogin" class="login">
                        <li>
                            Đăng xuất
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="duoi">
                    <ul>
                        <a href="index.php?task=pagehome" class="home">
                            <li>
                                    <span class="material-symbols-outlined">
                                        home
                                        </span>
                                    Trang chủ
                            </li>
                        </a>
                        <a href="index.php?task=pagegt">
                            <li>
                                    Giới thiệu
                            </li>
                        </a>
                        <a href="index.php?task=pageqtms">
                            <li>
                                Quy trình mượn sách
                            </li>
                        </a>
                        <a href="index.php?task=pagenq">
                            <li>
                                Nội quy
                            </li>
                        </a>
                    </ul>
            </div>
        </div>
        <div class="phu">
            <div class="trai">
                <div class="tren">
                    <h1>Thủ thư</h1>
                </div>
                <div class="duoi">
                    <div class="khoi">
                        <a href="">Quản lý độc giả</a>
                    </div>
                    <div class="khoi">
                        <a href="">Quản lý  tài liệu </a>
                    </div>
                    <div class="khoi">
                        <a href="">Quản lý phiếu mượn</a>
                    </div>
                    <div class="khoi">
                        <a href="">Thống kê</a>
                    </div>
                </div>
            </div>
            <div class="phai">
                <div class="phai1">
                    <ul >
                        <a class="chon" href="index.php?task=pageqthuthu">
                            <li>
                                Danh sách độc giả
                            </li>
                        </a>
                        <a class="chon" href="index.php?task=pagethemdg">
                            <li>
                                Thêm độc giả
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="content">
                <div class="danhsach"> 
                        <h3 class="center">Danh sách độc giả</h3>
                        <div class="center">
                            <table class="bang">
                                <tr>
                                    <th>Mã Sinh viên</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Ngày Sinh</th>
                                    <th>Số điện thoại</th>
                                    <th>Chức năng</th>
                                </tr>
                                 <?php
                                 
                                while ($row = mysqli_fetch_assoc($listUser)){ ?>
                                    <tr>
                                        <td><?php echo $row['matv'] ?></td>
                                        <td><?php echo $row['hoten'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['ngaysinh'] ?></td>
                                        <td><?php echo $row['sdt'] ?></td>
                                        <td>
                                            <a href="#" class="btn-edit">Sửa</a>
                                            <a href="#" class="btn-delete">Xóa</a>
                                        </td>
                                    </tr>
                                <?php }; ?>
                             
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="cuoi">
            <h1>TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</h1>
            <p>Địa chỉ: Đường Z115, Quyết Thắng, Thành Phố Thái Nguyên.</p>
            <p>Điện thoại: 0208.3846254</p>
            <p>Fax: 0208.3846237</p>
        </div>
    </div>
</body>
</html>