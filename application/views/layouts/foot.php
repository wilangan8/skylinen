    <footer class="ftco-footer ftco-section-content" id="about">
      <div class="container">
        <div class="row-footer animatedParent">
          <div class="col-lg-3 col-sm-6 animation animated bounceInDown d_01">
            <img src="<?= base_url('assets/images/skylinenlogo.png') ?>" class="logo-footer mb_40">
            <p class="description-footer">Copyright &copy; <script>document.write(new Date().getFullYear());</script> SkyLinen. All Rights Reserved</p>
          </div>
          <div class="col-lg-3 col-sm-6 animation animated bounceInDown d_02">
            <h3 class="f-title f_600 f_size_18 mb_40">Products</h3>
              <ul class="footer_list list-unstyled">
                <li><a href="#">Bed Linen</a></li>
                <li><a href="#">Bedding</a></li>
                <li><a href="#">Bathroom</a></li>
                <li><a href="#">Kitchen & Dining</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 animation animated bounceInDown d_03">
            <h3 class="f-title f_600 f_size_18 mb_40">Help?</h3>
              <ul class="footer_list list-unstyled">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
              </ul>
          </div>
          <div class="col-lg-3 col-sm-6 animation animated bounceInDown d_04">
            <h3 class="f-title f_600 f_size_18 mb_40">Contact Us</h3>
              <ul class="footer_list list-unstyled">
                <li><a href="https://goo.gl/maps/79NP6NKuSCg175s66">Bandung Indah Plaza (BIP)</a></li>
                <li><p>Jl. H. Durasid No.6a</p></li>
                <li><p>Jawa Barat 40123</p></li>
                <li><p>Indonesia</li>
              </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <a href="javascript:void(0)" class="scrolltop"><i class="ion-ios-arrow-up"></i></a>

    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.animateNumber.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.timepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/scrollax.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/js/css3-animate-it.js') ?>"></script>
    <script src="<?= base_url('assets/js/code-fly.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script>new WOW().init();</script>
    <script>var base_url = '<?php echo base_url() ?>';</script>
    <?php if(count($this->cart->contents()) == 0){ ?>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.count-shop').addClass('d-none');
        });
      </script>
    <?php } ?>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.add_cart').on('click',function(){
              var itemImg = $(this).eq(0);
              $('.count-shop').removeClass('d-none');
              flyToElement($(itemImg), $('.btn-shop'));
          });

          $('.add_cart_detail').on('click',function(){
              var itemImg = $(this).eq(0);
              $('.count-shop').removeClass('d-none');
              flyToElement($(itemImg), $('.btn-shop'));
          });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        $('.add_cart').click(function(){
          var product_id    = $(this).data("productid");
          var product_name  = $(this).data("productname");
          var product_price = $(this).data("productprice");
          var product_img   = $(this).data("productimg");
          var quantity   	  = $(this).data("productqty");
          $.ajax({
            url : "<?php echo site_url('mycart/add_to_cart');?>",
            method : "POST",
            data : {product_id: product_id, product_name: product_name, product_price: product_price, product_img: product_img, quantity: quantity},
            success: function(data){
              $('#detail_cart').html(data);
              $('#detail_mini_cart').html(data);
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {quantity: quantity},
                success: function(data){
                  $('#count_shop_1').html(data);
                  $('#count_shop_2').html(data);
                }
              });
            }
          });
        });

        $('.add_cart_detail').click(function(){
          var product_id    = $(this).data("productid");
          var product_name  = $(this).data("productname");
          var product_price = $(this).data("productprice");
          var product_img   = $(this).data("productimg");
          var quantity   	  = $('#' + product_id).val();
          $.ajax({
            url : "<?php echo site_url('mycart/add_to_cart');?>",
            method : "POST",
            data : {product_id: product_id, product_name: product_name, product_price: product_price, product_img: product_img, quantity: quantity},
            success: function(data){
              $('#detail_cart').html(data);
              $('#detail_mini_cart').html(data);
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {quantity: quantity},
                success: function(data){
                  $('#count_shop_1').html(data);
                  $('#count_shop_2').html(data);
                }
              });
            }
          });
        });

        $('#detail_mini_cart').load("<?php echo site_url('mycart/load_mini_cart');?>");
        $('#count_shop_1').load("<?php echo site_url('mycart/load_count_cart');?>");
        $('#count_shop_2').load("<?php echo site_url('mycart/load_count_cart');?>");

        
        $(document).on('click','.product-quantity-minus',function(){
          var row_id      = $(this).attr("id"); 
          var quantity    = $(this).data("productqty");
          $.ajax({
            url : "<?php echo site_url('mycart/min_cart');?>",
            method : "POST",
            data : {row_id : row_id,qty : quantity},
            success :function(data){
              $('#detail_cart').html(data);
              $('#detail_mini_cart').html(data);
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {quantity: quantity},
                success: function(data){
                  $('#count_shop_1').html(data);
                  $('#count_shop_2').html(data);
                }
              });
            }
          });
        });

        $(document).on('click','.product-quantity-plus',function(){
          var row_id      = $(this).attr("id"); 
          var quantity    = $(this).data("productqty");
          $.ajax({
            url : "<?php echo site_url('mycart/plus_cart');?>",
            method : "POST",
            data : {row_id : row_id,qty : quantity},
            success :function(data){
              $('#detail_cart').html(data);
              $('#detail_mini_cart').html(data);
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {quantity: quantity},
                success: function(data){
                  $('#count_shop_1').html(data);
                  $('#count_shop_2').html(data);
                }
              });
            }
          });
        });

        $(document).on('click','.romove_cart',function(){
          var row_id=$(this).attr("id"); 
          $.ajax({
            url : "<?php echo site_url('mycart/delete_cart');?>",
            method : "POST",
            data : {row_id : row_id},
            success :function(data){
              $('#detail_cart').html(data);
              $('#detail_mini_cart').html(data);
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {row_id: row_id},
                success: function(data){
                  $('#count_shop_1').html(data);
                  $('#count_shop_2').html(data);
                }
              });
            }
          });
        });

        $(document).on('click','.romove_mini_cart',function(){
          var row_id=$(this).attr("id"); 
          $.ajax({
            url : "<?php echo site_url('mycart/delete_mini_cart');?>",
            method : "POST",
            data : {row_id : row_id},
            success :function(data){
              $('#detail_mini_cart').html(data);
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {row_id: row_id},
                success: function(data){
                  $('#count_shop_1').html(data);
                  $('#count_shop_2').html(data);
                }
              });
            }
          });
        });



      });
  </script>

    
  </body>
</html>