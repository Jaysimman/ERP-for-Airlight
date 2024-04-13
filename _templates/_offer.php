<div class="container">
    <h1>Offer Form</h1>
    <form action="submit.php" method="post">
      <h3>Customer Details</h3>
      <div class="form-group">
        <label for="ofrdate">Offer Date:</label>
        <input type="date" id="ofr_date" name="date" required>
      </div>
      <div class="form-group">
        <label for="ofr_num">Offer Number:</label>
        <input type="text" id="ofr_num" name="ofr_num" required>
      </div>
      <div class="form-group">
        <label for="enq_date">Enquiry Date:</label>
        <input type="date" id="enq_dae" name="enq_date" required>
      </div>
      <div class="form-group">
        <label for="enq_num">Enquiry Number:</label>
        <input type="text" id="enq_num" name="enq_num" required>
      </div>
      <div class="form-group">
        <label for="cus_enq_date">Customer Enquiry Date:</label>
        <input type="date" id="cus_enq_date" name="date" required>
      </div>
      <div class="form-group">
        <label for="cus_enq_num">Customer Enquiry Number:</label>
        <input type="text" id="cus_enq_num" name="cus_enq_num" required>
      </div>
      <div class="form-group">
        <label for="cus_code">Customer Code</label>
        <input type="text" id="cus_cude" name="cus_code">
      </div>
      <div class="form-group">
        <label for="cus_name">Customer Name</label>
        <input type="text" id="cus_name" name="cus_name" required>
      </div>
      <div class="form-group">
        <label for="sel_req">Type of Requirements</label>
        <!-- <input type="text" id="name" name="name" required> -->
        <select name="sel" id="sel">
          <option value="newInstal">New Installation</option>
          <option value="Service">Service Needs</option>
          <option value="updation">Setup Updation</option>
        </select>
      </div>
      <div class="form-group">
        <label for="offer_val">Offer value</label>
        <input type="text" id="offer_val" name="offer_val" required>
      </div>
      <h3>Enquiry Received and Prepared by:</h3>
      <div class="form-group">
        <label for="emp_code">Employee Code</label>
        <input type="text" id="emp_code" name="emp_name">
      </div>
      <div class="form-group">
        <label for="emp_name">Employee Name:</label>
        <input type="text" id="emp_name" name="emp_name" required>
      </div>
      <div class="form-group">
        <label for="ofr_exp_date">Offer Expiry Date:</label>
        <input type="date" id="ofr_exp_date" name="ofr_exp_date" required>
      </div>
      <div class="form-group">
        <label for="odr_flwd_by">Order followed by</label>
        <input type="text" id="odr_flwd_by" name="odr_flwd_by" required>
      </div>
      <div class="form-group">
        <label for="enq_psd_to">Enquiry Passed to offer</label>
        <input type="text" id="enq_psd_to" name="enq_psd_to" required>
      </div>
      <!-- <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div> -->
      
      <div class="form-group">
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>