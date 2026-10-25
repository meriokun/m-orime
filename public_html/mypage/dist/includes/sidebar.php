      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="index.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="./assets/img/ico_white.png"
              alt="AdminLTE Logo"
              class="brand-image"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text">Everyday English +</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <a href="index.php" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p class="fw-bold">
                    ダッシュボード

                  </p>
                </a>

              </li>
              <li class="nav-item">
                <a href="lessons.php" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p class="fw-bold">予約中レッスン</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="profile.php" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p class="fw-bold">
                    プロフィール

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="info.php" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p class="fw-bold">
                     お知らせ
                  </p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->

            <!-- Docs CTA (bottom of sidebar) -->
            <div class="p-3 mt-1 border-secondary border-opacity-25">
              <a
                href="../logout.php"
                class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
              >
                <i class="bi bi-book" aria-hidden="true"></i>
                ログアウト
              </a>
            </div>
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->