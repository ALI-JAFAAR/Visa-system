<?php
use App\Models\Years;
use Illuminate\Support\Facades\Hash;
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
                    <form>
                    	<script type="text/javascript"></script>{{ Hash::make('cms@lugta') }}
                        <div class="form-row">
                            <div class="name">الماركة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" disabled value="<?php echo $row->model ?? '';?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                           <div class="name"> نوع السياره </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" disabled type="text" value="<?php echo $row->carType ?? '';?>" name="carType">
                                </div>
                            </div>
                        </div>


@php  
$y = Years::findOrFail($row['year_id']); 
@endphp
                        <div class="form-row">
                            <div class="name">سنة الصنع</div>
                            <div class="value">
                                <div class="input-group">
<input class="input--style-5" type="text" disabled value="{{  $y->year}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">الحالة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" disabled value="{{ $row->status }}" name="">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">الوارد</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" disabled value="{{  $row->ward}}" name="">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">العداد</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" disabled value="@php echo $row->Kbm; @endphp0 " name="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">لوحة تسجيل المركبة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" disabled value="@php  
$y = Provinces::findOrFail($row['car_plate']); echo $y->provinces;
@endphp" name="">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">مكان تواجد المركبة المركبة</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" disabled value="@php  
$y = Provinces::findOrFail($row['car_location']); echo $y->provinces;
@endphp" name="">
                                </div>
                            </div>
                        </div>

 
<div class="form-row">
                            <div class="name">المحرك</div>
                            <div class="value">
                                <div class="input-group">
                                    <input style="width: 100%;" class="input--style-5" type="text" disabled placeholder="{{  $row->engine}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">عدد الاسطوانات  (السلندرات)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input style="width: 100%;" class="input--style-5" type="text" disabled placeholder="<?php echo $row["sli"];?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">قوة الدفع</div>
                            <div class="value">
                                <div class="input-group">
                                    <input style="width: 100%;" class="input--style-5" type="text" disabled placeholder="<?php echo $row["WD"];?>">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-row p-t-20 ">
                                <label class="label label--block">نوع السقف</label>
                                <div class="p-t-15 ethar">
                                    <?php if($row["roof"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" checked name="roof_iron">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p><?php echo $row["roof"];?></p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>


                            <div class="form-row p-t-20">
                                <label class="label label--block">الحساسات</label>
                                <div class="p-t-15 ethar">
                                    <?php if($row["sensors"]){?>
                                    <div class="_s ethara">        
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" checked name="sensors_back">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>خلفي</p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

 
<div class="form-row p-t-20">
                                <label class="label label--block">المقاعد</label>
                                <div class="p-t-15 ethar">
                                    <?php if($row["sets_mokhmal"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" checked name="sets_mokhmal">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مخمل</p>
                                    </div>
                                    <?php } if($row["sets_skin"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" checked name="sets_skin">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>جلد</p>
                                    </div>
                                    <?php } if($row["sets_electric"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" checked name="sets_electric">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تحكم كهربائي</p>
                                    </div>
                                    <?php } if($row["sets_warm"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" checked name="sets_warm">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تدفئة</p>
                                    </div>
                                    <?php } if($row["sets_AC"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input type="checkbox" checked name="sets_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تبريد</p>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>


                                    <?php if($row["camera"]){?>
                            <div class="form-row p-t-20">
                                <label class="label label--block">الكاميرا</label>
                                <div class="p-t-15 ethar">
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input type="checkbox" checked name="camera_back">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p><?php echo $row["camera"];?></p>
                                    </div>
                                </div>
                            </div>
                                    <?php }?>

 
                        <div class="form-row p-t-20">
                                <label class="label label--block">مواصفات اخرى</label>
                                <div class="p-t-15 d-sm-inline-flex ethar">
                                    
                                    <?php if ($row["fingerprint"]){?>
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara" >
                                        <label class="radio-container m-r-55"> 
                                            <input checked type="checkbox" value="true" name="fingerprint">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>زر تشغيل - اطفاء المحرك (بصمة تشغيل)</p>
                                    </div>
                                            <?php }?>
                                            <?php if ($row["smartiner"]){?>
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-2 ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="smartiner">
                                            <span class="checkmark"></span>
                                            
                                        </label>
                                        <p>دخول ذكي (بصمة دخول)</p>
                                    </div>
                                            <?php }?>
                                    
                                            <?php if ($row["auto_startm"] !=""){?>
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="auto_start">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تشغيل عن بعد</p>
                                    </div>
                                            <?php }?>

                                            <?php if ($row["warm_back_lcd"]){?>
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="warm_back_lcd">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p> شاشات ترفيه خلفية</p>
                                    </div>
                                            <?php }?>
                        
                                            <?php if ($row["electric_door"]){?>
                                    <div class="_s col-sm-6 col-md-4 col-lg-3 col-xl-3 ethara">
                                        <label class="radio-container m-r-55 p-t-15">
                                            <input checked type="checkbox" value="true" name="electric_door">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>باب خلفي كهربائي</p>
                                    </div>
                                            <?php }?>

                                    <?php if ($row["spped_lock"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="spped_lock">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مثبت السرعة</p>
                                    </div>
                                            <?php }?>
                                            
                                            
                                    <?php if ($row["auto_line_sys"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="auto_line_sys">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام اصطفاف ذاتي</p>
                                    </div>
                                            <?php }?>
                                            
                                    <?php if ($row["third_line"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="third_line">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مقاعد الصف الثالث تطوى كهربائيا</p>
                                    </div>
                                    <?php }?>        
                                         
                                    
                                    <?php if($row["front_seat_memo"]){?> 
                             
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="front_seat_memo">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>ذاكرة تعديل وضعيات جلوس لمقعد السائق</p>
                                    </div>
                             
                                    <?php }?>
                                    
                                    <?php if ($row["front_seat_warm"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="front_seat_warm">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>تدفئة مقاعد خلفية</p>
                                    </div>
                                    <?php }?>     
                                         
                                    <?php if ($row["dual_zone_AC"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                         <p>نظام تكييف مزدوج المناخات</p>
                                    </div>
                                    <?php }?> 
                                    
                                    <?php if ($row["wireless_charger"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                         <p>شاحن هاتف لاسلكي</p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if ($row["parda"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                         <p>ستائر خلفية + جانبية</p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if ($row["auto_align"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                         <p>نظام اصطفاف آلي</p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if ($row["glass_info_show"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="dual_zone_AC">
                                            <span class="checkmark"></span>
                                        </label>
                                         <p>نظام العرض الآمن للمعلومات على الزجاج الامامي</p>
                                    </div>
                                    <?php }?>
                                         
                                    <?php if ($row["air_bed1"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input checked type="checkbox" value="true" name="air_bed1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>وسائد هواء ستائرية.</p>
                                    </div>
                                    <?php }?>     
                                    <?php if ($row["air_bed2"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55"> 
                                            <input checked type="checkbox" value="true" name="air_bed2">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>وسائد هواء جانبية.</p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if ($row["front_light"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="road_heat">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>مصابيح امامية تفاعلية مع المنعطافات</p>
                                    </div>
                                    <?php }?>
                                    <?php if ($row["road_heat"]){?>
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="road_heat">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نطام المحافظة على خط السير</p>
                                    </div>
                                    <?php }?>
                                    <?php if($row["sight_block"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="sight_block">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام مراقبة النقطة العمياء في المرايا الجانبية</p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if($row["radar"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="radar">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>رادار امامي تفاعلي لمنع التصادم</p>
                                    </div>
                                    <?php }?>
                                    
                                    <?php if($row["night_seen"]){?> 
                                    <div class="_s ethara">
                                        <label class="radio-container m-r-55">
                                            <input checked type="checkbox" value="true" name="night_seen">
                                            <span class="checkmark"></span>
                                        </label>
                                        <p>نظام الرؤية الليلية</p>
                                    </div>
                                    <?php }?>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">معلومات المركبة</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea style="width: 100%;" class="input--style-5" type="text" name="info" placeholder="<?php echo $row["car_info"];?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">السعر</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $row["price"]?>" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">رقم الهاتف</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $row["phone"]?>" name="phone">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">رقم الواتساب</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $row["whatsapp"]?>" name="whatsapp">
                                </div>
                            </div>
                        </div>


                        <p style="font-size: 18pt;font-weight: bold;"> الصور الخاصة بالمركبة</p>
                        <br>
                        <hr>
                        <br>
                        <?php if($row["img1"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img1"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img2"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img2"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img3"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img3"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img4"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img4"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img5"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img5"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img6"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img6"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img7"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img7"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img8"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img8"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img9"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img9"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img10"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img10"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                        
                        <?php if($row["img11"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img11"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img12"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img12"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img13"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img13"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img14"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img14"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img15"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img15"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img16"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img16"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img17"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img17"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img18"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img18"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img19"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img19"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }if($row["img20"]){?>
                        <div class="form-row">
                            <div class="name"></div>
                            <div class="value">
                                <div class="input-group">
                                    <img class="resposive car_img" style="max-width: 450px;" src="http://lugta.info/img/<?php echo $row["img20"];?>">
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        
                        <div>
                            <a class="btn btn--radius-2 btn--green" href="/">رجوع</a>
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


