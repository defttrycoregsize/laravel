@extends('client.layout.main')
@section('title','home')
@section('content')
    <!--MAIN-->
    <div id="main">
        <div class="container">
            <div class="row top">
                <div class="category-root col-lg-3 col-md-4 col-sm-3">
                    <div class="menu-rps">
                        <ul>
                            @foreach ($menuitems as $menuitem)
                            <li class="menu">
                                <a href="{{ route('course.course',['id'=>$menuitem->link]) }}" class="menu-a">
                                    <i class="{{ $menuitem->icon }}"></i> {{ $menuitem->title }}
                                </a>
                                <div class="menu-drop">
                                    <div class="menu-drop-item">
                                        @foreach($menuitem->childrend as $item)
                                        <ul>
                                            <li><a href="{{ route('course.course',['id'=>$item->link]) }}">{{ $item->title }}</a></li>
                                        </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>

                <div class="slider col-lg-9 col-md-8 col-sm-10">
                    <div class="slider-img">
                        <div><img class="img-fluid" src="media/banner.jpg" alt=""></div>
                        <div><img class="img-fluid" src="media/banner.jpg" alt=""></div>
                        <div><img class="img-fluid" src="media/banner.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <!---- TOP BÁN CHẠY -->
            <div class="row top-seller">
                <div class="title col-lg-12 col-md-12 col-sm-12">
                    <h4>TOP BÁN CHẠY</h4>
                    <a href="">
                        Xem thêm
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
            <div style="margin-top:7px;" class="row products">




                @foreach ($courses as $course)
                <div class="product-item col-lg-3 col-md-12 col-sm-12 ">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="media/banner.jpg">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">{{ $course->title }}</h3>

                                <p>{{ $course->teacher->user->full_name }}</p>


                        </div>
                        <div class="price-course"> <span class="price-a">{{ number_format($course->sale_price , 0, '', ',') }}<sup>d</sup></span> <span class="price-b">{{ number_format($course->regular_price , 0, '', ',') }}<sup>d</sup></span> </div>
                    </a>
                </div>
                @endforeach





            </div>

            <!---- END TOP BÁN CHẠY -->
            <!---SALE HÔM NAY-->
            <div style="margin-top: 60px !important;" class="row top-seller">
                <div class="title col-lg-12 col-md-12 col-sm-12">
                    <h4>SIÊU ƯU ĐÃI HÔM NAY</h4>
                    <a href="">
                        Xem thêm
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <div style="margin-top:7px;" class="row products">

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

                <div class="product-item col-lg-3 col-md-12 col-sm-12">
                    <a href="" class="course-box-slider pop" data-original-title title>
                        <div class="img-course"> <img src="">                            </div>
                        <div class="content-course">
                            <h3 class="title-cate">Tiếng Anh giao tiếp căn bản cho người Mất gốc</h3>
                            <p>Victoria Duong</p>
                        </div>
                        <div class="price-course"> <span class="price-a">99.000<sup>d</sup></span> <span class="price-b">500.000<sup>d</sup></span> </div>
                    </a>
                </div>

            </div>

            <!---END SALE HÔM NAY-->
            <!----PRODUCT_SLIDER-->
            <div class="row row-box">

                <div class="product-slider col-lg-4 col-md-6 col-sm-12">
                    <div class="box-new">
                        <h4>MỚI RA MẮT</h4> <a class="more" href="">Xem thêm <i class="fas fa-angle-double-right"></i> </a> </div>
                    <div class="product-slider-move">
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-slider col-lg-4 col-md-6 col-sm-12">
                    <div class="box-new">
                        <h4>MỚI RA MẮT</h4> <a class="more" href="">Xem thêm <i class="fas fa-angle-double-right"></i> </a> </div>
                    <div class="product-slider-move">
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-slider col-lg-4 col-md-6 col-sm-12">
                    <div class="box-new">
                        <h4>MỚI RA MẮT</h4> <a class="more" href="">Xem thêm <i class="fas fa-angle-double-right"></i> </a> </div>
                    <div class="product-slider-move">
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-inner">
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="box-img">
                                    <a href=""><img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""></a>
                                </div>
                                <div class="box-infor">
                                    <div class="box-title">
                                        <p></p>Facebook Marketing A-Z
                                        <p></p>
                                    </div>
                                    <div class="box-teacher">
                                        <p>Hồ Ngọc Cương</p>
                                    </div>
                                    <div class="box-price"> <span class="price-box-a">1.500.000<sup>đ</sup></span> <span class="price-box-b">1.000.000<sup>đ</sup></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!---------END PRODUCT_SLIDER-->
        </div>
    </div>

    <!--END MAIN-->
    <div class="banner">
        <div class="container">
            <div class="row row-top">
                <div class="banner-row col-lg-6 col-md-6 col-sm-12">
                    <img class="banner-img img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt="">
                </div>
                <div class="banner-row col-lg-6 col-md-6 col-sm-12">
                    <img class="banner-img img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt="">
                </div>
            </div>
            <div class="row row-bot">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img class="banner-img-bot img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img class="banner-img-bot img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img class="banner-img-bot img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="reason-study">
        <div class="container">
            <!----KHÓA HỌC-->
            <div class="learn-sesson">
                <h4>
                    Bạn chưa tìm thấy khóa học mình quan tâm
                    <br> Unica có hơn 1500 khóa học chờ bạn khám phá
                </h4>

                <div class="ul-top">
                    <ul>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-language"></i> Ngoại ngữ
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-chart-line"></i> Marketing
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-desktop"></i> Tin học văn phòng
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-paint-brush"></i> Thiết kế
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-rocket"></i> Kinh doanh-Khởi nghiệp
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-lightbulb"></i> Phát triển bản thân
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-shopping-cart"></i> Sales, Bán hàng
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-code"></i> Công nghệ thông tin
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-heartbeat"></i> Sức khỏe - Giới tính
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-utensils"></i> Phong cách sống
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-child"></i> Nuôi dạy con
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>
                                    <i class="fas fa-users"></i> Hôn nhân & Gia đình
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
            <!----END KHÓA HỌC-->

            <!----Lý DO HỌC ---->

            <div class="uni-rs">
                <h4>3 LÝ DO BẠN NÊN HỌC TẠI UNICA</h4>
                <div class="row rs-f">
                    <div class="reason col-lg-4 col-md-4 col-sm-4">
                        <div class="image-rs">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="txt-reason">
                            <p>GIảng viên uy tín</p>
                            <span>Bài giảng chất lượng</span>
                        </div>
                    </div>

                    <div class="reason col-lg-4 col-md-4 col-sm-4">
                        <div class="image-rs">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="txt-reason">
                            <p>GIảng viên uy tín</p>
                            <span>Bài giảng chất lượng</span>
                        </div>
                    </div>

                    <div class="reason col-lg-4 col-md-4 col-sm-4">
                        <div class="image-rs">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="txt-reason">
                            <p>GIảng viên uy tín</p>
                            <span>Bài giảng chất lượng</span>
                        </div>
                    </div>
                </div>
            </div>
            <!----EndLý DO HỌC ---->
        </div>
    </div>

    <!--Giảng viên tiêu biểu-->
    <div class="teacher">
        <div class="container">
            <div class="row row-teacher">
                <div class="top-aff-1 col-lg-4 col-md-4 col-sm-12">
                    <div class="title-top-aff">
                        <h5>TOP AFF TIÊU BIỂU</h5>
                    </div>
                    <div class="content-top-aff">
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>Pistia Affilliate</p> <span>Top Affilliate</span> </div>
                        </div>
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>Nguyễn Văn Long</p> <span>Top Affilliate</span> </div>
                        </div>
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>HN</p> <span>Top Affilliate</span> </div>
                        </div>
                    </div>
                </div>

                <div class="top-aff-2 col-lg-4 col-md-4 col-sm-12">
                    <div class="title-top-aff">
                        <h5>TOP KHÓA HỌC TIÊU BIỂU</h5>
                    </div>
                    <div class="content-top-aff">
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>Pistia Affilliate</p> <span>Top Affilliate</span> </div>
                        </div>
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>Nguyễn Văn Long</p> <span>Top Affilliate</span> </div>
                        </div>
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>HN</p> <span>Top Affilliate</span> </div>
                        </div>
                    </div>
                </div>
                <div class="top-aff-3 col-lg-4 col-md-4 col-sm-12">
                    <div class="title-top-aff">
                        <h5>TOP GIẢNG VIÊN TIÊU BIỂU</h5>
                    </div>
                    <div class="content-top-aff">
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>Pistia Affilliate</p> <span>Top Affilliate</span> </div>
                        </div>
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>Nguyễn Văn Long</p> <span>Top Affilliate</span> </div>
                        </div>
                        <div class="top-aff-inner">
                            <div class="img-top-aff"> <img class="img-fluid" src="media/477154_649557418394576_1972445697_o.jpg" alt=""> </div>
                            <div class="name-top-aff">
                                <p>HN</p> <span>Top Affilliate</span> </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-------END GIẢNG VIÊN TIÊU BIỂU-->
@endsection
