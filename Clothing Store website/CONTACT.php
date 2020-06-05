<style >
  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #7A46F1;;
}
.column {
  float: left;
  width: 100%;
  padding: 30px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2> <br>
    <p>Swing by for a cup of coffee, or leave us a message:</p><br>
  </div>
  <div class="row">
    <div class="column" style="text-align:center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.306831052183!2d90.40234235805343!3d23.796767996141686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70fdc3dbb69%3A0x5c38129562ae7a7c!2sRd+No+%23+23%2C+Dhaka+1212!5e0!3m2!1sen!2sbd!4v1552659220664" width="600" height="450" width="100" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="column" style="text-align:center">
      <form action="/action_page.php" style="text-align:center">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <br><label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <br><label for="country">Country</label>
        <br><select id="country" name="country">
          <option value="australia">India</option>	
          <option value="australia" selected="Bangladesh">Bangladesh</option>	
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select><br>
        <label for="subject">Message</label><br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
