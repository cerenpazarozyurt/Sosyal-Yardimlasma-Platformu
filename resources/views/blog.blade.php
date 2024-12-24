@include('layouts.header')

<style>
    .header {
        color: #FFF;
        font-family: Poppins;
        font-size: 80px;
        font-style: normal;
        font-weight: 700;
        line-height: 80px;
        letter-spacing: 22px;
        text-transform: uppercase;
    }

    .title {
        color: #333;
        font-family: Poppins;
        font-size: 35px;
        font-style: normal;
        font-weight: 700;
        line-height: 38.5px;
    }

    .page-title {
        color: #333;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 24.61px;
    }

    .text {
        color: #777;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 23.07px;
    }

    h3.title-1 a {
        color: #333;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 22px;
        text-decoration: none;
    }

    .page-text {
        color: #777;
        text-align: center;
        font-family: Raleway;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 23.07px;
    }

    .custom-p-1 {
        color: #4A8B71;
        font-family: Poppins;
        font-size: 60px;
        font-style: normal;
        font-weight: 700;
        line-height: 60px;
    }

    .custom-p-2 {
        color: #4A8B71;
        font-family: Poppins;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 22px;
    }

    .custom-button {
        border-radius: 5px;
        border: 3px solid #FFF;
        background-color: black;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #FFF;
        text-align: center;
    }
</style>

<div class="section">
    <div class="content container text-center" style="padding: 5rem;">
        <div class="row">
            <div class="col-6 align-items-center">
                <div class="row">
                    <div class="col-md-9" style="text-align: right;">
                        <p class="custom-p-1">22</p>
                    </div>
                    <div class="col-md-3" style="text-align:left; margin-top:10px;">
                        <p class="custom-p-2 mb-0">Aralık</p>
                        <p class="custom-p-2 mb-0">2023</p>
                    </div>
                </div>
                <div>
                    <h3 class="title-1" style="text-align: right;"><a href="#">Dayanışmanın Gücü</a></h3>
                    <p class="page-text" style="margin-bottom:40px;">
                        Geçtiğimiz hafta küçük bir kasabada yaşanan ani sel felaketi, dayanışmanın gücünü bir kez daha
                        gösterdi. Evleri zarar görenler için kasaba halkı hızla yardımlaşma örneği sergiledi.

                        Komşular birbirlerine destek oldu, yiyecek ve giysi yardımları organize edildi. Gönüllüler
                        kesintisiz çalışarak ihtiyaçları karşıladı. Ortak çaba sayesinde kasabanın yaraları kısa sürede
                        sarıldı ve dayanışmanın gücü bir kez daha kanıtlandı.
                    </p>
                </div>
            </div>

            <div class="col-6"
                style="background-image: url('{{ asset('assets/anasayfa-1.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div>

        <div class="row">
            <div class="col-6"
                style="background-image: url('{{ asset('assets/anasayfa-2.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>

            <div class="col-6 align-items-center">
                <div class="row" style="margin-top:20px; margin-bottom:8px;">
                    <div class="col-md-2" style="text-align: right;">
                        <p class="custom-p-1">23</p>
                    </div>
                    <div class="col-md-10" style="text-align: left; margin-top:10px;">
                        <p class="custom-p-2 mb-0">Aralık</p>
                        <p class="custom-p-2 mb-0">2023</p>
                    </div>
                </div>
                <div>
                    <h3 class="title-1" style="text-align: left;"><a href="#">Yeni Bir Başlangıç</a></h3>
                    <p class="page-text" style="margin-bottom:40px;">
                        Ayşe Teyze'nin evi çıkan yangında büyük zarar gördü ve yaşadığı eşyaların çoğu kullanılamaz hale
                        geldi. Mahalle sakinleri hemen harekete geçti ve bir yardım kampanyası başlattı.

                        Kısa sürede toplanan mobilya, mutfak eşyası ve giysiler, Ayşe Teyze'nin yeni bir başlangıç
                        yapmasını sağladı. Komşuların dayanışması sayesinde yalnız olmadığını hisseden Ayşe Teyze, bu
                        destekle hayatına umutla devam etti.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 align-items-center">
                <div class="row" style="margin-top:20px; margin-bottom:8px;">
                    <div class="col-md-9" style="text-align: right;">
                        <p class="custom-p-1">24</p>
                    </div>
                    <div class="col-md-3" style="text-align: left; margin-top:10px;">
                        <p class="custom-p-2 mb-0">Aralık</p>
                        <p class="custom-p-2 mb-0">2023</p>
                    </div>
                </div>
                <div>
                    <h3 class="title-1" style="text-align: right;"><a href="{{ url('/blogdetay') }}">Umut Dolu Bir
                            Gün</a></h3>
                    <p class="page-text" style="margin-bottom:50px;">
                        Geçtiğimiz ay, bir sivil toplum kuruluşu kırsal bir bölgede yaşayan ihtiyaç sahibi ailelere
                        erzak yardımı ulaştırdı. Uzak köy yollarını aşarak varılan bölgede, temel gıda maddelerinden
                        oluşan yardım paketleri ailelere tek tek teslim edildi.

                        Yardım paketlerini alan aileler, bu destek sayesinde zorlu kış şartlarına daha hazırlıklı hale
                        geldi. Destek veren kuruluş, dayanışmanın sadece maddi yardımla değil, paylaşılan umutla da
                        güçlendiğini bir kez daha göstermiş oldu.
                    </p>
                </div>
            </div>

            <div class="col-6"
                style="background-image: url('{{ asset('assets/blog3.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>
        </div>

        <div class="row">
            <div class="col-6"
                style="background-image: url('{{ asset('assets/blog4.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
            </div>

            <div class="col-6 align-items-center">
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2" style="text-align: right;">
                        <p class="custom-p-1">25</p>
                    </div>
                    <div class="col-md-10" style="text-align: left; margin-top:10px;">
                        <p class="custom-p-2 mb-0">Aralık</p>
                        <p class="custom-p-2 mb-0">2023</p>
                    </div>
                </div>
                <div>
                    <h3 class="title-1" style="text-align: left;"><a href="#">Kan Bağışı ile Hayat Kurtarma</a>
                    </h3>
                    <p class="page-text">
                        Geçtiğimiz hafta, yerel bir hastanede düzenlenen kan bağışı kampanyası, birçok kişinin hayatını
                        kurtardı. Acil kana ihtiyaç duyan hastalar için düzenlenen etkinliğe yüzlerce gönüllü katıldı.

                        Bağışçılar, kan verdikten sonra ihtiyaç sahibi hastalara umut ışığı oldu. Sağlık çalışanlarının
                        özverili çabalarıyla kısa sürede toplanan kanlar, hayat kurtarıcı operasyonlarda kullanıldı. Bu
                        anlamlı destek, dayanışmanın en değerli örneklerinden biri olarak hafızalarda yer etti.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
