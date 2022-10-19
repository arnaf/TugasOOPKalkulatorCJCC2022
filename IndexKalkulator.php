<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>PHP Calculator</title>

<style>
p {
  font-size: 12px;
}
.alert {
  color: red;
}
</style>
</head>

<body>


<h2>OOP calculator</h2>
<br>
  <form action="GetKalk.php" method="POST">
      <input type="text" name="angka1Input">
      <input type="text" name="angka2Input">
      <select name="calInserted">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
      </select>
      <button type="submit">Calculate</button>
  </form>


</body>

</html>