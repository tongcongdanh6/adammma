<style>
/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: myriad-regular;
}

.loginmodal-container strong {
  text-align: center;
  font-size: 1.8em;
  font-family: myriad-bold;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: myriad-regular;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  /* border-radius: 10px;
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: myriad-bold;
  font-size: 20px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  /*background-color: #357ae8; */
  background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
.img_logo_login
{
    margin-bottom:15px;
}
</style>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLoginLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog text-center">
                <div class="loginmodal-container">
                    <img class="img_logo_login" src="public/images/logo_adam_academy.jpg" width="auto" height="100"><br>
                  <form>
                    <input type="text" name="user" placeholder="Nhập tên tài khoản">
                    <input type="password" name="pass" placeholder="Nhập mật khẩu">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Đăng nhập">
                  </form>
                    
                    <div class="login-help">
                        <a href="#">Đăng ký</a> - <a href="#">Quên mật khẩu</a>
                    </div>
                </div>
          </div>
</div>