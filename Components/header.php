<header class="header">
    <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined">menu</span>
    </div>
    <div class="header-right">
        <div class="dropdown">
            <?php 
            include("./APIs/Header/getAccountDetails.php");
            ?>
            <span>Hi, </span>
            <button type="button" class="btn btn-light rounded-2" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                <span><?php echo $super_admin_username;?></span> 
            </button>
            <ul class="dropdown-menu" aria-labelledby="profile">
                <li><a class="dropdown-item" id="updtInfo" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-target="#updateInfo"><span class="material-symbols-outlined">settings_account_box</span> Update Info</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-target="#updateProfile"><span class="material-symbols-outlined">imagesmode</span> Update Picture</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-target="#headerCP"><span class="material-symbols-outlined">key</span> Change password</a></li>
                <hr style="margin: 0;">
                <li><a class="dropdown-item" id="logoutLink"><span class="material-icons-outlined">logout</span> Sign-Out</a></li>
            </ul>
        </div>
    </div>
    <?php
        include('./Sections/Modals/Header/headerModal.php');
    ?>
</header>