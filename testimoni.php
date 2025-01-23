<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonial Slider</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .testimonial-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      overflow: hidden;
    }
    .title-wrapper {
      text-align: center;
      margin-bottom: 20px;
    }
    .decorative-line {
      width: 50px;
      height: 2px;
      background: #000;
      margin: 10px auto;
    }
    .testimonial-wrapper {
      display: flex;
      transition: transform 0.3s ease-in-out;
    }
    .testimonial {
      min-width: 100%;
      box-sizing: border-box;
      padding: 20px;
      text-align: center;
    }
    .testimonial-text {
      font-size: 16px;
      margin-bottom: 20px;
    }
    .testimonial-author {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }
   .author-image {
      width: 80px; /* Ukuran gambar */
      height: 80px;
      border-radius: 50%; /* Membuat gambar melingkar */
      object-fit: cover; /* Memastikan gambar proporsional */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); /* Shadow lebih tegas */
      border: 2px solid #fff; /* Memberikan border putih agar lebih rapi */
    }

    .author-name {
      margin: 0;
      font-size: 18px;
      font-weight: bold;
    }
    .author-position {
      margin: 0;
      font-size: 14px;
      color: gray;
    }
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      z-index: 10;
      border-radius: 50%;
    }
    .arrow-left {
      left: 10px;
    }
    .arrow-right {
      right: 10px;
    }
    .arrow svg {
      width: 24px;
      height: 24px;
    }
    .arrow:hover {
      background: rgba(0, 0, 0, 0.7);
    }
    .testimonial {
      position: relative;
    }
    .testimonial .testimonial-text {
      margin-top: 30px;
    }
    .arrow {
      margin-top: -50px;
    }
  </style>
</head>
<body>

<div class="testimonial-container">
  <div class="title-wrapper">
    <div class="decorative-line"></div>
    <h2 class="title">Testimoni Alumni<br><span class="title-second-line">Lpk Aikoku Terpadu</span></h2>
    <div class="decorative-line"></div>
  </div>
  <div class="testimonial-wrapper">
    <div class="testimonial">
      <p class="testimonial-text">"Alhamdulillah saya sangat bersyukur dan bangga menjadi bagian dari LPK Aikoku Terpadu, salah satu pelatihan untuk
      mewujudkan mimpi teman2 yg ingin kejepang. Pada awal masuk ke lpk aikoku terpadu saya sama sekali tidak tahu
      tentang bahasa dan budaya2 jepang, berkat suasana belajar yg nyaman dan fasilitas yg mendukung serta temen2 dan
      sensei tachi yg sangat luar biasa, saya mendapat banyak ilmu tentang negara jepang, hinga sekarang saya bisa
      sampai dan menerapkan ilmu tersebut untuk bekerja dan tinggal dijepang"</p>
      <div class="testimonial-author">
        <img src="img/Selma.jpg" alt="Selma Fatimah Handaya Resmi" class="author-image">
        <div class="author-info">
          <h4 class="author-name">Selma Fatimah Handaya Resmi</h4>
          <p class="author-position">Tokutei Ginou Pengolahan Makanan</p>
        </div>
      </div>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"Belajar di LPK Aikoku Terpadu sangat membantu saya untuk memahami budaya dan bahasa Jepang ..."</p>
      <div class="testimonial-author">
        <img src="img/Selma.jpg" alt="Selma Fatimah Handaya Resmi" class="author-image">
        <div class="author-info">
          <h4 class="author-name">Selma Fatimah Handaya Resmi</h4>
          <p class="author-position">Tokutei Ginou</p>
        </div>
      </div>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"Pelatihannya sangat bagus dan komprehensif, saya merasa sangat siap menghadapi tantangan di Jepang ..."</p>
      <div class="testimonial-author">
        <img src="img/Selma.jpg" alt="Afrida" class="author-image">
        <div class="author-info">
          <h4 class="author-name">Selma Fatimah Handaya Resmi</h4>
          <p class="author-position">Engineer</p>
        </div>
      </div>
    </div>
  </div>

  <button class="arrow arrow-left" onclick="moveSlide(-1)">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.41 16.58L10.83 12l4.58-4.58L14 6l-6 6 6 6z"/></svg>
  </button>
  <button class="arrow arrow-right" onclick="moveSlide(1)">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.59 16.58L13.17 12 8.59 7.42 10 6l6 6-6 6z"/></svg>
  </button>
</div>

<script>
  let currentIndex = 0;
  const wrapper = document.querySelector('.testimonial-wrapper');
  const testimonials = document.querySelectorAll('.testimonial');

  function moveSlide(direction) {
    currentIndex += direction;
    if (currentIndex < 0) {
      currentIndex = testimonials.length - 1;
    } else if (currentIndex >= testimonials.length) {
      currentIndex = 0;
    }
    wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
  }
</script>

</body>
</html>
