import '@fortawesome/fontawesome-free/js/all.min';

// dropdown expand and collapse
$(document).ready(function () {
    $(".profile-name").click(function () {
        $(".dropdown-content").toggleClass("show");
    });

    $(document).on("click", function (event) {
        if (!$(event.target).closest(".profile-name, .dropdown-content").length) {
            $(".dropdown-content").removeClass("show");
        }
    });
});