<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home - Bus AKAP</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   <!-- CSS -->
   <link rel="stylesheet" href="home.css">
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg pt-3 pb-3 navbar-light" style="background-color: #D84F57;">
      <div class="container-fluid">
         <a class="navbar-brand text-white ps-4" href="http://localhost/TIKET_BUS/home.php">BUS AKAP</a>
         <div class="pe-5" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item ms-3 me-3">
                  <a class="nav-link active text-white" aria-current="page"
                     href="http://localhost/TIKET_BUS/home.php">Home</a>
               </li>
               <li class="nav-item ms-3 me-3">
                  <a class="nav-link text-white" href="form.php">Pesan Tiket</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- Projects -->
   <section id="projects">
      <div class="container mt-5">
         <div class="row text-center mb-3">
            <div class="col">
               <h2>BUS AKAP</h2>
            </div>
         </div>
         <div class="row justify-content-center" data-aos="fade-in">
            <div class="col-md-4 mb-3">
               <div class="card">
                  <img style="height: 199px; object-fit: cover;" src="ekonomi.jpg" class="card-img-top kopi-1"
                     alt="Project - 1" />
                  <div class="card-body">
                     <h4 class="card-text text-center">
                        Bus Kelas Ekonomi
                     </h4>
                     <p class="card-text text-center">
                        Harga Tiket:<br>Rp 100.000/orang
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 mb-3">
               <div class="card">
                  <img style="height: 199px; object-fit: cover;" src="bisnis.jpeg" class="card-img-top kopi-2"
                     alt="Project - 2" />
                  <div class="card-body">
                     <h4 class="card-text text-center">
                        Bus Kelas Bisnis
                     </h4>
                     <p class="card-text text-center">
                        Harga Tiket:<br>Rp 300.000/orang
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 mb-3 ">
               <div class="card">
                  <img style="height: 199px; object-fit: cover;" src="eksekutif.jpg" class="card-img-top kopi-3"
                     alt="Project - 3" />
                  <div class="card-body">
                     <h4 class="card-text text-center">
                        Bus Kelas Eksekutif
                     </h4>
                     <p class="card-text text-center">
                        Harga Tiket:<br>Rp 500.000/orang
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
   </script>
</body>

</html>