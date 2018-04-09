<head>
  <style>.carousel-inner > .item > img { width:100%; height:500px; } </style>
</head>
<div class="container">
  <section>
    <div class="container fix">
      <div class="row">

        <div >
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active"> <img src="img/book22.jpg" alt="Book1"> 
              </div>
              <div class="item"> <img src="img/book4.jpg" alt="Book2"> 
              </div>
              <div class="item"> <img src="img/book32.jpg" alt="Book3"> 
              </div>
              <div class="item"> <img src="img/book5.jpg" alt="Book4"> 
              </div>
            </div>

            <!-- Controls --> 
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
          </div>
        </div>
      </div>
    </div>
    <hr>
    
  </section>
  
</div>

<div style="margin-left:50px; width:100%">

    <?php 
	include("giaodich.php");
	?>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button  type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="text-primary">Đăng nhập</h4>
      </div>
      <div class="modal-body">
        <form id="form_login" action="index.php" method="post">
          <div class="form-group input-group"> 
           <input type="text" class="form-control" name="username_login" placeholder="Nhập Username" required>
           <input type="password" class="form-control" name="pass_login" placeholder="Nhập mật khẩu" required>
           <input type="checkbox" id="check_login">Remember me?
           <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Đăng nhập</button>
         </div>
       </div>
       <div class="modal-footer">
        <button id="login_lost_btn" type="button" class="btn btn-link" >Quên mật khẩu ?</button>
        <button id="login_register_btn" type="button" class="btn btn-link" >Đăng ký</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>




<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-miss="modal">&times;</button>
      <h4 class="text-primary">Register</h4>
    </div>

    <div class="modal-body">
      <form id="form_regis">
        <div class="form-group">
         <label class="col-sm-3 control-label " for="Username">Username</label>
         <div class="col-sm-9">
           <input type="text" name="res_username" placeholder="Username" autofocus>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-3 control-label" for="firstname">Full Name</label>
         <div class="col-sm-9" >
           <input type="text" name="res_fullname" class="form-control" placeholder="Full Name" autofocus required>
           <span class="help-block">Ví dụ: Nguyễn Hữu Thịnh</span> 
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-3 control-label" for="email">Email</label>
         <div class="col-sm-9">
           <input type="text" id="res_email" class="form-control" placeholder="Nhập Email" autofocus required>
         </div>
       </div>
       <div class="form-group">
         <label class="col-sm-3 control-label" id="res_pass" for="pass">Password</label>
         <div class="col-sm-9">
          <input type="password" class="form-control" placeholder="Nhập Password" autofocus required>
        </div>
      </div>

      <div class="form-group">
        <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
        <div class="col-sm-9">
          <input type="date" id="birthDate" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="country" class="col-sm-3 control-label">City</label>
        <div class="col-sm-9">
          <select id="city" class="form-control">
            <option>Afghanistan</option>
            <option>Bahamas</option>
            <option>Cambodia</option>
            <option>Denmark</option>
            <option>Ecuador</option>
            <option>Fiji</option>
            <option>Gabon</option>
            <option>Haiti</option>
          </select>
        </div>
      </div> <!-- /.form-group -->

      <div class="form-group">
       <label for="gender" class="col-sm-3 control-label"> Gender</label>
       <div class="col-sm-9">
         <select id="gender" class="form-control">
           <option>Male</option>
           <option>Female</option>
           <option>Unknow</option>
         </select>
       </div>

     </div>

     <div class="form-group">
       <label class="col-sm-3 control-label" for="sdt">Số điện thoại</label>
       <div class="col-sm-9">
        <input type="tel" class="form-control" placeholder="Nhập số điện thoại" autofocus required>
      </div>
    </div>
    <div class="form-group">
     <label class="col-sm-3 control-label" for="address">Address</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" placeholder="Địa chỉ liên hệ" autofocus>
     </div>
   </div>

   <div class="form-group">
    <div class="col-sm-9 col-sm-offset-3">
      <div class="checkbox">
        <label>
          <input type="checkbox">I accept <a href="#">terms</a>
        </label>
      </div>
    </div>
  </div> <!-- /.form-group -->
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>
</div>

<div class="modal-footer">
  <button id="res_lost_pass" type="button" class="btn btn-link" >Quên mật khẩu?</button>
  <button id="res_login" type="button" class="btn btn-link" >Đăng nhập</button>
</div>
</div>
</div>
</div>