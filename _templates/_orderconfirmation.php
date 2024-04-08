<div class="container">
    <h1>Order Confirmation Form</h1>
    <form action="submit.php" method="post">
      <h3>Customer Details</h3>
      <div class="form-group">
        <label for="code">Order Confirmation Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Order Confirmation Number:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="code">Offer Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Offer Number:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="code">Customer Purchase Order Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Offer Purchase Order Number:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Customer code</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Customer name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Type of Requirements</label>
        <!-- <input type="text" id="name" name="name" required> -->
        <select name="sel" id="sel">
          <option value="newInstal">New Installation</option>
          <option value="Service">Service Needs</option>
          <option value="updation">Setup Updation</option>
        </select>
      </div>
      <div class="form-group">
        <label for="name">Order Value</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Order Received By</h3>
      <div class="form-group">
        <label for="code">Employee code</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Order Confirmed By</h3>
      <div class="form-group">
        <label for="code">Empcode code</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Materaial followed by</h3>
       <div class="form-group">
        <label for="code">Employee code</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>