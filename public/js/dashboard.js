$(function () {
    $('#aHOME').click(function () {
        $('#HOME').css("display", "block");
        document.getElementById("aHOME").className = "active";
        $('#CHIFFRAGE').css("display", "none");
        document.getElementById("aCHIFFRAGE").className = "";
        $('#PLANNING').css("display", "none");
        document.getElementById("aPLANNING").className = "";
        $('#INDICATEURS').css("display", "none");
        document.getElementById("aINDICATEURS").className = "";
        $('#FACTURATION').css("display", "none");
        document.getElementById("aFACTURATION").className = "";
        $('#DATABASE').css("display", "none");
        document.getElementById("aDATABASE").className = "";
    });

    $('#aCHIFFRAGE').click(function () {
        $('#HOME').css("display", "none");
        document.getElementById("aHOME").className = "";
        $('#CHIFFRAGE').css("display", "block");
        document.getElementById("aCHIFFRAGE").className = "active";
        $('#PLANNING').css("display", "none");
        document.getElementById("aPLANNING").className = "";
        $('#INDICATEURS').css("display", "none");
        document.getElementById("aINDICATEURS").className = "";
        $('#FACTURATION').css("display", "none");
        document.getElementById("aFACTURATION").className = "";
        $('#DATABASE').css("display", "none");
        document.getElementById("aDATABASE").className = "";
    });

    $('#aPLANNING').click(function () {
        $('#HOME').css("display", "none");
        document.getElementById("aHOME").className = "";
        $('#CHIFFRAGE').css("display", "none");
        document.getElementById("aCHIFFRAGE").className = "";
        $('#PLANNING').css("display", "block");
        document.getElementById("aPLANNING").className = "active";
        $('#INDICATEURS').css("display", "none");
        document.getElementById("aINDICATEURS").className = "";
        $('#FACTURATION').css("display", "none");
        document.getElementById("aFACTURATION").className = "";
        $('#DATABASE').css("display", "none");
        document.getElementById("aDATABASE").className = "";
    });

    $('#aINDICATEURS').click(function () {
        $('#HOME').css("display", "none");
        document.getElementById("aHOME").className = "";
        $('#CHIFFRAGE').css("display", "none");
        document.getElementById("aCHIFFRAGE").className = "";
        $('#PLANNING').css("display", "none");
        document.getElementById("aPLANNING").className = "";
        $('#INDICATEURS').css("display", "block");
        document.getElementById("aINDICATEURS").className = "active";
        $('#FACTURATION').css("display", "none");
        document.getElementById("aFACTURATION").className = "";
        $('#DATABASE').css("display", "none");
        document.getElementById("aDATABASE").className = "";
    });

    $('#aFACTURATION').click(function () {
        $('#HOME').css("display", "none");
        document.getElementById("aHOME").className = "";
        $('#CHIFFRAGE').css("display", "none");
        document.getElementById("aCHIFFRAGE").className = "";
        $('#PLANNING').css("display", "none");
        document.getElementById("aPLANNING").className = "";
        $('#INDICATEURS').css("display", "none");
        document.getElementById("aINDICATEURS").className = "";
        $('#FACTURATION').css("display", "block");
        document.getElementById("aFACTURATION").className = "active";
        $('#DATABASE').css("display", "none");
        document.getElementById("aDATABASE").className = "";
    });

    $('#aDATABASE').click(function () {
        $('#HOME').css("display", "none");
        document.getElementById("aHOME").className = "";
        $('#CHIFFRAGE').css("display", "none");
        document.getElementById("aCHIFFRAGE").className = "";
        $('#PLANNING').css("display", "none");
        document.getElementById("aPLANNING").className = "";
        $('#INDICATEURS').css("display", "none");
        document.getElementById("aINDICATEURS").className = "";
        $('#FACTURATION').css("display", "none");
        document.getElementById("aFACTURATION").className = "";
        $('#DATABASE').css("display", "block");
        document.getElementById("aDATABASE").className = "active";
    });
});
