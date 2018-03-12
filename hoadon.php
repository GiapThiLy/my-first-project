<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
<link href="style2.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1><font color='white'>GIÁP THỊ LÝ-20156013</font></h1>
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
    --> Đây là TabMenu
    </div>    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>-->Đây là Header</p>
  </div>
  <div id="content-wrap">
    <div id="main">
    	<h1 align="center"><font color="red">HÓA ĐƠN BÁN HÀNG</font></h1>
        <form id="frm_info" name="frm_info" method="post" action="index.php" onsubmit="return CheckForm()">
        <table width="100%" border="1">
          <tr id="tablerow1">
            <th>Mua</th>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>số lượng</th>
            <th >Thành tiền</th>
          </tr>
          <tr>
            <td><input type="checkbox" name="mua1"></td>
            <td>1</td>
            <td>Sách Tin học cơ bản</td>
            <td>15000</td>
            <td><input type="text" name="soluong1"></td>
            <td><input type="text" name="thanhtien1"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="mua2"></td>
            <td>1</td>
            <td>Sách word</td>
            <td>15000</td>
            <td><input type="text" name="soluong2"></td>
            <td><input type="text" name="thanhtien2"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="mua3"></td>
            <td>1</td>
            <td>Sách PowerPoint</td>
            <td>15000</td>
            <td><input type="text" name="soluong3"></td>
            <td><input type="text" name="thanhtien3"></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="mua4"></td>
            <td>1</td>
            <td>Sách Tin học cơ bản</td>
            <td>15000</td>
            <td><input type="text" name="soluong4"></td>
            <td><input type="text" name="thanhtien4"></td>
          </tr>
          <tr>
            <td colspan="4" align="center"><input type="submit" name="Nhaplai" value="Nhập lại"></td>
            <td>Tổng cộng</td>
            <td><input type="text" name="Thanhtien"></td>
          </tr>
        </table>
        </form> 
    </div>
    <div id="sidebar">
      <h1>Đăng nhập</h1>
    <form name="frmlogin" method="post" id="frmlogin" action="log_exc.php">
      <p><strong>Tài khoản</strong>&nbsp <input name="txuser" type="text" class="textbox" maxlength="50" /></p>     
      <p><strong>Mật khẩu</strong> &nbsp <input name="txpass" type="password" class="textbox" maxlength="50" /></p>
      <p align="center">
        <input name="login" class="loginbutton" value="Đăng nhập" type="submit"/>
     </p>    
    </form>      
    </div>
  </div>
  <div id="footer">
  <p align="center">--> Đây là Footer </p>
  </div>
</div>
</body>
</html>
