let index = 0;

const slides = [
  {
    img: "slibri1.png",
    title: "48 Ligjet E Pushtetit",
    desc: "15.00 €"


    png : "sl2.png",
    title: "Concise 33 Strategies Of War",
    desc: "13.60 €"

    png : "sl3.png",
    title: "Concise Art Of Seduction",
    desc: "15.00 €"

    desc: "Një roman distopik nga George Orwell."
  },

  {
    img: "s2l1.png",
    title: "Locke Nje Hyrje E Shkurter",
    desc: "6.70 €"


    png : "s2l2.png",
    title: "Hobbes Nje Hyrje E Shkurter",
    desc: "6.70 € €"

    desc: "Një roman distopik nga George Orwell."
  },

  {
    img: "s3l1.png",
    title: "Kafka On The Shore",
    desc: "15.00 €"
  }
];

function showSlide() {
  document.getElementById("slide-img").src = slides[index].img;
  document.getElementById("slide-title").textContent = slides[index].title;
  document.getElementById("slide-desc").textContent = slides[index].desc;
}

function nextSlide() {
  index = (index + 1) % slides.length;
  showSlide();
}

function prevSlide() {
  index = (index - 1 + slides.length) % slides.length;
  showSlide();
}

window.onload = showSlide;
