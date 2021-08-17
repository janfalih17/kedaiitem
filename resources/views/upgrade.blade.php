@extends('layouts.app')
@section('main')
    <main class="page-wrapper">
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      @include('components.headers.default')
      <!-- Dashboard header-->
      @include('components.users.pagetitle')
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            @include('components.profiles.aside')
            <!-- Content-->
            <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <h2 class="h3 py-2 text-center text-sm-start">Syarat menjadi penjual</h2>
                <!-- Tabs-->
                <!-- List group with icons and badges -->
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>
      <i class="ci-close-circle text-danger me-2"></i>
      Verifikasi alamat email
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>
      <i class="ci-close-circle text-danger me-2"></i>
      Verifikasi nomor handphone
    </span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>
      <i class="ci-close-circle text-danger me-2"></i>
      Verifikasi akun dengan foto ktp
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>
      <i class="ci-check-circle text-success me-2"></i>
      Verifikasi akun dengan foto selfie dan ktp
    </span>
    <button type="button" class="btn btn-primary">Verifikasi</button>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>
      <i class="ci-check-circle text-success me-2"></i>
      Verifikasi foto buku tabungan
    </span>
    <button type="button" class="btn btn-primary">Verifikasi</button>
  </li>
</ul>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
@endsection