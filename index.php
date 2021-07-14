
<!DOCTYPE html>
<html>
	<head>
<title>Bất động sản Đại Dương  -  Quản lý site  -  Rao vặt</title>
<meta name="description" content="Quản lý tin">
<meta name="viewport" content="width=device-width">
<meta name="author" content="Bất động sản Đại Dương [contact@batdongsandaiduong.com] ">
<meta name="generator" content="Bất động sản Đại Dương">
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="/uploads/favicon.png">
<link rel="preload" as="script" href="/assets/js/jquery/jquery.min.js?t=376">
<link rel="preload" as="script" href="/assets/js/language/vi.js?t=376">
<link rel="preload" as="script" href="/assets/js/global.js?t=376">
<link rel="preload" as="script" href="/assets/js/admin.js?t=376">
<link rel="preload" as="script" href="/modules/raovat/js/admin.js?t=376">
<link rel="preload" as="script" href="/themes/default/js/bootstrap.min.js?t=376">
<link rel="preload" as="script" href="/themes/admin_default/js/main.js?t=376">
<link rel="preload" as="script" href="/themes/admin_default/js/notification.js?t=376">
<link rel="preload" as="script" href="/assets/js/jquery/jquery.timeago.js?t=376">
<link rel="preload" as="script" href="/assets/js/language/jquery.timeago-vi.js?t=376">
<link rel="preload" as="script" href="/assets/js/jquery/jquery.slimscroll.min.js?t=376">
<link rel="stylesheet" href="/themes/default/css/bootstrap.min.css?t=376">
<link rel="stylesheet" href="/assets/css/font-awesome.min.css?t=376">
<link rel="stylesheet" href="/themes/admin_default/css/style.css?t=376">
<link rel="stylesheet" href="/themes/admin_default/css/raovat.css?t=376" type="text/css">
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<![endif]-->
	</head>
	<body>
<div class="container-fluid nvwrap">
	<div id="left-menu-bg"></div>
	<header id="header" class="row">
		<div class="logo">
			<a title="Bất động sản Đại Dương" href="/admin/index.php?language=vi">
				<img class="logo-md" alt="Bất động sản Đại Dương" src="/themes/admin_default/images/logo_small.png" width="189" height="49"/>
				<img class="logo-xs" alt="Bất động sản Đại Dương" src="/themes/admin_default/images/logo-xs.png" width="50" height="50"/>
			</a>
		</div>
		<ul class="menu pull-right">
			<li class="tip" data-toggle="tooltip" data-placement="bottom" title="Trang chủ site">
				<a href="/"> <em class="fa fa-home fa-2x fix">&nbsp;</em></a>
			</li>
			<li class="tip admin-info" data-toggle="tooltip" data-placement="bottom" title="Tài khoản Quản trị: admin01 ! Bạn đã đăng nhập Quản trị cách đây 44 phút 14 giây">
				<a href="/users/">
					<img src="/themes/default/images/users/no_avatar.png" alt="admin01" width="32" height="32" class="bg-gainsboro"/>
				</a>
			</li>
						<li class="dropdown" id="notification-area">
				<span id="notification" style="display: none"></span>
				<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> <em class="fa fa-bell-o fa-2x fix">&nbsp;</em></a>
				<div class="dropdown-menu">
                    <div>
    					<div id="notification_load"></div>
                        <div id="notification_waiting">
                            <div class="text-center">
                                <i class="fa fa-spin fa-spinner"></i>
                            </div>
                        </div>
                        <div id="notification_more">
                            <div class="text-center">
                                <a href="/admin/index.php?language=vi&amp;nv=siteinfo&amp;op=notification">Xem tất cả</a>
                            </div>
                        </div>
                    </div>
				</div>
			</li>
			<li class="tip" data-toggle="tooltip" data-placement="bottom" title="Thoát khỏi tài khoản Quản trị">
				<a href="javascript:void(0);" onclick="nv_admin_logout();"> <em class="fa fa-power-off fa-2x fix logout">&nbsp;</em></a>
			</li>
		</ul>
	</header>
	<div class="row">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-horizontal">
						<span class="sr-only">&nbsp;</span>
						<span class="icon-bar">&nbsp;</span>
						<span class="icon-bar">&nbsp;</span>
						<span class="icon-bar">&nbsp;</span>
					</button>
					<button id="left-menu-toggle" type="button" class="navbar-toggle" data-target="#left-menu">
						<span class="sr-only">&nbsp;</span>
						<span class="icon-bar">&nbsp;</span>
						<span class="icon-bar">&nbsp;</span>
						<span class="icon-bar">&nbsp;</span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="menu-horizontal">
					<ul class="nav navbar-nav">
						<li class="hidden-md hidden-sm hidden-xs">
							<a title="Trang nhất" href="/admin/index.php?language=vi"><em class="fa fa-lg fa-home">&nbsp;</em> Trang nhất</a>
						</li>
												<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=siteinfo">Thông tin <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=siteinfo&amp;op=logs" title="Nhật ký hệ thống">Nhật ký hệ thống</a></li>
							</ul>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=settings">Cấu hình <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=settings&amp;op=main" title="Cấu hình site">Cấu hình site</a></li><li><a href="/admin/index.php?language=vi&amp;nv=settings&amp;op=language" title="Ngôn ngữ">Ngôn ngữ</a></li><li><a href="/admin/index.php?language=vi&amp;nv=settings&amp;op=smtp" title="Cấu hình SMTP">Cấu hình SMTP</a></li>
							</ul>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=webtools">Công cụ web <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=webtools&amp;op=statistics" title="Cấu hình thống kê">Cấu hình thống kê</a></li><li><a href="/admin/index.php?language=vi&amp;nv=webtools&amp;op=clearsystem" title="Dọn dẹp hệ thống">Dọn dẹp hệ thống</a></li><li><a href="/admin/index.php?language=vi&amp;nv=webtools&amp;op=checkupdate" title="Kiểm tra phiên bản">Kiểm tra phiên bản</a></li><li><a href="/admin/index.php?language=vi&amp;nv=webtools&amp;op=config" title="Cấu hình kiểm tra phiên bản">Cấu hình kiểm tra phiên bản</a></li>
							</ul>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=seotools">Công cụ SEO <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=seotools&amp;op=googleplus" title="Xác thực Google+">Xác thực Google+</a></li>
							</ul>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=modules">Quản lý Modules <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=modules&amp;op=setup" title="Thiết lập module mới">Thiết lập module mới</a></li><li><a href="/admin/index.php?language=vi&amp;nv=modules&amp;op=vmodule" title="Thêm module ảo">Thêm module ảo</a></li>
							</ul>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=themes">Quản lý giao diện <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=themes&amp;op=config" title="Thiết lập giao diện">Thiết lập giao diện</a></li><li><a href="/admin/index.php?language=vi&amp;nv=themes&amp;op=setuplayout" title="Thiết lập layout">Thiết lập layout</a></li><li><a href="/admin/index.php?language=vi&amp;nv=themes&amp;op=blocks" title="Quản lý block">Quản lý block</a></li><li><a href="/admin/index.php?language=vi&amp;nv=themes&amp;op=xcopyblock" title="Sao chép block">Sao chép block</a></li>
							</ul>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=upload">Quản lý File <strong class="caret">&nbsp;</strong></a>
														<ul class="dropdown-menu">
								<li><a href="/admin/index.php?language=vi&amp;nv=upload&amp;op=thumbconfig" title="Cấu hình ảnh thumbnail">Cấu hình ảnh thumbnail</a></li><li><a href="/admin/index.php?language=vi&amp;nv=upload&amp;op=config" title="Cấu hình chèn logo">Cấu hình chèn logo</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section id="middle" class="row">
		<aside id="left-menu">
			<div id="bg-left-menu" style="padding-right: 20px;padding-left: 4px;width: 200px;">
				<ul class="nav nav-pills nav-stacked text-color">
											<li >
							<a href="/admin/index.php?language=vi&amp;nv=raovat">Rao vặt</a>
							<span class="arrow">&nbsp;</span>
						</li>
												<li >
							<a class="subactive" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=main">Quản lý tin</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=content">Đăng tin mới</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=temp">Tin chờ duyệt</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=object">Danh mục đăng tin</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=direction">Hướng BĐS</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=legal">Loại pháp lý</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=type">Loại tin</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=prounit">Đơn vị rao vặt</a>
						</li>
						<li >
							<a class="subcurrent" href="/admin/index.php?language=vi&amp;nv=raovat&amp;op=config">Cấu hình</a>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=wallet">Ví tiền</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=transaction">Quản lí giao dịch</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=add_transaction">Tạo giao dịch</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=order-list">Quản lý đơn hàng</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=exchange">Quản lý tỷ giá</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=historyexchange">Lịch sử tỉ giá</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=money">Quản lý tiền tệ</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=payport">Cổng thanh toán</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=config">Cấu hình</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=statistics">Thống kê</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=permission">Thiết lập quyền hạn</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=wallet&amp;op=ipn-logs">Nhật ký IPN</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=news">Tin tức</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=content">Thêm bài viết</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=cat">Quản lý chuyên mục</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=tags">Quản lý Tags</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=groups">Các nhóm tin</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=topics">Theo dòng sự kiện</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=sources">Nguồn tin</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=admins">Phân quyền quản lý</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=news&amp;op=setting">Cấu hình module</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=page">Ký gửi</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=page&amp;op=content">Thêm bài mới</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=page&amp;op=config">Cấu hình</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=users">Tài khoản</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=user_add">Thêm tài khoản mới</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=user_waiting">Tài khoản đợi kích hoạt</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=groups">Nhóm thành viên</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=authors">Quản trị</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=question">Câu hỏi bảo mật</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=siteterms">Quy định đăng ký</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=users&amp;op=config">Cấu hình module</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=vip">Giới thiệu</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=vip&amp;op=content">Thêm bài mới</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=vip&amp;op=config">Cấu hình</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=contact">Liên hệ</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=contact&amp;op=department">Các bộ phận</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=contact&amp;op=supporter">Nhân viên hỗ trợ</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=contact&amp;op=send">Gửi phản hồi</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=contact&amp;op=config">Cấu hình module</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=statistics">Thống kê</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=statistics&amp;op=allbots">Máy chủ tìm kiếm</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=statistics&amp;op=allbrowsers">Trình duyệt</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=statistics&amp;op=allcountries">Quốc gia</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=statistics&amp;op=allos">Hệ điều hành</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=statistics&amp;op=allreferers">Đường dẫn đến site</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=banners">Quảng cáo</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=banners&amp;op=plans_list">Khối quảng cáo</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=banners&amp;op=add_plan">Thêm Khối</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=banners&amp;op=banners_list">Quảng cáo</a>
								</li>
								<li>
									<a href="/admin/index.php?language=vi&amp;nv=banners&amp;op=add_banner">Thêm quảng cáo</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=menu">Menu Site</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=menu&amp;op=menu">Thêm khối menu</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li >
							<a href="/admin/index.php?language=vi&amp;nv=feeds">RSS-feeds</a>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=comment">Quản lý bình luận</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=comment&amp;op=config">Cấu hình</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
						<li  class="dropdown">
							<a href="/admin/index.php?language=vi&amp;nv=location">Địa điểm</a>
														<ul class="dropdown-menu">
																<li>
									<a href="/admin/index.php?language=vi&amp;nv=location&amp;op=config">config</a>
								</li>
							</ul>
							<span class="arrow">&nbsp;</span>
						</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
		</aside>
		<div id="container" class="clearfix">
			<div id="info_tab" class="clearfix">
								<ol class="breadcrumb">
										<li class="active">Quản lý tin</li>
				</ol>
				<ul class="pull-right list-inline btncontrol">
										<li><a target="_blank" href="/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Xem ngoài site"><em class="fa fa-globe fa-lg">&nbsp;</em></a></li>
				</ul>
			</div>
			<div id="contentmod">
				    <form class="form-inline" action="/admin/index.php" method="get">
	<br />
	<input type="hidden" name="nv" value="raovat" />
	<input type="hidden" name="op" value="main" />
	<label>Chuyên mục đăng tin: </label>
	<select class="form-control" name="catid">
        <option value="0">---</option>
				<option value="17"  >Nhà đất bán</option>
		<option value="18"  >Nhà đất cho thuê</option>
	</select>
	<label>Tìm kiếm theo: </label>
	<select class="form-control" name="stype">
				<option value="-"  selected="selected" >---</option>
		<option value="code"  >Mã tin</option>
		<option value="title"  >Tiêu đề</option>
		<option value="content"  >Nội dung</option>
	</select>
	<label>Số tin hiển thị: </label>
	<select class="form-control" name="per_page">
				<option value="5"  >5</option>
		<option value="10"  >10</option>
		<option value="15"  >15</option>
		<option value="20"  >20</option>
		<option value="25"  >25</option>
		<option value="30"  selected="selected" >30</option>
		<option value="35"  >35</option>
		<option value="40"  >40</option>
		<option value="45"  >45</option>
		<option value="50"  >50</option>
		<option value="55"  >55</option>
		<option value="60"  >60</option>
		<option value="65"  >65</option>
		<option value="70"  >70</option>
		<option value="75"  >75</option>
		<option value="80"  >80</option>
		<option value="85"  >85</option>
		<option value="90"  >90</option>
		<option value="95"  >95</option>
		<option value="100"  >100</option>
		<option value="105"  >105</option>
		<option value="110"  >110</option>
		<option value="115"  >115</option>
		<option value="120"  >120</option>
		<option value="125"  >125</option>
		<option value="130"  >130</option>
		<option value="135"  >135</option>
		<option value="140"  >140</option>
		<option value="145"  >145</option>
		<option value="150"  >150</option>
		<option value="155"  >155</option>
		<option value="160"  >160</option>
		<option value="165"  >165</option>
		<option value="170"  >170</option>
		<option value="175"  >175</option>
		<option value="180"  >180</option>
		<option value="185"  >185</option>
		<option value="190"  >190</option>
		<option value="195"  >195</option>
		<option value="200"  >200</option>
		<option value="205"  >205</option>
		<option value="210"  >210</option>
		<option value="215"  >215</option>
		<option value="220"  >220</option>
		<option value="225"  >225</option>
		<option value="230"  >230</option>
		<option value="235"  >235</option>
		<option value="240"  >240</option>
		<option value="245"  >245</option>
		<option value="250"  >250</option>
		<option value="255"  >255</option>
		<option value="260"  >260</option>
		<option value="265"  >265</option>
		<option value="270"  >270</option>
		<option value="275"  >275</option>
		<option value="280"  >280</option>
		<option value="285"  >285</option>
		<option value="290"  >290</option>
		<option value="295"  >295</option>
		<option value="300"  >300</option>
		<option value="305"  >305</option>
		<option value="310"  >310</option>
		<option value="315"  >315</option>
		<option value="320"  >320</option>
		<option value="325"  >325</option>
		<option value="330"  >330</option>
		<option value="335"  >335</option>
		<option value="340"  >340</option>
		<option value="345"  >345</option>
		<option value="350"  >350</option>
		<option value="355"  >355</option>
		<option value="360"  >360</option>
		<option value="365"  >365</option>
		<option value="370"  >370</option>
		<option value="375"  >375</option>
		<option value="380"  >380</option>
		<option value="385"  >385</option>
		<option value="390"  >390</option>
		<option value="395"  >395</option>
		<option value="400"  >400</option>
		<option value="405"  >405</option>
		<option value="410"  >410</option>
		<option value="415"  >415</option>
		<option value="420"  >420</option>
		<option value="425"  >425</option>
		<option value="430"  >430</option>
		<option value="435"  >435</option>
		<option value="440"  >440</option>
		<option value="445"  >445</option>
		<option value="450"  >450</option>
		<option value="455"  >455</option>
		<option value="460"  >460</option>
		<option value="465"  >465</option>
		<option value="470"  >470</option>
		<option value="475"  >475</option>
		<option value="480"  >480</option>
		<option value="485"  >485</option>
		<option value="490"  >490</option>
		<option value="495"  >495</option>
		<option value="500"  >500</option>
		<option value="505"  >505</option>
		<option value="510"  >510</option>
		<option value="515"  >515</option>
		<option value="520"  >520</option>
		<option value="525"  >525</option>
		<option value="530"  >530</option>
		<option value="535"  >535</option>
		<option value="540"  >540</option>
		<option value="545"  >545</option>
		<option value="550"  >550</option>
		<option value="555"  >555</option>
		<option value="560"  >560</option>
		<option value="565"  >565</option>
		<option value="570"  >570</option>
		<option value="575"  >575</option>
		<option value="580"  >580</option>
		<option value="585"  >585</option>
		<option value="590"  >590</option>
		<option value="595"  >595</option>
		<option value="600"  >600</option>
		<option value="605"  >605</option>
		<option value="610"  >610</option>
		<option value="615"  >615</option>
		<option value="620"  >620</option>
		<option value="625"  >625</option>
		<option value="630"  >630</option>
		<option value="635"  >635</option>
		<option value="640"  >640</option>
		<option value="645"  >645</option>
		<option value="650"  >650</option>
		<option value="655"  >655</option>
		<option value="660"  >660</option>
		<option value="665"  >665</option>
		<option value="670"  >670</option>
		<option value="675"  >675</option>
		<option value="680"  >680</option>
		<option value="685"  >685</option>
		<option value="690"  >690</option>
		<option value="695"  >695</option>
		<option value="700"  >700</option>
		<option value="705"  >705</option>
		<option value="710"  >710</option>
		<option value="715"  >715</option>
		<option value="720"  >720</option>
		<option value="725"  >725</option>
		<option value="730"  >730</option>
		<option value="735"  >735</option>
		<option value="740"  >740</option>
		<option value="745"  >745</option>
		<option value="750"  >750</option>
		<option value="755"  >755</option>
		<option value="760"  >760</option>
		<option value="765"  >765</option>
		<option value="770"  >770</option>
		<option value="775"  >775</option>
		<option value="780"  >780</option>
		<option value="785"  >785</option>
		<option value="790"  >790</option>
		<option value="795"  >795</option>
		<option value="800"  >800</option>
		<option value="805"  >805</option>
		<option value="810"  >810</option>
		<option value="815"  >815</option>
		<option value="820"  >820</option>
		<option value="825"  >825</option>
		<option value="830"  >830</option>
		<option value="835"  >835</option>
		<option value="840"  >840</option>
		<option value="845"  >845</option>
		<option value="850"  >850</option>
		<option value="855"  >855</option>
		<option value="860"  >860</option>
		<option value="865"  >865</option>
		<option value="870"  >870</option>
		<option value="875"  >875</option>
		<option value="880"  >880</option>
		<option value="885"  >885</option>
		<option value="890"  >890</option>
		<option value="895"  >895</option>
		<option value="900"  >900</option>
		<option value="905"  >905</option>
		<option value="910"  >910</option>
		<option value="915"  >915</option>
		<option value="920"  >920</option>
		<option value="925"  >925</option>
		<option value="930"  >930</option>
		<option value="935"  >935</option>
		<option value="940"  >940</option>
		<option value="945"  >945</option>
		<option value="950"  >950</option>
		<option value="955"  >955</option>
		<option value="960"  >960</option>
		<option value="965"  >965</option>
		<option value="970"  >970</option>
		<option value="975"  >975</option>
		<option value="980"  >980</option>
		<option value="985"  >985</option>
		<option value="990"  >990</option>
		<option value="995"  >995</option>
		<option value="1000"  >1000</option>
	</select>
	<input class="form-control" type="text" value="" maxlength="64" name="q" style="width: 265px" placeholder="Từ khóa tìm kiếm" />
	<input class="btn btn-primary" type="submit" value="Tìm kiếm" /><br />
	<input type="hidden" name="checkss" value="6c229ec2a6791ecf890ed17bbd809d28" />
	<label><em>Từ khóa tìm kiếm không ít hơn 2 ký tự, không lớn hơn 64 ký tự, không dùng các mã html</em></label>
    </form>

	<form class="form-inline" id="list_post">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
	            <tr>
	                <th width="10px"><input name="check_all[]" type="checkbox" value="yes" onclick="nv_checkAll(this.form, 'idcheck[]', 'check_all[]',this.checked);" /></th>
	                <th width="60px">Mã tin</th>
	                <th>Tiêu đề</th>
	                <th width="70px">Loại tin</th>
	                <th width="100px">Ngày đăng</th>
	                <th width="160px">Tỉnh/Thành phố</th>
	                <th width="80px">Thao tác</th>
	            </tr>
	        </thead>
	        <tbody>
	            	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="37" name="idcheck[]" /></td>
	                    <td>V000037</td>
	                    <td>Nội dung test</td>
	                    <td><strong>Tin thường</strong></td>
	                    <td>13/07/2021 11:00</td>
	                    <td>Quận Hai Bà Trưng-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=37">Sửa</a> | <a onclick="del_raovat('37', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="36" name="idcheck[]" /></td>
	                    <td>V000036</td>
	                    <td>Bán Nhà Đất Kim Ngưu - Ngõ Rộng - An Sinh Đỉnh - DT45mX4T - MT 3.8m - Giá Chỉ 4.4 Tỷ.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>02/07/2021 20:20</td>
	                    <td>Quận Hai Bà Trưng-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=36">Sửa</a> | <a onclick="del_raovat('36', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="35" name="idcheck[]" /></td>
	                    <td>V000035</td>
	                    <td>Bán Nhà Đất Thanh Nhàn - Kinh Doanh - Mặt Phố - DT50mX5T - MT4.6m - Giá Chỉ 15 Tỷ.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>02/07/2021 20:19</td>
	                    <td>Quận Hai Bà Trưng-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=35">Sửa</a> | <a onclick="del_raovat('35', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="34" name="idcheck[]" /></td>
	                    <td>V000034</td>
	                    <td>MẶT PHỐ QUẬN HAI BÀ TRƯNG, VỈA HÈ RỘNG KINH DOANH ĐỈNH, FULL TIỆN ÍCH XUNG QUANH, SĐCC.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>28/06/2021 00:27</td>
	                    <td>Quận Hai Bà Trưng-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=34">Sửa</a> | <a onclick="del_raovat('34', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="33" name="idcheck[]" /></td>
	                    <td>V000033</td>
	                    <td>Bán Nhà Kim Ngưu - Ngõ Rộng - An Sinh Đỉnh - DT45mX4T - MT 3.8m - Giá Chỉ 4.4 Tỷ.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>24/06/2021 10:05</td>
	                    <td>Quận Hai Bà Trưng-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=33">Sửa</a> | <a onclick="del_raovat('33', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="32" name="idcheck[]" /></td>
	                    <td>V000032</td>
	                    <td>CHO THUÊ NHÀ TRỌ KHÉP KÍN, NGÕ Ô TÔ THÔNG, 10M RA MẶT PHỐ FULL TIỆN ÍCH</td>
	                    <td><strong>Tin thường</strong></td>
	                    <td>23/06/2021 02:21</td>
	                    <td>Quận Hoàng Mai-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=32">Sửa</a> | <a onclick="del_raovat('32', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="31" name="idcheck[]" /></td>
	                    <td>V000031</td>
	                    <td>MẶT PHỐ, THÔNG SÀN KINH DOANH, CHO THUÊ, NHÀ ĐẸP, SĐCC VUÔNG ĐẸP</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>22/06/2021 20:12</td>
	                    <td>Quận Đống đa-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=31">Sửa</a> | <a onclick="del_raovat('31', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="30" name="idcheck[]" /></td>
	                    <td>V000030</td>
	                    <td>VỊ TRÍ ĐẮC ĐỊA, MẶT PHỐ THÁI THỊNH, LÔ GÓC, KINH DOANH SẦM UẤT, 6 TẦNG THANG MÁY.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>22/06/2021 17:27</td>
	                    <td>Quận Đống đa-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=30">Sửa</a> | <a onclick="del_raovat('30', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="29" name="idcheck[]" /></td>
	                    <td>V000029</td>
	                    <td>BÁN NHÀ RIÊNG 21M2, 4 TẦNG, NGÕ RỘNG Ô TÔ ĐỖ CỬA, Ở LUÔN.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>22/06/2021 17:22</td>
	                    <td>Quận Hoàng Mai-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=29">Sửa</a> | <a onclick="del_raovat('29', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="28" name="idcheck[]" /></td>
	                    <td>V000028</td>
	                    <td>BÁN GẤP NHÀ ĐỊNH CÔNG, 4T, NGÕ THÔNG Ô TÔ, KINH DOANH, SĐCC</td>
	                    <td><strong>Tin thường</strong></td>
	                    <td>22/06/2021 17:19</td>
	                    <td>Quận Hoàng Mai-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=28">Sửa</a> | <a onclick="del_raovat('28', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="27" name="idcheck[]" /></td>
	                    <td>V000027</td>
	                    <td>BÁN NHÀ NGUYỄN CHÍ THANH, 40M2, 4 TẦNG, Ô TÔ ĐỖ CỬA, DÂN TRÍ CAO AN NINH.</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>22/06/2021 17:14</td>
	                    <td>Quận Đống đa-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=27">Sửa</a> | <a onclick="del_raovat('27', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="26" name="idcheck[]" /></td>
	                    <td>V000026</td>
	                    <td>MẶT PHỐ, VỈA HÈ THOÁNG, LÔ GÓC, KINH DOANH MỌI LOẠI HÌNH ĐỀU TỐT.</td>
	                    <td><strong>Tin thường</strong></td>
	                    <td>22/06/2021 16:54</td>
	                    <td>Quận Hai Bà Trưng-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=26">Sửa</a> | <a onclick="del_raovat('26', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	                <tr>
	                    <td><input type="checkbox" onclick="nv_UncheckAll(this.form, 'idcheck[]', 'check_all[]', this.checked);" value="25" name="idcheck[]" /></td>
	                    <td>V000025</td>
	                    <td>PHÂN LÔ, Ô TÔ, VỈA HÈ RỘNG, NHÀ ĐẸP CHẮC CHẮN, 08 PHÒNG KHÉP KÍN, SĐCC</td>
	                    <td><strong><span style="color:#f00">Tin vip</span></strong></td>
	                    <td>22/06/2021 02:00</td>
	                    <td>Quận Hoàng Mai-Hà Nội</td>
	                    <td><a href="/admin/index.php?nv=raovat&op=content&id=25">Sửa</a> | <a onclick="del_raovat('25', 'f08caa612ccfb78788e17538b49cce17');" href="javascript:void(0);">Xóa</a></td>
	                </tr>
	        <tbody>
		</table>
	</div>
    <input type="button" value="Xóa mục chọn" class="btn btn-primary" onclick="dellist_raovat(this.form, 'f08caa612ccfb78788e17538b49cce17', 'Bạn cần chọn ít nhất 1 bài viết để thực hiện');" />
	</form>
			</div>
		</div>
	</section>
	<footer id="footer" class="row">
		<div class="footer-content">
			<div class="copyright">
				<strong>&copy; Copyright Bất động sản Đại Dương. All right reserved</strong>
			</div>
			<div class="imgstat">
				Hotline Support: 0982 083 283 (Mr Cao)
			</div>
		</div>
	</footer>
</div>
<div id="timeoutsess" class="chromeframe">
	Bạn đã không sử dụng Site, <a onclick="timeoutsesscancel();" href="#">Bấm vào đây để duy trì trạng thái đăng nhập</a>. Thời gian chờ: <span id="secField"> 60 </span> giây
</div>
<!-- SiteModal Required!!! -->
<div id="sitemodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">&nbsp;</h3>
            </div>
            <div class="modal-body">
                <em class="fa fa-spinner fa-spin">&nbsp;</em>
            </div>
        </div>
    </div>
</div>
<div id="run_cronjobs" style="visibility:hidden;display:none;"><img alt="" src="/index.php?second=cronjobs&amp;p=x7uF0QY4" width="1" height="1" /></div>
<script type="text/javascript" src="/assets/js/jquery/jquery.min.js?t=376"></script>
<script type="text/javascript">
			var  nv_base_siteurl = '/',
			     nv_lang_data = 'vi',
			     nv_lang_interface = 'vi',
			     nv_name_variable = 'nv',
			     nv_fc_variable = 'op',
			     nv_lang_variable = 'language',
			     nv_module_name = 'raovat',
			     nv_my_ofs = 7,
			     nv_my_abbr = 'ICT',
			     nv_cookie_prefix = 'nv4',
			     nv_check_pass_mstime = '1738000',
                 nv_safemode = 0,
                 nv_area_admin = 1;
		</script>
<script type="text/javascript" src="/assets/js/language/vi.js?t=376"></script>
<script type="text/javascript" src="/assets/js/global.js?t=376"></script>
<script type="text/javascript" src="/assets/js/admin.js?t=376"></script>
<script type="text/javascript" src="/modules/raovat/js/admin.js?t=376"></script>
<script type="text/javascript">
    var notempty = 'Bạn phải chọn ít nhất 1 dòng.';
    </script>
<script type="text/javascript" src="/themes/default/js/bootstrap.min.js?t=376"></script>
<script type="text/javascript" src="/themes/admin_default/js/main.js?t=376"></script>
<script type="text/javascript" src="/themes/admin_default/js/notification.js?t=376"></script>
<script type="text/javascript" src="/assets/js/jquery/jquery.timeago.js?t=376"></script>
<script type="text/javascript" src="/assets/js/language/jquery.timeago-vi.js?t=376"></script>
<script type="text/javascript" src="/assets/js/jquery/jquery.slimscroll.min.js?t=376"></script>
</body>
</html>
