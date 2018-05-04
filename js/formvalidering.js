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
    if (document.dyr_form.dyrType.value === "Kat" ||
        document.dyr_form.dyrType.value === "Hund" ||
        document.dyr_form.dyrType.value === "Fugl" ||
        document.dyr_form.dyrType.value === "Fisk" ||
        document.dyr_form.dyrType.value === "Øgle" ||
        document.dyr_form.dyrType.value === "Slange" ||
        document.dyr_form.dyrType.value === "Skildpadde" ||
        document.dyr_form.dyrType.value === "Gnaver" ||
        document.dyr_form.dyrType.value === "Kanin" ||
        document.dyr_form.dyrType.value === "Marsvin" ||
        document.dyr_form.dyrType.value === "Hamster" ||
        document.dyr_form.dyrType.value === "Hest" ||
        document.dyr_form.dyrType.value === "Andet") {
        document.getElementById("dyrType").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vType = "true";
    } else {
        document.getElementById("dyrType").style.backgroundColor = "            rgba(255, 138, 138, 0.61)";
        vType = "false";
    };

    if (vType === "false" ||
        vRace === "false" ||
        vAlder === "false" ||
        vVaegt === "false" ||
        vMad === "false" ||
        vBo === "false" ||
        vVacc === "false" ||
        vSex === "false" ||
        vFarve === "false" ||
        vTekst === "false" ||
        vEjer === "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
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
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidRace() {
    document.getElementById("dyrRace").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrAlder
function onBlurValidAlder() {
    if (document.dyr_form.dyrAlder.value === "0 - 2 år" ||
        document.dyr_form.dyrAlder.value === "2 - 4 år" ||
        document.dyr_form.dyrAlder.value === "4 - 6 år" ||
        document.dyr_form.dyrAlder.value === "6 - 8 år" ||
        document.dyr_form.dyrAlder.value === "8 - 10 år" ||
        document.dyr_form.dyrAlder.value === "10 - 14 år" ||
        document.dyr_form.dyrAlder.value === "14 - 18 år" ||
        document.dyr_form.dyrAlder.value === "18 - 22 år" ||
        document.dyr_form.dyrAlder.value === "22 - 26 år" ||
        document.dyr_form.dyrAlder.value === "26 - 30 år" ||
        document.dyr_form.dyrAlder.value === "Over 30 år") {
        document.getElementById("dyrAlder").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vAlder = "true";
    } else {
        document.getElementById("dyrAlder").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vAlder = "false";
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidAlder() {
    document.getElementById("dyrAlder").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrVaegt
function onBlurValidVaegt() {
    if (document.dyr_form.dyrVaegt.value === "0 - 2 kg" ||
        document.dyr_form.dyrVaegt.value === "2 - 4 kg" ||
        document.dyr_form.dyrVaegt.value === "4 - 6 kg" ||
        document.dyr_form.dyrVaegt.value === "6 - 8 kg" ||
        document.dyr_form.dyrVaegt.value === "8 - 10 kg" ||
        document.dyr_form.dyrVaegt.value === "10 - 20 kg" ||
        document.dyr_form.dyrVaegt.value === "20 - 30 kg" ||
        document.dyr_form.dyrVaegt.value === "30 - 50 kg" ||
        document.dyr_form.dyrVaegt.value === "50 - 75 kg" ||
        document.dyr_form.dyrVaegt.value === "75 - 100 kg" ||
        document.dyr_form.dyrVaegt.value === "100 - 150 kg" ||
        document.dyr_form.dyrVaegt.value === "150 - 200 kg" ||
        document.dyr_form.dyrVaegt.value === "200 - 250 kg" ||
        document.dyr_form.dyrVaegt.value === "250 - 300 kg" ||
        document.dyr_form.dyrVaegt.value === "Over 300 kg") {
        document.getElementById("dyrVaegt").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vVaegt = "true";
    } else {
        document.getElementById("dyrVaegt").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vVaegt = "false";
    };
    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidVaegt() {
    document.getElementById("dyrVaegt").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrMad
function onBlurValidMad() {
    if (document.dyr_form.dyrMad.value === "tørfoder" ||
        document.dyr_form.dyrMad.value === "vådfoder" ||
        document.dyr_form.dyrMad.value === "halm, hø og grønt") {
        document.getElementById("dyrMad").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vMad = "true";
    } else {
        document.getElementById("dyrMad").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vMad = "false";
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidMad() {
    document.getElementById("dyrMad").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrBo
function onBlurValidBo() {
    if (document.dyr_form.dyrBo.value === "i byen" ||
        document.dyr_form.dyrBo.value === "på landet" ||
        document.dyr_form.dyrBo.value === "Ved Ikke") {
        document.getElementById("dyrBo").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vBo = "true";
    } else {
        document.getElementById("dyrBo").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vBo = "false";
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidBo() {
    document.getElementById("dyrBo").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrVacc
function onBlurValidVacc() {
    if (document.dyr_form.dyrVacc.value === "Ja" ||
        document.dyr_form.dyrVacc.value === "Nej" ||
        document.dyr_form.dyrVacc.value === "Ved Ikke") {
        document.getElementById("dyrVacc").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vVacc = "true";
    } else {
        document.getElementById("dyrVacc").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vVacc = "false";
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidVacc() {
    document.getElementById("dyrVacc").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrSex
function onBlurValidSex() {
    if (document.dyr_form.dyrSex.value === "Han" ||
        document.dyr_form.dyrSex.value === "Hun" ||
        document.dyr_form.dyrSex.value === "Den") {
        document.getElementById("dyrSex").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vSex = "true";
    } else {
        document.getElementById("dyrSex").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vSex = "false";
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidSex() {
    document.getElementById("dyrSex").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};

//dyrFarve
function onBlurValidFarve() {
    if (document.dyr_form.dyrFarve.value === "brun" ||
        document.dyr_form.dyrFarve.value === "sort" ||
        document.dyr_form.dyrFarve.value === "hvid" ||
        document.dyr_form.dyrFarve.value === "grå" ||
        document.dyr_form.dyrFarve.value === "broget" ||
        document.dyr_form.dyrFarve.value === "rød" ||
        document.dyr_form.dyrFarve.value === "gul") {
        document.getElementById("dyrFarve").style.backgroundColor = "rgba(172, 253, 172, 0.71)";
        vFarve = "true";
    } else {
        document.getElementById("dyrFarve").style.backgroundColor = "rgba(255, 138, 138, 0.61)";
        vFarve = "false";
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
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
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
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
    };

    //Låser submit knappen så man ikke kan indsende formularen før den er udfyldt
    if (vType == "false" ||
        vRace == "false" ||
        vAlder == "false" ||
        vVaegt == "false" ||
        vMad == "false" ||
        vBo == "false" ||
        vVacc == "false" ||
        vSex == "false" ||
        vFarve == "false" ||
        vTekst == "false" ||
        vEjer == "false") {
        document.getElementById("submit").disabled = true;
        document.getElementById("submit").style.color = "#a0a0a0";
    } else {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.color = "#000000";
    };
};

function onFocusValidEjer() {
    document.getElementById("dyrEjer").style.backgroundColor = "rgba(247, 247, 183, 0.78)";
};
