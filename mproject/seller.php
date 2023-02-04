<style>
  
  .seller-form-container {
  width: 50%;
  margin: 0 auto;
  text-align: center;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #f2f2f2;
}

.form-group {
  margin: 10px 0;
  width: 100%;
}

label {
  font-weight: bold;
}

input[type="text"],
textarea,
input[type="number"],
input[type="tel"],
input[type="file"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.rating {
  margin-bottom: 20px;
  font-size: 24px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row-reverse;
}

.rating input[type="radio"] {
  display: none;
}

.rating label {
  color: #ccc;
  cursor: pointer;
  margin-right: 10px;
}

.rating label:before {
  content: "\f005"; /* Use Font Awesome star icon */
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
}

.rating input[type="radio"]:checked ~ label,
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
  color: #ffc107; /* Change color of selected stars */
}

.rating label:active {
  position: relative;
  top: 2px;
  left: 2px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  font-size: 18px;
  background-color: maroon;
  color: #fff;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

button[type="submit"]:hover {
  background-color: orangered;
  color: maroon;
  border: 1px solid maroon;
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



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


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

<div class="seller-form-container">
  <form action="#">
    <h2>Sell Your Books</h2>
    <div class="form-group">
      <label for="title">Book Title:</label>
      <input type="text" id="title" required>
    </div>
    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" id="author" required>
    </div>
    <div class="form-group">
      <label for="genre">Genre:</label>
      <input type="text" id="genre" required>
    </div>
    <div class="form-group">
      <label for="description">Short Summary Of The Plot:</label>
      <textarea id="description" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" id="price" required>
    </div>
    <div class="form-group">
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" required>
    </div>
    <div class="form-group">
      <label for="page">Page Count:</label>
      <input type="number" id="page" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" id="address" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" required>
    </div>
    <div class="form-group">
      <label for="book-cover">Book Cover:</label>
      <input type="file" id="book-cover" required>
    </div>
    <div class="rating">
      <input type="radio" id="star5" name="rating" value="5" required>
      <label for="star5"></label>
      <input type="radio" id="star4" name="rating" value="4">
      <label for="star4"></label>
      <input type="radio" id="star3" name="rating" value="3">
      <label for="star3"></label>
      <input type="radio" id="star2" name="rating" value="2">
      <label for="star2"></label>
      <input type="radio" id="star1" name="rating" value="1">
      <label for="star1"></label>
    </div>
    <button type="submit">Submit</button>
  </form>
</div>
