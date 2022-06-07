<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>

<body>
<div class="Page">
    <div class="Menu_header">
        <span class="v2_8">physical</span>
        <span class="v2_9">Home</span>
        <span class="v2_10">Chương trình học</span>
        <span class="v2_11">Học Phí</span>
        <span class="v2_12">Liên Hệ</span>
        <div class="Header_Button">
            <a href="{{ route('login') }}" class="v2_14">Đăng Nhập</a>
        </div>
    </div>
    <div class="Left_Area">
        <span class="v2_16">2000+ HỌC SINH CÙNG HỌC</span>
        <span class="v2_17">Tham Gia Nào !</span>
        <span class="v2_18">Chúng tôi cùng bạn khám phá Vật lý kỳ thú theo tiến độ học do bạn quyết định!</span>
        <div class="v2_19">
            <a href="{{ route('login') }}" class="v2_20">Đăng Nhập</a>
        </div>
        <div class="v2_21">
            <span class="v2_22">Liên Hệ</span>
        </div>
    </div>
    <div class="Right_Area">
        <div class="Picture"></div>
    </div>
</div>
</body>

</html>
