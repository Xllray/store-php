<?php get_header(); ?>
<?php 	if(!empty($_SESSION['mess'])) 
{echo " <script type='text/javascript'> alert('Bạn cần đăng nhập trước khi mua hàng!!!');</script>";
unset($_SESSION['mess']);}
?>
<style type="text/css">
	#icon{
		display: flex;
		position: absolute;
		margin-left: 5px;
		margin-top: 12px;
		align-items: center;
	}	
</style>

<div id="main-content-wp" class="checkout-page">
	<div class="section" id="breadcrumb-wp">
		<div class="wp-inner">
			<div class="section-detail">
				<ul class="list-item clearfix">
					<li>
						<a href="?page=home" title="">Trang chủ</a>
					</li>
					<li>
						<a href="" title="">Đăng nhập</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper" class="wp-inner clearfix">

		<div class="main-content fl-right">
			<form method="post" action="?modules=users&controllers=index&action=login" name="form-checkout">

				<div class="section" id="customer-info-wp">
					<div class="section-head">
						<h1 class="section-title">Đăng nhập tài khoản</h1>
					</div>

					<div class="section-detail">
						<div class="form-row clearfix">
							<div class="form-col fl-left">
								<label for="fullname">Tên đăng nhập</label>
								<i class="fa fa-user" id="icon"></i>
								<input style="height: 38px;width: 250px;border: 1px solid #cccccc;padding-left: 20px;"
								type="text" name="username" id="username">
							</div> 
						</div>
						<div class="form-row clearfix">
							<div class="form-col fl-left">
								<label for="address">Mật khẩu</label>
								<i class="fa fa-unlock-alt" id="icon"></i>
								<input style="height: 38px;width: 250px;border: 1px solid #cccccc;padding-left: 20px;" type="password" name="password" id="password">
							</div>
						</div>
					</div>
					<input type="submit" name="btn_submit" id="btn-submit" value="Đăng nhập" style="height: 40px;
					border-radius: 60px;
					width: 150px;
					color: green;
					border-color: white;
					color: white;
					background-color: #48ad48;">
					<h5> 
						Chưa có tài khoản? Hãy 
						<a href="?modules=users&controllers=index&action=register">Đăng ký</a>
					ngay</h5>
				</div>

			</form>
		</div>	

		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>