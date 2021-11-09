<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h1>Employee Screen</h1>

    <table>
        <th>Leaves Remain</th>
        <tr>
            <th>EL</th>
            <th>VL</th>
            <th>HPL</th>

            <th>CL</th>

        </tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
    </table>

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="emp_id">Emp ID</label>
    <input type="text" name="emp_id" id="emp_id">

    <label for="leave_type">Choose a Leave type:</label>

<select name="leave_type" id="leave_type">
  <option value="EL">EL</option>
  <option value="VL">VL</option>
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


    

</body>
</html>