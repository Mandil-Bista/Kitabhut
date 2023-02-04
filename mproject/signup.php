<style>
  .container {
    background-color: #f2f2f2;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  font-weight: bold;
  margin-top: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  border-radius: 5px;
  background-color: maroon;
  color: #fff;
  border: none;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #000;
}

#home {
  background: #e3d8d8;
  height: 146.975px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#home h1 {
  color: rgb(125,34,34);
  font-family: 'Abril Fatface', serif;
  font-weight: bold;
  width: 264.587px;
  font-size: 28.812px;
  height: 44.575px;
  animation: bounce 1s ease-in-out ;
}

#home p {
  color: rgb(125,34,34);
  width: 145.325px;
  height: 83px;
  font-family: "monospace";
  font-size: 8pt;
  display: flex;
  flex-direction: column;
  align-items: start;
  animation: bounce 1s ease-in-out;
}

#home img {
  width: 71px;
  height: 75px;
  margin-top: -76px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-content: center;
}

@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

</style>
<section id="home">
  <div class="d-flex flex-column justify-content-center align-items-center"
      style="background: #e3d8d8;height: 146.975px;">
      <h1 class="bounce animated"
       style="color: maroon;width: 193.575px;height: 33.575px;">Kitab-Hut</h1>
      <p class="font-monospace text-nowrap fs-6 text-start d-flex flex-column align-items-start bounce animated"
          style="color: rgb(125,34,34);width: 145.325px;height: 83px;">Receive Read Renew Return<img
              class="d-flex flex-column justify-content-center align-items-center align-content-center"
              src="assets/img/Logo.png" width="62" height="58" style="width: 71px;height: 75px;margin: -76px;">
      </p>
      
  </div>
</section>

<div class="container d-flex flex-column align-items-center">
  <h2 class="text-center">Sign Up</h2>
  <form action="login.html" method="POST" class="form-group" style="width: 50%;">
    <label for="Username">Username:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your username">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
    <label for="confirm-password">Confirm Password:</label> -->
    <input type="password" class="form-control" name="cpassword" id="confirm-password" placeholder="Confirm your password"> -->
    <br>
    <button type="submit" class="btn btn-primary" name="register">Sign Up</button>
  </form>
</div>


