@extends('layouts.app')

@section('Content')

<!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><span class="spn">12 </span> الطلبات!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="orders.php">
                <span class="float-left">رؤية التفاصيل</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">4 عدد الشركات</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="creatcompany.php">
                <span class="float-left">رؤية التفاصيل</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><span class="spn"> </span>   الطلبات الجديدة</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="orders.php?_un">
                <span class="float-left">رؤية التفاصيل</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"> اظافة اموال!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="addmoney.php">
                <span class="float-left">رؤية التفاصيل</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
@endsection
