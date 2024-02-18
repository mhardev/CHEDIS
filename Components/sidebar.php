<aside id="sidebar">
    <!-- Content For Sidebar -->
    <div class="sidebar-logo">
        <img src="../Root/images/192x192.png" class="sidebarLogo">
        <a href="#" onclick="closeSidebar()"><span>CHED-NCR</span><br>Inventory System</a>
    </div>
    <hr style="margin:0;">
    <div class="sidebar-items">
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Modules
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#account" data-bs-toggle="collapse"
                    aria-expanded="false"><span class="material-symbols-outlined">manage_accounts</span> Accounts
                </a>
                <ul id="account" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Admin Account</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">User Account</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <span class="material-icons-outlined">inventory</span> Products
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#supplier" data-bs-toggle="collapse"
                    aria-expanded="false"><span class="material-symbols-outlined">deployed_code_account</span>
                    Supplier
                </a>
                <ul id="supplier" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Supplier Details</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Supplier Products</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <span class="material-icons-outlined">content_paste_search</span> Audit Trail
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#archive" data-bs-toggle="collapse"
                    aria-expanded="false"><span class="material-icons-outlined">archive</span> 
                    Archive
                </a>
                <ul id="archive" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Archive Admin</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Archive Accounts</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Archive Products</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Archive Suppliers</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Archive Supplier Products</a>
                    </li>
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

