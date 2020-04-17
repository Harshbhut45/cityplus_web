@extends('layouts.admin')



@section('content')
    <div class="header-banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 header__price">
                    <div class="header__gold">
                        <img class="news-gold-image" src="images\gold.png">
                        <div class="goldTxt">સોનુ : </div>
                        <div class="specifics">45000  <span class="fa fa-caret-up"></span></div>
                    </div>
                    <div class="line"></div>
                    <div class="header__gold">
                        <img class="news-gold-image" src="images\gold1.png">
                        <div class="goldTxt">ચાંદી :</div>
                        <div class="specifics">45000  <span class="fa fa-caret-up"></span></div>
                    </div>
                    <div class="line"></div>
                    <div class="header__earnings">
                        <img class="news-gold-image" src="images\earnings.png">
                        <div class="goldTxt">સેનસેકસ :</div>
                        <div class="earnings">27802  <span class="fa fa-caret-down"></span></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 header__price1">
                    <div class="header-app" >
                        <div class="header-app__text">
                          For the best experience use our app
                        </div>
                        <div class="clearfix">
                          <a href="https://play.google.com/store/apps/details?id=com.cityplus.local.news.info"><img src= 'images\Play_Store.png'></a></a>
                          <a href="https://play.google.com/store/apps/details?id=com.cityplus.local.news.info"><img src= 'images\app-store-icon.png'></a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="container">
    <div class="card-stack">
        <div class="news-card">
          <div class="row news__card">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                  <div class="news-media news-thum">
                    <img class="news-media-image news-thum__img" src="images\covid-1.png">
                </div>
               
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="news-card-title news-right-box">
                <div class="news-card-author-time news-card-author-time-in-title">
                    <span class="author__card mr-1">BREAKING NEWS </span>
                    <span class="author__card-city mr-1">ગોંડલ </span>
                    <span class="news__time ml-1">3:20 am on 12 Apr 2020</span>
                </div>
                <span class="headline"> Corona Update: ‘જનતા કર્ફ્યૂ’ પહેલા ફરવા ગયેલા 100થી વધુ ગુજરાતીઓ આ જગ્યાએ ફસાયા? જાણો </span>
                <div class="articleBody"> બૉલીવુડની જાણીતી સિંગર કનિકા કપૂરનો હાલનો કોરોના વાયરસનો...
                </div>
                <div class="news-card-footer news-right-box">
                     {{-- <div class="read-more">read more at <a class="source" target="_blank" href="#"></a></div>  --}}
                  </div>
               </div>
            </div>
          </div> 
        </div>
      </div>


       {{-- responsive-image --}}
       <div class="card-stack__res1">
        <div class="news-card__res1">
          <div class="row news__card">
            <div class=" col-md-12 col-sm-12 col-xs-12">
                  <div class="news-media news-thum">
                    <img class="news-media-image news-thum__img" src="images\covid-1.png">
                </div>
               
            </div>
         
          </div> 
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 header__price__res header__box">
        <div class="header-app__res pd-l-15" >
            <div class="header-app__text">
              For the best experience use our app
            </div>
            <div class="clearfix">
              <a href="https://play.google.com/store/apps/details?id=com.cityplus.local.news.info"><img src= 'images\Play_Store.png'></a></a>
            </div>
        </div>
      </div>

@endsection