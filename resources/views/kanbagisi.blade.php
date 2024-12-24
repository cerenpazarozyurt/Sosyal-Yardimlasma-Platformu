@include('layouts.header')

<style>
    .roadmap-container {
        display: flex;
        justify-content: center;
        margin: 40px 0;
        position: relative;
    }

    .roadmap {
        width: 80%;
        position: relative;
    }

    .roadmap-item {
        display: flex;
        flex-direction: row;
        position: relative;
        margin: 30px 0;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .info-box:hover {
        background-color: #ffe6e6;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    .arrow {
        width: 0;
        height: 0;
        border-style: solid;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 2;
    }

    .roadmap-item:nth-child(odd) .arrow {
        border-width: 20px 22px 20px 0;
        border-color: transparent #457b9d transparent transparent;
        right: calc(51% - 16px);
    }

    .roadmap-item:nth-child(even) .arrow {
        border-width: 20px 0 20px 22px;
        border-color: transparent transparent transparent #457b9d;
        left: calc(51% - 16px);
    }


    .info-box {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        width: 500px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: left;
        position: relative;
        z-index: 1;
        transition: background-color 0.3s, transform 0.3s;
    }

    .roadmap::before {
        content: '';
        position: absolute;
        width: 4px;
        height: 100%;
        background-color: #ddd;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
        z-index: 0;
    }

    .roadmap-item:nth-child(odd) .info-box {
        margin-left: 0;
        margin-right: auto;
    }

    .roadmap-item:nth-child(even) .info-box {
        margin-left: auto;
        margin-right: 0;
    }

    .info-box:hover {
        background-color: #a8dadc;
        transform: scale(1.05);
    }


    .text {
        background-color: #ffcccb;
        padding: 20px;
        font-size: 1.5em;
        font-weight: bold;
        color: #333;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 0 auto;
    }
</style>

<div id="map" style="width: 80%; height: 600px; margin:20px auto;"></div>

<div style="text-align: center; margin: 20px 0;">
    <p class="text">Ülkemizde düzenli kan bağışları yetersiz. Sadece 30 dakikanızı ayırarak önemli bir sorunun
        çözülmesine katkıda bulunabilirsiniz.</p>
</div>

<div id="detailModal" class="modal fade" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Kan Bağışı Detayı</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Ad Soyad:</strong> <span id="ad_soyad"></span></p>
          <p><strong>Hastane:</strong> <span id="adres"></span></p>
          <p><strong>Kan Grubu:</strong> <span id="kan_grubu"></span></p>
          <p><strong>Telefon:</strong> <span id="telefon"></span></p>
          <p><strong>Açıklama:</strong> <span id="aciklama"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        </div>
      </div>
    </div>
  </div>
  

<script>
    var map = L.map('map').setView([38.9637, 35.2433], 6);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    @foreach ($kan_bagisi as $bagis)
        var latitude = {{ $bagis->latitude }};
        var longitude = {{ $bagis->longitude }};

        var marker= L.marker([latitude, longitude]).addTo(map)
            .bindPopup('<b>{{ $bagis->sehir }}</b><br>Kan İhtiyaç Noktası.' + '<br><br><button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">Detay</button>');

        marker.on('click', function() {

            var ad_soyad = '{{ $bagis->ad_soyad }}';
        var adres = '{{ $bagis->adres }}';
        var kan_grubu = '{{ $bagis->kan_grubu }}';
        var telefon = '{{ $bagis->telefon }}';
        var aciklama = '{{ $bagis->aciklama }}';

        console.log(ad_soyad, adres, kan_grubu, telefon, aciklama);
            // Modal'da bilgileri güncelleme
            document.getElementById('ad_soyad').innerHTML = ad_soyad;
            document.getElementById('adres').innerHTML = adres;
            document.getElementById('kan_grubu').innerHTML = kan_grubu;
            document.getElementById('telefon').innerHTML = telefon;
            document.getElementById('aciklama').innerHTML = aciklama;

            // Modal'ı gösterme
            var myModal = new bootstrap.Modal(document.getElementById('detailModal'));
            myModal.show();
        });
    @endforeach
</script>

<div class="roadmap-container">
    <div class="roadmap">
        <div class="roadmap-item">
            <div class="arrow"></div>
            <div class="info-box">
                <h3>Kan Bağışının Önemi</h3>
                <p>Günümüzde çeşitli kazalar ve yaralanmalara bağlı operasyonlarda kanamalı hastalar için acil kan
                    gereksinimi doğmaktadır.
                    Yine çağımızın lösemi, talasemi, kanama-pıhtılaşma bozuklukları gibi önemli kan hastalıklarında da
                    kana gereksinim duyan hastalarımız olmaktadır.
                    Yılda bir ya da iki kez bağışlanabilecek kanın bir ya da birkaç hayat kurtarabileceği gerçeği
                    unutulmamalıdır. Ülkemizde düzenli, gönüllü ve karşılıksız yapılan kan bağışı sayısı halen yeterli
                    düzeyin altındadır.
                    Kan bağışı ile ilgili eğitim eksikliği giderilir ve bu konuda toplumsal bilincin olgunlaşması
                    sağlanabilirse ulusal ölçekli kan bağışçı kazanım programları da daha etkili olur.</p>
            </div>
        </div>
        <div class="roadmap-item">
            <div class="arrow"></div>
            <div class="info-box">
                <h3>Kimler Kan Bağışı Yapabilir?</h3>
                <p>Yaşı 18-65 arasında olanlar.
                    Ağırlığı 50 kg üzerinde olanlar.
                    Önemli bir sağlık sorunu olmayan, hemoglobin düzeyi normal olanlar.
                    Kan merkezine kan vermek için geldiğinde yapılan muayenede sağlığı uygun olduğu tespit edilen herkes
                    kan bağışında bulunabilir.</p>
            </div>
        </div>
        <div class="roadmap-item">
            <div class="arrow"></div>
            <div class="info-box">
                <h3>Kan Bağışı Rehberi</h3>
                <p>Süre: Kan verme işlemi yaklaşık 30 dakika sürer.

                    Form Doldurma: Sağlık bilgilerini içeren gizli bir form doldurulur.

                    Kayıt İşlemleri: Kimlik bilgileri kaydedilir; boy, kilo, tansiyon ve hemoglobin düzeyi ölçülür.

                    Kan Testi: Kan örneği alınarak testler yapılır. Engel yoksa işlem başlar.

                    Kan Alma: Steril iğne ile kolunuzdan kan alınır. Bu işlem 4-8 dakika sürer.

                    İşlem Sonrası: İğne çıkarıldıktan sonra kanama durdurulur ve 10-15 dakika gözlem altında
                    tutulursunuz. İkram yapılır.</p>
            </div>
        </div>
        <div class="roadmap-item">
            <div class="arrow"></div>
            <div class="info-box">
                <h3>Kan Bağışladıktan Sonra Nelere Dikkat Edilmelidir?</h3>
                <p>Sıvı Alımı: Bağış gününde bol sıvı tüketilmeli.

                    Sigara: Bağış sonrası 2 saat boyunca sigara içilmemeli.

                    Araç Kullanımı: Kan bağışı sonrası 30 dakika araç kullanılmamalı.

                    Ayakta Durma: İlk saat boyunca uzun süre ayakta durulmamalı.

                    Koruyucu Bant: Bant, 2 saatten önce çıkarılmamalıdır.

                    Aşırı Aktivite: Bağış gününde aşırı yorucu aktivitelerden (planör, dalgıçlık, spor vb.)
                    kaçınılmalıdır.

                    Ağırlık Taşıma: İlk birkaç saat boyunca bağış yapılan kolla ağır yük taşınmamalıdır.

                    Baş Dönmesi: Baş dönmesi ya da baygınlık hissi olursa yere uzanmalı ya da baş dizlerin arasına
                    alınmalıdır.

                    Alkol: İkinci yemek öğününden önce alkol alınmamalıdır.

                    Meslek Grupları: Uzun süre yorgunluğa neden olan işlerde çalışanlar, bağıştan 24 saat sonra işe
                    dönebilir.</p>
            </div>
        </div>
    </div>
</div>

<script>
    //animasyonlu görünüm için
    const roadmapItems = document.querySelectorAll('.roadmap-item');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.5
    });

    roadmapItems.forEach(item => observer.observe(item));
</script>

@include('layouts.footer')
