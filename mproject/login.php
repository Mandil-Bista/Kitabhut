<style>
  
  #login {
  background: #f2f2f2;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content:center;
  align-items: center;
}

#login h2 {
  color: maroon;
  animation: bounce 1s ease-in-out ;
}

#login form {
  width: 400px;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 4px;
}

#login .form-group input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid gray;
}

 button[type="submit"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  background-color: maroon;
  color: white;
  border: 1px solid maroon;
  margin-top: 10px;
  cursor: pointer;
}
button[type="submit"]:hover {
  background-color: #000;
}

#login a {
  color: maroon;
  text-decoration: underline;
}

#login .btn-danger {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  background-color: maroon;
  color: white;
  border: 1px solid maroon;
  margin-top: 10px;
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

<section id="login">
  <div class="d-flex flex-column justify-content-center align-items-center" style="background: #f2f2f2; height: 100vh;">
    <h2 class="bounce animated" style="color: maroon;">Enter Your Details</h2>
    <form class="d-flex flex-column align-items-center mt-4">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
      <p class="text-center mt-4">
        <a href="#">Forgot Password?</a>
      </p>
    </form>
    <p class="text-center mt-4">
      <a href="#" class="btn btn-danger">Sign in with Google</a>
    </p>
  </div>
</section>

