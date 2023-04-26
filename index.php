<?php
include_once 'phpcodes/conn.php';
$sql1="SELECT * FROM customers";
$sql2="SELECT * FROM orders";
$sql3="SELECT * FROM order_items";
$sql4="SELECT * FROM products";
$rslt1=mysqli_query($conn,$sql1);
$rslt2=mysqli_query($conn,$sql2);
$rslt3=mysqli_query($conn,$sql3);
$rslt4=mysqli_query($conn,$sql4);
?>
<!doctype html>
<html>
<head>
<title>Our SQL PROJECT</title>
<style>
.dl::-webkit-scrollbar {
  display: none;
}
.dr::-webkit-scrollbar {
  display: none;
}
        html, body {
        margin:0px;
        height:100%;
        background-color:'red';
        }
      .main{
        height: 100%;
        
      }
      .dh2{
        height: 50%;
      }
      .dh{
        display: flex;
        height: 50%;

      }
      .dl{
        width:50%;
        overflow: scroll;
      }
      .dr{
        width:50%;
        overflow: scroll;
      }
      .d1{
        width:50%;
        height: 100%;
        float:left;
      }
      .t1{
        width: 16.6666666667%;
      }
      .t2{
        width: 20%;
      }
.t3{
    width: 25%;
}
.button-container {
  display: flex;
  justify-content: space-between;
}

.button-container button {
  flex: 1;
  margin: 0 5px;
}
    </style>
    <script>
		function showInputs() {
            
			const select = document.getElementById("options");
			const value = select.value;

			let inputsHTML = "";

			if (value === "option1") {
				inputsHTML = `
                <form action='phpcodes/addcustomer.php' method="POST"/>
					<label for="input1">Customer id:</label>
					<input type="text" id="id" name="id" placeholder="Customer id"><br>
					<label for="input2">fname:</label>
					<input type="text" id="fname" name="fname" placeholder="Customer first name"><br>
                    <label for="input3">lname:</label>
					<input type="text" id="lname" name="lname" placeholder="Customer last name"><br>
					<label for="input4">email:</label>
					<input type="text" id="email" name="email" placeholder="Customer email"><br>
					<label for="input5">mobile number:</label>
					<input type="text" id="number" name="number" placeholder="mobile number"><br>
					<label for="input6">address:</label>
					<input type="text" id="address" name="address" placeholder="address"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			} else if (value === "option2") {
				inputsHTML = `
                <form action='phpcodes/addorder.php' method="POST"/>
					<label for="input1">order id:</label>
					<input type="text" id="id" name="id" placeholder="order id"><br>
					<label for="input2">customer id:</label>
					<input type="text" id="cid" name="cid" placeholder="Customer id"><br>
                    <label for="input3">date:</label>
					<input type="text" id="date" name="date" placeholder="date"><br>
					<label for="input4">price:</label>
					<input type="text" id="price" name="price" placeholder="price"><br>
					<label for="input5">payment method:</label>
					<input type="text" id="pay" name="pay" placeholder="payment method"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			} else if (value === "option3") {
				inputsHTML = `
                <form action='phpcodes/addorderitems.php' method="POST"/>
					<label for="input1">order item id:</label>
					<input type="text" id="id" name="id" placeholder="order item id"><br>
					<label for="input2">order id:</label>
					<input type="text" id="oid" name="oid" placeholder="order id"><br>
					<label for="input3">product id:</label>
					<input type="text" id="pid" name="pid" placeholder="product id"><br>
					<label for="input4">quantity:</label>
					<input type="text" id="quan" name="quan" placeholder="quantity"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			} else if (value === "option4") {
				inputsHTML = `
                <form action='phpcodes/addproducts.php' method="POST"/>
					<label for="input1">product id:</label>
					<input type="text" id="id" name="id" placeholder="product id"><br>
					<label for="input2">name:</label>
					<input type="text" id="name" name="name" placeholder="name"><br>
					<label for="input3">price:</label>
					<input type="text" id="price" name="price" placeholder="price"><br>
					<label for="input4">description:</label>
					<input type="text" id="descr" name="descr" placeholder="description"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			}

			document.getElementById("inputs").innerHTML = inputsHTML;
		}
        function showInputs4(){
            const select = document.getElementById("options5");
			const value = select.value;
            let inputsHTML = "";

if (value === "option3") {
    inputsHTML = `
    <form action='phpcodes/deleteorderitem.php' method="POST"/>
        
        <button type="submit" name="submit">delete row</button>
        </form>
    `;
}
    document.getElementById("inputs4").innerHTML = inputsHTML;
        }
        function showInputs2() {
            
			const select = document.getElementById("options2");
			const value = select.value;

			let inputsHTML = "";

			if (value === "option1") {
				inputsHTML = `
                <form action='phpcodes/setcustomer.php' method="POST"/>
					<label for="input1">Customer id:</label>
					<input type="text" id="id" name="id" placeholder="Customer id"><br>
					<label for="input2">fname:</label>
					<input type="text" id="fname" name="fname" placeholder="Customer first name"><br>
                    <label for="input3">lname:</label>
					<input type="text" id="lname" name="lname" placeholder="Customer last name"><br>
					<label for="input4">email:</label>
					<input type="text" id="email" name="email" placeholder="Customer email"><br>
					<label for="input5">mobile number:</label>
					<input type="text" id="number" name="number" placeholder="mobile number"><br>
					<label for="input6">address:</label>
					<input type="text" id="address" name="address" placeholder="address"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			} else if (value === "option2") {
				inputsHTML = `
                <form action='phpcodes/setorder.php' method="POST"/>
					<label for="input1">order id:</label>
					<input type="text" id="id" name="id" placeholder="order id"><br>
					<label for="input2">customer id:</label>
					<input type="text" id="cid" name="cid" placeholder="Customer id"><br>
                    <label for="input3">date:</label>
					<input type="text" id="date" name="date" placeholder="date"><br>
					<label for="input4">price:</label>
					<input type="text" id="price" name="price" placeholder="price"><br>
					<label for="input5">payment method:</label>
					<input type="text" id="pay" name="pay" placeholder="payment method"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			} else if (value === "option3") {
				inputsHTML = `
                <form action='phpcodes/setorderitems.php' method="POST"/>
					<label for="input1">order item id:</label>
					<input type="text" id="id" name="id" placeholder="order item id"><br>
					<label for="input2">order id:</label>
					<input type="text" id="oid" name="oid" placeholder="order id"><br>
					<label for="input3">product id:</label>
					<input type="text" id="pid" name="pid" placeholder="product id"><br>
					<label for="input4">quantity:</label>
					<input type="text" id="quan" name="quan" placeholder="quantity"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			} else if (value === "option4") {
				inputsHTML = `
                <form action='phpcodes/setproducts.php' method="POST"/>
					<label for="input1">product id:</label>
					<input type="text" id="id" name="id" placeholder="product id"><br>
					<label for="input2">name:</label>
					<input type="text" id="name" name="name" placeholder="name"><br>
					<label for="input3">price:</label>
					<input type="text" id="price" name="price" placeholder="price"><br>
					<label for="input4">description:</label>
					<input type="text" id="descr" name="descr" placeholder="description"><br>
                    <button type="submit" name="submit">Add row</button>
                    </form>
				`;
			}

			document.getElementById("inputs2").innerHTML = inputsHTML;
		}
       
	</script>
</head>
<body>
<div class="main" >
    <div class="dh">
<div class="dl">
    <div class="d1" style="background-color:red;">
<h3>ADD A ROW IN SPECIFIC TABLE</h3></br>

select the table 
<select id="options" onchange="showInputs()">
		<option value="">Select a table:</option>
		<option value="option1">customers</option>
		<option value="option2">orders</option>
		<option value="option3">order items</option>
        <option value="option4">products</option>
	</select>
	<div id="inputs"></div>
    </div>

    <div class="d1"  style="background-color:green;">
        <h3>Execute a read query</h3>
        select the table 
<select id="options3" onchange="showInputs3()">
		<option value="">Select a table:</option>
		<option value="option1">customers</option>
		<option value="option2">orders</option>
		<option value="option3">order items</option>
        <option value="option4">products</option>
	</select>
    </div>
    </div>
    <div class="dr">
    <div class="d1" style="background-color:yellow;">
    <h3>Execute a update query</h3>
    select the table 
<select id="options2" onchange="showInputs2()">
		<option value="">Select a table:</option>
		<option value="option1">customers</option>
		<option value="option2">orders</option>
		<option value="option3">order items</option>
        <option value="option4">products</option>
	</select>
	<div id="inputs2"></div>
    </div>
    <div class="d1"  style="background-color:blue;">
    <h3>Execute a delete query</h3>
    select the table 
<select id="options5" onchange="showInputs4()">
		<option value="">Select a table:</option>
		<option value="option1">customers</option>
		<option value="option2">orders</option>
		<option value="option3">order items</option>
        <option value="option4">products</option>
	</select>
    <div id="inputs4"></div>
</div>
    </div>
    </div>
    <div class="dh2">
        <div class="dh">
            <div class="dl" >
                <h3>CUSTOMERS TABLE</h3>
                <table style="overflow:'auto'">
                    <tr>
                    <th style="width:16.6666666667%">customer id</th>
                    <th style="width:16.6666666667%">first name</th>
                    <th style="width:16.6666666667%">last name</th>
                    <th style="width:16.6666666667%">email</th>
                    <th style="width:16.6666666667%">mobile</th>
                    <th style="width:16.6666666667%">address</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($rslt1))
    {
    ?>
    <tr>
    <td class="t1"><?php 
    echo $row['customer_id'];?> </td>
    <td class="t1"><?php 
    echo $row['first_name'];?> </td>
    <td class="t1"><?php 
    echo $row['last_name'];?> </td>
    <td class="t1"><?php 
    echo $row['email'];?> </td>
    <td class="t1"><?php 
    echo $row['phone_number'];?> </td>
    <td class="t1"><?php 
    echo $row['addr'];?> </td>
    </tr>
<?php
    }
    ?>
    </table>

    </div>
    <div class="dr">
    <h3>ORDERS TABLE</h3>
                <table style="overflow:'scroll'">
                    <tr>
                    <th class='t2'>order id</th>
                    <th class='t2'>customer id</th>
                    <th class='t2'>order date</th>
                    <th class='t2'>total price</th>
                    <th class='t2'>payment method</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($rslt2))
    {
    ?>
    <tr>
    <td class="t2"><?php 
    echo $row['order_id'];?> </td>
    <td class="t2"><?php 
    echo $row['customer_id'];?> </td>
    <td class="t2"><?php 
    echo $row['order_date'];?> </td>
    <td class="t2"><?php 
    echo $row['total_price'];?> </td>
    <td class="t2"><?php 
    echo $row['payment_method'];?> </td>
    </tr>
<?php
    }
    ?>
    </table>

    </div>
    </div>
    <div class="dh">
    <div class="dl">
    <h3>ORDER ITEMS TABLE</h3>
                <table style="width:'100%';">
                    <tr>
                    <th class='t3'>order item id</th>
                    <th class='t3'>order id</th>
                    <th class='t3'>product id</th>
                    <th class='t3'>quantity</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($rslt3))
    {
    ?>
    <tr>
    <td class="t3"><?php 
    echo $row['order_item_id'];?> </td>
    <td class="t3"><?php 
    echo $row['order_id'];?> </td>
    <td class="t3"><?php 
    echo $row['product_id'];?> </td>
    <td class="t3"><?php 
    echo $row['quantity'];?> </td>
<?php
    }
    ?>
    </table>
    </div>
    <div class="dr">
    <h3>PRODUCTS TABLE</h3>
                <table style="width:'100%';">
                    <tr>
                    <th class='t3'>product id</th>
                    <th class='t3'>oproduct name</th>
                    <th class='t3'>price</th>
                    <th class='t3'>description</th>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($rslt4))
    {
    ?>
    <tr>
    <td class="t3"><?php 
    echo $row['product_id'];?> </td>
    <td class="t3"><?php 
    echo $row['product_name'];?> </td>
    <td class="t3"><?php 
    echo $row['price'];?> </td>
    <td class="t3"><?php 
    echo $row['descr'];?> </td>
<?php
    }
    ?>
    </table>
    </div>
    </div>
    </div>

</div>
<div class="button-container">
  <button>predefined sql query 1</button>
  <button>predefined sql query 2</button>
  <button>predefined sql query 3</button>
  <button>predefined sql query 4</button>
</div>
</div>
</body>
</html>
