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
                        <a href="index.php?task=pagethuthu">Quản lý độc giả</a>
                    </div>
                    <div class="khoi">
                        <a href="index.php?task=pagesach">Quản lý  tài liệu </a>
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
                <div >
                    <ul >
                        <a class="chon" href="index.php?task=pagethuthu">
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
                    <h3 class="center">Thêm độc giả</h3>
                    <form method="POST" action="" >
                            <div class="form-group">
                                <label for="">Mã thẻ</label>
                                <input class="form-control" type="text" name="matv" placeholder="Mã thư viện">
                            </div>
                            <div class="form-group">
                                <label for="">Họ tên</label>
                                <input class="form-control" type="text" name="hoten" placeholder="Tên người dùng">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="">Số Điện Thoại</label>
                                <input class="form-control" type="number" name="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="">Ngày Sinh</label>
                                <input class="form-control" type="text" name="ngaysinh" >
                            </div>
                            <div class="form-group">
                                <label for="">Giới Tính</label>
                                <input class="form-control" type="text" name="gioitinh" placeholder="Nhập.. ">
                            </div>
                            <div class="them"><button name="themdg" type="submit" class="them">Thêm độc giả</button></div>
                    </form>
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