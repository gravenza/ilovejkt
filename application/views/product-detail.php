<?php include "include/header.php"; ?>
	<content class="product-detail">
    	<div class="container">
        	<div class="clearer" style="margin:0;">
            <ol class="breadcrumb">
  			<li><a href="#">Home</a></li>
  			<li><a href="#">Library</a></li>
  			<li class="active">Data</li>
			</ol>
            </div>
            
            <div class="row">
            <div class="col-md-4 col-xs-12 text-center">
            <img src="<?php echo base_url(); ?>images/product/product1.jpg">
            </div>
            
            <div class="col-md-8 col-xs-12">
            <h3>Neque porro quisquam est qui dolorem ipsum</h3>
            <p class="cat">Furniture</p>
            <p class="price" style="text-decoration:line-through">IDR. 2000.000,-</p>
            <p class="discount">IDR. 1500.000,-</p>
            <div class="desc">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="clearer">
            <form>
            	<div class="form-group">
                <div class="row">
                <div class="col-md-4 col-xs-6">
                <label>Qty</label>
                <input type="number" class="form-control">
                </div>
                </div>
                </div>
                
                <div class="form-group">
                <input type="submit" value="ADD TO CART" class="btn btn-info">
                <a class="btn btn-danger" href="#">CONTINUE SHOPPING</a>
                </div>
            </form>
            </div>
            </div>
            </div>
            
            <div class="clearer terkait" style="border-top:solid thin #7fd4ce;">
            	<div class="row">
                <div class="col-md-4 col-xs-12 text-center">
                <img src="<?php echo base_url(); ?>images/product/product2.jpg">
                <h3><a href="#">Lorem Ipsum Dolor</a></h3>
                <p class="price">IDR. 2000.000,-</p>
                </div>
                
                <div class="col-md-4 col-xs-12 text-center">
                <img src="<?php echo base_url(); ?>images/product/product3.jpg">
                <h3><a href="#">Lorem Ipsum Dolor</a></h3>
                <p class="price">IDR. 2000.000,-</p>
                </div>
                
                <div class="col-md-4 col-xs-12 text-center">
                <img src="<?php echo base_url(); ?>images/product/product4.jpg">
                <h3><a href="#">Lorem Ipsum Dolor</a></h3>
                <p class="price">IDR. 2000.000,-</p>
                </div>
                </div>
            </div>
        </div>
    </content>
<?php include "include/footer.php"; ?>