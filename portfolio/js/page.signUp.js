$(document).ready(function () {
    $(".sign__input__item input").each(function(){
        targetInput = $(this);
        inputLabelTransform(targetInput);
    });

    $("#btnGlobeLogin").click(function () {
        var signUpTl = new TimelineMax();
        signUpTl
            .fromTo("#signUpGlobe", 2, {
                x: 0,
                autoAlpha: 0.7
            }, {
                x: 500,
                autoAlpha: 0
            }, '-=1')
            .fromTo("#signUpInput", 2, {
                x: 0,
                autoAlpha: 0.7
            }, {
                x: -500,
                autoAlpha: 0
            }, '-=2.5')
            .to("#signUpBox", 0.3, {
                autoAlpha: 0
            }, '-=2')
            .fromTo("#signInBox", 3, {
                autoAlpha: 0
            }, {
                autoAlpha: 1
            }, '-=2')
            .fromTo("#signInGlobe", 2, {
                x: -500
            }, {
                x: 0,
                autoAlpha: 1
            }, '-=3')
            .fromTo("#loginInput", 2, {
                x: 800
            }, {
                x: 0,
                autoAlpha: 1
            }, '-=3');
    })

    $("#btnGlobeSignup").click(function () {
        var loginTl = new TimelineMax();
        loginTl
            .fromTo("#signInGlobe", 2, {
                x: 0,
                autoAlpha: 0.7
            }, {
                x: -500,
                autoAlpha: 0
            }, '-=1')
            .fromTo("#loginInput", 2, {
                x: 0,
                autoAlpha: 0.7
            }, {
                x: 500,
                autoAlpha: 0
            }, '-=3')
            .to("#signInBox", 0.3, {
                autoAlpha: 0
            }, '-=2')
            .fromTo("#signUpBox", 3, {
                autoAlpha: 0
            }, {
                autoAlpha: 1
            }, '-=2')
            .fromTo("#signUpGlobe", 1, {
                x: 500
            }, {
                x: 0,
                autoAlpha: 1
            }, '-=3')
            .fromTo("#signUpInput", 1, {
                x: -500
            }, {
                x: 0,
                autoAlpha: 1
            }, '-=3')
    })
    retypeEmail();
    $("#signUpEmail").bind("keyup change", function(){
        retypeEmail();
    })
    $("input").focus(function () {
        targetInput = $(this);
        inputLabelTransform(targetInput);
    })

    $("input").bind('keyup change', function () {
        targetInput = $(this);
        inputLabelTransform(targetInput);
    })

    function inputLabelTransform(targetInput) {
        if (targetInput.val().length == 0) {
            targetInput.next("label").removeClass("deActiveLabel");
        } else {
            targetInput.next("label").addClass("deActiveLabel");
        }
    }

    function retypeEmail() {
        var retypeEmailVal = $("#signUpEmail").val();
        $("#retypeEmail").val(retypeEmailVal);
    }
    
})