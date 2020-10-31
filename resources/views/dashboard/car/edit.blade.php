<?php
use App\Models\Years;
use App\Models\Provinces;
?>
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
    <link href="http://127.0.0.1:8000/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/assets/vendor/font-awesome-4.7/css/font-awesome.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="http://127.0.0.1:8000/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="http://127.0.0.1:8000/assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="http://127.0.0.1:8000/assets/css/main.css" rel="stylesheet" media="all">
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
@if($data ??'')
@foreach($data as $row)
<body>
    <div class="page-wrapper aaa p-t-45 p-b-50">
        <div class="img-responsive" style="text-align:center;">
            <img src="http://127.0.0.1:8000/assets/img/logo.jpg" width="15%" height="15%" style="margin-top:-30px;margin-bottom: 1%;border-radius:50%;">
        </div>
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">معلومات سيارتك</h2>
                </div>
                <div class="card-body">
                    <form method="post" >
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="name">الماركة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="model" value="<?php echo $row["model"];?>">
                                </div>
                            </div>
                        </div>





                        <div class="form-row">
                            <div class="name">الموديل  (النوع) </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="carType" value="<?php echo $row["carType"];?>">
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="name">سنة الصنع</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="year_id">
                                            @php 
                                            
                                            $y = Years::findOrFail($row['year_id']);

                                            if($y){
                                                echo "<option selected value='".$y['id']."'>".$y->year."</option>";
                                            }
                                            $y = Years::all();
                                            foreach($y as $s){
                                                echo "<option value='".$s['id']."'>".$s->year."</option>";
                                            }
                                            @endphp
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
                                        <select name="status">
                                            <option value="<?php echo $row['status'];?>" selected><?php echo $row['status'];?></option>
                                            <option value="مستعمل">مستعمل</option>
                                            <option value="جديد">جديد</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">الوارد</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ward">
                                            <option value="<?php echo $row['ward'];?>" selected><?php echo $row['ward'];?></option>
                                            <option value="وكالة عراقي">وكالة عراقي</option>
                                            <option value=">خليجي">خليجي</option>
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
                                        <select name="Kbm">
                                            <option value="<?php echo $row['Kbm'];?>" selected><?php echo $row['Kbm'];?></option>
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
                                        <select  name="car_plate">
                                            @php 
                                            
                                            $y = Provinces::findOrFail($row['car_plate']);

                                                echo "<option selected value='".$y['id']."'>".$y->provinces."</option>";
                                            $y = Provinces::all();
                                            foreach($y as $s){
                                                echo "<option value='".$s['id']."'>".$s->provinces."</option>";
                                            }
                                            @endphp
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
                                        <select  name="car_location">
                                            @php 
                                            
                                            $y = Provinces::findOrFail($row['car_location']);

                                                echo "<option selected value='".$y['id']."'>".$y->provinces."</option>";
                                            $y = Provinces::all();
                                            foreach($y as $s){
                                                echo "<option value='".$s['id']."'>".$s->provinces."</option>";
                                            }
                                            @endphp
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ENGINE -->

                        <div class="form-row">
                            <div class="name">المحرك</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="engine" value="{{ $row->engine }}">
                                </div>
                            </div>
                        </div>


                        <!-- SLINDER COUNT  -->

                        <div class="form-row">
                            <div class="name">عدد الاسطوانات  (السلندرات)</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  name="sli">
                                            <option value="sli" selected>{{ $row->sli }}</option>
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
                                        <select  name="WD">
                                            <option value="{{ $row->WD }}" selected="selected">{{ $row->WD }}</option>
                                            <option value="دفع ثنائي (2WD)">دفع ثنائي (2WD)</option>
                                            <option value="دفع رباعي (4WD)">دفع رباعي (4WD)</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit"  onclick="show_things(); return false;">المواصفات</button>
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
                                            <?php if ($row["roof"] === "سقف عادي"){?>
                                                <input checked type="radio" value="سقف عادي" name="roof">
                                                <span class="checkmark"></span>
                                            <?php }else {?>
                                                <input type="radio" value="سقف عادي" name="roof">
                                                <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>سقف عادي</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["roof"] === "فتحة سقفية"){?>
                                            <input checked type="radio" value="فتحة سقفية" name="roof">
                                            <span class="checkmark"></span>
                                        <?php }else {?>
                                            <input  type="radio" value="فتحة سقفية" name="roof">
                                            <span class="checkmark"></span>
                                        <?php }?>
                                        </label>
                                        <p>فتحة سقفية</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["roof"] === "بانوراما"){?>
                                            <input checked type="radio" value="بانوراما" name="roof">
                                            <span class="checkmark"></span>
                                        <?php }else {?>
                                            <input  type="radio" value="بانوراما" name="roof">
                                            <span class="checkmark"></span>
                                        <?php }?>
                                        </label>
                                        <p>بانوراما</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["roof"] === "سقف مكشوف"){?>
                                            <input checked type="radio" value="سقف مكشوف" name="roof">
                                            <span class="checkmark"></span>
                                        <?php }else {?>
                                            <input  type="radio" value="سقف مكشوف" name="roof">
                                            <span class="checkmark"></span>
                                        <?php }?>
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
                                            <?php if($row["sensors"] === "خلفي"){?>
                                            <input checked type="radio" value="خلفي" name="sensors">
                                            <span class="checkmark"></span>
                                        <?php }else{?>
                                            <input type="radio" value="خلفي" name="sensors">
                                            <span class="checkmark"></span>
                                        <?php }?>
                                        </label>
                                        <p>خلفي</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if($row["sensors"] === "خلفي + اماي"){?>
                                            <input checked type="radio" value="خلفي + اماي" name="sensors">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="radio" value="خلفي + اماي" name="sensors">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>خلفي + اماي</p>
                                    </div>
                                </div>
                            </div>


                            <!-- SEATS -->


                            <div class="form-row p-t-20">
                                <label class="label label--block">المقاعد</label>
                                <div class="p-t-15 ethar">
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["sets_mokhmal"]){?>
                                            <input checked type="checkbox" value="true" name="sets_mokhmal">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input  type="checkbox" value="true" name="sets_mokhmal">
                                            <span class="checkmark"></span>
                                            <?php } ?>
                                        </label>
                                        <p>مخمل</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["sets_skin"]){?>
                                            <input checked type="checkbox" value="true" name="sets_skin">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input  type="checkbox" value="true" name="sets_skin">
                                            <span class="checkmark"></span>
                                            <?php } ?>
                                        </label>
                                        <p>جلد</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["sets_electric"]){?>
                                            <input checked type="checkbox" value="true" name="sets_electric">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input  type="checkbox" value="true" name="sets_electric">
                                            <span class="checkmark"></span>
                                            <?php } ?>
                                        </label>
                                        <p>تحكم كهربائي</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["sets_warm"]){?>
                                            <input checked type="checkbox" value="true" name="sets_warm">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input  type="checkbox" value="true" name="sets_warm">
                                            <span class="checkmark"></span>
                                            <?php } ?>
                                        </label>
                                        <p>تدفئة</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                        <?php if ($row["sets_AC"]){?> 
                                            <input checked type="checkbox" value="true" name="sets_AC">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input  type="checkbox" value="true" name="sets_AC">
                                            <span class="checkmark"></span>
                                            <?php } ?>
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
                                            <?php if ($row["camera"] === "خلفية"){?> 
                                            <input checked type="radio" value="خلفية" name="camera">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input checked type="radio" value="خلفية" name="camera">
                                            <span class="checkmark"></span>
                                            <?php } ?>
                                        </label>
                                        <p>خلفية</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["camera"] === "خلفية + امامية"){?> 
                                            <input checked type="radio" value="خلفية + امامية" name="camera">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input  type="radio" value="خلفية + امامية" name="camera">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>خلفية + امامية</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["camera"] === "محيطية (4 كاميرات)"){?> 
                                            <input checked type="radio" value="محيطية (4 كاميرات)" name="camera">
                                            <span class="checkmark"></span>
                                            <?php }else {?>
                                            <input type="radio" value="محيطية (4 كاميرات)" name="camera">
                                            <span class="checkmark"></span>
                                            <?php }?>
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
                                           <?php if ($row["fingerprint"]){?>
                                            <input checked type="checkbox" value="true" name="fingerprint">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input  type="checkbox" value="true" name="fingerprint">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>زر تشغيل - اطفاء المحرك (بصمة تشغيل)</p>
                                    </div>
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-2 ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["smartiner"]){?>
                                            <input checked type="checkbox" value="true" name="smartiner">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                        <input type="checkbox" value="true" name="smartiner">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>دخول ذكي (بصمة دخول)</p>
                                    </div>
                                    
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["auto_startm"] !=""){?>
                                            <input checked type="checkbox" value="true" name="auto_start">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="auto_start">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>تشغيل عن بعد</p>
                                    </div>

                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["warm_back_lcd"]){?>
                                            <input checked type="checkbox" value="true" name="warm_back_lcd">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input  type="checkbox" value="true" name="warm_back_lcd">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p> شاشات ترفيه خلفية</p>
                                    </div>
                        
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55 p-t-15">
                                            <?php if ($row["electric_door"]){?>
                                            <input checked type="checkbox" value="true" name="electric_door">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="electric_door">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>باب خلفي كهربائي</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["spped_lock"]){?> 
                                            <input checked type="checkbox" value="true" name="spped_lock">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="spped_lock">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>مثبت السرعة</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["auto_line_sys"]){?> 
                                            <input checked type="checkbox" value="true" name="auto_line_sys">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input  type="checkbox" value="true" name="auto_line_sys">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>نظام اصطفاف ذاتي</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["third_line"]){?> 
                                            <input checked type="checkbox" value="true" name="third_line">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="third_line">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>مقاعد الصف الثالث تطوى كهربائيا</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if($row["front_seat_memo"]){?> 
                                            <input checked type="checkbox" value="true" name="front_seat_memo">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="front_seat_memo">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>ذاكرة تعديل وضعيات جلوس لمقعد السائق</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["front_seat_warm"]){?> 
                                            <input checked type="checkbox" value="true" name="front_seat_warm">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="front_seat_warm">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>تدفئة مقاعد خلفية</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["dual_zone_AC"]){?> 
                                            <input checked type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>نظام تكييف مزدوج المناخات</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["wireless_charger"]){?> 
                                            <input checked type="checkbox" value="true" name="wireless_charger">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="wireless_charger">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>شاحن هاتف لاسلكي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["parda"]){?> 
                                            <input checked type="checkbox" value="true" name="parda">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="parda">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>ستائر خلفية + جانبية</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["auto_align"]){?> 
                                            <input checked type="checkbox" value="true" name="auto_align">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="auto_align">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>نظام اصطفاف آلي</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["glass_info_show"]){?> 
                                            <input checked type="checkbox" value="true" name="glass_info_show">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="glass_info_show">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>نظام العرض الآمن للمعلومات على الزجاج الامامي</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["air_bed1"]){?>
                                            <input checked type="checkbox" value="true" name="air_bed1">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="air_bed1">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>وسائد هواء ستائرية.</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["air_bed2"]){?>
                                            <input checked type="checkbox" value="true" name="air_bed2">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="air_bed2">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>وسائد هواء جانبية.</p>
                                    </div>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <?php if ($row["front_light"]){?>
                                            <input checked type="checkbox" value="true" name="front_light">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="front_light">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>مصابيح امامية تفاعلية مع المنعطافات</p>
                                    </div>
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if ($row["road_heat"]){?>
                                            <input checked type="checkbox" value="true" name="road_heat">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="road_heat">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>نطام المحافظة على خط السير</p>
                                    </div>
                                    
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if($row["sight_block"]){?> 
                                            <input checked type="checkbox" value="true" name="sight_block">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="sight_block">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>نظام مراقبة النقطة العمياء في المرايا الجانبية</p>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if($row["radar"]){?> 
                                            <input checked type="checkbox" value="true" name="radar">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="radar">
                                            <span class="checkmark"></span>
                                            <?php }?>
                                        </label>
                                        <p>رادار امامي تفاعلي لمنع التصادم </p>
                                    </div>
                                    
                                    
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <?php if($row["night_seen"]){?> 
                                            <input checked type="checkbox" value="true" name="night_seen">
                                            <span class="checkmark"></span>
                                            <?php }else{?>
                                            <input type="checkbox" value="true" name="night_seen">
                                            <span class="checkmark"></span>
                                            <?php }?>
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
                                    <textarea style="width: 100%;" class="input--style-5" type="text" value="<?php echo $row['car_info'];?>" name="car_info" placeholder="<?php echo $row['car_info']?>">
                                        <?php echo $row['car_info'];?>
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="name"> السعر بالدولار</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" value="<?php echo $row['price']?>" name="price">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">رقم الهاتف</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" value="<?php echo $row['phone']?>" name="phone">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">رقم الواتساب</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" value="<?php echo $row['whatsapp']?>" name="whatsapp">
                                </div>
                            </div>
                        </div>
                       
                        <div>
                            <button class="btn btn--radius-2 btn--red" name="info" type="submit">حفظ التعديلات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="http://127.0.0.1:8000/assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="http://127.0.0.1:8000/assets/vendor/select2/select2.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/datepicker/moment.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="http://127.0.0.1:8000/assets/js/global.js"></script>
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
@endforeach
@endif
</html>


