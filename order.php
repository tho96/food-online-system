
<?php
session_start();
if (isset($_POST['submit'])){
	if(!empty($_SESSION['user_info'])) {
		$qty1 = $_POST['qty1'];
		$qty2 = $_POST['qty2'];
		$qty3 = $_POST['qty3'];
		$qty4 = $_POST['qty4'];
		$qty5 = $_POST['qty5'];
		$qty6 = $_POST['qty6'];
		$qty7 = $_POST['qty7'];
		$qty8 = $_POST['qty8'];
		$qty9 = $_POST['qty9'];
		$user_info = $_SESSION['user_info'];
		$sum = (30 * $qty1) + (60 * $qty2) + (30 * $qty3) + (180 * $qty4) + (350 * $qty5) + (200 * $qty6) + (300 * $qty7) + (250 * $qty8) + (270 * $qty9);
		$msg = "Order placed successfully. Please make a payment of total ".$sum." by cash on successful delivery";
		$connect = mysqli_connect("localhost","root","");
		mysqli_select_db($connect,'food') or die("couldn't find database");
    $sql1="INSERT INTO orders(email,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9)VALUES('$user_info','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9');";
		if(mysqli_query($connect,$sql1))
		{
			echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
		}
		else
		{
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
		}
	}
	else
		echo "<script type='text/javascript'>alert('Please login');</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Order Page</title>

    <script type="text/javascript">
      function substractQty(qty) {
        if(qty.value - 1 < 0) {
          return;
        }
        else {
          qty.value--;
        }
      }
      function check() {
        var qty1 = document.getElementById("qty1");
        var qty2 = document.getElementById("qty2");
        var qty3 = document.getElementById("qty3");
        var qty4 = document.getElementById("qty4");
        var qty5 = document.getElementById("qty5");
        var qty6 = document.getElementById("qty6");
        var qty7 = document.getElementById("qty7");
        var qty8 = document.getElementById("qty8");
        var qty9 = document.getElementById("qty9");
        if((qty1.value == '' && qty2.value == '' && qty3.value == '' && qty4.value == ''
            && qty5.value == '' && qty6.value == '' && qty7.value == '' && qty8.value == '' && qty9.value == '')
            || (qty1.value == '0' && qty2.value == '0' && qty3.value == '0' && qty4.value == '0' && qty5.value == '0'
            && qty6.value == '0' && qty7.value == '0' && qty8.value == '0' && qty9.value == '0')) {
              alert("Please select at least 1 item");
              return false;
            }
            return true;
      }


    </script>
   <!--  <script type="text/javascript" language="javascript" src="event.js" >
    </script> -->
  </head>
  <body>
    <font size="4" color="white">
      <nav align="right">
        <a href="main.php">Home</a>
        <?php
        if(isset($_SESSION['user_info'])) {
          echo 'Welcome <a href="login.php"> '.$_SESSION['user_info'].'</a>';
        }
        else {
          echo '<a href="signupForm.php">Login/Register</a>';
        }
        ?>
    </font>
      </nav>
    <form action="order.php" name="orderform" method="post">
      <table cellspacing="5" cellpadding="2" align="center">
        <caption><u>ORDER HERE</u></caption>
        <tr>
          <td>
            <img src="menu/1.jpg" width="300" height="200" border="5"><br />
            <font size="4">Greek Salad</font>&nbsp;&nbsp;
            <input type="number" name="qty1" id="qty1" size="1" maxlength="2" class="qty" style="width:50px;/ "  value="0">
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty1').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty1);"/>
            <font size="4">price: $12</font>
          </td>

          <td>
            <img src="menu/2.jpg" width="300" height="200" border="5"><br />
            Taco Combo
            <input type="number" name="qty2" id="qty2" size="1" maxlength="2" class="qty" style="width: 50px;" value="0" />
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty2').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty2);"/>
            <font size="4">price: $15</font>
          </td>

          <td>
            <img src="menu/3.jpg" width="300" height="200" border="5"><br />
            Spaghetti
            <input type="number" name="qty3" id="qty3" size="1" maxlength="2" class="qty" style="width: 50px;" value="0" />
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty3').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty3);"/>
            <font size="4">price: $11</font>
          </td>
        </tr>

        <tr>
          <td>
            <img src="menu/4.jpg" width="300" height="200" border="5"><br />
            Fish Fillet with Lemon Juice
            <input type="number" name="qty4" id="qty4" size="1" maxlength="2" class="qty" style="width: 50px;" value="0" />
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty4').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty4);"/>
            <font size="4">price: $18</font>
          </td>

          <td>
            <img src="menu/5.jpg" width="300" height="200" border="5"><br />
            Farmer Salad
            <input type="number" name="qty5" id="qty5" size="1" maxlength="2" class="qty" style="width: 50px;"value="0" />
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty5').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty5);"/>
            <font size="4">price: $9</font>
          </td>

          <td>
            <img src="menu/6.jpg" width="300" height="200" border="5"><br />
            Cheese Burger
            <input type="number" name="qty6" id="qty6" size="1" maxlength="2" class="qty" style="width: 50px;" value="0"/>
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty6').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty6);"/>
            <font size="4">price: $9</font>
          </td>
        </tr>

        <tr>
          <td>
            <img src="menu/7.jpg" width="300" height="200" border="5"><br />
            Ribs
            <input type="number" name="qty7" id="qty7" size="1" maxlength="2" class="qty" style="width: 50px;" value="0"/>
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty7').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty7);"/>
            <font size="4">price: $30</font>
          </td>

          <td>
            <img src="menu/8.png" width="300" height="200" border="5"><br />
            Pizza
            <input type="number" name="qty8" id="qty8" size="1" maxlength="2" class="qty" style="width: 50px;" value="0"/>
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty8').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty8);"/>
            <font size="4">price: $14</font>
          </td>

          <td>
            <img src="menu/9.jpg" width="300" height="200" border="5"><br />
            Combo Hotdog
            <input type="number" name="qty9" id="qty9" size="1" maxlength="2" class="qty" style="width: 50px;" value="0"/>
            <input type="button" name="add" value="+" onclick="javascript: document.getElementById('qty9').value++;"/>
            <input type="button" name="substract" value="-" onclick="javascript: substractQty(qty9);"/>
            <font size="4">price: $20</font>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="center">
            <input type="submit" name="submit" value="Order NOW" class="button" onclick="return check()"/>
          </td>
        </tr>

      </table>

    </form>
 <!--    <script type="text/javascript" language="javascript" src="event.js" >
    </script> -->

  </body>
</html>
