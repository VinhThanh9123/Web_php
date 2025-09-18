<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js.js"></script>
</head>

<body>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header với thông tin */
        .header {
            background: #2e8b57;
            color: yellow;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            background: url("https://tse2.mm.bing.net/th/id/OIP.I_Iz_2L1NpEjh0zOU1G2WgHaEK?pid=Api&P=0&h=180") no-repeat center/cover;
        }

        .header div {
            margin-right: 20px;
            font-weight: bold;
            padding: 7px;
        }

        .header .left {
            flex-wrap: wrap;
            gap: 15px;
            background-color: green;
            border-radius: 20px;
        }

        .header span {
            color: red;
        }

        /* Thanh tìm kiếm */
        .search-box {
            margin-left: auto;
            border-radius: 5px;
        }

        .search-box input {
            padding: 5px;
            border: 2px solid blue;
        }

        /* Menu ngang */
        .menu {
            background: #f0f0f0;
            text-align: center;
            padding: 10px;
            font-weight: bold;
        }

        /* .menu a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
        } */
        .menu-bar {
            background: #dada00;
            font-weight: bold;
            padding: 5px;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }

        .scroll-text {
            display: inline-block;
            padding-left: 100%;
            /* đẩy chữ ra ngoài khung ban đầu */
            animation: scroll-left 15s linear infinite;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Layout chính */
        .container {
            display: flex;
        }

        /* Menu dọc bên trái */
        .sidebar {
            width: 150px;
            background: #2e8b57;
            padding: 0;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
            border-bottom: 1px solid #ccc;
        }

        .sidebar a:hover {
            background: #006400;
        }

        /* Nội dung chính */
        .content {
            flex: 1;
            padding: 20px;
        }

        .content h2 {
            color: #333;
        }

        .content p {
            line-height: 1.6;
        }

        .menu a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
            transition: 0.3s;
            /* hiệu ứng mượt */
        }

        .menu a:hover {
            background: #2e8b57;
            /* màu nền khi hover */
            color: white;
            /* đổi màu chữ khi hover */
        }

        .menu1 {
            background: #f0f0f0;
            padding: 10px;
            font-weight: bold;
            margin-top: -15px;
        }
        .menu1 a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
            transition: 0.3s;
            background-color: orange;
            /* hiệu ứng mượt */
        }
    </style>
    </head>

    <body>

        <!-- Header -->
        <div class="header">
            <div class="left">
                <div>Họ tên: <span>Nguyễn Thành Vinh</span></div>
                <div>Khoa: <span>Công nghệ Thông tin</span></div>
                <div>Lớp: <span>CNTT</span></div>
                <div>Khóa: <span>K63</span></div>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Tìm kiếm...">
            </div>
        </div>

        <!-- Menu ngang -->
        <div class="menu">
            <a href="#" target="giaodien">Trang chủ</a>
            <a href="https://www.w3schools.com/html/default.asp" target="giaodien">HTML</a>
            <a href="#">CSS</a>
            <a href="#">PHP</a>
            <a href="#">JavaScript</a>
            <a href="#">W3Schools</a>
            <a href="#">Hocwebchuan</a>
        </div>

        <div class="menu-bar">
            <span class="scroll-text">Chào mừng bạn đến với website tìm hiểu về lập trình web</span>
        </div>

        <!-- Layout chính -->
        <div class="container">
            <!-- Menu dọc -->
            <div class="sidebar">
                <a href="bai1.php" target="baitap">Bài 1</a>
                <a href="bai2.php" target="baitap">Bài 2</a>
                <a href="bai3.php" target="baitap">Bài 3</a>
                <a href="bai4.php" target="baitap">Bài 4</a>
                <a href="bai5.php" target="baitap">Bài 5</a>
                <a href="bai6.php" target="baitap">Bài 6</a>
                <a href="bai7.php" target="baitap">Bài 7</a>
                <a href="bai8.php" target="baitap">Bài 8</a>
                <a href="bai9.php" target="baitap">Bài 9</a>
                <a href="bai10.php" target="baitap">Bài 10</a>
                <a href="bai11.php" target="baitap">Bài 11</a>
            </div>

            <!-- Nội dung chính -->
            <div class="content">
                <div class="menu1">
                    <a href="https://www.w3schools.com/cpp/default.asp">C++</a>
                    <a href="#">Giải thuật</a>
                    <a href="https://www.w3schools.com/html/default.asp">HTML</a>
                    <a href="https://www.w3schools.com/css/default.asp">CSS</a>
                    <a href="https://www.w3schools.com/js/default.asp">JavaScript</a>
                    <a href="https://www.w3schools.com/jquery/default.asp">JQuery</a>
                    <a href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp">Boostrap</a>
                    <a href="https://www.w3schools.com/php/default.asp">PHP</a>
                    <a href="https://www.w3schools.com/java/default.asp">Java</a>
                    <a href="https://www.w3schools.com/python/default.asp">Python</a>
                    <a href="https://www.w3schools.com/cs/index.php">C#</a>
                </div>
                <iframe src="welcome.php" name="baitap" style="border:none; width:100%; height:600px;"></iframe>
            </div>
        </div>

    </body>

</html>