<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<style>

.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


</style>

<body>









    <div class="container">
    <h1>Employee Screen</h1>

    <form action="http://localhost/lms/index.php/login/file_leave" method="post">
    <table class="table table-success table-striped">
        <th>Leaves Remain</th>
        <tr>
            <th>EL</th>
            <th>VL</th>
            <th>HPL</th>

            <th>CL</th>

        </tr>
        <td><?php echo $leave_info->el_bal ?></td>
        <td><?php echo $leave_info->vl_bal ?></td>
        <td><?php echo $leave_info->hpl_bal ?></td>
        <td><?php echo $leave_info->cl_bal ?></td>
    </table>

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?php echo $name->name ?>">
    
</input>
    <label for="emp_id">Emp ID</label>
    <input type="text" name="emp_id" id="emp_id" value="<?php echo $name->emp_id ?>">
    
</input>
    <label for="leave_type">Choose a Leave type:</label>

<select name="leave_type" id="leave_type">
  <option value="EL">EL</option>
  <option value="VL">VL</option >
  <option value="HPL">HPL</option>
  <option value="CL">CL</option>
</select>

<label for="person_to_leave_duties">Person To leave duties</label>
    <input type="text" name="person_to_leave_duties" id="person_to_leave_duties">


    <label for="From">From:</label>
<input type="date" id="From" name="From">

<label for="To">To:</label>
<input type="date" id="To" name="To">

<label for="approving_emp">Approving Emp ID</label>
    <input type="text" name="approving_emp" id="approving_emp">

    <input type="submit">File</input>

</form>
    </div>

</body>
</html>