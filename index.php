<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun, Adik!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('taman.jpg') no-repeat center center fixed; /* Background gambar taman */
            background-size: cover;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }
        .container {
            position: relative;
            z-index: 2;
            padding: 50px;
            background: rgba(0, 0, 0, 0.3); /* Overlay semi-transparan agar teks terbaca */
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in-out;
        }
        .slideshow {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
        }
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .slide.active {
            opacity: 1;
        }
        #typewriter {
            font-size: 1.5em;
            line-height: 1.6;
            border-right: 2px solid #fff;
            white-space: normal;
            overflow: visible;
            animation: blink-caret 1s step-end infinite;
        }
        .hearts {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .heart {
            position: absolute;
            color: #ff6b9d;
            font-size: 2em;
            animation: fall 5s linear infinite;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fall {
            from { transform: translateY(-100vh); }
            to { transform: translateY(100vh); }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: #fff; }
        }
    </style>
</head>
<body>
    <div class="hearts" id="hearts"></div>
    <div class="container">
        <h1>Selamat Ulang Tahun, Tanzila Khairunisa!</h1>
        
        <!-- Slideshow untuk 5 foto adik -->
        <div class="slideshow">
            <img src="foto1.jpg" alt="Foto Adik 1" class="slide active">
            <img src="foto2.jpg" alt="Foto Adik 2" class="slide">
            <img src="foto3.jpg" alt="Foto Adik 3" class="slide">
            <img src="foto4.jpg" alt="Foto Adik 4" class="slide">
            <img src="foto5.jpg" alt="Foto Adik 5" class="slide">
        </div>
        
        <p id="typewriter"></p>
    </div>

    <!-- Musik Otomatis (Embed YouTube untuk musik ulang tahun gratis) -->
    <iframe width="0" height="0" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&loop=1&playlist=dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:none;"></iframe>

    <script>
        // Script untuk animasi hati jatuh
        function createHeart() {
            const heart = document.createElement('div');
            heart.className = 'heart';
            heart.innerHTML = '❤️';
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.animationDuration = Math.random() * 3 + 2 + 's';
            document.getElementById('hearts').appendChild(heart);
            setTimeout(() => heart.remove(), 5000);
        }
        setInterval(createHeart, 300);

        // Script untuk efek typewriter
        const text = "Hari ini adalah hari spesialmu, di mana dunia seolah berhenti sejenak untuk merayakan kehadiranmu. Kamu adalah cahaya dalam dunia, penuh dengan kebaikan, keceriaan, dan kasih sayang yang tak pernah pudar. Semoga tahun ini membawa lebih banyak kebahagiaan, impian yang tercapai, dan menjadi lebih dewasa. wish u all the best for u. Selamat ulang tahun bocil ! 🎉❤️";
        let index = 0;
        const speed = 100;

        function typeWriter() {
            if (index < text.length) {
                document.getElementById('typewriter').innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            }
        }

        // Script untuk slideshow otomatis
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 3000); // Ganti slide setiap 3 detik

        // Mulai efek setelah halaman load
        window.onload = function() {
            setTimeout(typeWriter, 2000);
        };
    </script>
</body>
</html>
