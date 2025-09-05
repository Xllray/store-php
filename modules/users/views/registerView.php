<?php get_header(); ?>
<?php 	if(!empty($_SESSION['mess'])) 
{echo " <script type='text/javascript'> alert('Bạn cần đăng nhập trước khi mua hàng!!!');</script>";
unset($_SESSION['mess']);}
?>
<style type="text/css">	
	.danger_paswword {
		color: #DC3545;		
		font-weight: lighter;
	} 
	.text-danger {
		color: #DC3545;		
		font-weight: lighter;
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
						<a href="" title="">Đăng ký tài khoản</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper" class="wp-inner clearfix">

		<div class="main-content fl-right">
			<div class="section" id="customer-info-wp">
				<div class="section-head">
					<h1 class="section-title">Đăng kí tài khoản</h1>
				</div>
				<div class="section-detail">

					<form method="POST" action="?modules=users&controllers=index&action=crateAcount" name="form-checkout" id="form-checkout">

						<div class="form-row clearfix">
							<div class="form-col fl-left">
								<label for="fullname">Tên đăng nhập</label>
								<input type="text" name="username" id="username" placeholder="Nhập tên tài khoản">								
								<div class="text-danger" id="danger_username" style="display: none">Tên không hợp lệ</div>
							</div>
							<div class="form-col fl-right">
								<label for="email">Mật khẩu</label>
								<input style="height: 38px;width: 100%;border: 1px solid #cccccc;" type="password" name="password" id="password" placeholder="Nhập mật khẩu">								
								<div id="danger_paswword"></div>
							</div>
						</div>
						<div class="form-row clearfix">
							<div class="form-col fl-left">
								<label for="address">Email</label>
								<input type="text" name="mail" id="mail" placeholder="abc@gmail.com.vn">
								<div class="text-danger" id="danger_mail" style="display: none">Email không hợp lệ</div>
							</div>
							<div class="form-col fl-right">
								<label for="phone">Số điện thoại</label>
								<input style="height: 38px;width: 100%;border: 1px solid #cccccc;"
								type="tel" name="phone" id="phone">								
								<div class="text-danger" id="danger_phone" style="display: none">Không hợp lệ</div>
							</div>
						</div>
						<div class="form-row">
							<label for="phone">Họ và tên</label>
							<input style="display: inline-block;padding-bottom: 10px; width: 100%;border: 1px solid #cccccc;"  name="fullname" id="fullname">	
							<div class="text-danger" id="danger_fullname" style="display: none">Họ tên không hợp lệ</div>
							<div class="form-col">
								<label for="notes">Địa chỉ</label>
								<textarea name="address"></textarea>
							</div>
						</div>
						<input type="submit" name="btn_submit_crate" id="btn-submit" value="Tạo" style="height: 40px;
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>

<!-- Kiểm tra Mật khẩu sử dụng validator -->
<script>	
	var value = $('#password').val();    
	$.validator.addMethod("checklower", function(value) {
		return /[a-z]/.test(value);
	});

	$.validator.addMethod("checkupper", function(value) {
		return /[A-Z]/.test(value);
	});

	$.validator.addMethod("checkdigit", function(value) {
		return /[0-9]/.test(value);
	});    

	$('#form-checkout').validate({        
		rules: {
			password: {
				minlength: 6,
				maxlength: 30,
				required: true,      
				checklower: true,
				checkupper: true,
				checkdigit: true
			},    
		},
		messages: {
			password: {
				minlength: "Tối thiểu 6 ký tự ",
				required: "Không được bỏ trống",        
				checklower: "Tối thiểu 1 chữ thường",
				checkupper: "Tối thiểu 1 chữ in hoa",
				checkdigit: "Tối thiểu 1 chữ số"          
			}
		},		

errorPlacement: function(error, element) {	
	error.addClass('danger_paswword');
	error.insertAfter('#danger_paswword');
} 
});
</script>

<!-- Kiểm tra tên tài khoản -->
<script>
	$('#username').blur(function(){
		var account = $(this).val();		
        if(/^[a-zA-Z0-9-]*$/.test(account) == false || !account.trim()){//Có chứa ký tự đặc biệt                                        
        	$('#danger_username').css("display","inline");        	
                    //approvedTK = false;
                    return false;
                }
                else {
                	$('#danger_username').css("display","none");                	
                    //approvedTK = true;                    
                }                            
            });    
        </script>

        <!-- Kiểm tra Họ Tên -->
        <script>  
        	$('#fullname').blur(function (){
        		var hoten = $(this).val();
        		if(hoten.length < 6){
        			$('#danger_fullname').css('display','inline');        			      
        		}
        		else {
        			$('#danger_fullname').css('display','none');        			               
        		}
        	})
        </script>

        <!-- Kiểm tra SDT -->
        <script>  
        	$('#phone').blur(function (){
        		var phone = $(this).val();
        		if(phone.length < 10){
        			$('#danger_phone').css('display','inline');        			      
        		}
        		else {
        			$('#danger_phone').css('display','none');        			               
        		}
        	})
        </script>  

        <!-- Kiểm tra mail -->
        <script>  
        	$('#mail').blur(function (){
        		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        		var mail = $(this).val();
        		if(!emailReg.test(mail)||!mail.trim()){
        			$('#danger_mail').css('display','inline');        			      
        		}
        		else {
        			$('#danger_mail').css('display','none');        			               
        		}
        	})
        </script>        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>