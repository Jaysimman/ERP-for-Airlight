<div class="container">
    <h1>QCN for materials</h1>
    <form action="submit.php" method="post">
      <h3>Customer Details</h3>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="qcn-num">QCN Number:</label>
        <input type="text" id="qcn-num" name="qcn-num" required>
      </div>
      <div class="form-group">
        <label for="itm-code">Item Code</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="itm-desc">Item Description</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="rcd-quan">Received Quantity</label>
        <input type="text-quan" id="rcd-quan" name="rcd-quan" required>
      </div>
      <div class="form-group">
        <label for="apt-quan">Accepted Quantity</label>
        <input type="text" id="apt-quan" name="apt-quan" required>
      </div>
      <div class="form-group">
        <label for="rjt-quan">Rejected Quantity</label>
        <input type="text" id="rjt-quan" name="rjt-quan" required>
      </div>
      <div class="form-group">
        <label for="rcn-rej">Reason for Rejection</label>
        <input type="text" id="rcn-rej" name="rcn-rej" required>
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
      <div class="form-group">
        <label for="name">QCN Done by</label>
        <input type="text" id="name" name="name" required>
      </div>
    </form>
  </div>