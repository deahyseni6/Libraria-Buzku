
let currentSlide = 0;

const slides = [

  [
    {
      img: "slibri1.png",
      title: "48 Ligjet E Pushtetit",
      author: "Robert Greene",
      offers: ["15.00 €", "E-book 7.99 €", "Hardcover 18.00 €"]
    },
    {
      img: "sl2.png",
      title: "33 Strategies Of War",
      author: "Robert Greene",
      offers: ["13.60 €", "E-book 6.99 €", "Paperback 15.00 €"]
    },
    {
      img: "sl3.png",
      title: "Art Of Seduction",
      author: "Robert Greene",
      offers: ["15.00 €", "E-book 8.50 €", "Collector 20.00 €"]
    }
  ],

  
  [
    {
      img: "s2l1.png",
      title: "Locke",
      author: "John Locke",
      offers: ["6.70 €", "E-book 3.99 €", "Pocket 5.50 €"]
    },
    {
      img: "s2l2.png",
      title: "Hobbes",
      author: "Thomas Hobbes",
      offers: ["6.70 €", "E-book 4.20 €", "Pocket 5.80 €"]
    }
  ],

 
  [
    {
      img: "images/slider/s3l1.png",
      title: "Kafka On The Shore",
      author: "Haruki Murakami",
      offers: ["15.00 €", "E-book 9.99 €", "Hardcover 19.00 €"]
    }
  ]
];

const container = document.getElementById("slides-container");

function showSlide() {
  container.innerHTML = "";

  slides[currentSlide].forEach(book => {
    container.innerHTML += `
      <div class="book">
        <img src="${book.img}">
        <h3>${book.title}</h3>
        <p class="author">${book.author}</p>

        <ul class="offers">
          ${book.offers.map(offer => `<li>${offer}</li>`).join("")}
        </ul>
      </div>
    `;
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide();
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  showSlide();
}

window.onload = showSlide;








