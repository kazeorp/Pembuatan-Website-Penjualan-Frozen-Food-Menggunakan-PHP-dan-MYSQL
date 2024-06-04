<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKS Frozen Food | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>    

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>HKS Frozen Food</h1>
            <h3>Mau Cari Apa?</h3>
            <div class="col-md-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group iinput-group-lg my-5">
                        <input type="text" class="form-control" placeholder="Cari Produk" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna3">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlighted kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-makanan d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Makanan">Makanan</a></h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-minuman d-flex justify-content-center align-items-center">
                    <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Minuman">Minuman</a></h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-makanan d-flex justify-content-center align-items-center">
                    <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Makanan">Makanan</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang Kami -->
    <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit veniam ad saepe debitis. Tenetur hic iure earum? Praesentium laborum sequi voluptates corporis quas dignissimos aliquam itaque consequatur fuga quam debitis facere temporibus similique hic optio suscipit illum, ea minima tempore provident nostrum. Laudantium corporis adipisci corrupti, rem, repudiandae magnam porro enim nemo, hic eos quisquam. Temporibus consequatur voluptatum quas, tenetur facilis ipsum, molestias eaque dolor provident quaerat et porro consectetur reiciendis, ullam quam! Dolorum fuga veniam facilis omnis eaque culpa!
            </p>
        </div>
    </div>

    <!-- Produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga">Rp <?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="btn btn-outline-warning mt-3" href="produk.php">See More</a>
        </div>
    </div>

    <!-- Footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>\
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>