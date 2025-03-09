<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Dashboard - Axcert</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="{{ asset('member-area/img/favicon.png') }}" rel="icon">
      <link href="{{ asset('member-area/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

      <x-member-area.libraries.styles />
      <!-- =======================================================
      * Template Name: NiceAdmin
      * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      * Updated: Apr 20 2024 with Bootstrap v5.3.3
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
    </head>
    <body>
      <!-- ======= Header ======= -->
      <x-member-area.components.navigation />
      <!-- ======= Sidebar ======= -->
      <x-member-area.components.side-bar />
      <!-- End Sidebar-->
      <main id="main" class="main">

       {{ $breadcrumbs??''}}

        <section class="section dashboard">
          {{ $page??'' }}
        </section>

      </main><!-- End #main -->
      <!-- ======= Footer ======= -->
      <x-member-area.components.footer />
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <x-member-area.libraries.scripts />

    </body>
    </html>
