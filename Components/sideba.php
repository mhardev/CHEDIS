<aside id="sidebar">
  <div class="sidebar-title">
    <div class="sidebar-brand">
      <img src="../Root/images/CHED-LOGO.png" class="sidebarLogo" onclick="closeSidebar()">
    </div>
  </div>

  <div class="sidebar-item">
    <ul class="sidebar-list">
      <li class="sidebar-list-item">
        <a href="home.php" target="">
          <span class="material-icons-outlined">dashboard</span> Dashboard
        </a>
      </li>
      <li class="sidebar-list-item dropdown">
          <a href="#" class="dropdown-toggle collapsed" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons-outlined">admin_panel_settings</span> Accounts
          </a>
          <ul class="dropdown-menu list-unstyled collapse" data-bs-parent="#sidebar">
              <li><a class="dropdown-item" href="#">Admin Accounts</a></li>
              <li><a class="dropdown-item" href="#">User Accounts</a></li>
          </ul>
      </li>
      <li class="sidebar-list-item">
        <a href="#" target="">
          <span class="material-icons-outlined">inventory</span> Products
        </a>
      </li>
      <li class="sidebar-list-item dropdown">
          <a href="#" class="dropdown-toggle" id="accountsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-symbols-outlined">deployed_code_account</span> Supplier
          </a>
          <ul class="dropdown-menu" aria-labelledby="accountsDropdown">
              <li><a class="dropdown-item" href="#">Supplier Details</a></li>
              <li><a class="dropdown-item" href="#">Supplier Products</a></li>
          </ul>
      </li>
      <li class="sidebar-list-item">
        <a href="#" target="">
          <span class="material-icons-outlined">content_paste_search</span> Audit Trail
        </a>
      </li>
      <li class="sidebar-list-item dropdown">
          <a href="#" class="dropdown-toggle" id="accountsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons-outlined">archive</span> Archive
          </a>
          <ul class="dropdown-menu" aria-labelledby="accountsDropdown">
              <li><a class="dropdown-item" href="#">Archive Admins </a></li>
              <li><a class="dropdown-item" href="#">Archive Users </a></li>
              <li><a class="dropdown-item" href="#">Archive Products</a></li>
              <li><a class="dropdown-item" href="#">Archive Services</a></li>
              <li><a class="dropdown-item" href="#">Archive Suppliers</a></li>
              <li><a class="dropdown-item" href="#">Archive Supplier Products</a></li>
          </ul>
      </li>
    </ul>
  </div>
  <hr style="margin: 0;">
  <div class="sidebar-signout">
    <!-- Use a form for logout with an ID -->
    <form id="logoutForm" action="../Validations/logoutValidate.php" method="post">
      <a onclick="confirmLogout();">
        <span class="material-icons-outlined">logout</span> Sign-Out
      </a>
    </form>
  </div>
</aside>