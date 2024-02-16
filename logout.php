<script>
    function confirmLogout() {
        Swal.fire({
            title: 'Logout',
            text: 'Are you sure you want to logout from this website?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, logout',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                logout(); // Call logout function if confirmed
            }
        });
    }

    function logout() {
        // Perform logout action
        Swal.fire({
            title: 'Success',
            text: 'Logout Successfully',
            icon: 'success'
        }).then(function() {
            window.location.href = 'Validations/logoutValidate.php'; // Redirect to logout script
        });
    }
</script>
