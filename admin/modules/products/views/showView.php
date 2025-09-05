<?php get_header(); ?>

<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa sản phẩm</h3>
                    <a href="?modules=products&controllers=index&action=list" title="" id="add-new" class="fl-left">Danh sách</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <?php if(!empty($data)) foreach ($data[0] as $value) {?>
                        <form method="POST" action="?modules=products&controllers=index&action=update&id=<?php echo $value['id'] ;?>" enctype="multipart/form-data">

                            <div style=" display: flex;">
                                <div style="width: 400px;">
                                    <label for="product-name">Tên sản phẩm</label>
                                    <input type="text" name="name" id="product-name" style="display: block;width: 300px;" value="<?php echo $value['name']; ?>">
                                    <label for="product-code">Mã sản phẩm</label>
                                    <input type="text" name="code" id="product-code" style="display: block;width: 300px;" value="<?php echo $value['code']; ?>">
                                    <label for="price">Giá sản phẩm</label>
                                    <input type="text" name="price" id="price" style="display: block;width: 300px;" value="<?php echo $value['price']; ?>">
                                    <label for="price">Giá khuyến mãi</label>
                                    <input type="text" name="promotional_price" id="price" style="display: block;width: 300px;" value="<?php echo $value['promotional_price']; ?>">
                                    <label for="price">Số lượng</label>
                                    <input type="text" name="quantity" id="price" style="display: block;width: 300px;" value="<?php echo $value['quantity']; ?>">
                                    <label for="price">Người tạo</label>
                                    <input type="text" name="user" id="price" style="display: block;width: 300px;" value="<?php echo $value['user']; ?>">
                                </div>
                                <div style="width: 400px;">
                                    <label for="price">Màn hình</label>
                                    <input type="text" name="screen" id="price" style="display: block;width: 300px;" value="<?php echo $value['screen']; ?>">
                                    <label for="price">Ram</label>
                                    <input type="text" name="ram" id="price" style="display: block;width: 300px;" value="<?php echo $value['ram']; ?>">
                                    <label for="price">Cpu</label>
                                    <input type="text" name="cpu" id="price" style="display: block;width: 300px;" value="<?php echo $value['cpu']; ?>">
                                    <label for="price">Bộ nhớ</label>
                                    <input type="text" name="memory" id="price" style="display: block;width: 300px;" value="<?php echo $value['memory']; ?>">
                                    <label for="price">Hệ điều hành</label>
                                    <input type="text" name="operating_system" id="price" style="display: block;width: 300px;" value="<?php echo $value['operating_system']; ?>">
                                    <label for="price">Camera trước</label>
                                    <input type="text" name="front_camera" id="price" style="display: block;width: 300px;" value="<?php echo $value['front_camera']; ?>">
                                    <label for="price">Camera sau</label>
                                    <input type="text" name="rear_camera" id="price" style="display: block;width: 300px;" value="<?php echo $value['rear_camera']; ?>">
                                </div>
                                <div style="width: 400px;">
                                    <label for="status">Độ hot sản phẩm</label>
                                    <select name="level" style="display: block;width: 300px;">
                                        <option value="hot" >sản phẩm hot</option>
                                        <option value="normal"> sản phẩm bình thường</option>
                                        <option value="discount">sản phẩm giảm giá</option>
                                        <option value="<?php echo $value['level']; ?>"selected="selected"><?php 
                                        if($value['level']=='hot') echo 'sản phẩm hot';
                                        if($value['level']=='normal') echo 'sản phẩm bình thường'; 
                                        if($value['level']=='discount') echo 'sản phẩm giảm giá';
                                        ?></option>
                                    </select>
                                    <label for="status">Trạng thái</label>
                                    <select name="status" style="display: block;width: 300px;">
                                        <option value="còn hàng">còn hàng</option>
                                        <option value="hết hàng">hết hàng</option>
                                        <option value="hàng sắp về">hàng sắp về</option>
                                        <option value="<?php echo $value['status']; ?>"selected="selected"><?php echo $value['status']; ?></option>
                                    </select>
                                    <label for="category ">Danh mục sản phẩm</label>
                                    <select name="id_category" style="display: block;width: 300px;">
                                        <?php if(!empty($data)) foreach ($data[1] as $category) {?>
                                            <option value="<?php echo $category['id']; ?>"
                                                <?php if($category['id']==$value['id_category']) echo 'selected'; ?>>
                                                <?php echo $category['name']; ?>
                                            </option>
                                        <?php }; ?>                                    
                                    </select>
                                    <label for="brand">Thương hiệu sản phẩm</label>
                                    <select name="id_brand" style="display: block;width: 300px;">
                                        <?php if(!empty($data)) foreach ($data[2] as $brand) {?>
                                            <option value="<?php echo $brand['id']; ?>"
                                                <?php if($brand['id']==$value['id_brand']) echo 'selected'; ?>>
                                                <?php echo $brand['name']; ?>
                                            </option>
                                        <?php }; ?>
                                    </select>

                                    <label>Hình ảnh</label>
                                    <div id="uploadFile">
                                        <input type="file" name="image" id="upload-thumb">
                                        <img src="<?php echo $value['image']; ?>">
                                    </div>
                                </div>
                            </div>
                            <label for="desc">Mô tả sản phẩm</label>
                            <textarea name="description" id="desc" class="ckeditor">
                                <?php echo $value['description']; ?>
                            </textarea>
                        <?php };?> 
                        <input type="submit" name="btn_submit" id="btn-submit" value="Cập nhật" style="height: 40px;
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
    </div>
</div>
<?php get_footer(); ?>