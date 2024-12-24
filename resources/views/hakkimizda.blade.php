@include('layouts.header')

<style>
    .mission-card,
    .vision-card {
        background-color: #f5f5f5;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .mission-card:hover,
    .vision-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .card-text,
    .list-unstyled {
        font-size: 1rem;
        color: #555;
    }


    .timeline {
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 40px 0;
    }

    .timeline-item {
        position: relative;
        width: 24%;
    }

    .timeline-content {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
    }

    .timeline-marker {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 20px;
        height: 20px;
        background-color: #FF5C5C;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        z-index: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .line-chart {
        width: 100%;
        height: 200px;
    }

    .line {
        stroke-width: 2;
    }

    .grid {
        stroke: #e0e0e0;
        stroke-width: 0.5;
    }

    .carousel-item img {
        object-fit: cover;
        height: 100%;
    }

    h2 {
        background-color: #FF5C5C;
        color: white;
        padding: 10px;
        border-radius: 8px;
    }

    .timeline-content:hover {
        background-color: #FFD700;
        transform: scale(1.05);
        transition: all 0.3s ease;
    }

    .axis text {
        font-size: 14px;
        fill: #333;
    }

    .legend-color {
        display: inline-block;
        width: 12px;
        height: 12px;
        margin-right: 5px;
        border-radius: 50%;
    }
</style>

<div id="headerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">

        <div class="carousel-item active" style="height: 500px; overflow: hidden;">
            <img src="{{ asset('assets/gönüllü.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Biz Kimiz">
        </div>

        <div class="carousel-item" style="height: 500px; overflow: hidden;">
            <img src="{{ asset('assets/slider2.jpg') }}" class="d-block w-100 h-100 object-fit-cover"
                alt="Galeri Fotoğraf 1">
        </div>

        <div class="carousel-item" style="height: 500px; overflow: hidden;">
            <img src="{{ asset('assets/yardim.jpg') }}" class="d-block w-100 h-100 object-fit-cover"
                alt="Galeri Fotoğraf 2">
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <div class="card mission-card shadow-sm border-0">
                <div class="card-body text-center">
                    <h3 class="card-title">Misyonumuz</h3>
                    <p class="card-text">
                        İhtiyaç sahiplerine ulaşarak, gönüllülerin destekleriyle sürdürülebilir bir sosyal yardımlaşma ağı oluşturmak. Kritik konularda toplumsal bilinci artırmak ve insanları bir araya getirerek sosyal sorumluluk projelerini hayata geçirmek. Her bireyin, yardıma ihtiyaç duyduğu anlarda destek bulabileceği bir platform sunmak için çalışıyoruz.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-4">
            <div class="card vision-card shadow-sm border-0">
                <div class="card-body text-center">
                    <h3 class="card-title">Vizyonumuz</h3>
                    <p class="card-text">
                        Toplumumuzun dayanışma ruhunu güçlendiren, her bireyin ihtiyaç anında yanında olduğu bir dünya yaratmak. Herkesin eşit fırsatlara sahip olduğu, yardımlaşmanın ve dayanışmanın ön planda olduğu bir toplum hedefliyoruz. Geleceğimiz, birlikte daha iyi bir yaşam için el birliğiyle atılan adımlarda saklıdır.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <h2 class="text-center mb-4">Zaman Çizelgesi</h2>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-content">
                <h3>2020</h3>
                <p>Gönüllü çalışma faaliyetlerimize başladık.</p>
            </div>
            <div class="timeline-marker"></div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <h3>2021</h3>
                <p>İlk kan bağışı kampanyamızı düzenledik.</p>
            </div>
            <div class="timeline-marker"></div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <h3>2022</h3>
                <p>Topluluğumuzda 500'den fazla kişiyle buluştuk.</p>
            </div>
            <div class="timeline-marker"></div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <h3>2023</h3>
                <p>Gönüllü sayımızı iki katına çıkardık.</p>
            </div>
            <div class="timeline-marker"></div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div id="lineChart" class="line-chart"></div>
    <div class="legend text-center mt-2">
        <span style="margin-right: 20px;">
            <span class="legend-color" style="background-color: #FF5C5C;"></span> Bağış Miktarı
        </span>
        <span style="margin-right: 20px;">
            <span class="legend-color" style="background-color: #FFD700;"></span> Gönüllü Sayısı
        </span>
        <span>
            <span class="legend-color" style="background-color: #5CFF5C;"></span> Toplumda Yaratılan Etki
        </span>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const chartContainer = document.getElementById('lineChart');

        // SVG elementi oluştur
        const svg = d3.select("#lineChart")
            .append("svg")
            .attr("width", "100%")
            .attr("height", "200px"); // Daha küçük yükseklik

        const data = [{
                year: "2020",
                donations: 50,
                volunteers: 30,
                impact: 20
            },
            {
                year: "2021",
                donations: 100,
                volunteers: 70,
                impact: 60
            },
            {
                year: "2022",
                donations: 150,
                volunteers: 90,
                impact: 80
            },
            {
                year: "2023",
                donations: 200,
                volunteers: 120,
                impact: 100
            },
        ];

        const margin = {
                top: 20,
                right: 30,
                bottom: 30,
                left: 40
            },
            width = chartContainer.clientWidth - margin.left - margin.right,
            height = 200 - margin.top - margin.bottom;

        const x = d3.scalePoint()
            .domain(data.map(d => d.year))
            .range([0, width]);

        const y = d3.scaleLinear()
            .domain([0, d3.max(data, d => Math.max(d.donations, d.volunteers, d.impact))])
            .nice()
            .range([height, 0]);

        const lineColor = {
            donations: "#FF5C5C",
            volunteers: "#FFD700",
            impact: "#5CFF5C"
        };

        const line = d3.line()
            .x(d => x(d.year))
            .y(d => y(d.donations));

        svg.append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`)
            .append("path")
            .datum(data)
            .attr("fill", "none")
            .attr("class", "line")
            .attr("stroke", lineColor.donations)
            .attr("d", line);

        // Gönüllü sayıları için çizgi
        const volunteerLine = d3.line()
            .x(d => x(d.year))
            .y(d => y(d.volunteers));

        svg.append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`)
            .append("path")
            .datum(data)
            .attr("fill", "none")
            .attr("class", "line")
            .attr("stroke", lineColor.volunteers)
            .attr("d", volunteerLine);

        // Etki için çizgi
        const impactLine = d3.line()
            .x(d => x(d.year))
            .y(d => y(d.impact));

        svg.append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`)
            .append("path")
            .datum(data)
            .attr("fill", "none")
            .attr("class", "line")
            .attr("stroke", lineColor.impact)
            .attr("d", impactLine);

        // Eksenler
        const xAxis = d3.axisBottom(x);
        const yAxis = d3.axisLeft(y);

        svg.append("g")
            .attr("transform", `translate(${margin.left},${height + margin.top})`)
            .call(xAxis);

        svg.append("g")
            .attr("transform", `translate(${margin.left},${margin.top})`)
            .call(yAxis);

        // Çizgi üzerinde noktalar için:
        svg.selectAll("dot")
            .data(data)
            .enter().append("circle")
            .attr("r", 4)
            .attr("cx", d => x(d.year) + margin.left)
            .attr("cy", d => y(d.donations) + margin.top)
            .attr("fill", lineColor.donations);

    });
</script>

@include('layouts.footer')
