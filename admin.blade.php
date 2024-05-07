<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section id="products" class="container bg-info p-3 rounded my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="fs-3 fw-semibold text-center m-0">List Product</p>
            <div>
                <a href="/tambah-product" type="button" class="btn btn-primary btn-sm">Lihat Profil</a>
                <a href="/tambah-product" type="button" class="btn btn-dark btn-sm">Tambah Produk</a>
                <a href="/products" type="button" class="btn btn-secondary btn-sm">Kembali Ke Produk</a>
            </div>
        </div>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr class="fw-semibold">
                        <td> 1 </td>
                        <td>Kucing Gendut</td>
                        <td> 20 </td>
                        <td>500</td>
                        <td>Rp. 2.000.000</td>
                        <td>
                            <button type="button"
                              href="/tambah-product" type="button" class="btn btn-dark btn-sm">Bekas</a>
                         
                        <td class="d-flex justify-content-center gap-1">
                            <a href="/product/{{ $product->id }}" type="button"
                                class="btn btn-warning btn-sm">Update</a>
                            <form action="/product/{{ $product->id }}" method="POST">
                              
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="fw-semibold">
                        <td> 2 </td>
                        <td>Kucing Lucu</td>
                        <td>5</td>
                        <td>200</td>
                        <td>Rp. 1.500.000</td>
                        <td>
                            <button type="button"
                              href="/tambah-product" type="button" class="btn bg-success btn-sm">Bekas</a>
                         
                        <td class="d-flex justify-content-center gap-1">
                            <a href="/product/{{ $product->id }}" type="button"
                                class="btn btn-warning btn-sm">Update</a>
                            <form action="/product/{{ $product->id }}" method="POST">
                              
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="fw-semibold">
                        <td>3</td>
                        <td>TESTING</td>
                        <td> 200 </td>
                        <td>200</td>
                        <td>Rp. 10.000</td>
                        <td>
                            <button type="button"
                              href="/tambah-product" type="button" class="btn btn-dark btn-sm">Bekas</a>
                         
                        <td class="d-flex justify-content-center gap-1">
                            <a href="/product/{{ $product->id }}" type="button"
                                class="btn btn-warning btn-sm">Update</a>
                            <form action="/product/{{ $product->id }}" method="POST">
                              
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
            </tbody>
        </table>
    </section>
</body>

</html>
