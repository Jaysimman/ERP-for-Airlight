<div class="container">
    <h1>Bill Form</h1>
    <form action="/submitform/submitBillForm.php" method="post">
      <h3>Billing Detail</h3>
      <div class="form-group">
        <label for="billDate">Bill Date:</label>
        <input type="date" id="billDate" name="billDate" required>
      </div>
      <div class="form-group">
        <label for="billNo">Bill Number:</label>
        <input type="text" id="billNo" name="billNo" required>
      </div>
      <div class="form-group">
        <label for="orderConfDt">Order Confirmation Date:</label>
        <input type="date" id="orderConfDt" name="orderConfDt" required>
      </div>
      <div class="form-group">
        <label for="orderConfNo">Order Confirmation Number:</label>
        <input type="text" id="orderConfNo" name="orderConfNo" required>
      </div>
      <div class="form-group">
        <label for="custPoDt">Customer Purchase Order Date:</label>
        <input type="date" id="custPoDt" name="custPoDt" required>
      </div>
      <div class="form-group">
        <label for="offerPoNo">Offer Purchase Order Number:</label>
        <input type="text" id="offerPoNo" name="offerPoNo" required>
      </div>
      <div class="form-group">
        <label for="custCode">Customer code</label>
        <input type="text" id="custcode" name="custCode" required>
      </div>
      <div class="form-group">
        <label for="custName">Customer name</label>
        <input type="text" id="custName" name="custName" required>
      </div>
      <div class="form-group">
        <label for="typeOfReq">Type of Requirements</label>
        <!-- <input type="text" id="name" name="name" required> -->
        <select name="sel" id="sel">
          <option value="newInstal">New Installation</option>
          <option value="Service">Service Needs</option>
          <option value="updation">Setup Updation</option>
        </select>
      </div>
      <div class="form-group">
        <label for="orderValue">Order Value</label>
        <input type="text" id="orderValue" name="orderValue" required>
      </div>
      <div class="form-group">
        <label for="billValue">Bill Value</label>
        <input type="text" id="billValue" name="billValue" required>
      </div>
      <div class="form-group">
      <label for="mtrlDsptchDt">Material Dispatch Date:</label>
        <input type="date" id="mtrlDsptchDt" name="mtrlDsptchDt" required>
      </div>
      <div class="form-group">
        <label for="mtrlDsptchDetails">Material Dispatch Details:</label>
        <input type="text" id="mtrlDsptchDetails" name="mtrlDsptchDetails" required>
      </div>
      <h3>Material Packed By</h3>
      <div class="form-group">
        <label for="packEmpCode">Employee code</label>
        <input type="date" id="packEmpCode" name="packEmpCode" required>
      </div>
      <div class="form-group">
        <label for="pckEmpName">Employee Name</label>
        <input type="text" id="pckEmpName" name="pckEmpName" required>
      </div>
      <h3>Payment followed By</h3>
      <div class="form-group">
        <label for="payEmpCode">Empcode code</label>
        <input type="date" id="payEmpCode" name="payEmpCode" required>
      </div>
      <div class="form-group">
        <label for="payEmpName">Employee Name</label>
        <input type="text" id="payEmpName" name="payEmpName" required>
      </div>
      <button type="submit">Submit</button>
    </form>
</div>