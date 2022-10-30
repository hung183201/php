@extends('layout')
@section('Content') 
      <div
        class="section section-masthead animated fadeInUp"
        style="animation-delay: 0s"
      >
        <!-- Component Start -->
        <div class="module container bp-width-med3">
          <div class="com__breadcrumbs fz-13">
            <ul>
             
              <li><a href="../">Tuyển dụng</a></li>
              <li><a href="">Hỗ trợ</a></li>
          </ul>
          </div>
        </div>
        <!-- Component End -->
        <!-- Component Start -->
        <div
          class="module container bp-width-med3 visible done"
          style="animation-delay: 0.5s"
        >
          <div
            class="common__category-description box-med bp-curve3 bg-ash2 text-center has-tab" style="background-image: url('images/2138402379.jpg');background-position: center;background-size: cover;background-repeat: no-repeat ;"
          >
            <h3 class="no-margin thesans">Hỗ trợ</h3>
          </div>
        </div>
        <!-- Component End -->
        <div class="module container bp-width-med">
          <div
            class="common__category-list box-shadow3 bp-curve3 no-padding box-pull bg-white mobile-carousel-nav"
          >
            <div class="auto com__lo-nav fz-16 text-center">
              <div class="mc-na-main">
                <div class="owl-carousel owl-nav1 group-height">
                  <div class="item selected">
                    <a href="#">
                      <div>
                        <div class="bp-img">
                          <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <p class="gh3" style="min-height: 16px">
                          Cẩm nang tuyển dụng
                        </p>
                      </div>
                    </a>
                  </div>
                 
                  <div class="item">
                    <a href="#">
                      <div>
                        <div class="bp-img">
                          <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <p class="gh3" style="min-height: 16px">
                          Câu hỏi thường gặp
                        </p>
                      </div>
                    </a>
                  </div>
                  <div class="item ">
                    <a href="mailto:VietinBankCareers@vietinbank.vn?subject=[SUPPORT]Hỗ trợ Tuyển dụng!">
                      <div>
                        <div class="bp-img">
                         <i class="fa-solid fa-globe"></i>
                        </div>
                        <p class="gh3" style="min-height: 16px">
                          Liên hệ
                        </p>
                      </div>
                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section animated fadeInUp" style="animation-delay: 0s">
       
      </div>

@endsection