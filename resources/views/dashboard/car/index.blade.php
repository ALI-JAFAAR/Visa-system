<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!--  meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="معلومات سيارتك">
    <meta name="author" content="https://WWW.facebook.com/ALI.JAAFAR.0">
    <meta name="keywords" content="معلومات سيارتك">

    <!-- Title Page-->
    <title>معلومات سيارتك</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <style type="text/css">
    *{
        font-family: 'Cairo', sans-serif;

    }
        ._s{

            display: flex;
        }
        ._s  p{
            margin-right: 14%;
            font-size: 12pt;
            font-weight: bold;
        }

        @media screen and (max-width: 480px) {
          .ethar{
            display: flex !important;
            flex-wrap: wrap !important;
          }
          .ethara{
            width: -webkit-fill-available !important;
            padding: 1% !important;
          }
        }
        @media screen and (min-width: 480px) {
          .ethar{
            display: flex !important;
            flex-wrap: wrap !important;
          }
          .ethara{
            width: -webkit-fill-available !important;
            padding:1.5% !important;
          }
        }
        .aaa{
            /*background:url(https://wallpaperaccess.com/full/13643.jpg) no-repeat;*/
            /*background-size: 100% 100%;*/
            background: rgb(88, 87, 85);
        }
    </style>
</head>

<body>
    <div class="page-wrapper aaa p-t-45 p-b-50">
        <div class="img-responsive" style="text-align:center;">
            <img src="assets/img/logo.jpg" width="15%" height="15%" style="margin-top:-30px;margin-bottom: 1%;border-radius:50%;">
        </div>
        @if(count($errors) >0)
            <div class="col-md-12 col-lg-12">
              <div class="alert alert-danger alert-dismissible">
                  <ul>
                    @foreach( $errors->all() as $error)
                      <li>
                        {{$error}}
                      </li>
                    @endforeach
                  </ul>
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            </div>
        @endif
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">معلومات سيارتك</h2>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="name">الماركة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="model" required  oninvalid="this.setCustomValidity('يجب كتابة الماركة الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>





                        <div class="form-row">
                            <div class="name">النوع </div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="carType"   oninvalid="this.setCustomValidity('يجب كتابة الموديل (النوع) الخاص بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
                                </div>
                            </div>
                        </div>

 
                        <div class="form-row">
                            <div class="name">الموديل</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="year_id"   oninvalid="this.setCustomValidity('يجب اختيار سنة الصنع الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                            <option></option>
                                            <option  selected="selected">السنة</option>
                                            @foreach($year as $p)
                                                <option value="{{ $p->id }}">{{ $p->year }}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="name">الحالة</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="status">
                                            <option  selected="selected">الحالة</option>
                                            <option value="مستعمل">مستعمل</option>
                                            <option value="جديد">جديد</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">المصدر (الوارد)</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="ward">
                                            <option  selected="selected">الوارد</option>
                                            <option value="وكالة عراقية">وكالة عراقية</option>
                                            <option value="خليجي">خليجي</option>
                                            <option value="امريكي \ كندي">امريكي \ كندي</option>
                                            <option value="اوربي">اوربي</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- KBM -->

 
                        <div class="form-row">
                            <div class="name">عداد المسافات (كم)</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="Kbm"   oninvalid="this.setCustomValidity('يجب اختيار عداد المسافات الخاص بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                            <option></option>
                                            <!--<option selected="selected">العداد</option>-->
                                            <option value="1-1000">1-1000</option>
                                            <option value="1000-5000">1000-5000</option>
                                            <option value="5000-10000">5000-10000</option>
                                            <option value="10000-15000">10000-15000</option>
                                            <option value="15000-20000">15000-20000</option>
                                            <option value="20000-25000">20000-25000</option>
                                            <option value="25000-30000">25000-30000</option>
                                            <option value="30000-35000">30000-35000</option>
                                            <option value="35000-40000">35000-40000</option>
                                            <option value="40000-45000">40000-45000</option>
                                            <option value="45000-50000">45000-50000</option>
                                            <option value="50000-55000">50000-55000</option>
                                            <option value="55000-60000">55000-60000</option>
                                            <option value="60000-65000">60000-65000</option>
                                            <option value="65000-70000">65000-70000</option>
                                            <option value="70000-75000">70000-75000</option>
                                            <option value="75000-80000">75000-80000</option>
                                            <option value="80000-85000">80000-85000</option>
                                            <option value="85000-90000">85000-90000</option>
                                            <option value="95000-100000">95000-100000</option>
                                            <option value="100000-105000">100000-105000</option>
                                            <option value="110000-115000">110000-115000</option>
                                            <option value="120000-125000">120000-125000</option>
                                            <option value="125000-130000">125000-130000</option>
                                            <option value="130000-135000">130000-135000</option>
                                            <option value="135000-140000">135000-140000</option>
                                            <option value="145000-150000">145000-150000</option>
                                            <option value="155000-160000">155000-160000</option>
                                            <option value="160000-165000">160000-165000</option>
                                            <option value="170000-175000">170000-175000</option>
                                            <option value="175000-180000">175000-180000</option>
                                            <option value="180000-185000">180000-185000</option>
                                            <option value="185000-190000">185000-190000</option>
                                            <option value="190000-195000">190000-195000</option>
                                            <option value="200000-205000">200000-205000</option>
                                            <option value="205000-210000">205000-210000</option>
                                            <option value="210000-215000">210000-215000</option>
                                            <option value="215000-220000">215000-220000</option>
                                            <option value="220000-225000">220000-225000</option>
                                            <option value="225000-230000">225000-230000</option>
                                            <option value="230000-235000">230000-235000</option>
                                            <option value="235000-240000">235000-240000</option>
                                            <option value="240000-245000">240000-245000</option>
                                            <option value="250000-255000">250000-255000</option>
                                            <option value="255000-260000">255000-260000</option>
                                            <option value="260000-265000">260000-265000</option>
                                            <option value="270000-275000">270000-275000</option>
                                            <option value="275000-280000">275000-280000</option>
                                            <option value="280000-285000">280000-285000</option>
                                            <option value="285000-290000">285000-290000</option>
                                            <option value="290000-295000">290000-295000</option>
                                            <option value="295000-300000">295000-300000</option>
                                            <option value=" اكثر من  300000">اكثر من ذلك</option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div> 


                        <!-- PLATE -->
                        <div class="form-row">
                            <div class="name">لوحة تسجيل المركبة</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required  name="car_plate"  oninvalid="this.setCustomValidity('يجب اختيار لوحة التسجيل الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                            <option></option>
                                            @foreach($prov as $p)
                                                <option value="{{ $p->id }}">{{ $p->provinces }}</option>
                                            @endforeach
                                            <option value="بدون لوحة">بدون لوحة</option>
 
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

 
                        <!-- PROVINCE -->
                        <div class="form-row">
                            <div class="name">مكان  تواجد المركبة (المدينة)</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required  name="car_location"   oninvalid="this.setCustomValidity('يجب اختيار مكان تواجد المركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                            <option selected="selected">اختر مكان  تواجد المركبة (المدينةا)</option>
                                            @foreach($prov as $p)
                                                <option value="{{ $p->id }}">{{ $p->provinces }}</option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ENGINE -->

                        <div class="form-row">
                            <div class="name">حجم المحرك </div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="number" name="engine"   oninvalid="this.setCustomValidity('يجب كتابة حجم المحرك المركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>


                        <!-- SLINDER COUNT  -->

                        <div class="form-row">
                            <div class="name">عدد الاسطوانات  (السلندرات)</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required  name="sli">
                                            <option selected="selected">عدد الاسطوانات  (السلندرات</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="8">8</option>
                                            <option value="10">10</option>
                                            <option value="12">12</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!-- WD -->

 
                        <div class="form-row">
                            <div class="name">قوه الدفع</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required  name="WD">
                                            <option selected="selected">قوه الدفع</option>
                                            <option value="دفع ثنائي (2WD)">دفع ثنائي (2WD)</option>
                                            <option value="دفع رباعي (4WD)">دفع رباعي (4WD)</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
 
                            <button class="btn btn--radius-2 btn--blue" type="submit"  onclick="show_things(); return false;">المواصفات
                                <span>( اضغط هنا )</span>
                            </button>

                        </div>
                        <br>
                        <br>

                        <div id="show_thingsx" style="display: none;">

                            <!-- ROOF -->

                            <div class="form-row p-t-20 ">

                                <label class="label label--block">نوع السقف (القمارة)</label>
                                <div class="p-t-15 ethar">

                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="radio" value="سقف عادي" name="roof">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>سقف عادي</p>
                                    </div>

                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="radio" value="فتحة سقفية" name="roof">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>فتحة سقفية</p>
                                    </div>

                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="radio" value="بانوراما" name="roof">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>بانوراما</p>
                                    </div>

                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="radio" value="سقف مكشوف" name="roof">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>سقف مكشوف</p>
                                    </div>

                                </div>
                            </div>



                            <!-- SENSORS   -->

 
                            <div class="form-row p-t-20">
                                <label class="label label--block">حساسات استشعار</label>
                                <div class="p-t-15 ethar">
                                    
                                    <div class="_s ethara">        
                                        <label class="radio-container m-r-55">
                                            <input type="radio" value="خلفي" name="sensors">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>خلفي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="radio" value="خلفي + امامي" name="sensors">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>خلفي + امامي</p>
                                    </div>
                                
                                </div>
                            </div>


                            <!-- SEATS -->


                            <div class="form-row p-t-20">
                                <label class="label label--block">المقاعد</label>
                                <div class="p-t-15 ethar">
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="sets_mokhmal">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مخمل</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="sets_skin">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>جلد</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="sets_electric">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تحكم كهربائي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="set_warm">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تدفئة</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="set_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تبريد</p>
                                    </div>
                                
                                </div>
                            </div>



          
                            <!-- Camera -->

 
                            <div class="form-row p-t-20">
                                <label class="label label--block">الكاميرا</label>
                                <div class="p-t-15 ethar">
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="radio" value="خلفية" name="camera">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>خلفية</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="radio" value="خلفية + امامية" name="camera">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>خلفية + امامية</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="radio" value="محيطية (4 كاميرات)" name="camera">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>محيطية (4 كاميرات)</p>
                                    </div>
                                
                                </div>
                            </div>

                            
                            <!-- OTHERS -_-  -->


                            <div class="form-row p-t-20">
                                <label class="label label--block">مواصفات اخرى</label>
                                <div class="p-t-15 d-sm-inline-flex ethar">

                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara" >
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="fingerprint">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>زر تشغيل - اطفاء المحرك (بصمة تشغيل)</p>
                                    </div>
                                    
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-2 ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="smartiner">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>دخول ذكي (بصمة دخول)</p>
                                    </div>
                                    
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="auto_startm">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تشغيل عن بعد</p>
                                    </div>
                                    
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="warm_back_lcd">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p> شاشات ترفيه خلفية</p>
                                    </div>

 
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55 p-t-15">
                                            <input type="checkbox" value="true" name="electric_door">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>باب خلفي كهربائي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="spped_lock">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مثبت السرعة</p>
                                    </div>

                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="auto_line_sys">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام اصطفاف ذاتي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="third_line">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مقاعد الصف الثالث تطوى كهربائيا</p>
                                    </div>

 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="front_seat_memo">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>ذاكرة تعديل وضعيات جلوس لمقعد السائق</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="front_seat_warm">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تدفئة مقاعد خلفية</p>
                                    </div>
                                  
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام تكييف مزدوج المناخات</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="wireless_charger">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>شاحن هاتف لاسلكي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="parda">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>ستائر خلفية + جانبية </p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="auto_align">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام اصطفاف آلي </p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="glass_info_show">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام العرض الآمن للمعلومات على الزجاج الامامي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="air_bed1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>وسائد هواء ستائرية.</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="air_bed2">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>وسائد هواء جانبية.</p>
                                    </div>

                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="front_light">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مصابيح امامية تفاعلية مع المنعطافات</p>
                                    </div>
                                    
                                    
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="road_heat">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نطام المحافظة على خط السير</p>
                                    </div>

                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" value="true" name="sight_block">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام مراقبة النقطة العمياء في المرايا الجانبية</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="radar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>رادار امامي تفاعلي لمنع التصادم </p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" value="true" name="night_seen">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام الرؤية الليلية</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>





                        <div class="form-row">
                            <div class="name">معلومات المركبة ( شرح عن المركبة)</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea style="width: 100%;" required class="input--style-5" type="text" name="car_info" placeholder="شرح عام عن المركبة"  oninvalid="this.setCustomValidity('يجب كتابة شرح عام عن المركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" ></textarea>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="name"> السعر بالدولار</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="number" name="price"   oninvalid="this.setCustomValidity('يجب كتابة سعر المركبة ')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">رقم الهاتف</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="number" name="phone"   oninvalid="this.setCustomValidity('يجب كتابة رقم الهاتف')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">رقم الواتساب</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="number" name="whatsapp"   oninvalid="this.setCustomValidity('يجب كتابة رقم الواتس اب )" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>

                        <p style="font-size: 18pt;font-weight: bold;"> الصور الخاصة بالمركبة</p>
                        <br>
                        <hr>
                        <br>
                        <h3> اختر مجموعة صور  <br>
                            <span style="color:red;font-size:14px;background-color:#e3bcbc;padding:10px;">يجب تحميل اربع صور على الاقل </span>
                        </h3>
                        <br><br>
                        
                        <div class="form-row">
                            <div class="name">اختر  صور المركبة <br></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs[]" multiple >
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <h3>اختر صور مفردة <br>
                            <span style="color:red;font-size:14px;background-color:#e3bcbc;padding:10px;">يجب تحميل اربع صور على الاقل </span>
                        </h3>
                        <br><br>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]"    oninvalid="this.setCustomValidity('يجب اختيار الصورة الاولى الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')">
                                </div>
                            </div>
                        </div>

 
                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]"   oninvalid="this.setCustomValidity('يجب اختيار الصورة الثانية الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]"    oninvalid="this.setCustomValidity('يجب اختيار الصورة الثالثة الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]"   oninvalid="this.setCustomValidity('يجب اختيار الصورة الرابعة الخاصة بالمركبة')" onvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file"  name="imgs2[]">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file"  name="imgs2[]">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]">
                                </div>
                            </div>
                        </div>
 
                        <div class="form-row">
                            <div class="name">اختر صورة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="imgs2[]">
                                </div>
                            </div>
                        </div>
                       
                        <div>
                            <div class="form-row p-t-20" style="margin-right: -15%;">
                      
                                <div class="ethara">
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input required  type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p><a style="    margin-right: -21%;" href="assets/html/terms.html">
                                            الموافقة على الاحكام والشروط
                                        </a></p>
                                    </div>
                                </div>

                                <div class="ethara">
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input required  type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p><a style="    margin-right: -21%;" href="assets/html/privacy.html">
                                            الموافقة على شروط الاستخدام
                                        </a></p>
                                    </div>
                                </div>

                                <div class="ethara">
                                    <div class="">
                                        <p style="color: red;margin-right:11%;">ربما يحدث  بعض التاخير عند رفع  المعلومات بسبب ضعف خدمة الانترنت . يرجى عدم الخروج لحين الانتهاء .</p>
                                    </div>
                                </div>

                            </div>

                            <center>
                                <button class="btn btn--radius-2 btn--red"  name="car" type="submit">ارسال البيانات</button>
                            </center>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>
    <script type="text/javascript">
        function show_things() {
            var x = document.getElementById("show_thingsx");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
        }
    </script>

</body>

</html>


