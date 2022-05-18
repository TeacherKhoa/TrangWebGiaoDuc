@extends('layouts.app')
@section('link')
    <link href="{{ asset('css/update-user.css') }}" rel="stylesheet">
@section('content')
<div class="Page">
    <span class="v2_1014">Thông Tin Tài Khoản Mới</span>
    <div class="Divider"></div>
    <form method="post" action="{{ route('post_update_user') }}">
        @csrf
        <button class="Submit_Button">Hoàn Thành</button>
        <div class="Top_Gray">
            <div class="v2_1053"></div>
            <span class="v2_1054">Thông tin cá nhân</span>
            <span class="v23_4">Tối đa 10 ký tự</span>
            <span class="v2_1056">Họ</span>
            <input type="text" required name="lastname" class="Input_Ho"></input>
            <span class="v23_3">Tên Hiển Thị:</span>
            <input type="text" required name="firstname" class="Input_Ten"></input>
            {{--            <span class="v2_1057">Ảnh đại diện</span>--}}
            {{--            <input type="file" class="Input_Photo d-none"></input>--}}
        </div>
        <div class="Bottom_Gray">
            <div class="v2_1060"></div>
            <span class="v2_1061">Bạn đang là Học Sinh:</span>
            <span class="v2_1070">Lớp:</span>
            <input type="text" required name="class" class="v2_1069"></input>
            <span class="v2_1064">Trường:</span>
            <input type="text" required name="school" class="v2_1063"></input>
            <span class="v2_1074">Sở trường:</span>
            <input type="text" required name="forte" class="v2_1073"></input>
            <span class="v2_1067">Tỉnh/TP:</span>
            <input type="text" required name="province" class="v2_1066"></input>
        </div>
        <div class="BangCauHoi">
            <div class="v2_1018">
                <div class="v2_1019"></div>
                <span class="v2_1020">Giúp chúng tôi gợi ý khóa học bạn cần</span>
            </div>
            <div class="CauHoi_1">
                <span class="v2_1045">1. Bạn thích khóa học loại nào hơn?</span>
                <span class="v2_1046">Bài Học</span>
                <span class="v2_1047">Luyện Tập</span>
                <span class="v2_1048">Kiểm Tra</span>
                <div class="v2_1049"></div>
                <div class="v2_1050"></div>
                <div class="v2_1051"></div>
            </div>
            <div class="v2_1021">
                <span class="v2_1022">2. Đánh giá mức độ hiện tại của bạn ở các chủ đề sau:</span>
                <span class="v2_1023">Điện Trường</span>
                <div class="v2_1038">
                    <div class="v2_1039"></div>
                    <div class="v2_1040"></div>
                    <div class="v2_1041"></div>
                    <div class="v2_1042"></div>
                    <div class="v2_1043"></div>
                </div>
                <span class="v2_1024">Dòng Điện</span>
                <div class="v2_1032">
                    <div class="v2_1033"></div>
                    <div class="v2_1034"></div>
                    <div class="v2_1035"></div>
                    <div class="v2_1036"></div>
                    <div class="v2_1037"></div>
                </div>
                <span class="v2_1025">Sóng Điện Từ</span>
                <div class="v2_1026">
                    <div class="v2_1027"></div>
                    <div class="v2_1028"></div>
                    <div class="v2_1029"></div>
                    <div class="v2_1030"></div>
                    <div class="v2_1031"></div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
