<?php
// Cek apakah status berhasil diset
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo "<script>alert('Data berhasil disimpan!');</script>";
}
?>

<html>

<head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="#">
            Azure Haven
        </a>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
            data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="#experience">
                        Facilities
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#rooms">
                        Rooms & Suites
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#price">
                        Price
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#footer">
                        About me
                    </a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2022/04/26/13/14/background-7158357_1280.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://wallpapers.com/images/hd/hotel-background-cwnsftiii6cq0bgl.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/594077/pexels-photo-594077.jpeg?cs=srgb&dl=pexels-asman-chema-91897-594077.jpg&fm=jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <div class="experience" id="experience">
        <div class="container">
            <section>
                <h2 class="text-center mt-4 mb-4 text-capitalize">AZURA HAVEN EXPERIENCE</h2>
            </section>
            <p class="section-title">
            Azure Haven provides a luxurious retreat with impeccable service and a serene ambiance. The elegantly designed rooms offer modern comforts and stunning views, creating the perfect environment for relaxation. Guests can enjoy world-class amenities, including a rooftop bar, a tranquil spa, and a state-of-the-art fitness center. Whether dining at the exquisite restaurant, lounging by the pool, or attending to business, Azure Haven offers a sophisticated experience that blends comfort, style, and convenience for both leisure and corporate travelers.
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img alt="A magnificent grand ballroom with an imposing 10m ceiling for up to 4,000 guests."
                            class="card-img-top" height="300"
                            src="https://storage.googleapis.com/a1aa/image/npavWCMlpC4zPZPlIcsz0hK98uSaHIOPfRyE90nPBWWqS56JA.jpg"
                            width="400" />
                        <div class="card-body">
                            <h5 class="card-title">
                                AZURA BALLROOM
                            </h5>
                            <p class="card-text">
                                A magnificent grand ballroom with an imposing 10m ceiling for up to 4,000 guests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img alt="A lush aquatic sanctuary dedicated for one's little adventure, featuring waterslides and playground."
                            class="card-img-top" height="300"
                            src="https://storage.googleapis.com/a1aa/image/9FsEXQxBwT4VANrRpeCs2LCAxjUqClY5pUV6RWHWPuYpS56JA.jpg"
                            width="400" />
                        <div class="card-body">
                            <h5 class="card-title">
                                WATERPARK
                            </h5>
                            <p class="card-text">
                                A lush aquatic sanctuary dedicated for one's little adventure, featuring waterslides and
                                playground.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img alt="A delightful space to enjoy coffee, light bites and a scoop or two of our signature gelatos."
                            class="card-img-top" height="300"
                            src="https://storage.googleapis.com/a1aa/image/zofaqemAktr3L01PJ6zARpgEZTPeSjbEE84jWfzeYAc1qUueE.jpg"
                            width="400" />
                        <div class="card-body">
                            <h5 class="card-title">
                                AZURA CAFE
                            </h5>
                            <p class="card-text">
                                A delightful space to enjoy coffee, light bites and a scoop or two of our signature
                                gelatos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="rooms">
        <h2 class="text-center mt-4 mb-4 text-capitalize">ROOMS & SUITE</h2>
        <br>
        <div class="container mt-4">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://s1.1zoom.me/big0/627/349992-admin.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Standard Room</h5>
                            <p>Enjoy affordable comfort in our Standard Room, the perfect place to relax after a long day. With minimalist design, complete amenities, and a cozy atmosphere, your stay will be as relaxing as it is convenient.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://s1.1zoom.me/big0/164/Interior_Room_Bedroom_Bed_Window_Armchair_589022_1280x850.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Deluxe Room</h5>
                            <p>Indulge in luxury with a modern twist in our Deluxe Room. Featuring premium amenities and stunning views, this room is designed for those who seek an elevated experience during their stay.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpapers.com/images/hd/hotel-room-1920-x-1080-picture-dyxueresgj1e4s3n.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Executive Room</h5>
                            <p>Our Executive Room offers the ultimate comfort with exclusive facilities for professionals. Experience unparalleled luxury, spaciousness, and exceptional service, all paired with breathtaking views for an unforgettable stay.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="container" id="price">
        <h2 class="text-center mt-4 mb-4 text-capitalize">PRICE LIST</h2>
        <br>
        <table class="table">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Standar</td>
                    <td>Rp500.000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Deluxe</td>
                    <td>Rp750.000</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Standar</td>
                    <td>Rp1.000.000</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Include Breakfast</td>
                    <td>+ Rp80.000</td>
                </tr>
            </tbody>
        </table>
        <a href="index1.php">
            <button type="button" class="btn">Book Now</button>
        </a>
    </section>


    <footer>
        <div class="container" id="footer">
            <h5>Jl. Raya Keadilan No.86, Depok, Jawa Barat 50252</h5>
            <h5>Phone : +62 21 2350 0700, Email: azurareservation.depok@azrahotels.com</h5>
            <small>Copyright &copy; 2024 - Muhammad Shalman Alfarisi</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>