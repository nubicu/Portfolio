$(document).ready(function () {
    var btnNormal = $("#askBtn--normal"),
        btnSend = $("#askBtn--send"),
        btnSuccess = $("#askBtn--success"),
        successMessage = $("#successMessage"),
        cntModalValue;
    // HELPCENTER FAQ

    $(".helpTabContent__title").click(function () {
        $(this).next(".helpTabContent__body").slideToggle();
        if ($(this).parent().hasClass("open")) {
            $(this).parent().removeClass("open");
        } else
            $(this).parent().addClass("open");
    })

    $('#helpSearch').hideseek({
        highlight: true,
        nodata: 'NO RESULTS FOUND'
    })

    $('#helpSearch').on("_after_each", function () {
        if ($(this).val() != 0) {
            $('.tabContent__list').addClass('active in');
            $('.helpTabContent__Item').addClass('open');
            $('.tabContent__list .helpTabContent__body').slideDown();
        } else {
            $('.tabContent__list').removeClass('active in');
            $('.tabContent__list').first().addClass('active in');
            removeOpenContent();
        }
    })

    function removeOpenContent() {
        $('.helpTabContent__Item').removeClass('open');
        $('.tabContent__list .helpTabContent__body').slideUp();
    }

    // MODAL CONTROL

    $("#contactUsBtn").click(function (e) {
        e.stopPropagation();
        manageNormalModal()
    })

    btnNormal.click(function () {
        manageNormalModal()
    })

    btnSend.click(function () {
        $("#cntIframe").contents().find("#formContact").submit();
    })

    $("#askBtn--success, .modalbg, .closeModal").click(function () {
        removeModalData();
        $("#cntIframe").attr("src", "/?a=support");
    })

    function removeModalData() {
        $("#askBtn").removeClass("active");
        btnSend.css('display', 'none');
        btnSuccess.css('display', 'none');
        btnNormal.css('display', 'block');
        $('#contactModal').modal("hide");
    }

    function manageNormalModal() {
        var checkIframeValue = setInterval(function () {
            cntModalValue = $("#cntIframe").contents().find("#cntModalValue").val();
            if (cntModalValue == 1) {
                btnSend.css('display', 'none');
                btnSuccess.css('display', 'block');
                clearInterval(checkIframeValue);
            }
        }, 300);
        btnNormal.css('display', 'none');
        $("#askBtn").addClass("active");
        $("#askBtn--send").css('display', 'block');
        $('#contactModal').modal("show");
        $("#contactModal").css("display", "block");
        $("#contactModal").addClass("in");
        $("html, body").animate({
            scrollTop: 0
        }, 600);
    }

});