<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            overflow: hidden;
            -webkit-box-orient: vertical;
        }
    </style>
</head>

<body>
    <section id="products" class="container bg-info p-3 rounded my-4">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('admin_page') }}" type="button" class="btn btn-primary btn-sm">Halaman Pengguna Admin</a>
            <p class="'fs-3 fw-bold text-center'  "style= border-top:>PRODUCTS</p>
            
            <a href="{{ route('admin_page') }}" type="button" class="btn btn-primary btn-success btn-sm">Halaman Pengguna Merchant</a>
        </div>
        <div class="mb-4 mx-auto" style="border-top: 3px solid black; width: 65px;">
            <a type="button" class="btn btn-dark btn-sm" style="visibility: hidden">Halaman Pengguna Merchant</a>
        </div>
        <div class="container">
            <div class="row row-cols-3">
               
                    <div class="col-3 p-2 d-flex flex-column">
                        <div class="card">
                            <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.youngontop.com%2Fwp-content%2Fuploads%2F2023%2F08%2Fkabo-p6yH8VmGqxo-unsplash.jpg&tbnid=mC9h6TIaM9n5BM&vet=12ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygkegUIARCaAQ..i&imgrefurl=https%3A%2F%2Fwww.youngontop.com%2Ffakta-unik-kucing-hewan-menggemaskan%2F&docid=HgdPk5AUUb-RPM&w=640&h=640&q=gambar%20kucing&ved=2ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygkegUIARCaAQ" class="card-img-top" alt="..."
                                style="aspect-ratio: 1/1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title fw-bold">Kucing Gendut</h5>
                                    <p
                                        class="card-title card-title bg-warning rounded px-2 fw-bold">
                                        Bekas</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="card-title bg-success rounded px-2 fw-bold text-white">
                                       20
                                    </p>
                                    <p class="card-title bg-info rounded px-2 fw-bold">
                                      RP. 2. 000.000</p>
                                    <p class="card-title bg-secondary rounded px-2 fw-bold text-white">
                                        
                                       500 gr</p>
                                </div>
                                <p class="card-text text-start">
                                  Kucing ini hanya dijual disini tidak ditempat yang lain dan pastinya dan harganya...
                                </p>
                                <a href="#" class="btn btn-primary d-block">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
            
               
                    <div class="col-3 p-2 d-flex flex-column">
                        <div class="card">
                            <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn0-production-images-kly.akamaized.net%2F72FuVdD7Dq45MwMiK-QE4hGS5Lo%3D%2F1200x900%2Fsmart%2Ffilters%3Aquality(75)%3Astrip_icc()%3Aformat(webp)%2Fkly-media-production%2Fmedias%2F2754932%2Foriginal%2F005940800_1552970791-fotoHL_kucing.jpg&tbnid=mbtCI4AU_zylsM&vet=12ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygDegQIARBR..i&imgrefurl=https%3A%2F%2Fwww.liputan6.com%2Fcitizen6%2Fread%2F3920454%2Fciri-ciri-kucing-stres-perhatikan-tingkah-lakunya-dan-ketahui-sejak-dini&docid=pCcV6yDsDbidmM&w=1200&h=900&q=gambar%20kucing&ved=2ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygDegQIARBR" class="card-img-top" alt="..."
                                style="aspect-ratio: 1/1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title fw-bold">Kucing Lucu</h5>
                                    <p
                                        class="card-title card-title bg-success rounded px-2 fw-bold ">
                                        Baru</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="card-title bg-success rounded px-2 fw-bold text-white">
                                        5
                                    </p>
                                    <p class="card-title bg-info rounded px-2 fw-bold">
                                       Rp. 1.500.000</p>
                                    <p class="card-title bg-secondary rounded px-2 fw-bold text-white">
                                        
                                       200 gr</p>
                                </div>
                                <p class="card-text text-start">
                                  Kucing ini meraih best style di lomba styling cat dan kucing ini dipelihara....
                                </p>
                                <a href="#" class="btn btn-primary d-block">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
               
               
                    <div class="col-3 p-2 d-flex flex-column">
                        <div class="card">
                            <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fasset.kompas.com%2Fcrops%2FW4P3no-vmu-9GnsCWwybHDufncM%3D%2F120x34%3A4222x2768%2F750x500%2Fdata%2Fphoto%2F2021%2F04%2F18%2F607ba95f8d6f7.jpg&tbnid=qnLzefw693pTSM&vet=12ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygCegQIARBP..i&imgrefurl=https%3A%2F%2Fwww.kompas.com%2Fhomey%2Fread%2F2021%2F04%2F23%2F133309176%2Famati-tanda-tanda-ini-menunjukkan-kucing-anda-mengalami-depresi&docid=pMLEvSIr4cqinM&w=750&h=500&q=gambar%20kucing&ved=2ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygCegQIARBP" class="card-img-top" alt="..."
                                style="aspect-ratio: 1/1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title fw-bold">Kucing Tentara</h5>
                                    <p
                                        class="card-title card-title bg-success rounded px-2 fw-bold ">
                                        Baru</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="card-title bg-success rounded px-2 fw-bold text-white">
                                       2
                                    </p>
                                    <p class="card-title bg-info rounded px-2 fw-bold">
                                       Rp. 3.000.000</p>
                                    <p class="card-title bg-secondary rounded px-2 fw-bold text-white">
                                        
                                       800 gr</p>
                                </div>
                                <p class="card-text text-start">
                                  Kucing ini sangat kuat bisa memecahkan batu, kayu dan hati-hati bila ingin...
                                </p>
                                <a href="#" class="btn btn-primary d-block">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
               
                   
               
       
                    <div class="col-3 p-2 d-flex flex-column">
                        <div class="card">
                            <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.promediateknologi.id%2Fcrop%2F0x0%3A0x0%2F750x500%2Fwebp%2Fphoto%2Fp1%2F294%2F2023%2F12%2F14%2FHopsDes9-3454616980.png&tbnid=tL658KSYGy-z-M&vet=12ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygIegQIARBb..i&imgrefurl=https%3A%2F%2Fwww.hops.id%2Funik%2F29411191189%2Fmemandang-manusia-penuh-makna-berikut-4-fakta-tatapan-kucing-yang-mengundang-rasa-penasaran&docid=EhBFN1S9hpeEDM&w=750&h=500&q=gambar%20kucing&ved=2ahUKEwiAgZy5lPuFAxWr3DgGHZPjChQQMygIegQIARBb" class="card-img-top" alt="..."
                                style="aspect-ratio: 1/1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title fw-bold">TESTING</h5>
                                    <p
                                        class="card-title card-title bg-warning rounded px-2 fw-bold">
                                        Bekas</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="card-title bg-success rounded px-2 fw-bold text-white">
                                       200
                                    </p>
                                    <p class="card-title bg-info rounded px-2 fw-bold">
                                       Rp.10.000</p>
                                    <p class="card-title bg-secondary rounded px-2 fw-bold text-white">
                                        
                                       200 gr</p>
                                </div>
                                <p class="card-text text-start">
                                  test
                                </p>
                                <a href="#" class="btn btn-primary d-block">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
