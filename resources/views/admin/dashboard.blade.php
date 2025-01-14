@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
     <div class="row">
       <div class="col-lg-12 mb-4 order-0">
         <div class="card">
           <div class="d-flex align-items-end row">
             <div class="col-sm-7">
               <div class="card-body">
                 <h5 class="card-title text-dark">Selamat Datang, {{ Auth::user()->name }}! 🎉</h5>

                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Profile</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png') }}"
                  data-app-light-img="illustrations/man-with-laptop-light.png') }}"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
                
  <div class="col-lg-12 col-md-12 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Menu</span>
            <h3 class="card-title mb-2">{{ $menu }} Data</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="menu-icon tf-icons bx bxs-discount"></i>
              </div>
              
            </div>
            <span>Promo</span>
            <h3 class="card-title text-nowrap mb-1">{{ $promo }} Data</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="menu-icon tf-icons bx bx-info-square"></i>
              </div>
              
            </div>
            <span>Testimonial</span>
            <h3 class="card-title text-nowrap mb-1">{{ $testimoni }}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class="menu-icon tf-icons bx bx-user-voice"></i>
              </div>
              
            </div>
            <span>Kritik & Saran</span>
            <h3 class="card-title text-nowrap mb-1">{{ $customerCare }}</h3>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>

                
                
              
@endsection