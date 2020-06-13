  <section class="checkout">
    <div class="row">
      <div class="col-lg-6 form-checkout">
        <div class="logo">  
          <h3>Quotation</h3>
          <div class="clearflix"></div>
        </div>
        <form action="<?= base_url('send_email') ?>" method="post">
          <div class="row">
            <div class="form-group col-md-12 bd-bottom">
              <label for="email">Email Address</label>
              <input type="hidden" name="id" value="<?= $id ?>">
              <input type="email" name="email" class="form-control" id="email" placeholder="example@example.com" autocomplete="off" required>
            </div>
            <div class="form-group col-md-6">
              <label for="firstname">First Name</label>
              <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" autocomplete="off" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastname">Last Name</label>
              <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" autocomplete="off" required>
            </div>
            <div class="form-group col-md-12">
              <label for="inputcompany">Company (Optional)</label>
              <input type="text" name="company" class="form-control" id="inputcompany" placeholder="Company" autocomplete="off" required>
            </div>
            <div class="form-group col-md-12">
              <label for="inputnumberphone">Phone Number</label>
              <input type="text" name="phone_number" class="form-control" id="inputnumberphone" placeholder="+62 81234567" autocomplete="off" required>
            </div>
            <div class="form-group col-md-12">
              <label for="inputwa">WhatsApp Number</label>
              <input type="text" name="wa" class="form-control" id="inputwa" placeholder="+62 81234567" autocomplete="off" required>
            </div>
            <div class="form-group col-md-12">
              <label for="inputAddress">Address</label>
              <textarea class="form-control" name="address" id="inputAddress" rows="5" placeholder="Apartment, studio, or floor" required></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" name="city" class="form-control" id="inputCity" autocomplete="off" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="" class="form-control" name="state" required>
                <option selected>Choose ... </option>
                
                <?php foreach($datalist as $row):?>
                <option><?php echo $row->name ?></option>
                <?php endforeach; ?>
                
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="zip" autocomplete="off" required>
            </div>
            <div class="form-check col-lg-12">
              <input type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck" required>
                This billing same with shipping address
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-submit-checkout">Get Quotation</button>
          </div>
        </form>
      </div>
      <div class="col-lg-6 list-checkout">
        <h3 class="checkout-title">Order Summary</h3>
        <div class="clearflix"></div>
        <div class="row">
          <div class="col-lg-12">
            <div class="checkout-cart-item" id="detail_cart">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  