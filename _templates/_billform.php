<div class="container">
    <h1>Bill Form</h1>
    <form action="submit.php" method="post">
      <h3>Billing Detail</h3>
      <div class="form-group">
        <label for="code">Bill Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Bill Number:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="code">Order Confirmation Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Order Confirmation Number:</label>
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
      <div class="form-group">
        <label for="name">Bill Value</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
      <label for="code">Material Dispatch Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Material Dispatch Details:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Material Packed By</h3>
      <div class="form-group">
        <label for="code">Employee code</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Payment followed By</h3>
      <div class="form-group">
        <label for="code">Empcode code</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <button type="submit">Submit</button>
    </form>
</div>