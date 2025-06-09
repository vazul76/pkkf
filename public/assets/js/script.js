const dots = document.querySelectorAll('.dot');
const carousel = document.getElementById('carouselSlides');
const totalSlides = dots.length;
let currentIndex = 0;
let interval;

// Fungsi update tampilan slide dan dot
function showSlide(index) {
  carousel.style.transform = `translateX(-${index * 100}%)`;
  dots.forEach(d => {
    d.classList.replace('bg-[#638ECB]', 'bg-gray-400');
    d.classList.replace('opacity-100', 'opacity-50');
  });
  dots[index].classList.replace('bg-gray-400', 'bg-[#638ECB]');
  dots[index].classList.replace('opacity-50', 'opacity-100');
  currentIndex = index;
}

// Event klik pada dot
dots.forEach(dot => {
  dot.addEventListener('click', () => {
    const index = parseInt(dot.dataset.index);
    showSlide(index);
    restartAutoSlide(); // reset waktu saat user klik
  });
});

// Auto slide setiap 5 detik
function startAutoSlide() {
  interval = setInterval(() => {
    let nextIndex = (currentIndex + 1) % totalSlides;
    showSlide(nextIndex);
  }, 5000);
}

function restartAutoSlide() {
  clearInterval(interval);
  startAutoSlide();
}

// Inisialisasi
showSlide(0);
startAutoSlide();

// Carousel dengan tombol prev dan next
document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelectorAll('.carousel-slide');
  const dots = document.querySelectorAll('[data-dot]');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  let currentIndex = 0;

  function updateCarousel(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('hidden', i !== index);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('opacity-100', i === index);
      dot.classList.toggle('opacity-30', i !== index);
    });
  }

  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateCarousel(currentIndex);
  });

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel(currentIndex);
  });

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      currentIndex = parseInt(dot.dataset.dot);
      updateCarousel(currentIndex);
    });
  });

  updateCarousel(currentIndex);
});