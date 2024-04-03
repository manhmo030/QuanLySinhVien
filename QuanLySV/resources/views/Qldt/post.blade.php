@extends('LayoutUser.index')
@section('user_content')
    <section>
        <div class="container-fluid mt-5 p-0 home">
            <div class="row">
                <div class="col-3" style="padding-right: 0px;">
                    <div class="slidebar">
                        <ul>
                            <p class="header">DANH MỤC CHÍNH</p>

                            <li><a href="{{ route('user.studyRegister.form') }}">Sinh viên đăng ký học</a></li>
                            <li><a href="StudentTimeTable.html">Kết quả đăng ký học</a></li>

                            <li><a href="StudentMark.html">Tra cứu điểm</a></li>
                            <li><a href="ChangePassWordStudent.html">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-9" style="padding-left: 0px;">
                    <div class="box_center">
                        <h4>
                            <span>Đại học chính quy
                                <a class="box_center_a" href="">Xem tất cả</a>
                            </span>
                        </h4>
                        <div class="content">
                            <div class="post">
                                <div class="post-title mt-4">[Thông tin đáng chú ý]</div>
                                @foreach ($post as $item)
                                    <div class="post-content"><a
                                            href="{{ route('user.postDetail.form', ['id' => $item->posts_id]) }}">🌻{{ $item->posts_title }}
                                            elit. </a></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
