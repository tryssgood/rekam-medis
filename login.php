<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

</head>
<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color:rgb(0, 0, 0);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.background {
  background-image: url('img/rumahsakit.png');
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;

}

.login-box {
  background-color:rgb(0, 0, 0);
  padding: 20px 40px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.login-box h2 {
  color: #fff;
  margin-bottom: 20px;
}

.login-box label {
  display: block;
  margin: 10px 0 5px;
  color: #fff;
  font-weight: bold;
}

.login-box input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #73946B;
  border-radius: 5px;
  box-sizing: border-box;
}

.login-box button {
  background-color:rgb(6, 242, 13);
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.login-box button:hover {
  background-color: #73946B;
}
</style>
<body>
  <div class="background" >
    <div class="login-box">
      <h2>SELAMAT DATANG<br>SILAHKAN LOGIN</h2>
      <form action="proses_login.php" method="POST">
        <label for="kode">KODE USER:</label>
        <input type="text" id="kode" name="kode" required />
        
        <label for="username">USERNAME:</label>
        <input type="text" id="username" name="username" required />
        
        <label for="password">PASSWORD:</label>
        <input type="password" id="password" name="password" required />
        
        <button type="submit">LOGIN</button>
      </form>
    </div>
  </div>

</body>
</html>
