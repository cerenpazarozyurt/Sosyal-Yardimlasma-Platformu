@include('layouts.header')

<style>
    .info-box {
        background-color: #f5f5f5;
        border-radius: 15px;
        padding: 30px 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-box:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .box-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .icon {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .counter {
        font-size: 36px;
        font-weight: bold;
        color: #3B4A3C;
    }

    p {
        font-size: 16px;
        margin: 10px 0;
        font-weight: 600;
        color: #555;
    }

    .btn-custom2 {
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s, color 0.3s;
        font-size: 14px
    }

    .btn-custom:hover {
        background-color: #0056b3;
        color: #fff;
    }

    .button {
        background-color: #FF5C5C;
        color: #fff;
        border-radius: 25px;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s ease, color 0.3s ease;
        padding: 10px 25px;
    }

    .button:hover {
        background-color: #FFD700;
        color: #3B4A3C;
    }

    .image-container {
        width: 100%;
        height: 300px;
        overflow: hidden;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .story-title {
        font-weight: bold;
        color: #2F4F4F;
        font-style: italic;
        margin-bottom: 10px;
    }

    .story-content {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    #carouselExampleSlidesOnly {
        max-width: 100%;
        margin: 0 auto;
    }

    .carousel-item img {
        max-height: 632px;
        object-fit: cover;
        width: 100%;
    }
</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2500">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('assets/slider2.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/slider1.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/slider3.jpg') }}" alt="Second slide">
        </div>
    </div>
</div>


<div class="container text-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-3 mx-2 info-box">
            <div class="box-content">
                <span class="icon">🩸</span>
                <h3 class="counter" data-target="1000">0</h3>
                <p>Kan Bağışı İhtiyacı</p>
                <a href="{{ url('/kanbagisi') }}" class="btn btn-custom2 mt-2">Sende Destek Ol!</a>
            </div>
        </div>

        <div class="col-md-3 mx-2 info-box">
            <div class="box-content">
                <span class="icon">🤝</span>
                <h3 class="counter" data-target="10">0</h3>
                <p>Güncel Kampanyalar</p>
                <a href="{{ url('/gonullucalisma') }}" class="btn btn-custom2 mt-2">Kampanyaları Gör</a>
            </div>
        </div>

        <div class="col-md-3 mx-2 info-box">
            <div class="box-content">
                <span class="icon">🎉</span>
                <h3 class="counter" data-target="120">0</h3>
                <p>Hayatına Dokunulan Kişi</p>
                <a href="{{ url('/register') }}" class="btn btn-custom2 mt-2">Gönüllü Olmak İster misin?</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4" style="font-weight: 700; color: #3B4A3C;">Başarı Hikayeleri</h2>

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <div class="image-container">
                <img src="{{ asset('assets/anasayfa-1.jpg') }}" alt="Başarı Hikayesi 1" class="img-fluid rounded">
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="story-title">Her Bağış, Bir Hayat</h3>
            <p class="story-content">Gönüllülerimizin desteği sayesinde bir kişinin hayatına daha dokunuyoruz. Küçük bir
                dokunuşun nelere vesile olduğunu görmek, hepimizi motive ediyor.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 order-md-2">
            <div class="image-container">
                <img src="{{ asset('assets/anasayfa-2.jpg') }}" alt="Başarı Hikayesi 2" class="img-fluid rounded">
            </div>
        </div>
        <div class="col-md-6 order-md-1">
            <h3 class="story-title">Birlikte Daha Güçlüyüz</h3>
            <p class="story-content">Bir bağış etkinliğimizde ihtiyaç sahibi ailelere ulaşarak topluluğumuzun ne kadar
                güçlü olduğunu bir kez daha hissettik. Katkı sağlayan herkese teşekkürler.</p>
        </div>
    </div>

    <div class="text-center" style=margin-bottom:35px;>
        <a href="{{ url('/blog') }}" class="button px-5 py-2">Daha Fazlası İçin</a>
    </div>
</div>



<script>
    document.querySelectorAll('.counter').forEach(counter => {
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCounter, 10);
            } else {
                counter.innerText = target;
            }
        };
        updateCounter();
    });
</script>


@include('layouts.footer')
