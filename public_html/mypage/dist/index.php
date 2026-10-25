<?php
require_once '../session.php';
?>
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
                <h3 class="">ダッシュボード</h3>
                <p class="text-muted">こんにちは、Masakiさん。今日も学習を頑張りましょう！</p>    
              </div>
              <div class="col-sm-2">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">ダッシュボード</li>
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
            <!--begin::Row-->
              
            <div class="row">
                
                <!-- 左カラム -->
                <div class="col-12 col-lg-4">

                  <div class="card card-primary card-outline mb-3">

                    <div class="card-body box-profile">
                      <div class="row">    
                        <div class="col-4">
                          <div class="text-center px-xxl-4 pb-2">
                            <img class="profile-user-img img-fluid rounded-circle"
                                 src="assets/img/img_member.png"
                                 alt="プロフィール画像" class="w-100">
                          </div>
                        </div>
                        <div class="col-8">
                          <h3 class="profile-username pt-3">
                            masaki
                          </h3>

                        </div>
                      </div>

                      <ul class="list-group list-group-unbordered mb-0">
                        <li class="list-group-item">
                          <div class="row">    
                            <div class="col-4">
                                <b>会員区分</b>
                            </div>
                            <div class="col-8">
                                <span class="float-right">プレミアム会員</span>
                            </div>
                          </div>
                        </li>

                        <li class="list-group-item">
                          <div class="row">    
                            <div class="col-4">
                                <b>コース</b>
                            </div>
                            <div class="col-8">
                                <span class="float-right">英検2級コース</span>
                            </div>
                          </div>                            
                        </li>

                        <li class="list-group-item">
                          <div class="row">    
                            <div class="col-4">
                                <b>クーポン</b>
                            </div>
                            <div class="col-8">
                                <span class="float-right">500pt</span>
                            </div>
                          </div>                             
                        
                        </li>
                      </ul>
                        
                      <a href="profile.php">  
                      <button class="btn btn-primary mt-3">
                      プロフィール編集
                      </button>
                      </a>
                    </div>

                  </div>

                </div>              
              
                <div class="col-12 col-lg-8 col-6 mb-3">  
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-6">
                        <!--begin::Small Box Widget 1-->
                        <div class="small-box text-primary bg-lprimary">
                          <div class="inner">
                            <h3>3</h3>

                            <p>予約中レッスン</p>

                          </div>
                          <i class="bi bi-calendar-check small-box-icon text-primary"></i>
                          <a
                            href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover text-dark"
                          >
                            詳細 <i class="bi bi-arrow-right"></i>
                          </a>
                        </div>
                        <!--end::Small Box Widget 1-->
                      </div>
                      <!--end::Col-->
                      <div class="col-6">
                        <!--begin::Small Box Widget 2-->
                        <div class="small-box text-success bg-lsuccess">
                          <div class="inner">
                            <h3>53<span class="fs-5">回</span></h3>

                            <p>受講回数</p>
                          </div>

                          <i class="bi bi-mortarboard small-box-icon text-success"></i>    
                          <a
                            href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover  text-dark"
                          >
                            詳細 <i class="bi bi-arrow-right text-dark"></i>
                          </a>
                        </div>
                        <!--end::Small Box Widget 2-->
                      </div>
                      <!--end::Col-->
                      <div class="col-6">
                        <!--begin::Small Box Widget 3-->
                        <div class="small-box text-warning bg-lwarning">
                          <div class="inner">
                            <h3>58</h3>

                            <p>学習時間</p>
                          </div>
                          <i class="bi bi-clock-history small-box-icon text-warning"></i>
                          <a
                            href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover text-dark"
                          >
                            詳細 <i class="bi bi-arrow-right text-dark"></i>
                          </a>
                        </div>
                        <!--end::Small Box Widget 3-->
                      </div>
                      <!--end::Col-->
                      <div class="col-6">
                        <!--begin::Small Box Widget 4-->
                        <div class="small-box text-danger bg-ldanger">
                          <div class="inner">
                            <h3>3,250</h3>

                            <p>保有ポイント</p>
                          </div>
                          <i class="bi bi-wallet2 small-box-icon text-danger"></i>
                          <a
                            href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                          >
                            詳細 <i class="bi bi-arrow-right"></i>
                          </a>
                        </div>
                        <!--end::Small Box Widget 4-->
                      </div>
                      <!--end::Col-->
                    </div>
                </div>
              </div>
              
              <div class="row">

                <!-- Next Lesson -->
                <div class="col-12 col-lg-6">

                  <div class="card mb-3">
                    <div class="card-header">
                      <h3 class="card-title">次回レッスン</h3>
                    </div>

                    <div class="card-body">

                      <h5>6月30日(火) 20:00〜20:25</h5>

                      <table class="table table-sm">
                        <tr>
                          <th width="120">講師</th>
                          <td>Sarah先生</td>
                        </tr>
                        <tr>
                          <th>教材</th>
                          <td>Daily Conversation</td>
                        </tr>
                        <tr>
                          <th>レッスン形式</th>
                          <td>オンライン</td>
                        </tr>
                      </table>

                      <button class="btn btn-primary mt-3">
                        レッスンルームへ
                      </button>

                    </div>

                  </div>

                </div>

                <!-- Progress -->
                <div class="col-lg-6">

                  <div class="card mb-3">
                    <div class="card-header">
                      <h3 class="card-title">学習進捗</h3>
                    </div>

                    <div class="card-body pb-4">

                      <p class="mb-2">英検2級</p>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-success" style="width:70%">70%</div>
                      </div>

                      <p class="mb-2">TOEIC</p>
                      <div class="progress mb-3">
                        <div class="progress-bar bg-info" style="width:45%">45%</div>
                      </div>

                      <p class="mb-2">日常英会話</p>
                      <div class="progress">
                        <div class="progress-bar bg-warning" style="width:85%">85%</div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="row">

                <!-- News -->
                <div class="col-lg-6">

                  <div class="card mb-3">
                    <div class="card-header">
                      <h3 class="card-title">お知らせ</h3>
                    </div>

                    <div class="card-body">

                      <ul class="list-group">

                        <li class="list-group-item">
                          <strong>2026.06.20</strong><br>
                          新教材を追加しました。
                        </li>

                        <li class="list-group-item">
                          <strong>2026.06.15</strong><br>
                          システムメンテナンスのお知らせ
                        </li>

                        <li class="list-group-item">
                          <strong>2026.06.10</strong><br>
                          夏のポイントキャンペーン開始
                        </li>

                      </ul>
                        
                      <a href="info.php">  
                      <button class="btn btn-primary mt-3">
                      お知らせ一覧
                      </button>
                      </a>                        

                    </div>
                      
                      

                  </div>

                </div>

                <!-- History -->
                <div class="col-lg-6">

                  <div class="card mb-3">
                    <div class="card-header">
                      <h3 class="card-title">最近の受講履歴</h3>
                    </div>

                    <div class="card-body p-0">

                      <table class="table table-striped">

                        <thead>
                          <tr>
                            <th>日付</th>
                            <th>講師</th>
                            <th>教材</th>
                          </tr>
                        </thead>

                        <tbody>

                          <tr>
                            <td>2026/6/25</td>
                            <td>Sarah</td>
                            <td>Daily Conversation</td>
                          </tr>

                          <tr>
                            <td>2026/6/23</td>
                            <td>John</td>
                            <td>Business English</td>
                          </tr>

                          <tr>
                            <td>2026/6/20</td>
                            <td>Emma</td>
                            <td>Free Talk</td>
                          </tr>
                            
                          <tr>
                            <td>2026/6/20</td>
                            <td>田中</td>
                            <td>英検</td>
                          </tr>   
                            
                          <tr>
                            <td>2026/6/15</td>
                            <td>山田</td>
                            <td>英検</td>
                          </tr>     
                            
                             

                        </tbody>

                      </table>

                    </div>

                  </div>

                </div>

              </div>

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php include 'includes/footer.php'; ?>        
      <!--end::Footer-->

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
