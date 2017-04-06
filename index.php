<html>
<body>
<h1>Welcome to our shop!</h1>
<h2>To update table please select information below:</h2>

<br><br>
<form action="insert.php" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sports">Sport</option>
</select>
</label>
<br><br>
Name: <input type ="varchar" name="name" /><br><br>
Price: <input type ="varchar" name="price" /><br><br>

<input type="submit" value="Update!" />
</form>

<h2>To delete table please select information below:</h2>

<br>
<form action="delete.php" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sports">Sport</option>
</select>
</label>
<br><br>
Name: <input type ="varchar" name="name" /><br><br>

<input type="submit"  value="Delete!"/>

</form>
<br>

<h2>Select a table to view it's data:</h2>
<form action="select.php" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sports">Sport</option>
</select>
</label>
<br><br>

<input type="submit" value="View Data!"/>

</form>

<h2>Select a table & enter price range:</h2>
<form action="range.php" method="post">

<label> Category:<select name="cat1">
 
  <option value="food">Food</option>
  <option value="drink">Drink</option>
  <option value="sports">Sport</option>
</select>
</label>
<br><br>
Price from: <input type ="varchar" name="pricefrom" /><br><br>
Price to: <input type ="varchar" name="priceto" /><br><br>
<br>
<input type="submit" value="View Data!"/>

</form>


</body>
</html>
