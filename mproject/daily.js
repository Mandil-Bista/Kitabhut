<section>
  <h2>Daily Quote</h2>
  <p id="quote">Life is 10% what happens to us and 90% how we react to it.</p>
  <p id="author">- Charles R. Swindoll</p>
</section>

<script>
const quotes = [
  {
    quote: "The greatest glory in living lies not in never falling, but in rising every time we fall.",
    author: "Nelson Mandela"
  },
  {
    quote: "Life is 10% what happens to us and 90% how we react to it.",
    author: "Charles R. Swindoll"
  },
  {
    quote: "The way to get started is to quit talking and begin doing.",
    author: "Walt Disney"
  },
  {
    quote: "Success is not final, failure is not fatal: it is the courage to continue that counts.",
    author: "Winston Churchill"
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
