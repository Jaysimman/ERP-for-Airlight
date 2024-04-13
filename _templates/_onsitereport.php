<div class="container">
    <h1>Onsite Report Form</h1>
    <form action="submit.php" method="post">
      <!-- <h3>Material Intent Form</h3> -->
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="enq_date" name="enq_date" required>
      </div>
      <h3>Lead Engineer:</h3>
      <div class="form-group">
        <label for="emp_code">Employee Code</label>
        <input type="text" id="emp_code" name="emp_code" required>
      </div>
      <div class="form-group">
        <label for="emp_name">Employee Name</label>
        <input type="text" id="emp_name" name="emp_name">
      </div>
      <div class="form-group">
        <label for="entry_time">Entry time</label>
        <input type="text" id="entry_time" name="entry_time" required>
      </div>
      <div class="form-group">
        <label for="exit_time">Exit time</label>
        <input type="text" id="exit_time" name="exit_time" required>
      </div>
      <h3>Support Engineer</h3>
      <div class="form-group">
        <label for="emp_Code">Employee Code</label>
        <input type="text" id="emp_Code" name="emp_Code">
      </div>
      <div class="form-group">
        <label for="emp_Name">Employee Name:</label>
        <input type="text" id="emp_Name" name="emp_Name" required>
      </div>
      <div class="form-group">
        <label for="entry_Time">Entry time</label>
        <input type="text" id="entry_Time" name="entry_Time" required>
      </div>
      <div class="form-group">
        <label for="exit_Time">Exit time</label>
        <input type="text" id="exit_Time" name="exit_Time" required>
      </div>
      <h3>Team Leader</h3>
      <div class="form-group">
        <label for="empCode">Employee Code</label>
        <input type="text" id="empCode" name="empCode">
      </div>
      <div class="form-group">
        <label for="empName">Employee Name:</label>
        <input type="text" id="empName" name="empName" required>
      </div>
      <div class="form-group">
        <label for="entryTime">Entry time</label>
        <input type="text" id="entryTime" name="entryTime" required>
      </div>
      <div class="form-group">
        <label for="exitTime">Exit time</label>
        <input type="text" id="exitTime" name="exitTime" required>
      </div>
      <div class="form-group">
        <label for="OC_no">Order Confirmation No </label>
        <input type="text" id="OC_no" name="OC_number">
      </div>
      <div class="form-group">
        <label for="OC_date">Order Confirmation Date</label>
        <input type="date" id="OC_date" name="OC_date">
      </div>
      <div class="form-group">
        <label for="service_intent_no">Service Intent Number </label>
        <input type="text" id="service_intent_no" name="service_intent_no">
      </div>
      <div class="form-group">
        <label for="service_intent_date">Service Intent Date</label>
        <input type="date" id="service_intent_date" name="service_intent_date">
      </div>
      <div class="form-group">
        <label for="site_location">Service Intent Date</label>
        <input type="text" id="site_location" name="site_location">
      </div>
      <div class="form-group">
        <label for="typeOfsystem">Type of System</label>
        <!-- <input type="text" id="name" name="name" required> -->
        <select name="sel" id="sel">
          <option value="newInstal">New Installation</option>
          <option value="Service">Service Needs</option>
          <option value="updation">Setup Updation</option>
        </select>
      </div>
      <div class="form-group">
        <label for="borb">Visit is billable or non billable </label>
        <input type="text" id="borb" name="borb">
      </div>
      <h3>Customer_contact_person</h3>
      <div class="form-gruop">
        <label for="cc_name">Name</label>
        <input type="text" id="cc_name" name="cc_name">
      </div>
      <div class="form-group">
        <label for="ph_no">Phone Number</label>
        <input type="text" id="ph_no" name="ph_no">
      </div>
      <div class="form-group">
        <label for="rep_name">representative name</label>
        <input type="text" name="rep_name" id="rep_name">
      </div>
      <div class="form-group">
        <label for="service_req">Service Requirement</label>
        <!-- <input type="text" id="name" name="name" required> -->
        <select name="sel" id="sel">
          <option value="newInstal">Problem</option>
          <option value="Service">Installation</option>
          <option value="updation">Deletion</option>
        </select>
      </div>
      <div class="form-group">
        <label for="current_status">Current_status</label>
        <input type="text" name="current_status" id="current_status">
      </div>
      <div class="form-group">
        <label for="overall_exe_plan">overall execution plan</label>
        <input type="text" name="overall_exe_plan" id="overall_exe_plan">
      </div>
      <div class="form-group">
        <label for="todays_plan">Today's plan</label>
        <input type="text" name="todays_plan" id="todays_plan">
      </div>
      <div class="form-group">
        <label for="todays_progress">Today's Progress</label>
        <input type="text" name="todays_progress" id="todays_progress">
      </div>
      <div class="form-group">
        <label for="expense_statement">Expense statement</label>
        <input type="text" name="expense_statement" id="expense_statement">
      </div>
      <!-- <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div> -->
      <div class="form-group">
        <label for="message">Fund & Material support requirements</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>