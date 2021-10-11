<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Personal Shop Inventory System">

    <!--  CSS -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>My Shop</title>
{{--    @laravelPWA--}}

</head>
<body>
<div class="wrapper" id="app">

    <div class="container-fluid fixed-top bg-dark pt-3" id="topbar">
        <span class="h5">@auth{{Auth::user()->shop_name}}@endauth</span>
        <span class="float-end">
            <div class="dropdown">
                <div class="btn-group">
                  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <i class="bi bi-person-circle"> user</i>
                 </button>
                  <div class="dropdown-menu" style="background-color:#f4f4f4">
{{--                      @can('isAdmin')--}}
                      <router-link to="/edit-profile" class="dropdown-item" style="background-color:#008891;color:white">
                        <i class="bi bi-pen"> Edit Profile</i>
                      </router-link>
                     <a class="dropdown-item mt-1" style="background-color:#d68060;color:white" href="#">
                         <i class="bi bi-people-fill"> Seller Manage</i>
                     </a>
                      <div class="dropdown-divider"></div>
{{--                      @endcan--}}
                     <a href="{{route('logout')}}" class="dropdown-item" style="background-color:#ec4646;color:white">
                       <i class="bi bi-box-arrow-right"> Logout</i>
                     </a>
                  </div>
                </div>
           </div>
        </span>
    </div>

    <div class="container-fluid mt-4 mb-5">
        <router-view></router-view>
        <!-- set progressbar -->
        <vue-progress-bar></vue-progress-bar>
    </div><!-- /.container-fluid -->

    <nav class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container-md">
            <router-link to="/products" class="nav-link btn btn-outline-success">
                <i class="bi bi-list-task"></i>  PRODUCTS
            </router-link>

            <router-link to="/sell-report" class="nav-link btn btn-outline-success">
                <i class="bi bi-clock-history"> HISTORY</i>
            </router-link>
        </div>
    </nav>

</div>
{{-- @auth--}}
{{--     <script>--}}
{{--         window.user = @json(auth()->user());--}}
{{--     </script>--}}

{{-- @endauth--}}
<!-- JavaScript -->
<script src="{{asset('/js/app.js')}}"></script>
</body>

</html>

