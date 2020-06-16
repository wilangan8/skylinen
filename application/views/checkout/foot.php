    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.animateNumber.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.timepicker.min.js') ?>"></script>
  <script src="<?= base_url('sky_main/assets/js/sweetalert.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/scrollax.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/js/css3-animate-it.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/select2.min.js') ?>"></script>
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
        
        $('#detail_cart').load("<?php echo site_url('mycart/load_cart');?>");
        $('#detail_mini_cart').load("<?php echo site_url('mycart/load_mini_cart');?>");
        $('#count_shop_1').load("<?php echo site_url('mycart/load_count_cart');?>");
        $('#count_shop_2').load("<?php echo site_url('mycart/load_count_cart');?>");

        
        $(document).on('click','.product-quantity-minus',function(){
          var row_id      = $(this).attr("id"); 
          var quantity    = $(this).data("productqty");
          $.ajax({
            url : "<?php echo site_url('mycart/min_checkout_cart');?>",
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
            url : "<?php echo site_url('mycart/plus_checkout_cart');?>",
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
              $.ajax({
                url : "<?php echo site_url('mycart/add_count_cart');?>",
                method : "POST",
                data : {row_id: row_id},
                success: function(data){
                  $('#count_shop').html(data);
                }
              });
            }
          });
        });
      

      });
  </script>
  <?php if (isset($message)){?>
    <script>
      swal("<?= $message ?>", {
          buttons: false,
          icon: "success",
          title: "Sended to Skylinen Team",
      });
    </script>
  <?php } ?>
    
  </body>
</html>