$("#user-status-form").submit(function(e) {
    e.preventDefault();
});

// Save status to Local storage
(function () {
    $('#btn-user-status').click(function () {
        var userStatus = $('#user-status-input').val();

        localStorage.setItem("userStatus", userStatus);
    });

    $("#user-status-input").val(localStorage.getItem("userStatus"));
})();



