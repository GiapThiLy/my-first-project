<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <h2><font color="white">GIÁP THỊ LÝ-20156013</font></h2>
<div id="wrap">
  <div id="header">    
    <div id="header-tabs">
    <ul>
        <li id="current"><a href="#"><span>Tab1</span></a></li>
        <li><a href="#"><span>Tab2</span></a></li>
		<li><a href="#"><span>Tab3</span></a></li>                
        <li><a href="#"><span>Tab4</span></a></li>
        <li><a href="#"><span>Tab5</span></a></li>
        <li><a href="#"><span>Tab6</span></a></li>
        <li><a href="#"><span>Tab7</span></a></li>
        <li><a href="#"><span>Tab8</span></a></li>
    </ul>
    </div>    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p></p>
  </div>
  <div id="content-wrap">
    <div id="main">
    	<h1 align="center">Phiếu Đăng Kí Môn Học</h1>
        <form id="frm_info" name="frm_info" method="post" action="index.php" onsubmit="return CheckForm()">
        <table width="100%" border="1" id="table">
          <tr>
            <td width="20%"><b>Họ Tên</b></td>
            <td width="30%"><input name="txtname" type="text" id="textfield" tabindex="1" size="30" maxlength="50" /></td>
            <td width="20%"><b>Điện thoại</b></td>
            <td width="30%"><input type="text" name="txtphone" id = "textfield" tabindex="2" size="30" maxlength="50"></td>
          </tr>
          <tr>
            <td><b>Ngày Sinh</b></td>
            <td><input name="txtdate" type="date" id="date" tabindex="3" size="30" maxlength="50" /></td>
            <td><b>Nơi Sinh</b></td>
            <td><input type="text" name="txtDiaCHi" id="textfield" tabindex="4" size="30" maxlength="50"></td>
          </tr>
          <tr>
            <td><b>Môn Học</b></td>
            <td>
              <select name="selhomeland" id="homeland" tabindex="5">
                <option value="Tin Học Căn Bản" selected="selected" ><b>Tin Học Căn Bản</b></option>
                <option value="Word" selected="selected"><b>Word</b></option>
                <option value="Excel" selected="selected"><b>Excel</b></option>
                <option value="Access1" selected="selected"><b>Access1</b></option>
                <option value="PowerPoint" selected="selected"><b>PowerPoint</b></option>
              </select>
            </td>
            <td><b>Ca Học</b></td>
            <td>
              <select name="selhomeland" id="homeland" tabindex="6">
                <option value="AB" selected="selected">AB</option>
                <option value="CJ" selected="selected">CJ</option>
                <option value="DE" selected="selected">DE</option>
                <option value="HI" selected="selected">HI</option>
                <option value="KL" selected="selected">KL</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Ngày</b></td>
            <td>
              <select name="selhomeland" id="selhomeland" tabindex="7">
                <option value="246" selected="selected"><b>246</b>/option>
                <option value="357" selected="selected"><b>357</b></option>
                <option value="234567" selected="selected"><b>234567</b></option>
                <option value="Chủ Nhật" selected="selected"><b>Chủ Nhật</b></option>
              </select>
            </td>
            <td><b>Giờ</b></td>
            <td>
              <select name="selhomeland" id="selhomeland" tabindex="8">
                <option value="7h00->11h00" selected="selected"><b>7h00->11h00</b></option>
                <option value="7h30->17h00" selected="selected"><b>7h30->17h00</b></option>
                <option value="11h00->13h00" selected="selected"><b>11h00->13h00</b></option>
                <option value="13h00->17h00" selected="selected"><b>13h00->1700</b></option>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Khai Giảng</b></td>
            <td><input type="text" name="txtKhaiGiang" id="textfield" tabindex="9" size="30" maxlength="50"></td>
            <td><b>Kết Thúc</b> </td>
            <td><input type="text" name="txtKetThuc" id="textfield" tabindex="10" size="30" maxlength="50"></td>
          </tr>
          <tr align="center">
            <td colspan="2"><input type="submit" name="submit" value="Gửi" tabindex="11"></td>
            <td colspan="2"><input type="submit" name="submit" value="Xóa" tabindex="12"></td>
          </tr>         
        </table>
        </form>
    </div>
    <div id="sidebar">
      <h1>Đăng nhập</h1>
        <form name="frmlogin" method="post" id="frmlogin" action="log_exc.php">
          <p><strong>Tài khoản</strong>&nbsp <input name="txuser" type="text" class="textbox" maxlength="50" /></p>     
          <p><strong>Mật khẩu</strong> &nbsp <input name="txpass" type="password" class="textbox" maxlength="50" /></p>
          <p align="center"><input name="login" class="loginbutton" value="Đăng nhập" type="submit"/></p>    
       </form>      
    </div>
  </div>
  <div id="footer">
  <p align="center"> </p>
  </div>
</div>
</body>
</html>
