<div class="container">
    <h1>Enquiry Form</h1>
    <form action="submit.php" method="post">
      <h3>Material Intent Form</h3>
      <div class="form-group">
        <label for="code">Enquiry Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="name">Intent Number:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Item Code</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="name">Item Description</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="name">Quantity</label>
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
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>