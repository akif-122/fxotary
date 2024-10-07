@extends('layouts.master')

@section('title', 'Alternate')

@section('content')

    <x-page-title title="Dashboard" pagetitle="Alternate" />

      <div class="row row-cols-1 row-cols-xl-4">
        <div class="col">
          <div class="card border-primary border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">Total Sales</p>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">$8925.60</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart1"></div>
               </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-success border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">Total Income</p>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">$9627.20</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart2"></div>
               </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-danger border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">Product Views</p>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">65.7K</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart3"></div>
               </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">New Accouts</p>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">2497</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart4"></div>
               </div>
            </div>
          </div>
        </div>
      </div><!--end row-->

      <div class="row">
        <div class="col-12 col-xl-6">
          <div class="card rounded-4">
            <div class="card-body">
              <div id="chart5" class="mb-4"></div>
              <h4 class="mb-0">Total Earning</h4>
              <div class="d-flex align-items-center gap-4 mt-0">
                <div class="">
                  <h1 class="mb-0">36.7%</h1>
                </div>
                <div class="d-flex align-items-center align-self-end gap-2">
                  <span class="material-icons-outlined text-success">trending_up</span>
                  <p class="mb-0 text-success">34.5%</p>
                </div>
              </div>
              <p class="mb-5">Compare to last year</p>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-3">
                  <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                      class="material-icons-outlined fs-6 text-primary">fiber_manual_record</span>Sales</p>
                  <div class="progress w-100" style="height: 5px;">
                    <div class="progress-bar bg-primary" style="width: 65%"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                      class="material-icons-outlined fs-6 text-danger">fiber_manual_record</span>Product</p>
                  <div class="progress w-100" style="height: 5px;">
                    <div class="progress-bar bg-danger" style="width: 65%"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                      class="material-icons-outlined fs-6 text-success">fiber_manual_record</span>Income</p>
                  <div class="progress w-100" style="height: 5px;">
                    <div class="progress-bar bg-success" style="width: 65%"></div>
                  </div>
                </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <div class="card rounded-4">
            <div class="card-body">
              <div id="chart6"></div>
              <div class="d-flex align-items-start justify-content-around bg-light p-3 rounded-3 mt-3">
                <div class="">
                  <p class="mb-1 fs-6 fw-bold">Monthly</p>
                  <h2 class="mb-0">65,127</h2>
                  <p class="mb-0"><span class="text-success me-2 fw-medium">16.5%</span><span>55.21 USD</span></p>
                </div>
                <div class="vr"></div>
                <div class="">
                  <p class="mb-1 fs-6 fw-bold">Yearly</p>
                  <h2 class="mb-0">984,246</h2>
                  <p class="mb-0"><span class="text-success me-2 fw-medium">24.9%</span><span>267.35 USD</span></p>
                </div>
              </div>

              <div class="d-flex flex-column mt-3">
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0">Los Angeles</p>
                  <p class="mb-0 fw-bold">301,548</p>
                </div>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0">New York</p>
                  <p class="mb-0 fw-bold">987,457</p>
                </div>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0">Canada</p>
                  <p class="mb-0 fw-bold">249,124</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end row-->

      <div class="row">
        <div class="col-12 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-header p-3 bg-transparent">
              <div class="d-flex align-items-center justify-content-between">
                <div class="">
                  <h5 class="mb-0">Country Sales</h5>
                </div>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
             <div class="card-body">
                <div class="d-flex flex-column gap-4">
                   <div class="d-flex align-items-center gap-3">
                     <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                         <img src="{{ URL::asset('build/images/county/01.png') }}" width="40" alt="">
                         <div class="">
                            <h5 class="mb-0">$95,256</h5>
                            <p class="mb-0">Canada</p>
                         </div>
                     </div>
                     <div class="progress w-25" style="height: 7px;">
                        <div class="progress-bar" style="width: 65%"></div>
                     </div>
                     <div class="">
                      <p class="mb-0 fs-5">68%</p>
                     </div>
                   </div>
                   <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                        <img src="{{ URL::asset('build/images/county/02.png') }}" width="40" alt="">
                        <div class="">
                           <h5 class="mb-0">$75M</h5>
                           <p class="mb-0">United Kingdom</p>
                        </div>
                    </div>
                    <div class="progress w-25" style="height: 7px;">
                       <div class="progress-bar" style="width: 55%"></div>
                    </div>
                    <div class="">
                     <p class="mb-0 fs-5">57%</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                        <img src="{{ URL::asset('build/images/county/03.png') }}" width="40" alt="">
                        <div class="">
                           <h5 class="mb-0">$958K</h5>
                           <p class="mb-0">France</p>
                        </div>
                    </div>
                    <div class="progress w-25" style="height: 7px;">
                       <div class="progress-bar" style="width: 48%"></div>
                    </div>
                    <div class="">
                     <p class="mb-0 fs-5">48%</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                        <img src="{{ URL::asset('build/images/county/04.png') }}" width="40" alt="">
                        <div class="">
                           <h5 class="mb-0">$568K</h5>
                           <p class="mb-0">Brazil</p>
                        </div>
                    </div>
                    <div class="progress w-25" style="height: 7px;">
                       <div class="progress-bar" style="width: 75%"></div>
                    </div>
                    <div class="">
                     <p class="mb-0 fs-5">38%</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                        <img src="{{ URL::asset('build/images/county/05.png') }}" width="40" alt="">
                        <div class="">
                           <h5 class="mb-0">$855K</h5>
                           <p class="mb-0">United Kingdom</p>
                        </div>
                    </div>
                    <div class="progress w-25" style="height: 7px;">
                       <div class="progress-bar" style="width: 65%"></div>
                    </div>
                    <div class="">
                     <p class="mb-0 fs-5">68%</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                        <img src="{{ URL::asset('build/images/county/06.png') }}" width="40" alt="">
                        <div class="">
                           <h5 class="mb-0">$983K</h5>
                           <p class="mb-0">United States</p>
                        </div>
                    </div>
                    <div class="progress w-25" style="height: 7px;">
                       <div class="progress-bar" style="width: 88%"></div>
                    </div>
                    <div class="">
                     <p class="mb-0 fs-5">88%</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-3 flex-grow-1 flex-shrink-0">
                        <img src="{{ URL::asset('build/images/county/07.png') }}" width="40" alt="">
                        <div class="">
                           <h5 class="mb-0">$724K</h5>
                           <p class="mb-0">China</p>
                        </div>
                    </div>
                    <div class="progress w-25" style="height: 7px;">
                       <div class="progress-bar" style="width: 80%"></div>
                    </div>
                    <div class="">
                     <p class="mb-0 fs-5">85%</p>
                    </div>
                  </div>
                </div>
             </div>
           </div>
        </div>
        <div class="col-12 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-header p-3 bg-transparent">
              <div class="d-flex align-items-center justify-content-between">
                <div class="">
                  <h5 class="mb-0">Income / Expense</h5>
                </div>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="payments-list">
                <div class="d-flex flex-column gap-4">
                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/11.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$4856</h5>
                      <p class="mb-0">Paypal</p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-success">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>28.5%</span>
                    </div>
                  </div>

                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/10.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$1286</h5>
                      <p class="mb-0 fs-6">Figma </p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-success">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>12.4%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/13.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$9946</h5>
                      <p class="mb-0 fs-6">Visa Card</p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-danger">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>18.5%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/01.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$4376</h5>
                      <p class="mb-0 fs-6">Gmail</p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-success">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>32.8%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/02.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$6674</h5>
                      <p class="mb-0 fs-6">Skype</p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-danger">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>27.8%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/06.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$3489</h5>
                      <p class="mb-0 fs-6">Instagram</p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-success">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>10.2%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="wh-48 d-flex align-items-center justify-content-center rounded-circle border">
                      <img src="{{ URL::asset('build/images/apps/04.png') }}" width="30" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">$5578</h5>
                      <p class="mb-0 fs-6">Youtube</p>
                    </div>
                    <div class="d-flex align-items-center gap-1 text-success">
                      <span class="material-icons-outlined">expand_less</span>
                      <span>37.2%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 d-flex">
          <div class="card w-100 rounded-4">
            <div class="card-header p-3 bg-transparent">
              <div class="d-flex align-items-center justify-content-between">
                <div class="">
                  <h5 class="mb-0">Popular Products</h5>
                </div>
                <div class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="material-icons-outlined fs-5">more_vert</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript::">Action</a></li>
                    <li><a class="dropdown-item" href="javascript::">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript::">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/01.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Apple Hand Watch</h6>
                    <p class="mb-0">Sale: 258</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$199</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/02.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Mobile Phone Set</h6>
                    <p class="mb-0">Sale: 169</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$159</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/03.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Fancy Chair</h6>
                    <p class="mb-0">Sale: 268</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$678</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/04.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Blue Shoes Pair</h6>
                    <p class="mb-0">Sale: 859</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$279</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/05.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Blue Yoga Mat</h6>
                    <p class="mb-0">Sale: 328</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$389</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/06.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">White water Bottle</h6>
                    <p class="mb-0">Sale: 992</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$584</h5>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img src="{{ URL::asset('build/images/top-products/07.png') }}" width="55" alt="">
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Laptop Full HD</h6>
                    <p class="mb-0">Sale: 489</p>
                  </div>
                  <div class="">
                    <h5 class="mb-0">$398</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div><!--end row-->

@endsection 
@section('scripts')

  <script src="{{ URL::asset('build/plugins/apexchart/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('build/js/index2.js') }}"></script>
@endsection