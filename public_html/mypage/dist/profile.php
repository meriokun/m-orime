<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Everyday English +</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="robots" content="noindex">         
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="./css/adminlte.css" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media = 'all'"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="./css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />

    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <?php include 'includes/header.php'; ?>
      <!--begin::Sidebar-->
      <?php include 'includes/sidebar.php'; ?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main bg-grey">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-10">
                <h3 class="">プロフィール編集</h3>
                <p class="text-muted">プロフィールが編集できます。<span class="text-danger fs-5">*</span>は必須項目です。</p>    
              </div>
              <div class="col-sm-2">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">プロフィール</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">


              <div class="row">
                  
                 <div class="col-12">
                  
                  
                    <div class="card card-primary card-outline mb-4">
                      <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-info text-primary"></i> 基本情報</h3>
                        <div class="card-tools pull-right">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="card-body text-sm">


                        <div class="row">
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label>ID</label>
                              </div>
                              <div class="col-12 col-sm-9">
                                001
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label>会員区分</label>
                              </div>
                              <div class="col-12 col-sm-9">
                                プレミアム会員
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">

                          <div class="col-12 col-md-6">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3 mb-3">
                                  <label for="member_lastname" class="required %member_lastname_err% %member_firstname_err%">氏名 <span class="text-danger fs-5">*</span></label>
                              </div>
                              <div class="col-12 col-sm-9 mb-3">
                                <div class="row">
                                  <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text left">姓</span>
                                      </div>
                                      <input type="text" id="member_lastname" name="member_lastname" value="阿部" class="form-control " placeholder="100文字以内">
                                    </div>
                                  </div>
                                  <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text left">名</span>
                                        </div>
                                        <input type="text" id="member_firstname" name="member_firstname" value="麻咲" class="form-control " placeholder="100文字以内">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>  


                          <div class="col-12 col-md-6">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label for="member_handle" class="required %member_handle_err%">ニックネーム <span class="text-danger fs-5">*</span></label>
                              </div>
                              <div class="col-12 col-sm-9">
                                 <input type="text" value="Masaki" class="form-control " placeholder="100文字以内">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label>メールアドレス <span class="text-danger fs-5">*</span></label> 
                              </div>
                              <div class="col-12 col-sm-9">    
                                    <input type="email" class="form-control" value="sample@example.com" placeholder="100文字以内">
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label for="member_pass" class="required %member_pass_err%">パスワード</label>
                              </div>
                              <div class="col-12 col-sm-9">
                                <input type="text" id="member_pass" name="member_pass" value="************" class="form-control" placeholder="半角英数字10文字以上" />
                              </div>
                            </div>
                          </div>



                        </div>
                      </div>
                    </div>

                    <div class="card card-primary card-outline mb-4">
                      <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-info text-primary"></i> 住所・連絡先</h3>
                        <div class="card-tools pull-right">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="card-body text-sm">


                        <div class="row">
                            
                          <div class="col-12 col-md-6 mb-3">
                              
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label class="%member_zip1_err% %member_zip2_err%">居住国</label>  
                              </div>
                              <div class="col-12 col-sm-9">
                                    <select id="country" name="country" class="form-control select">
                                      <option value="">選択してください</option>
                                      <option value="JP" selected>日本</option>
                                      <option value="US">アメリカ</option>
                                      <option value="CA">カナダ</option>
                                      <option value="GB">イギリス</option>
                                      <option value="AU">オーストラリア</option>
                                      <option value="NZ">ニュージーランド</option>
                                      <option value="SG">シンガポール</option>
                                      <option value="KR">韓国</option>
                                      <option value="CN">中国</option>
                                      <option value="TW">台湾</option>
                                      <option value="OTHER">その他</option>
                                    </select>
                              </div>
                            </div>
                          </div>
                            
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group row">                              
                              <div class="col-12 col-sm-3">
                                    <label class="%member_zip1_err% %member_zip2_err%">郵便番号</label>
                              </div>
                              <div class="col-5 col-sm-4 mb-3">
                                <input type="number" id="member_zip1" name="member_zip1" value="%member_zip1%" maxlength="3" class="form-control inputlimit_num %member_zip1_err%" placeholder="123" />

                              </div>
                              <div class="col-7 col-sm-5 mb-3">
                                <input type="number" id="member_zip2" name="member_zip2" value="%member_zip2%" maxlength="4" class="form-control inputlimit_num %member_zip2_err%" placeholder="4567" />

                              </div>
                              <div class="col-12 col-sm-3">
                                <label class="%member_addr1_err%">都道府県</label>
                              </div>
                              <div class="col-12 col-sm-9 mb-3">
                                <input type="text" id="member_addr1" name="member_addr1" value="東京都" class="form-control %member_addr1_err%" placeholder="5文字以内" />

                              </div>
                              <div class="col-12 col-sm-3">
                                <label class="%member_addr2_err%">市区町村</label>
                              </div>
                              <div class="col-12 col-sm-9 mb-3">
                                <input type="text" id="member_addr2" name="member_addr2" value="世田谷区世田谷" class="form-control %member_addr2_err%" placeholder="20文字以内" />

                              </div>
                              <div class="col-12 col-sm-3">
                                <label class="%member_addr3_err%">町名番地</label>
                              </div>
                              <div class="col-12 col-sm-9 mb-3">
                                <input type="text" id="member_addr3" name="member_addr3" value="1-1-1" class="form-control %member_addr3_err%" placeholder="50文字以内" />

                              </div>
                              <div class="col-12 col-sm-3">
                                <label class="%member_addr4_err%">ビル名・部屋番号</label>
                              </div>
                              <div class="col-12 col-sm-9">
                                <input type="text" id="member_addr4" name="member_addr4" value="" class="form-control %member_addr4_err%" placeholder="50文字以内" />

                              </div>
                            </div>
                          </div>
                        </div>
                          
                        <div class="row">
                          <div class="col-12 col-md-6 mb-3">
                            <div class="form-group row">
                              <div class="col-12 col-sm-3">
                                <label class="%member_tel1_err% %member_tel2_err% %member_tel3_err%">電話番号</label>
                              </div>
                              <div class="col-4 col-sm-3">
                                <input type="number" id="member_tel1" name="member_tel1" value="%member_tel1%" maxlength="5" class="form-control inputlimit_num %member_tel1_err%" placeholder="03" />
                              </div>
                              <div class="col-4 col-sm-3">
                                <input type="number" id="member_tel2" name="member_tel2" value="%member_tel2%" maxlength="4" class="form-control inputlimit_num %member_tel2_err%" placeholder="1234" />
                              </div>
                              <div class="col-4 col-sm-3">
                                <input type="number" id="member_tel3" name="member_tel3" value="%member_tel3%" maxlength="4" class="form-control inputlimit_num %member_tel3_err%" placeholder="5678" />
                              </div>
                            </div>
                          </div>
                        </div>                          

                      </div>
                    </div>                  
                  
                  
                  


                    <div class="card card-primary card-outline mb-4">
                        
                      <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-info text-primary"></i> 学習</h3>
                        <div class="card-tools pull-right">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="card-body text-sm">

                        <div class="row">

                            <div class="col-12 col-lg-6">
                                <div class="form-group row">
                                  <div class="col-12 col-sm-3 mb-3">
                                     <label>加入コース</label>
                                  </div>
                                  <div class="col-12 col-sm-9 mb-3">
                                     英検2級コース
                                  </div>                                
                                </div>                         
                             </div> 
                        
                        </div>                          

                        <div class="row">

                            <div class="col-12 col-lg-6">
                                <div class="form-group row">
                                  <div class="col-12 col-sm-3 mb-3">
                                     <label>学習目標 <span class="text-danger fs-5">*</span></label>
                                  </div>
                                  <div class="col-12 col-sm-9 mb-3">
                                     <textarea class="form-control" rows="5">英会話を日常会話レベルまで習得したい。英検2級を取得したい。</textarea>
                                  </div>                                
                                </div>                         
                             </div> 


                            <div class="col-12 col-lg-6">
                                <div class="form-group row">
                                  <div class="col-12 col-sm-3 mb-3">
                                     <label>要望</label>
                                  </div>
                                  <div class="col-12 col-sm-9 mb-3">
                                     <textarea class="form-control" rows="5">テキストは、こちらから指定したものを使いたいです。また、日本語を交えたレッスンを希望します。</textarea>
                                  </div>                                
                                </div>                         
                             </div>                             

                        </div>



                    </div>
                 </div>
                     
                    <div class="mb-4">
                                <button
                                  type="submit"
                                  class="btn btn-primary me-3">
                                  保存する
                                </button>
                    </div>
                     
              </div>

            </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <?php include 'includes/footer.php'; ?>
      <?php include 'includes/include_imgresize.php'; ?>        
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="./js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure--><!--begin::Color Mode Toggle (#6010)-->
    <script>
      (() => {
        'use strict';

        const STORAGE_KEY = 'lte-theme';

        const getStoredTheme = () => localStorage.getItem(STORAGE_KEY);
        const setStoredTheme = (theme) => localStorage.setItem(STORAGE_KEY, theme);

        const prefersDark = () => globalThis.matchMedia('(prefers-color-scheme: dark)').matches;

        const getPreferredTheme = () => {
          const stored = getStoredTheme();
          if (stored) return stored;
          return prefersDark() ? 'dark' : 'light';
        };

        const setTheme = (theme) => {
          const resolved = theme === 'auto' ? (prefersDark() ? 'dark' : 'light') : theme;
          document.documentElement.setAttribute('data-bs-theme', resolved);
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme) => {
          // Highlight the active dropdown option
          document.querySelectorAll('[data-bs-theme-value]').forEach((el) => {
            el.classList.remove('active');
            el.setAttribute('aria-pressed', 'false');
            const check = el.querySelector('.bi-check-lg');
            if (check) check.classList.add('d-none');
          });
          const active = document.querySelector(`[data-bs-theme-value="${theme}"]`);
          if (active) {
            active.classList.add('active');
            active.setAttribute('aria-pressed', 'true');
            const check = active.querySelector('.bi-check-lg');
            if (check) check.classList.remove('d-none');
          }
          // Sync the topbar trigger icon
          document.querySelectorAll('[data-lte-theme-icon]').forEach((icon) => {
            icon.classList.toggle('d-none', icon.dataset.lteThemeIcon !== theme);
          });
        };

        globalThis.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
          const stored = getStoredTheme();
          if (!stored || stored === 'auto') setTheme(getPreferredTheme());
        });

        document.addEventListener('DOMContentLoaded', () => {
          showActiveTheme(getPreferredTheme());
          document.querySelectorAll('[data-bs-theme-value]').forEach((toggle) => {
            toggle.addEventListener('click', () => {
              const theme = toggle.getAttribute('data-bs-theme-value');
              setStoredTheme(theme);
              setTheme(theme);
              showActiveTheme(theme);
            });
          });
        });
      })();
    </script>
    <!--end::Color Mode Toggle-->

    <!-- OPTIONAL SCRIPTS -->

    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      crossorigin="anonymous"
    ></script>

    <!-- sortablejs -->
    <script>
      new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>

    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>

    <!-- ChartJS -->
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const sales_chart_options = {
        series: [
          {
            name: 'Digital Goods',
            data: [28, 48, 40, 19, 86, 27, 90],
          },
          {
            name: 'Electronics',
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
        chart: {
          height: 300,
          type: 'area',
          toolbar: {
            show: false,
          },
        },
        legend: {
          show: false,
        },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          type: 'datetime',
          categories: [
            '2023-01-01',
            '2023-02-01',
            '2023-03-01',
            '2023-04-01',
            '2023-05-01',
            '2023-06-01',
            '2023-07-01',
          ],
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy',
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
      );
      sales_chart.render();
    </script>

    <!-- jsvectormap -->
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
      integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
      integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
      crossorigin="anonymous"
    ></script>

    <!-- jsvectormap -->
    <script>
      // World map by jsVectorMap
      new jsVectorMap({
        selector: '#world-map',
        map: 'world',
      });

      // Sparkline charts
      const option_sparkline1 = {
        series: [
          {
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
      sparkline1.render();

      const option_sparkline2 = {
        series: [
          {
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
      sparkline2.render();

      const option_sparkline3 = {
        series: [
          {
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
      sparkline3.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
