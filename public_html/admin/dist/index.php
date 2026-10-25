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
           
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">  
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
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">ダッシュボード</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">管理画面</a></li>
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
                  
              <!--begin::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary pt-3">
                  <div class="inner">
                    <h3>42<span class="fs-5">名</span></h3>


                    <p>今月の新規会員</p>
                      
                      
                  </div>
                  <svg
                    class="small-box-icon mt-3"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                    ></path>
                  </svg>
                  <!--<a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover text-xs"
                  >
                    詳細 <i class="fa-solid fa-angle-right "></i>
                  </a>-->
                </div>
                <!--end::Small Box Widget 1-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success pt-3">
                  <div class="inner">
                    <h3>8<span  class="fs-5">名</span ></h3>
                    <p>今月の講師応募</p>
                  </div>
                    <svg class="small-box-icon mt-3"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                      <path d="M12 3 2 8l10 5 8-4v5h2V8L12 3zm-6 8v3c0 2.5 3 4 6 4s6-1.5 6-4v-3l-6 3-6-3z"/>
                    </svg>

                </div>
                <!--end::Small Box Widget 2-->
              </div>
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 4-->
                <div class="small-box text-bg-danger pt-3">
                  <div class="inner">
                    <h3>+12.4<span class="fs-5">%</span></h3>

                    <p>月次売上推移</p>
                  </div>

                    <svg class="small-box-icon mt-3"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                      <path d="M4 19h16v2H2V3h2v16z"/>
                      <path d="M7 15l4-4 3 3 5-6 1.5 1.3L14 17l-3-3-2.5 2.5z"/>
                    </svg>                 
                    
 
                </div>
                <!--end::Small Box Widget 4-->
              </div>                
                
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 3-->
                <div class="small-box text-bg-warning pt-3">
                  <div class="inner">
                    <h3>3<span class="fs-5">件</span></h3>

                    <p>請求未処理</p>
                  </div>
                    <svg class="small-box-icon mt-3"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                      <path d="M6 2h9l5 5v15H6V2zm8 1.5V8h4.5L14 3.5z"/>
                      <path d="M8 12h8v1.5H8zm0 3h8v1.5H8zm0 3h5v1.5H8z"/>
                    </svg>

                </div>
                <!--end::Small Box Widget 3-->
              </div>
              <!--end::Col-->

              <!--end::Col-->
            </div>
            <!--end::Row-->              
              
            <div class="row">


                
                <div class="co-12 col-md-4 mb-4">
                    <div class="card h-100 shadow-sm dashboard-menu-card">
                       <div class="card-header">
                          <h3 class="card-title mb-0 pt-2 fw-bold text-primary">会員管理</h3>
                       </div>
                       <div class="card-body text-center py-4 px-xxl-5">
                          <i class="nav-icon bi bi-person-lines-fill pe-3 display-3 text-primary"></i>      
                          <p class="mb-0 text-primary"><span class="display-5 fw-bold">1,245</span> 名</p>
                          <p class="text-primary mb-3"><small>有効会員：1,102名　休会中：143名</small> 
                              
                          <p class="text-start">会員の情報を一元管理。アカウント情報、レッスン進捗等が確認できます。</p>  
                          <a href="students.php" class="btn btn-primary">会員一覧</a>
                       </div>                                  
                    </div>
                </div>
    
                
                <div class="co-12 col-md-4 mb-4">
                    <div class="card h-100 shadow-sm dashboard-menu-card card-teacher">
                       <div class="card-header">
                          <h3 class="card-title mb-0 pt-2 fw-bold text-success">講師管理</h3>
                       </div>
                       <div class="card-body text-center py-4 px-xxl-5">
                          <i class="nav-icon bi bi-person-workspace pe-3 display-3 text-success"></i>      
                          <p class="mb-0 text-success"><span class="display-5 fw-bold">35</span> 名</p>
                          <p class="text-success mb-3"><small>稼働中：29名　休止中：6名</small>                              
                        
                          <p class="text-start">講師の情報を一元管理。スケジュール、請求状況等が確認できます。</p>  
                          <a href="teachers.php" class="btn btn-success">講師一覧</a>
                       </div>                                  
                    </div>
                </div>                
              

                <div class="co-12 col-md-4 mb-4">
                    <div class="card h-100 shadow-sm dashboard-menu-card card-lesson">
                       <div class="card-header">
                          <h3 class="card-title mb-0 pt-2 fw-bold text-danger">予約管理</h3>
                       </div>
                       <div class="card-body text-center py-4 px-xxl-5">
                          <i class="nav-icon bi bi-calendar-check pe-3 display-3 text-grey text-danger"></i>      
                          <p class="mb-0 text-danger"><span class="display-5 fw-bold">75</span> 件</p>
                          <p class="text-danger mb-3"><small>完了：72件　キャンセル：3件</small>   
                              
                          <p class="text-start">予約の情報を一元管理。レッスン内容、日程、進捗状況等を確認できます。</p>  
                          <a href="lessons.php" class="btn btn-danger">予約一覧</a>
                       </div>                                  
                    </div>
                </div> 
                
               
             

            </div>              
              

            <!--begin::Row-->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-6 connectedSortable">

                <!-- /.card -->

                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-primary mb-4">
                  <div class="card-header">
                    <h3 class="card-title">運営ログ</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
      
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-3 operation-log-scroll">
                    <!-- Conversations are loaded here -->
                      
                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">会員登録</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 09:15</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/user.png"
                        alt=""
                      />
                        
                        

                      <div class="direct-chat-text">
                        山田 太郎様が新規会員登録しました。
                      </div>
                    </div>

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">予約作成</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 12:42</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/calendar.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        Emma講師とのレッスン予約が作成されました。
                      </div>
                    </div>

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">講師応募</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 12:05</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/teacher.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        John Smith様より講師応募を受け付けました。
                      </div>
                    </div>

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">お問い合わせ</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 11:28</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/question.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        「プラン変更について」のお問い合わせを受信しました。
                      </div>
                    </div>

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">請求処理</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 11:00</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/yen.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        6月分の月額課金処理が完了しました。
                      </div>
                    </div> 
                      
                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">お問い合わせ</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 9:50</span>
                      </div>

                       <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/question.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        「スケジュールリクエスト」のお問い合わせを受信しました。
                      </div>
                    </div> 
                      
                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">お問い合わせ</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 8:40</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1 p-1"
                        src="./assets/img/question.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        「レッスンについて」のお問い合わせを受信しました。
                      </div>
                    </div>  
                      
                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-start">お問い合わせ</span>
                        <span class="direct-chat-timestamp float-end">2026/06/24 7:50</span>
                      </div>

                      <img
                        class="direct-chat-img rounded-1"
                        src="./assets/img/question.png"
                        alt=""
                      />

                      <div class="direct-chat-text">
                        「キャンペーンについて」のお問い合わせを受信しました。
                      </div>
                    </div>                        
                      


                        <!-- End Contact Item -->

                      <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->

                  <!-- /.card-footer-->
              </div>
                
              <div class="col-lg-6 connectedSortable">

                <!-- /.card -->

                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-primary mb-4">
                  <div class="card-header">
                    <h3 class="card-title">お知らせ</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>

                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-3 operation-log-scroll">
                    <!-- Conversations are loaded here -->
                      


                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-timestamp float-start">2026/06/24</span>
                      </div>
                      <div class="">
                        システムメンテナンスのお知らせ
                      </div>
                    </div>

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-timestamp float-start">2026/06/18</span>
                      </div>
                      <div class="">
                        新講師3名を追加しました
                      </div>
                    </div>

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">

                        <span class="direct-chat-timestamp float-start">2026/06/12</span>
                      </div>
                      <div class="">
                        レッスン予約機能を改善しました
                      </div>
                    </div>     

                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">

                        <span class="direct-chat-timestamp float-start">2026/06/01</span>
                      </div>
                      <div class="">
                        6月度キャンペーンを開始しました
                      </div>
                    </div>   
                      
                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">

                        <span class="direct-chat-timestamp float-start">2026/06/01</span>
                      </div>
                      <div class="">
                        5月度キャンペーンを開始しました
                      </div>
                    </div>  
                      
                    <div class="direct-chat-msg mb-3">
                      <div class="direct-chat-infos clearfix">

                        <span class="direct-chat-timestamp float-start">2026/05/01</span>
                      </div>
                      <div class="">
                        請求機能を改善しました。
                      </div>
                    </div>                        
                      


                        <!-- End Contact Item -->

                      <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->

                  <!-- /.card-footer-->
                </div>                
                
                <!-- /.direct-chat -->
              </div>

            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
      </main>
      <!--end::App Main-->          
    </div>
    <!--end::App Content-->

    <?php include 'includes/footer.php'; ?>

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



    <!-- jsvectormap -->

    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
