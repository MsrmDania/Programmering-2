//alert("1st phase javascript loaded");

var vType, vRace, vAlder, vVaegt, vMad, vBo, vVacc, vSex, vFarve, vTekst, vEjer;

vType = "false";
vRace = "false";
vAlder = "false";
vVaegt = "false";
vMad = "false";
vBo = "false";
vVacc = "false";
vSex = "false";
vFarve = "false";
vTekst = "false";
vEjer = "false";

//alert(vType + vRace + vAlder + vVaegt + vMad + vBo + vVacc + vSex + vFarve + vTekst + vEjer);

//Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
document.getElementById("submit").disabled = true;
document.getElementById("submit").style.color = "#a0a0a0";

//Triggers
document.getElementById("dyrType").onfocus = function () {
    onFocusValidType();
};
document.getElementById("dyrType").onblur = function () {
    onBlurValidType();
};

document.getElementById("dyrRace").onfocus = function () {
    onFocusValidRace();
};
document.getElementById("dyrRace").onblur = function () {
    onBlurValidRace();
};

document.getElementById("dyrAlder").onfocus = function () {
    onFocusValidAlder();
};
document.getElementById("dyrAlder").onblur = function () {
    onBlurValidAlder();
};

document.getElementById("dyrVaegt").onfocus = function () {
    onFocusValidVaegt();
};
document.getElementById("dyrVaegt").onblur = function () {
    onBlurValidVaegt();
};

document.getElementById("dyrMad").onfocus = function () {
    onFocusValidMad();
};
document.getElementById("dyrMad").onblur = function () {
    onBlurValidMad();
};

document.getElementById("dyrBo").onfocus = function () {
    onFocusValidBo();
};
document.getElementById("dyrBo").onblur = function () {
    onBlurValidBo();
};

document.getElementById("dyrVacc").onfocus = function () {
    onFocusValidVacc();
};
document.getElementById("dyrVacc").onblur = function () {
    onBlurValidVacc();
};

document.getElementById("dyrSex").onfocus = function () {
    onFocusValidSex();
};
document.getElementById("dyrSex").onblur = function () {
    onBlurValidSex();
};

document.getElementById("dyrFarve").onfocus = function () {
    onFocusValidFarve();
};
document.getElementById("dyrFarve").onblur = function () {
    onBlurValidFarve();
};

document.getElementById("dyrTekst").onfocus = function () {
    onFocusValidTekst();
};
document.getElementById("dyrTekst").onblur = function () {
    onBlurValidTekst();
};

document.getElementById("dyrEjer").onfocus = function () {
    onFocusValidEjer();
};
document.getElementById("dyrEjer").onblur = function () {
    onBlurValidEjer();
};

//Functions

//dyrType
function onBlurValidType() {
    if (document.dyr_form.dyrType.value == "") {
        document.getElementById("dyrType").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vType = "false";
    } else {
        document.getElementById("dyrType").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vType = "true";
    }

    if (vType = "true" && (vRace = "true" && (vAlder = "true" && (vVaegt = "true" && (vMad = "true" && (vBo = "true" && (vVacc = "true" && (vSex = "true" && (vFarve = "true" && (vTekst = "true" && (vEjer = "true"))))))))))) {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    } else {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    }
};

function onFocusValidType() {
    document.getElementById("dyrType").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrRace
function onBlurValidRace() {
    if (document.dyr_form.dyrRace.value == "") {
        document.getElementById("dyrRace").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vRace = "false";
    } else {
        document.getElementById("dyrRace").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vRace = "true";
    }
};

function onFocusValidRace() {
    document.getElementById("dyrRace").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrAlder
function onBlurValidAlder() {
    if (document.dyr_form.dyrAlder.value == "") {
        document.getElementById("dyrAlder").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vAlder = "false";
    } else {
        document.getElementById("dyrAlder").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vAlder = "true";
    }
};

function onFocusValidAlder() {
    document.getElementById("dyrAlder").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrVaegt
function onBlurValidVaegt() {
    if (document.dyr_form.dyrVaegt.value == "") {
        document.getElementById("dyrVaegt").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vVaegt = "false";
    } else {
        document.getElementById("dyrVaegt").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vVaegt = "true";
    }
};

function onFocusValidVaegt() {
    document.getElementById("dyrVaegt").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrMad
function onBlurValidMad() {
    if (document.dyr_form.dyrMad.value == "") {
        document.getElementById("dyrMad").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vMad = "false";
    } else {
        document.getElementById("dyrMad").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vMad = "true";
    };
};

function onFocusValidMad() {
    document.getElementById("dyrMad").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrBo
function onBlurValidBo() {
    if (document.dyr_form.dyrBo.value == "") {
        document.getElementById("dyrBo").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vBo = "false";
    } else {
        document.getElementById("dyrBo").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vBo = "true";
    }
};

function onFocusValidBo() {
    document.getElementById("dyrBo").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrVacc
function onBlurValidVacc() {
    if (document.dyr_form.dyrVacc.value == "") {
        document.getElementById("dyrVacc").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vVacc = "false";
    } else {
        document.getElementById("dyrVacc").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vVacc = "true";
    }
};

function onFocusValidVacc() {
    document.getElementById("dyrVacc").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrSex
function onBlurValidSex() {
    if (document.dyr_form.dyrSex.value == "") {
        document.getElementById("dyrSex").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vSex = "false";
    } else {
        document.getElementById("dyrSex").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vSex = "true";
    }
};

function onFocusValidSex() {
    document.getElementById("dyrSex").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrFarve
function onBlurValidFarve() {
    if (document.dyr_form.dyrFarve.value == "") {
        document.getElementById("dyrFarve").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vFarve = "false";
    } else {
        document.getElementById("dyrFarve").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vFarve = "true";
    }
};

function onFocusValidFarve() {
    document.getElementById("dyrFarve").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrTekst
function onBlurValidTekst() {
    if (document.dyr_form.dyrTekst.value == "") {
        document.getElementById("dyrTekst").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vTekst = "false";
    } else {
        document.getElementById("dyrTekst").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vTekst = "true";
    }
};

function onFocusValidTekst() {
    document.getElementById("dyrTekst").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrEjer
function onBlurValidEjer() {
    if (document.dyr_form.dyrEjer.value == "") {
        document.getElementById("dyrEjer").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vEjer = "false";
    } else {
        document.getElementById("dyrEjer").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vEjer = "true";
    }
};


function onFocusValidEjer() {
    document.getElementById("dyrEjer").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//Min Validation

/*function validate() {
    var select = document.getElementById('dyrType');
    return !select.value == 0;
    
    var select = document.getElementById('dyrRace');
    return !select.value == 0;
    
    var select = document.getElementById('dyrAlder');
    return !select.value == 0;
    
    var select = document.getElementById('dyrVaegt');
    return !select.value == 0;
    
    var select = document.getElementById('dyrMad');
    return !select.value == 0;
    
    var select = document.getElementById('dyrBo');
    return !select.value == 0;
    
    var select = document.getElementById('dyrVacc');
    return !select.value == 0;
    
    var select = document.getElementById('dyrSex');
    return !select.value == 0;
    
    var select = document.getElementById('dyrFarve');
    return !select.value == 0;
    
    var select = document.getElementById('dyrTekst');
    return !select.value == 0;
    
    var select = document.getElementById('dyrEjer');
    return !select.value == 0;
}*/