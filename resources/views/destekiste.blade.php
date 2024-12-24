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
    <h2 class="text-center mb-4">Acil Destek İhtiyacı</h2>
    <div class="card p-4 shadow-sm">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('acildestek.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="needs" class="form-label">İhtiyaç Türü</label>
                <select class="form-select" id="needs" name="needs" required>
                    <option selected disabled>Seçiniz...</option>
                    <option value="barinma">Barınma</option>
                    <option value="gida">Gıda</option>
                    <option value="su">Su</option>
                    <option value="saglik">Sağlık</option>
                    <option value="giyecek">Giyecek</option>
                    <option value="diger">Diğer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="il" class="form-label">İl</label>
                <input type="text" class="form-control" id="il" name="il" required>
            </div>

            <div class="mb-3">
                <label for="ilce" class="form-label">İlçe</label>
                <input type="text" class="form-control" id="ilce" name="ilce" required>
            </div>

            <div class="mb-3">
                <label for="aciklama" class="form-label">Açıklama</label>
                <textarea class="form-control" id="aciklama" name="aciklama" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>
</div>
<br><br><br>
@include('layouts.footer')
