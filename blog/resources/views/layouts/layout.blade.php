<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>
<div class="Page">
    <div class="NavBar">
        <div class="NavBarBackground"></div>
        <div class="UserInfo">
            <div class="Avatar"></div>
            <span class="Username">Username</span>
            <div class="UserButton" onclick="OpenUserOption()"></div>
        </div>
        <div class="Search">
            <div class="SearchBar"></div>
            <div class="SearchButton">
                <div class="SearchIcon"></div>
            </div>
        </div>
        <div class="ButtonKhoaHoc">
            <span class="ButtonKhoaHocName">Khóa học</span>
            <div class="ButtonKhoaHocIcon"></div>
        </div>
        <div class="ButtonPhongLab">
            <span class="ButtonPhongLabName">Phòng Lab</span>
        </div>
        <span class="Logo">physical</span>
        <div class="Notification" onclick="OpenNotification()"></div>

    </div>
    <!-- Khi click UserButton -->
    <div id="User_Option">
        <div class="v16_40">
            <span class="v16_41">Cài Đặt</span>
            <div class="v16_42"></div>
        </div>
        <div class="v16_43">
            <a href="{{ route('logout') }}" class="v16_44">Đăng Xuất</a>
            <div class="v16_45"></div>
        </div>
        <div class="v16_46">
            <span class="v16_47">My Profile</span>
            <div class="v16_48"></div>
        </div>
    </div>
    <!-- Khi click Notification -->
    <div id="Notification_NoiDung">
        <div class="v16_50">
            <span class="v16_51">Bạn đã hoàn thành: Bài 1: Điện Tích Điểm Khóa học Lực tương tác của điện tích </span>
            <div class="v16_52"></div>
        </div>
        <div class="v16_53">
            <div class="v16_54"></div>
            <span class="v16_55">Bạn có một bài tập đến hạn: Luyện Tập 01</span>
        </div>
        <div class="v16_56">
            <span class="v16_57">Bạn đã tham gia khóa học: Lực tương tác của điện tích điểm</span>
            <div class="v16_58"></div>
        </div>
    </div>
    <div class="WelcomeNoti">
        <span class="ThongBao">Chào mừng bạn trở lại</span>
    </div>
    <div class="StatusBar">
        <div class="Status1">Nổi Bật
            <div class="StatusIndicator"></div>
        </div>
        <div class="Status2">Đang Học</div>
        <div class="Status3">Đã Hoàn Thành</div>
    </div>
</div>
</body>

<script>
    function OpenUserOption() {
        var x = document.getElementById("User_Option");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function OpenNotification() {
        var x = document.getElementById("Notification_NoiDung");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

</html>
