@extends('layouts.success')

@section('title')
    Store Success Page
@endsection

@section('content')
  <!-- Page Content -->
  <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-item-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" class="mb-4" alt="" />
              <h2>Welcome to Store</h2>
              <p>
                Yey, Akunmu sudah berhasil terdaftar!<br />
                Let's grow up now.
              </p>
              <div>
                <a href="/dashboard.html" class="btn btn-success w-50 mt-4"
                  >My Dashboard</a
                >
                <a href="/dashboard.html" class="btn btn-signup w-50 mt-2"
                  >Go To Shopping</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection