<div class="container">
    <h1>Order Confirmation Form</h1>
    <form action="submit.php" method="post">
      <h3>Customer Details</h3>
      <div class="form-group">
        <label for="oc_date">Order Confirmation Date:</label>
        <input type="date" id="oc_date" name="oc_date" required>
      </div>
      <div class="form-group">
        <label for="oc_num">Order Confirmation Number:</label>
        <input type="text" id="oc_num" name="oc_num" required>
      </div>
      <div class="form-group">
        <label for="ofr_date">Offer Date:</label>
        <input type="date" id="ofr_date" name="ofr_date" required>
      </div>
      <div class="form-group">
        <label for="ofr_num">Offer Number:</label>
        <input type="text" id="ofr_num" name="ofr_num" required>
      </div>
      <div class="form-group">
        <label for="cpod">Customer Purchase Order Date:</label>
        <input type="date" id="cpod" name="cpod" required>
      </div>
      <div class="form-group">
        <label for="cpon">Offer Purchase Order Number:</label>
        <input type="text" id="cpon" name="cpon" required>
      </div>
      <div class="form-group">
        <label for="cus_code">Customer code</label>
        <input type="text" id="cus_code" name="cus_code" required>
      </div>
      <div class="form-group">
        <label for="cus_name">Customer name</label>
        <input type="text" id="cus_name" name="cus_name" required>
      </div>
      <div class="form-group">
        <label for="type_of_req">Type of Requirements</label>
        <!-- <input type="text" id="name" name="name" required> -->
        <select name="sel" id="sel">
          <option value="newInstal">New Installation</option>
          <option value="Service">Service Needs</option>
          <option value="updation">Setup Updation</option>
        </select>
      </div>
      <div class="form-group">
        <label for="ord_name">Order Value</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Order Received By</h3>
      <div class="form-group">
        <label for="emp_code">Employee code</label>
        <input type="text" id="emp_date" name="emp_code" required>
      </div>
      <div class="form-group">
        <label for="emp_name">Employee Name</label>
        <input type="text" id="emp_name" name="emp_name" required>
      </div>
      <h3>Order Confirmed By</h3>
      <div class="form-group">
        <label for="code">Empcode code</label>
        <input type="text" id="emp_code" name="emp_code" required>
      </div>
      <div class="form-group">
        <label for="emp_name">Employee Name</label>
        <input type="text" id="emp_name" name="emp_name" required>
      </div>
      <h3>Materaial followed by</h3>
       <div class="form-group">
        <label for="emp-code">Employee code</label>
        <input type="text" id="emp-code" name="emp_code" required>
      </div>
      <div class="form-group">
        <label for="emp-name">Employee Name</label>
        <input type="text" id="emp_name" name="emp_name" required>
      </div>
      <div class="form-group">
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>