<div class="container">
    <h1>Purchase Intent Form</h1>
    <form action="submit.php" method="post">
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="pur-int-num">Purchase Intent Number:</label>
        <input type="text" id="pur-int-num" name="pur-int-num" required>
      </div>
      <h3>Purchase Intent issued by</h3>
      <div class="form-group">
        <label for="emp-code">Employee Code</label>
        <input type="text" id="emp-code" name="emp-code" required>
      </div>
      <div class="form-group">
        <label for="emp-name">Employee Name:</label>
        <input type="text" id="emp-name" name="emp-name" required>
      </div>
      <h3>Purchase Intent Received by</h3>
      <div class="form-group">
        <label for="empt-code">Employee Code</label>
        <input type="text" id="empt-code" name="empt-code" required>
      </div>
      <div class="form-group">
        <label for="pur-val">Purchase value</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="sch-fr">Scheduled of fund Requirement</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="esmo">Expected Schedule of material at office</label>
        <input type="text" id="esmo" name="esmo" required>
      </div>
      <div class="form-group">
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>