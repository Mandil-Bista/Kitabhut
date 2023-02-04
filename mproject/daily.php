<style>
  .quote-section {
    background-image: url("assets/img/Background.jpg");
    background-size: cover;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  
  #quote {
    color: white;
    font-size: 36px;
    font-weight: bold;
    margin: 0;
  }
  
  #author {
    color: white;
    font-size: 24px;
    margin: 0;
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

<section class="quote-section">
  <p id="quote">Life is 10% what happens to us and 90% how we react to it.</p>
  <p id="author">- Charles R. Swindoll</p>
</section>

<script>
const quotes = [
  {
    quote: "A reader lives a thousand lives before he dies. The man who never reads lives only one.",
    author: "George R. R. Martin"
  },
  {
    quote: "To learn to read is to light a fire; every syllable that is spelled out is a spark.",
    author: "Victor Hugo"
  },
  {
    quote: "I cannot remember the books I’ve read any more than the meals I have eaten; even so, they have made me.",
    author: "Ralph Waldo Emerson"
  },
  {
    quote: "The answers you get from literature depend on the questions you pose.",
    author: "Margaret Atwood"
  },
  {
    quote: "Books smell good. They look good. You can press it to your bosom. You can carry it in your pocket.",
    author: "Ray Bradbury"
  },
  {
    quote: "There is no friend as loyal as a book.",
    author: "Ernest Hemingway"
  },
  {
    quote: "When I look back, I am so impressed again with the life-giving power of literature. If I were a young person today, trying to gain a sense of myself in the world, I would do that again by reading, just as I did when I was young.",
    author: "Maya Angelou"
  }
];

function getRandomQuote() {
  const randomIndex = Math.floor(Math.random() * quotes.length);
  return quotes[randomIndex];
}

const quoteContainer = document.querySelector("#quote");
const authorContainer = document.querySelector("#author");
const quote = getRandomQuote();

quoteContainer.textContent = quote.quote;
authorContainer.textContent = `- ${quote.author}`;
</script>
