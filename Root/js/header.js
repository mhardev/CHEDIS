$(document).ready(function () {
    $('#changePass').click(function () {
        var currentPass = $('#CurPass').val();
        var newPass = $('#newPass').val();
        var confirmPass = $('#confirmPass').val();
    
        if (currentPass === newPass) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "The new password is the same as the current password",
            });
            return;
        }
    
        if (newPass.length < 8 || !hasSpecialCharacters(newPass)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Password should be at least 8 characters long and contain special characters.',
            });
            return;
        }
    
        if (newPass !== confirmPass) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Passwords don't match!",
            });
            return;
        }
    
        $.ajax({
            url: 'APIs/Header/checkPass.php',
            type: 'POST',
            data: { id: currentPass },
            dataType: 'json',
            success: function (data) {
                if (data === '1') {
                    updatePassword(newPass);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Current password is incorrect',
                    });
                }
            },
            error: function (error) {
                console.error("An error occurred:", error);
            }
        });
    });
    
    function updatePassword(newPassword) {
        $.ajax({
            url: 'APIs/Header/updatePass.php',
            type: 'POST',
            data: { pass: newPassword },
            dataType: 'json',
            success: function (data) {
                if (data === '1') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Password Changed!',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#headerCP').modal('hide');
                            location.reload();
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to update password',
                    });
                }
            },
            error: function (error) {
                console.error("An error occurred:", error);
            }
        });
    }
    
    function hasSpecialCharacters(str) {
        var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        return format.test(str);
    }
})