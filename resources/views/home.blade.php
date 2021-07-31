<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Spotawheel Dashboard">

    <title>Spotawheel Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/app.min.css" rel="stylesheet">
    <link href="../assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
  </head>

  <body>

    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>



    <!-- Topbar -->
    <header class="topbar topbar-expand-lg">
      <div class="container">
        <div class="topbar-left">
          <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
          <span class="topbar-brand"><h3 style="margin-top: 5px;">Spotawheel</h3></span>

          <div class="topbar-divider d-none d-xl-block"></div>

          <nav class="topbar-navigation">
            <ul class="menu">

              <li class="menu-item active">
                <a class="menu-link" href="/home">
                  <span class="title">Dashboard</span>
                </a>
              </li>


              <li class="menu-item">
                <a class="menu-link" href="/clients">
                  <span class="title">Clients</span>
                </a>
              </li>


              <li class="menu-item">
                <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <span class="title">Logout</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                </a>
              </li>


            </ul>
          </nav>
        </div>

        <div class="topbar-right">
          <h6 style="margin-top: 5px;">Welcome {{ Auth::user()->name }}</h6>
        </div>
      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container">

      <div class="main-content container">


        <div class="row">

          <div class="col-lg-6">
             <div class="card card-body">
              <div class="flexbox">
                <span class="ti-user text-purple fs-40"></span>
                <span class="fs-40 fw-100">{{ $clients_count }}</span>
              </div>
              <div class="text-right">Clients</div>
            </div>
          </div>

          <div class="col-lg-6">
             <div class="card card-body">
              <div class="flexbox">
                <span class="ti-wallet text-purple fs-40"></span>
                <span class="fs-40 fw-100">{{ $payments_count }}</span>
              </div>
              <div class="text-right">Payments</div>
            </div>
          </div>

        </div>


        <div class="row">

            <div class="col-md-12">
            <div class="card">
              <h5 class="card-title"><strong>Latest Transactions from Clients</strong></h5>

              <div class="media-list media-list-hover media-list-divided scrollable" style="height: 345px">

                
                @foreach ( $latest_transactions as $latest_transaction )
                <div class="media media-single">
            
                  <div class="media-body">
                    <h6>{{ $latest_transaction->amount}} €</h6>
                  </div>

                  <div class="media-right">
                    <p>{{ $latest_transaction->created_at }} </p>
                  </div>

                </div>
                @endforeach


              <div class="text-center bt-1 border-light p-2">
                <a class="text-uppercase d-block fs-10 fw-500 ls-1" href="/clients">SHOW ALL CLIENTS WITH LATEST PAYMENT</a>
              </div>
            </div>
          </div>


        </div>

    </div>




      </div><!--/.main-content -->


      <!-- Footer -->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="text-center text-md-left">Copyright © 2021 Dimitrios Liaropoulos. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/script.min.js"></script>

  </body>
</html>

