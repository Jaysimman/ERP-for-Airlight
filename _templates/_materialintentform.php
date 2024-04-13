<div class="container">
    <h1>Material Intent Form</h1>
    <form action="submit.php" method="post">
      <h3>Material Intent Form</h3>
      <div class="form-group">
        <label for="enq_date">Enquiry Date:</label>
        <input type="date" id="enq_date" name="enq_date" required>
      </div>
      <div class="form-group">
        <label for="int">Intent Number:</label>
        <input type="text" id="int_num" name="int_num" required>
      </div>
      <div class="form-group">
        <label for="ite_code">Item Code</label>
        <input type="text" id="Ite_code" name="ite_code">
      </div>
      <div class="form-group">
        <label for="ite_desc">Item Description</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" id="quantity" name="quantity" required>
      </div>
      <h3>Intented by</h3>
      <div class="form-group">
        <label for="emp_code">Employee Code</label>
        <input type="text" id="emp_code" name="emp_code">
      </div>
      <div class="form-group">
        <label for="emp_name">Employee Name:</label>
        <input type="text" id="emp_name" name="nnName" required>
      </div>
      <h3>Intent Received by</h3>
      <div class="form-group">
        <label for="emp_code">Employee Code</label>
        <input type="text" id="emp_code" name="emp_code" required>
      </div>
      <div class="form-group">
        <label for="emp_name">Employee Name:</label>
        <input type="text" id="emp_name" name="emp_name" required>
      </div>
      <div class="form-group">
        <label for="state_of_emer">Status of Emergency</label>
        <input type="text" id="state_of_emer" name="state_of_emer" required>
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