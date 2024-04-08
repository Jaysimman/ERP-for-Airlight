<div class="container">
    <h1>Enquiry Form</h1>
    <form action="submit.php" method="post">
      <h3>Customer Details</h3>
      <div class="form-group">
        <label for="code">Enquiry Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Enquiry Number:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Customer Code</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="name">Customer Name</label>
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
        <label for="name">Source of Enquiry</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Enquiry Received By</h3>
      <div class="form-group">
        <label for="code">Employee Code</label>
        <input type="text" id>
      </div>
      <div class="form-group">
        <label for="name">Employee Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Enquiry Passed for offer</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Enquiry Passed to offer</label>
        <input type="text" id="name" name="name" required>
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