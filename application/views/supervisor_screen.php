<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body {
  font-family: "Karla", sans-serif;
  background-color: #fff;
  min-height: 100vh; }

.brand-wrapper {
  padding-top: 7px;
  padding-bottom: 8px; }
  .brand-wrapper .logo {
    height: 25px; }

.login-section-wrapper {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  padding: 68px 100px;
  background-color: #fff; }
  @media (max-width: 991px) {
    .login-section-wrapper {
      padding-left: 50px;
      padding-right: 50px; } }
  @media (max-width: 575px) {
    .login-section-wrapper {
      padding-top: 20px;
      padding-bottom: 20px;
      min-height: 100vh; } }

.login-wrapper {
  width: 300px;
  max-width: 100%;
  padding-top: 24px;
  padding-bottom: 24px; }
  @media (max-width: 575px) {
    .login-wrapper {
      width: 100%; } }
  .login-wrapper label {
    font-size: 14px;
    font-weight: bold;
    color: #b0adad; }
  .login-wrapper .form-control {
    border: none;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    padding: 9px 5px;
    min-height: 40px;
    font-size: 18px;
    font-weight: normal; }
    .login-wrapper .form-control::-webkit-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-moz-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control:-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::placeholder {
      color: #b0adad; }
  .login-wrapper .login-btn {
    padding: 13px 20px;
    background-color: #fdbb28;
    border-radius: 0;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 14px; }
    .login-wrapper .login-btn:hover {
      border: 1px solid #fdbb28;
      background-color: #fff;
      color: #fdbb28; }
  .login-wrapper a.forgot-password-link {
    color: #080808;
    font-size: 14px;
    text-decoration: underline;
    display: inline-block;
    margin-bottom: 54px; }
    @media (max-width: 575px) {
      .login-wrapper a.forgot-password-link {
        margin-bottom: 16px; } }
  .login-wrapper-footer-text {
    font-size: 16px;
    color: #000;
    margin-bottom: 0; }

.login-title {
  font-size: 30px;
  color: #000;
  font-weight: bold;
  margin-bottom: 25px; }

.login-img {
  width: 100%;
  height: 100vh;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: left;
     object-position: left; }

.footer-link {
  position: absolute;
  bottom: 1rem;
  text-align: center;
  width: 100%; }

/*# sourceMappingURL=login.css.map */
</style>

</head>
<body>

<nav class="navbar navbar-dark bg-primary" style="height:70px;">
  <!-- Navbar content -->
  lorem
</nav>

<div class = "container">
    
    <h3></h3>
    
    <?php foreach ($appr_leave_info as $lf): ?>
        <div class="card">
  <div class="card-body">
     <table class="table table-success table-striped">
        <th>Leaves Remain</th>
        <tr>
            <th>EL</th>
            <th>VL</th>
            <th>HPL</th>

            <th>CL</th>

        </tr>
        <td> <?php echo $lf->el_bal ?></td>
        <td><?php echo $lf->vl_bal ?></td>
        <td><?php echo $lf->hpl_bal ?></td>
        <td><?php echo $lf->cl_bal ?></td>
    </table>
    <div class="card text-white bg-dark mb-3" >
  <div class="card-body">
    This is some text within a card body.
  
    <table width="100%">
        <tr>
            <td>Empl details</td>
            <td>Name/<?php echo $lf->submitted_by_empno ?></td>
        </tr>
        <tr>
            <td>Purpose of leave</td>
            <td>purpose</td>
        </tr>
        <tr>
            <td>From</td>
            <td>from</td>
        </tr>
        <tr>
            <td>To</td>
            <td></td>
        </tr>
        <tr>
            <td>Application Strtus</td>
            <td><?php echo $lf->status ?></td>

        </tr>
        <tr>
            <td>Choose an action:</td>
            <td>
            <select name="action_sel" id="action_sel">
  <option value="Approve">Approve</option>
  <option value="Forward">Forward</option>
  <option value="Back">Back</option>
  <option value="Reject">Reject</option>
</select>
            </td>
        </tr>
        <tr>
        
        </tr>
    </table>
    </div>
    <input type="submit" class="btn btn-info btn-lg"></input>
</div>

    
    </div>
    </div>

    <?php endforeach; ?>

    </div>

</body>
</html>