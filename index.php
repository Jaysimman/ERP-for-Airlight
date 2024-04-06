<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enquiry Form</title>
  <link rel="stylesheet" href="/airlighterp/css/style.css">
</head>
<body>
    <div id="branding" class="site-branding branding table-cell-mid">
		<div id="site-logo" class="site-logo-image">
		  <div id="site-logo-image"><h1 id="site-title" class="site-title" itemprop="headline">
      <img width="230" height="90" src="https://airlight.in/wp-content/uploads/2017/09/Airlight-thinking-ahead-logo-1111111.png" class="custom-logo" alt="Airlight" decoding="async"></div></h1></div>		</div>
	</div>
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
</body>
</html>
