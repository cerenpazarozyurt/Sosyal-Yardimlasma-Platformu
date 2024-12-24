@include('layouts.header')

<style>
    .card {
        border-radius: 10px;
        background-color: #f8f9fa;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #2c3e50;
        font-weight: bold;
    }

    .form-select,
    .form-control {
        border-radius: 8px;
        padding: 10px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #3498db;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }
</style>
<div class="container mt-5">
    <h2 class="text-center mb-4">Acil Kan Bağışı İhtiyacı</h2>
    <div class="card p-4 shadow-sm">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('kanbagisi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ad_soyad" class="form-label">Ad/Soyad</label>
                <input type="text" class="form-control" id="ad_soyad" name="ad_soyad" required>
            </div>

            <!-- Şehir Seçimi -->
            <div class="mb-3">
                <label for="sehir" class="form-label">Şehir</label>
                <select class="form-select" id="sehir" name="sehir" required>
                    <option value="">Bir şehir seçin</option>
                    <option value="Adana" coordinates="37.0,35.3213">Adana</option>
                    <option value="Adıyaman" coordinates="37.7641,38.2785">Adıyaman</option>
                    <option value="Afyonkarahisar" coordinates="38.7667,30.5256">Afyonkarahisar</option>
                    <option value="Ağrı" coordinates="39.7194,43.0483">Ağrı</option>
                    <option value="Aksaray" coordinates="38.2741,34.0354">Aksaray</option>
                    <option value="Amasya" coordinates="40.6517,35.8338">Amasya</option>
                    <option value="Ankara" coordinates="39.9334,32.8597">Ankara</option>
                    <option value="Antalya" coordinates="36.8969,30.7138">Antalya</option>
                    <option value="Ardahan" coordinates="41.1105,42.7022">Ardahan</option>
                    <option value="Artvin" coordinates="41.1829,41.8186">Artvin</option>
                    <option value="Aydın" coordinates="37.8665,27.8428">Aydın</option>
                    <option value="Balıkesir" coordinates="39.6495,27.8870">Balıkesir</option>
                    <option value="Bartın" coordinates="41.6351,32.3376">Bartın</option>
                    <option value="Batman" coordinates="37.8870,41.1329">Batman</option>
                    <option value="Bayburt" coordinates="40.2572,40.2262">Bayburt</option>
                    <option value="Bilecik" coordinates="40.1412,29.9787">Bilecik</option>
                    <option value="Bingöl" coordinates="38.8801,40.4935">Bingöl</option>
                    <option value="Bitlis" coordinates="38.3951,42.1088">Bitlis</option>
                    <option value="Bolu" coordinates="40.7333,31.6250">Bolu</option>
                    <option value="Burdur" coordinates="37.4705,30.2811">Burdur</option>
                    <option value="Bursa" coordinates="40.1950,29.0607">Bursa</option>
                    <option value="Çanakkale" coordinates="40.1550,26.4142">Çanakkale</option>
                    <option value="Çankırı" coordinates="40.5998,33.6141">Çankırı</option>
                    <option value="Çorum" coordinates="40.4745,34.9550">Çorum</option>
                    <option value="Denizli" coordinates="37.7750,29.1394">Denizli</option>
                    <option value="Diyarbakır" coordinates="37.9091,40.2128">Diyarbakır</option>
                    <option value="Düzce" coordinates="40.8400,31.1566">Düzce</option>
                    <option value="Edirne" coordinates="41.6771,26.5587">Edirne</option>
                    <option value="Elazığ" coordinates="38.6811,39.2232">Elazığ</option>
                    <option value="Erzincan" coordinates="39.7490,39.4853">Erzincan</option>
                    <option value="Erzurum" coordinates="39.9334,41.2674">Erzurum</option>
                    <option value="Eskişehir" coordinates="39.7764,30.5206">Eskişehir</option>
                    <option value="Gaziantep" coordinates="37.0662,37.3833">Gaziantep</option>
                    <option value="Giresun" coordinates="40.9128,38.3744">Giresun</option>
                    <option value="Gümüşhane" coordinates="40.4637,38.4287">Gümüşhane</option>
                    <option value="Hakkari" coordinates="37.5734,43.7356">Hakkari</option>
                    <option value="Hatay" coordinates="36.2088,36.2876">Hatay</option>
                    <option value="Iğdır" coordinates="40.0727,44.0401">Iğdır</option>
                    <option value="Isparta" coordinates="37.7642,30.5558">Isparta</option>
                    <option value="İstanbul" coordinates="41.0082,28.9784">İstanbul</option>
                    <option value="İzmir" coordinates="38.4237,27.1428">İzmir</option>
                    <option value="Kahramanmaraş" coordinates="37.5741,36.9376">Kahramanmaraş</option>
                    <option value="Karabük" coordinates="41.2086,32.6112">Karabük</option>
                    <option value="Karaman" coordinates="37.1751,33.2252">Karaman</option>
                    <option value="Kars" coordinates="40.6013,43.0977">Kars</option>
                    <option value="Kastamonu" coordinates="41.3791,33.7869">Kastamonu</option>
                    <option value="Kayseri" coordinates="38.7320,35.4802">Kayseri</option>
                    <option value="Kırıkkale" coordinates="39.8402,33.5154">Kırıkkale</option>
                    <option value="Kırklareli" coordinates="41.7350,27.2255">Kırklareli</option>
                    <option value="Kırşehir" coordinates="39.1467,34.1701">Kırşehir</option>
                    <option value="Kilis" coordinates="36.7184,37.1212">Kilis</option>
                    <option value="Kocaeli" coordinates="40.9893,29.9410">Kocaeli</option>
                    <option value="Konya" coordinates="37.8661,32.4846">Konya</option>
                    <option value="Kütahya" coordinates="39.4192,29.9784">Kütahya</option>
                    <option value="Malatya" coordinates="38.3955,38.3090">Malatya</option>
                    <option value="Manisa" coordinates="38.4192,27.1287">Manisa</option>
                    <option value="Mardin" coordinates="37.3140,40.7406">Mardin</option>
                    <option value="Mersin" coordinates="36.8139,34.6455">Mersin</option>
                    <option value="Muğla" coordinates="37.2148,28.3645">Muğla</option>
                    <option value="Muş" coordinates="38.7360,41.2711">Muş</option>
                    <option value="Nevşehir" coordinates="38.7137,34.6855">Nevşehir</option>
                    <option value="Niğde" coordinates="37.9667,34.6833">Niğde</option>
                    <option value="Ordu" coordinates="40.9847,37.8762">Ordu</option>
                    <option value="Osmaniye" coordinates="37.0780,36.2470">Osmaniye</option>
                    <option value="Rize" coordinates="41.0223,40.5154">Rize</option>
                    <option value="Sakarya" coordinates="40.9702,30.4117">Sakarya</option>
                    <option value="Samsun" coordinates="41.2867,36.33">Samsun</option>
                    <option value="Siirt" coordinates="37.9342,41.9390">Siirt</option>
                    <option value="Sinop" coordinates="42.0053,35.1440">Sinop</option>
                    <option value="Sivas" coordinates="39.7478,37.0160">Sivas</option>
                    <option value="Şanlıurfa" coordinates="37.1742,38.7995">Şanlıurfa</option>
                    <option value="Şırnak" coordinates="37.5125,42.4572">Şırnak</option>
                    <option value="Tekirdağ" coordinates="40.9737,27.5150">Tekirdağ</option>
                    <option value="Tokat" coordinates="40.3191,36.5507">Tokat</option>
                    <option value="Trabzon" coordinates="41.0034,39.7178">Trabzon</option>
                    <option value="Tunceli" coordinates="39.1117,39.5515">Tunceli</option>
                    <option value="Uşak" coordinates="38.6823,29.4082">Uşak</option>
                    <option value="Van" coordinates="38.4945,43.3833">Van</option>
                    <option value="Yalova" coordinates="40.6502,29.2702">Yalova</option>
                    <option value="Yozgat" coordinates="39.8192,34.8147">Yozgat</option>
                    <option value="Zonguldak" coordinates="41.4516,31.7985">Zonguldak</option>
                </select>
            </div>
            <input type="hidden" id="latitude" name="latitude">
            <input type="hidden" id="longitude" name="longitude">

            <div class="mb-3">
                <label for="adres" class="form-label">Hastane Adı</label>
                <input type="text" class="form-control" id="adres" name="adres" required>
            </div>

            <div class="mb-3">
                <label for="kan_grubu" class="form-label">Kan Grubu</label>
                <select class="form-select" id="kan_grubu" name="kan_grubu" required>
                    <option value="">Bir kan grubu seçin</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>

            <label for="telefon" class="form-label">Telefon</label>
            <input type="tel" class="form-control" id="telefon" name="telefon" pattern="\d{10}"
                placeholder="5551234567" title="10 haneli bir telefon numarası girin." required>


            <div class="mb-3">
                <label for="aciklama" class="form-label">Açıklama</label>
                <textarea class="form-control" id="aciklama" name="aciklama" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>
</div>
<br><br><br>

<script>
    document.getElementById('sehir').addEventListener('change', function () {
        var selectedOption = this.options[this.selectedIndex];
        var latitude = selectedOption.getAttribute('coordinates').split(',')[0];
        var longitude = selectedOption.getAttribute('coordinates').split(',')[1];

        // Gizli inputları güncelle
        document.getElementById('latitude').value = latitude;
        document.getElementById('longitude').value = longitude;
    });
</script>

@include('layouts.footer')
