<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Coderockr</title>

    <!-- Required Stylesheets -->
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css" />

    <!-- Load polyfills to support older browsers -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver"></script>

    <!-- Required scripts -->
    <script src="https://unpkg.com/vue@latest/dist/vue.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
</head>
<style>
    .navbar-dark .navbar-nav .nav-link {
        color: white;
    }

    .ml-10 {
        margin-left: 10rem !important;
    }

    .mr-10 {
        margin-right: 10rem !important;
    }

    body {
        background: linear-gradient(100deg, #F1A10A, #342303);
    }
</style>

<body>
    <div id="app">
        <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-navbar-brand href="#" class="ml-10">Rockr Page</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>


                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-navbar-nav class="mr-10">
                        <b-nav-item href="#">Posts</b-nav-item>
                        <b-nav-item href="#" class="ml-5">Contact</b-nav-item>
                    </b-navbar-nav>

                </b-navbar-nav>
            </b-collapse>
        </b-navbar>

        <div class="content">
            @yield('content')
        </div>
    </div>
    <!-- Start running your app -->
    <script>
        window.app = new Vue({
            el: '#app',
        })
    </script>
</body>

</html>