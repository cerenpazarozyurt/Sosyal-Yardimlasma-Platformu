@include('layouts.header')

<style>
    body {
        background-color: #f4f7f9;
        font-family: Arial, sans-serif;
    }

    .container3 {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .notification-category {
        background: #ffffff;
        padding: 25px;
        margin: 20px 0;
        border-left: 5px solid #0077b6;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .notification-category:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    h3 {
        color: #0077b6;
        margin-bottom: 15px;
        font-size: 1.6rem;
        display: flex;
        align-items: center;
    }

    h3::before {
        content: "⚠️";
        margin-right: 10px;
        font-size: 1.4rem;
        color: #ff6b6b;
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li.3 {
        padding: 10px 0;
        font-size: 1.1rem;
        color: #333;
        line-height: 1.6;
        border-bottom: 1px solid #e8f4f8;
    }

    li:last-child {
        border-bottom: none;
    }

    strong {
        color: #2a9d8f;
        font-weight: bold;
    }

    em {
        font-style: italic;
        color: #555;
    }
</style>

<div class="container3">
    <h2>Afet Destek Bildirimleri
        <a class="nav-link-1 btn" style="margin-left:100px;" href="{{ url('/destekiste') }}">Destek Talebi</a>
    </h2>

    <div class="notification-category">
        <h3>Barınma İhtiyacı</h3>
        <ul id="barinma-list">

        </ul>
    </div>

    <div class="notification-category">
        <h3>Gıda İhtiyacı</h3>
        <ul id="gida-list">

        </ul>
    </div>

    <div class="notification-category">
        <h3>Su İhtiyacı</h3>
        <ul id="su-list">

        </ul>
    </div>

    <div class="notification-category">
        <h3>Sağlık İhtiyacı</h3>
        <ul id="saglik-list">

        </ul>
    </div>

    <div class="notification-category">
        <h3>Giyecek İhtiyacı</h3>
        <ul id="giyecek-list">

        </ul>
    </div>

    <div class="notification-category">
        <h3>Diğer İhtiyaçlar</h3>
        <ul id="diger-list">

        </ul>
    </div>
</div>

<script>
    let destekler = @json($destekler);

    function categorizeData() {
        let categories = {
            barinma: document.getElementById('barinma-list'),
            gida: document.getElementById('gida-list'),
            su: document.getElementById('su-list'),
            saglik: document.getElementById('saglik-list'),
            giyecek: document.getElementById('giyecek-list'),
            diger: document.getElementById('diger-list')
        };

        // Verileri kategorilere ayırmak için döngü
        destekler.forEach(destek => {
            let liElement = document.createElement('li');
            liElement.classList.add('3');
            liElement.innerHTML = `<strong>${destek.il} - ${destek.ilce}</strong><br><em>${destek.aciklama}</em>`;
            
            switch(destek.needs) {
                case 'barinma':
                    categories.barinma.appendChild(liElement);
                    break;
                case 'gida':
                    categories.gida.appendChild(liElement);
                    break;
                case 'su':
                    categories.su.appendChild(liElement);
                    break;
                case 'saglik':
                    categories.saglik.appendChild(liElement);
                    break;
                case 'giyecek':
                    categories.giyecek.appendChild(liElement);
                    break;
                case 'diger':
                    categories.diger.appendChild(liElement);
                    break;
                default:
                    break;
            }
        });
    }

    window.onload = function() {
        categorizeData();
    }
</script>

@include('layouts.footer')