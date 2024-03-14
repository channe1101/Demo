<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
    <link rel="stylesheet" href="css/dg.css">
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
                        
                            <li>
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
                    <a href="" class="login">
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
               <table class="bang">
                                <tr>
                                    <th>Mã Tài Liệu</th>
                                    <th>Tên Tài Liệu</th>
                                    <th>Hình Ảnh</th>
                                    <th>Số Lượng</th>
                                    <th>Giá Bìa</th>
                                    <th>Chức năng</th>
                                </tr>
                                 <?php
                                  
                                while ($row = mysqli_fetch_assoc($listSach)){ ?>
                                    <tr>
                                        <td><?php echo $row['matailieu'] ?></td>
                                        <td><?php echo $row['tentailieu'] ?></td>
                                        <td><?php echo "<img src='" . $row['hinhanh'] . "' alt='Ảnh' width='100' height='150'>" ?></td>
                                        <td><?php echo $row['soluong'] ?></td>
                                        <td><?php echo $row['giabia'] ?></td>
                                        <td>
                                            <div class="chucnang">
                                            <a href="#" class="btn-edit">Mượn</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }; ?>
                             
                            </table>
            </div>
            <div class="phai">
                <div class="khoi1">
                    <div class="tren">
                        <span class="material-symbols-outlined">
                            menu_book
                            </span>
                        <h1> DANH MỤC</h1>
                    </div>
                    <div class="duoi">
                        <ul>
                            <a href="">
                                <li>
                                    <span class="material-symbols-outlined">
                                        book
                                        </span>
                                    Giáo trình
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <span class="material-symbols-outlined">
                                        book
                                        </span>
                                        Luận văn, luận án.
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <span class="material-symbols-outlined">
                                        book
                                        </span>
                                        Báo-tạp chí
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <span class="material-symbols-outlined">
                                        book
                                        </span>
                                        Băng đĩa
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <span class="material-symbols-outlined">
                                        book
                                        </span>
                                    Tài liệu tham khảo
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="khoi2">
                    <div class="trai">
                        <a href="">
                            <div class="k1">
                                <span class="material-symbols-outlined">
                                    person
                                    </span>
                            </div>
                           <h1> Thông tin độc giả</h1>
                        </a>
                    </div>
                    <div class="phai">
                        <a href="">
                            <div class="k1">
                                <span class="material-symbols-outlined">
                                    history
                                    </span>
                            </div>
                            <h1>Gia hạn tài liệu</h1>
                        </a>
                    </div>
                </div>
                <div class="khoi3">
                    <div class="tren">
                        <span class="material-symbols-outlined">
                            alarm
                            </span>
                            <h1>GIỜ HOẠT ĐỘNG</h1>
                    </div>
                    <div class="duoi">
                        <div class="trai">
                            <div class="tren1">
                                <h1>
                                    Thứ 2 - Thứ 6
                                </h1>
                            </div>
                            <div class="duoi1">
                                <h1>
                                    Thứ 7
                                </h1>
                            </div>
                        </div>
                        <div class="phai">
                            <div class="tren1">
                                <p>
                                   : 7:30 - 16:30
                                </p>
                            </div>
                            <div class="duoi1">
                                <p>
                                   : 8:00 - 16:00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <form action="" method="post"></form>
        <div class="cuoi">
            <h1>TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</h1>
            <p>Địa chỉ: Đường Z115, Quyết Thắng, Thành Phố Thái Nguyên.</p>
            <p>Điện thoại: 0208.3846254</p>
            <p>Fax: 0208.3846237</p>
        </div>
    </div>
</body>
</html>