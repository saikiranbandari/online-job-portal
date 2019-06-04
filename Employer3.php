<html lang="en">
<head><style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>

<body Background="me.jpg">
                <h1 align="center">Employer Registration Form</h1>
            

                <form action="Employeinsert.php" method="post">
                  <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Company Name:</td>
                      <td>
                        <label>
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                    </tr>                   
                    <tr>
                      <td>Contact Person:</td>
                      <td>
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" />
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td>
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5"></textarea>
                        </label>
                     
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td>
                        <label>
                        <input type="text" name="txtCity" id="txtCity" />
                        </label>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td>
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td>
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                    </tr>
                    <tr>
                      <td>Area of Work: </td>
                      <td>
                      <input type="text" name="txtAreaWork" id="txtAreaWork" />
                    </tr>
                   <tr>
                      <td>position:</td>
                      <td><label>
                        <input type="text" name="position" id="position" />
                      </label></td>
                    </tr>
					 <tr>
                      <td>Experiance:</td>
                      <td><label>
                        <input type="text" name="ex" id="ex" />
                      </label></td>
                    </tr>
					 <tr>
                      <td>skills:</td>
                      <td><label>
                        <input type="text" name="sk" id="sk" />
                      </label></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                 </form>
              </div>
              
</body>
</html>
