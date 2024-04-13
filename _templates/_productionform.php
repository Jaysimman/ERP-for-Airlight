<div class="container">
    <h1>production Form</h1>
    <form action="submit.php" method="post">
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
      </div>
      <h3>Production Engineer</h3>
      <div class="form-group">
        <label for="emp_code">Employee code</label>
        <input type="text" id="emp_code" name="emp_code" required>
      </div>
      <div class="form-group">
        <label for="employee_name">Employee Name</label>
        <input type="text" id="employee_name" name="employee_name">
      </div>
      <h3>Team Leader</h3>
      <div class="form-group">
        <label for="emp_Code">Employee Code</label>
        <input type="text" id="emp_Code" name="emp_Code" required>
      </div>
      <div class="form-group">
        <label for="employee_name">Employee Name</label>
        <input type="text" id="employee_name" name="employee_name">
      </div>

      <div class="form-group">
        <label for="pino">Production Intent Number</label>
        <input type="text" id="pino" name="pino" required>
      </div>
      <div class="form-group">
        <label for="item_quantity">Item Quantity</label>
        <input type="text" id="item_quantity" name="item_quantity" required>
      </div>
      <div class="form-group">
        <label for="process_desc">Process description</label>
        <input type="text" id="process_desc" name="process_desc" required>
      </div>
      <div class="form-group">
        <label for="ppwq">Process plan with quantity</label>
        <input type="text" id="ppwq" name="ppwq" required>
      </div>
      <div class="form-group">
        <label for="ppcq">Process Completed Quantity</label>
        <input type="text" id="ppcq" name="ppcq" required>
      </div>
      <div class="form-group">
        <label for="message">Remarks:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="team_message">Team Leader Remarks:</label>
        <textarea id="message" name="team_message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>