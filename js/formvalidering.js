var type, race, alder, vaegt, mad, bo, vacc, sex, farve, tekst, ejer;

type = 0;
race = 0;
alder = 0;
vaegt = 0;
mad = 0;
bo = 0;
vacc = 0;
sex = 0;
farve = 0;
tekst = 0;
ejer = 0;



document.getElementById("dyrType").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrType").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrRace").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrRace").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrAlder").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrAlder").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrVaegt").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrVaegt").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrMad").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrMad").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrBo").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrBo").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrVacc").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrVacc").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrSex").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrSex").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrFarve").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrFarve").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrTekst").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrTekst").onblur = function () {
    onBlurValid()
};

document.getElementById("dyrEjer").onfocus = function () {
    onFocusValid()
};
document.getElementById("dyrEjer").onblur = function () {
    onBlurValid()
};



function onBlurValid() {
    document.getElementById("fejlfelt").style.backgroundColor = "red";
}

function onFocusValid() {
    document.getElementById("fejlfelt").style.backgroundColor = "lime";
}
