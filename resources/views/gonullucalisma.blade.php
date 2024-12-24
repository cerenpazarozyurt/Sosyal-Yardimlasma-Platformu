@include('layouts.header')

<style>
    .container3 {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px 15px;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #3B4A3C;
        text-align: center;
        margin-bottom: 30px;
    }

    .project {
        background: #f5f5f5;
        padding: 20px;
        margin: 15px 0;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .project-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #3B4A3C;
        margin-bottom: 10px;
    }

    .project-amount {
        color: #777;
    }

    .progress-bar {
        background-color: #fff;
        color: #FFFFFF;
        font-weight: bold;
        transition: width 0.5s ease;
    }

    .progress {
        background: #4caf50;
        height: 20px;
        border-radius: 5px;
    }

    .donate-button {
        display: inline-block;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #FF5C5C;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
    }

    .donate-button:hover {
        background-color: #FFD700;
    }

    .calendar {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 30px;
    }

    .volunteer-section {
        background-color: #f0f0f5;
        padding: 40px 20px;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        position: relative;
        margin-top: 50px;
        text-align: center;
    }

    .volunteer-section::before {
        content: "Gönüllü Ol!";
        font-size: 3.5rem;
        color: rgba(47, 72, 88, 0.05);
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .volunteer-info {
        font-size: 1rem;
        color: #555;
        margin-bottom: 15px;
    }

    .volunteer-button {
        padding: 12px 25px;
        background-color: #FF5C5C;
        color: white;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 1.1rem;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .volunteer-button:hover {
        background-color: #FF8C42;
    }

    .volunteer-quote {
        font-size: 1rem;
        color: #3B4A3C;
        font-style: italic;
        margin-top: 20px;
    }

    .fc-event-title {
        white-space: normal !important;
        text-align: center;
    }
</style>

<div class="container3">
    <h2 class="section-title">Gönüllü Projeler</h2>

    <!-- Proje 1 -->
    <div class="project">
        <h3 class="project-title">SMA Hastası İçin Destek Projesi</h3>
        <p class="project-amount">Gereken Miktar: 10.000 TL</p>
        <p class="project-amount">Toplanan Miktar: 6.000 TL</p>

        <div class="progress-bar">
            <div class="progress" style="width: 60%;"></div>
        </div>

        <a class="donate-button" style="margin-top:15px; margin-right:5px; margin-left:30px;" href="https://buy.stripe.com/test_7sI6qHbkudY4e8E5kn">10.000 TL Bağış Yap</a>
        <a class="donate-button" style="margin-top:15px; margin-right:5px;" href="https://buy.stripe.com/test_14k16ncoy1bi5C8bIK">5.000 TL Bağış Yap</a>
        <a class="donate-button" style="margin-top:15px; margin-right:5px;" href="https://buy.stripe.com/test_3cs02jdsC8DKc0w7st">3.000 TL Bağış Yap</a>
        <a class="donate-button" style="margin-top:15px; margin-right:5px;" href="https://buy.stripe.com/test_7sI2ardsCdY48Ok6oo">1.000 TL Bağış Yap</a>

    </div>

    <h2 class="section-title">Yardım Takvimi</h2>
    <div class="calendar">
        <p>Etkinlikleri takip etmek için takvimimizi ziyaret edin!</p>
        <div id="calendar"></div>
    </div>

    <div class="volunteer-section">
        <h2 class="section-title">Gönüllü Ol!</h2>
        <p class="volunteer-info">Bir adım at, hayatlara dokun. Toplum için fark yarat!</p>
        <a href="{{ url('/register') }}">
            <button class="volunteer-button">Gönüllü Ol</button>
        </a>
        <p class="volunteer-quote">“Bir elin nesi var, iki elin sesi var.”</p>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('.progress').each(function() {
            var width = $(this).css('width');
            $(this).css('width', '0').animate({
                width: width
            }, 1500);
        });

        // Takvim Ayarları
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'tr',
            events: [{
                    title: 'Kan Bağışı Kampanyası',
                    start: '2024-12-15',
                    color: '#FF5C5C'
                },
                {
                    title: 'Gönüllü Çalışma',
                    start: '2024-12-20',
                    color: '#FFD700'
                },
                {
                    title: 'Afet Yardımı Organizasyonu',
                    start: '2024-12-25',
                    color: '#3B4A3C'
                }
            ]
        });
        calendar.render();
    });
</script>

@include('layouts.footer')
