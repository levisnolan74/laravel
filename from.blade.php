<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Handling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
       
   

    <div class="container bg-info my-3 py-2 rounded" style="width: 35%">
        <form action="{{ route('send_request') }}" method="POST">
            
            <h1 class="text-center my-2 fw-bold fs-4">Edit Data Produk 4</h1>
            <div class="mb-3">
                <label for="picture" class="form-label fw-semibold">Gambar Produk</label>
                <input class="form-control" id="picture" name="gambar" placeholder="Masukkan gambar  produk"
                    value="">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama Produk</label>
                <input class="form-control" id="name" name="nama" placeholder="Masukkan nama produk"
                    value="">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label fw-semibold">Berat</label>
                <input type="number" class="form-control" id="weight" name="berat"
                    placeholder="Masukkan berat produk" value="{{ old('berat') }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-semibold">Harga</label>
                <input type="number" class="form-control" id="price" name="harga"
                    placeholder="Masukkan harga produk" value="{{ old('harga') }}">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label fw-semibold">Stok</label>
                <input type="number" class="form-control" id="stock" name="stok"
                    placeholder="Masukkan stok produk" value="{{ old('stok') }}">
            </div>
            <div class="mb-3">
                <label for="cars" class="form-label fw-semibold">Kondisi</label>
                <select class="form-select" name="kondisi" value="{{ old('kondisi') }}">
                    <option selected value="0">Pilih Kondisi Barang</option>
                    <option value="Baru">Baru</option>
                    <option value="Bekas">Bekas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Deskripsi</label>
                <textarea class="form-control" id="description" rows="3" name="deskripsi" value="{{ old('deskripsi') }}"
                    placeholder="Tuliskan deskripsi produk yang akan dijual"></textarea>
            </div>
            <button type="submit" class="btn btn-dark mx-auto my-auto mb-2 d-block">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
