<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body x-data="{ open: false }" x-cloak class="antialiased position-relative">
    {{-- header --}}

    <nav class="navbar p-0  bg-light border">


        <div class="container">
            <div class=" w-100 d-none  d-md-flex py-2 fs-6 justify-content-between text-gray-600 ">
                <div><i class="fa-solid fa-phone">
                    </i><a> +12-345-7890</a></div>
                <div><i class="fa-solid fa-envelope"></i> <a> support@dummy.com </a>

                </div>
                <div><i class="fa-solid fa-building"></i> <a> XYZ, NY 01240, USA </a>

                </div>

            </div>


            <div class="row w-100 justify-content-between  ">
                <div class="col-12 d-flex align-items-center justify-content-center   col-md-2">
                    <p @click="open = ! open" class="d-block d-md-none align-self-end" style="padding: 4px"><i
                            class="fa-solid fa-bars"></i></p>
                    <img src="images/something.png" alt="something" />
                </div>
                <form class="d-flex col-12 col-md-7 col-lg-6  align-items-center justify-content-center" role="search">
                    <input class="form-control input-lg rounded-pill px-4  " type="search" placeholder="Search..."
                        aria-label="Search" style="max-width: 400px">
                    <button class="btn btn-outline-primary  rounded-pill mx-2 ">Search</button>
                </form>
                <div class="col-12 col-md-3 p-4 p-md-0 d-flex justify-content-around  align-items-center ">
                    <i class="fa-regular fa-heart fs-4 text-primary"></i>
                    <div class="position-relative btn">
                        <span class="badge cur bg-warning position-absolute top-0  rounded-pill "
                            style="transform: translateX(50%) translateY(-50%)">14</span>
                        <i class="fa-solid fa-cart-shopping fs-5 text-primary "></i>
                    </div>
                    <a class="btn btn-sm btn-primary">Login / Signup</a>

                </div>
            </div>
            <div class="w-100 px-5 d-none d-md-flex py-2 ">
                <ul class="d-flex gap-4 w-100 cursor-pointer list-unstyled">
                    <li class="btn btn-link text-white bg-primary text-decoration-none"><a>Home</a></li>
                    <li class="btn "><a>Products</a></li>
                    <li class="btn "><a>Blogs</a></li>
                    <li class="btn "><a>Contact</a></li>

                </ul>
            </div>

        </div>

    </nav>

    {{-- header --}}

    {{-- header modal menu --}}
    <div class="headerMenu" x-transition.origin.top.left x-show="open"
        style="z-index: 1000; position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0, 0, 0, 0.443); ">
        <div class="position-fixed top-0 left-0 bg-white" style="bottom: 0; width: 50vw;">
            <div class="w-100  d-flex justify-content-end p-4 "> <button @click="open = ! open" type="button"
                    class="btn-close float-left" aria-label="Close"></button>
            </div>

            <div class="p-4">
                <div class="p-0 d-flex align-items-start justify-content-start">
                    <ul
                        style="display:  flex; flex-direction: column; row-gap: 10px;  padding: 4px; padding-top: 6px; color : rgb(7, 22, 41); align-items: flex-start">
                        <li class="btn text-primary fw-bold ">
                            <i class="fa-solid fa-arrow-right"></i> Home
                        </li>
                        <li class="btn">
                            <i class="fa-solid fa-arrow-right"></i> Products
                        </li>

                        <li class="btn">
                            <i class="fa-solid fa-arrow-right"></i> Blogs
                        </li>
                        <li class="btn">
                            <i class="fa-solid fa-arrow-right"></i> Contacts
                        </li>


                    </ul>
                </div>

            </div>


        </div>

    </div>
    {{-- header modal menu --}}


    <div class="container py-3">
        @yield('content')
    </div>

    <div class="contaer-fluid bg-dark">
        <x-footer />

    </div>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
    autoplay: {
   delay: 3000,
 },

})


</script>

</body>

</html>
