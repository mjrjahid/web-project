
<style>

* {
    box-sizing: border-box;
}
 
body,
html {
    height: 100%;
    min-height: 100%;
}
 
body {
    margin: 0;
  padding: 50px;
  font-family: sans-serif;
  background:  #7A46F1;

}
/* Credit Card */
.credit-card {
    width: 360px;
    height: 400px;
    margin: 60px auto 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #3407F7;
    box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}
.form-header {
    height: 60px;
    padding: 20px 30px 0;
    border-bottom: 1px solid #e1e8ee;
}
 
.form-body {
    height: 340px;
    padding: 30px 30px 20px;
}

.card-number,
.cvv-input input,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.cvv-details,
.cvv-input input,
.month select,
.year select {
    opacity: .7;
    color: #86939e;
}


.card-number {
    width: 100%;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
}


.cvv-input input {
    float: left;
    width: 145px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: #fff;
}
 
.cvv-details {
    font-size: 12px;
    font-weight: 300;
    line-height: 16px;
    float: right;
    margin-bottom: 20px;
}
 
.cvv-details p {
    margin-top: 6px;
}

.month select,
.year select {
    width: 145px;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #A89ED5;
    border-radius: 6px;
    
    background-position: 85% 50%;
    -moz-appearance: none;
    -webkit-appearance: none;
}
 
.month select {
    float: left;
}
 
.year select {
    float: right;
}


.cvv-input input {
    float: left;
    width: 145px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: #fff;
}
 
.cvv-details {
    font-size: 12px;
    font-weight: 300;
    line-height: 16px;
    float: right;
    margin-bottom: 20px;
}
 
.cvv-details p {
    margin-top: 6px;
}

.proceed-btn{
  background-color:#9289BA;

}
.paypal-btn{
  background-color:#9289BA; 
}
</style>
</head>
<body>


<form class="credit-card">
  <div class="form-header">
    <h4 class="title">Credit card detail</h4>
  </div>
  <br>
 <a href="http://www.ctflatfeemlslisting.com"><img alt="flat fee mls" title="flat fee mls" src="http://www.free-credit-card-logos.com/paypal_mc_visa_amex_disc_210x80.gif" width="210" height="80" border="0"  /></a>



  <div class="form-body">
    <!-- Card Number -->
    <input type="text" class="card-number" placeholder="Card Number">
 
    <!-- Date Field -->
    <div class="date-field">
      <div class="month">
        <select name="Month">
          <option value="january">January</option>
          <option value="february">February</option>
          <option value="march">March</option>
          <option value="april">April</option>
          <option value="may">May</option>
          <option value="june">June</option>
          <option value="july">July</option>
          <option value="august">August</option>
          <option value="september">September</option>
          <option value="october">October</option>
          <option value="november">November</option>
          <option value="december">December</option>
        </select>
      </div>
      <div class="year">
        <select name="Year">
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
        </select>
      </div>
    </div>
 
    <!-- Card Verification Field -->
    <div class="card-verification">
      <div class="cvv-input">
        <input type="text" placeholder="CVV">
      </div>
      <div class="cvv-details">
        <p>3 or 4 digits usually found <br> on the signature strip</p>
      </div>
    </div>
 
    <!-- Buttons -->
    <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
    <button type="submit" class="paypal-btn"><a href="#">Pay With</a></button>
  </div>
</form>

