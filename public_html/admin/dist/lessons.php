<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Everyday English +</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
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
                <h3 class="mb-0">予約管理</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">管理画面</a></li>
                  <li class="breadcrumb-item active" aria-current="page">予約管理</li>
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
                  
              <!--end::Col-->
              <div class="col-lg-12">

                        <!-- レッスン検索 -->
                        <div class="card mb-4">
                          <div class="card-header">
                            <h3 class="card-title">
                              <i class="bi bi-search me-2"></i>レッスン検索
                            </h3>
                          </div>

                          <div class="card-body">
                            <form>

                              <div class="row">

                                <div class="col-md-3 mb-3">
                                  <label class="form-label">会員名</label>
                                  <input type="text" class="form-control" placeholder="山田 太郎">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label class="form-label">講師名</label>
                                  <input type="text" class="form-control" placeholder="Emma">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label class="form-label">開始日</label>
                                  <input type="date" class="form-control">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label class="form-label">終了日</label>
                                  <input type="date" class="form-control">
                                </div>

                              </div>

                              <div class="row">

                                <div class="col-md-3 mb-3">
                                  <label class="form-label">ステータス</label>
                                  <select class="form-select">
                                    <option>すべて</option>
                                    <option>予約済</option>
                                    <option>受講完了</option>
                                    <option>キャンセル</option>
                                  </select>
                                </div>

                              </div>

                              <div class="text-end">
                                <button type="reset" class="btn btn-outline-secondary me-2">
                                  リセット
                                </button>

                                <button type="submit" class="btn btn-primary">
                                  検索
                                </button>
                              </div>

                            </form>
                          </div>
                        </div>

                        <!-- レッスン一覧 -->
                        <div class="card">

                          <div class="card-header">
                            <h3 class="card-title">
                              <i class="bi bi-calendar-check me-2"></i>レッスン一覧
                            </h3>

                            <div class="card-tools">
                              <span class="badge text-bg-info p-2">
                                本日の予約 87件
                              </span>
                            </div>
                          </div>

                          <div class="card-body p-0">

                            <table class="table table-hover align-middle mb-0">

                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>日時</th>
                                  <th>会員</th>
                                  <th>講師</th>
                                  <th>コース</th>
                                  <th>時間</th>
                                  <th>ステータス</th>
                                  <th width="120">操作</th>
                                </tr>
                              </thead>

                              <tbody>

                                <tr>
                                  <td>R10001</td>
                                  <td>2026/06/25 09:00</td>
                                  <td>山田 太郎</td>
                                  <td>Emma Johnson</td>
                                  <td>日常英会話</td>
                                  <td>25分</td>
                                  <td>
                                    <span class="badge text-bg-primary">
                                      予約済
                                    </span>
                                  </td>
                                  <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                      詳細
                                    </a>
                                  </td>
                                </tr>

                                <tr>
                                  <td>R10002</td>
                                  <td>2026/06/25 10:00</td>
                                  <td>鈴木 花子</td>
                                  <td>John Smith</td>
                                  <td>ビジネス英語</td>
                                  <td>50分</td>
                                  <td>
                                    <span class="badge text-bg-success">
                                      受講完了
                                    </span>
                                  </td>
                                  <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                      詳細
                                    </a>
                                  </td>
                                </tr>

                                <tr>
                                  <td>R10003</td>
                                  <td>2026/06/25 11:00</td>
                                  <td>佐藤 次郎</td>
                                  <td>Sarah Brown</td>
                                  <td>英検対策</td>
                                  <td>25分</td>
                                  <td>
                                    <span class="badge text-bg-danger">
                                      キャンセル
                                    </span>
                                  </td>
                                  <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                      詳細
                                    </a>
                                  </td>
                                </tr>

                                <tr>
                                  <td>R10004</td>
                                  <td>2026/06/25 13:00</td>
                                  <td>John Williams</td>
                                  <td>田中 美咲</td>
                                  <td>キッズ英会話</td>
                                  <td>25分</td>
                                  <td>
                                    <span class="badge text-bg-primary">
                                      予約済
                                    </span>
                                  </td>
                                  <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                      詳細
                                    </a>
                                  </td>
                                </tr>

                              </tbody>

                            </table>

                          </div>

                          <div class="card-footer clearfix">

                            <ul class="pagination pagination-sm m-0 float-end">
                              <li class="page-item">
                                <a class="page-link" href="#">&laquo;</a>
                              </li>

                              <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                              </li>

                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>

                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>

                              <li class="page-item">
                                <a class="page-link" href="#">&raquo;</a>
                              </li>
                            </ul>

                          </div>

                        </div>
               
             

            </div>              
              



            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
          
      </main>
      <!--end::App Main-->          

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
