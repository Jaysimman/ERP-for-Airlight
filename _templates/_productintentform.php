<div class="container">
    <h1>Product Intent Form</h1>
    <form action="submit.php" method="post">
      <h3>Material Intent Form</h3>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="pro_int_num">Product Intent Number:</label>
        <input type="text" id="pro_int_num" name="pro_int_num" required>
      </div>
      <div class="form-group">
        <label for="item_code">Item Code</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="itm_desc">Item Description</label>
        <input type="text" id="itm_desc" name="itm_desc" required>
      </div>
      <div class="form-group">
        <label for="name">Item Quantity</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Intented by</h3>
      <div class="form-group">
        <label for="code">Employee Code</label>
        <input type="text" id>
      </div>
      <div class="form-group">
        <label for="name">Employee Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <h3>Intent Received by</h3>
      <div class="form-group">
        <label for="code">Employee Code</label>
        <input type="text" id>
      </div>
      <div class="form-group">
        <label for="name">Employee Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Status of Emergency</label>
        <input type="text" id="name" name="name" required>
      </div>
      <!-- <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div> -->
      <div class="form-group">
        <label for="name">Product Plan and Schedule:</label>
        <input type="text" id="pps" name="name" required>
      </div>
      <div class="form-group">
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>