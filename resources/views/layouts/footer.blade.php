<style>
    footer {
        background-color: #3B4A3C;
        padding: 40px 0;
        color: #BFBFBF;
    }

    footer h6 {
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
    }

    footer a {
        color: #BFBFBF;
        text-decoration: none;
        transition: color 0.3s;
    }

    footer a:hover {
        color: #fff;
    }

    .social-icons i {
        font-size: 24px;
        margin-right: 15px;
        transition: color 0.3s;
    }

    .social-icons i:hover {
        color: #E50914;
    }

    .btn-custom {
        background-color: #FF5C5C; /* Altın Sarısı */
        color: #3B4A3C; /* Yazı Rengi */
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        font-weight: 600;   
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #FFD700; /* Açık Kırmızı Hover */
        color: #FFFFFF; /* Beyaz Yazı */
        cursor: pointer;
    }

    .btn-custom:active {
        background-color: #E4B062;
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.2);
    }
</style>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h6>İletişim</h6>
                <p><i class="fa-solid fa-phone"></i> +90 555 000 11 52</p>
                <p><i class="fa-solid fa-envelope"></i> yardim@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6>KURUMSAL</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Anasayfa</a></li>
                    <li><a href="{{ url('/hakkimizda') }}">Hakkımızda</a></li>
                    <li><a href="{{ url('/gonullucalisma') }}">Gönüllü Çalışma</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6>Sosyal Medya</h6>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6>Bize Ulaşın</h6>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control mb-2" name="name" placeholder="Adınız" required />
                    <input type="email" class="form-control mb-2" name="email" placeholder="E-posta" required />
                    <textarea class="form-control mb-2" name="message" placeholder="Mesajınız" rows="3" required></textarea>
                    <button type="submit" class="btn btn-custom w-100">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-d9d5Gk34Yo5T5Og8iEjXHnlyMXigGxPyHn7SKP2aaSUf6R1pe1jz2jqEUdmw+U4Bb5J0hp7ex/Ue8El/2uU8lA==" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">
