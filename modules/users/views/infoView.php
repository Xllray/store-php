<?php get_header(); ?>
<?php 	if(!empty($_SESSION['mess'])) 
{echo " <script type='text/javascript'> alert('Bạn cần đăng nhập trước khi mua hàng!!!');</script>";
unset($_SESSION['mess']);}
?>
<div id="main-content-wp" class="checkout-page">
	<div class="section" id="breadcrumb-wp">
		<div class="wp-inner">
			<div class="section-detail">
				<ul class="list-item clearfix">
					<li>
						<a href="?page=home" title="">Trang chủ</a>
					</li>
					<li>
						<a href="" title="">Thông tin tài khoản</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper" class="wp-inner clearfix">

		<div class="main-content fl-right">
			<div class="section" id="customer-info-wp">
				<div class="section-head">
					<h1 class="section-title">Thông tin tài khoản</h1>
				</div>
				<div class="section-detail">

					<form method="POST" action="?modules=users&controllers=index&action=update" name="form-checkout">

						<div class="form-row clearfix">
							<div class="form-col fl-left" style="pointer-events: none;">
								<label for="fullname">Tên đăng nhập</label>
								<?php
								echo '<input type="text" name="username" id="username" value="'
								.$_SESSION['username'].'" readonly>';
								?>
							</div>
							<div class="form-col fl-right">
								<label for="email">Họ tên</label>
								<?php
								echo '<input style="height: 38px;width: 100%;border: 1px solid #cccccc;" type="text" name="fullname" id="fullname" value="'
								.$_SESSION['fullname'].'">';
								?>
							</div>
						</div>
						<div class="form-row clearfix">
							<div class="form-col fl-left" style="pointer-events: none;">
								<label for="address">Email</label>
								<?php
								echo '<input type="text" name="mail" id="email" value="'
								.$_SESSION['mail'].'" readonly>';
								?>
							</div>
							<div class="form-col fl-right" style="pointer-events: none;">
								<label for="phone">Số điện thoại</label>
								<?php
								echo '<input style="height: 38px;width: 100%;border: 1px solid #cccccc;" type="tel" name="phone" id="phone" value="'
								.$_SESSION['phone'].'" readonly>';
								?>
							</div>
						</div>
						<div class="form-row">							
							<div class="form-col">
								<label for="notes">Địa chỉ</label>
								<textarea name="address"><?php echo $_SESSION['address'];?></textarea>
							</div>
						</div>
						<input type="submit" name="btn_submit_update" id="btn-submit" value="Cập nhật" style="height: 40px;
						border-radius: 60px;
						width: 150px;
						color: green;
						border-color: white;
						color: white;
						background-color: #48ad48;">
					</form>

				</div>
			</div>
		</div>


		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>