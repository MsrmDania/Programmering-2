


function visfejltekst(fejltekst) {
    document.getElementById('fejlfelt').style.display = "block";
    document.getElementById('fejltekst').innerHTML = fejltekst;
}

function visAdvarseltekst(advarseltekst) {
    document.getElementById('advarselfelt').style.display = "block";
    document.getElementById('advarseltekst').innerHTML = advarseltekst;
}

function vissuccestekst(succestekst) {
    document.getElementById('succesfelt').style.display = "block";
    document.getElementById('succestekst').innerHTML = succestekst;
}

function nulstilTekstFelter() {
    document.getElementById('fejlfelt').style.display = "none";
    document.getElementById('advarselfelt').style.display = "none";
    document.getElementById('succesfelt').style.display = "none";
}


function validering() {

    nulstilTekstFelter();

    if (document.dyrType.value == "0") {
        visfejltekst('Dyr skal udfyldes!');
        document.dyrType.focus();
        return false;
    } //dyr
    
    if (document.dyrAlder.value == "0") {
        visfejltekst('Alder skal udfyldes!');
        document.dyrAlder.focus();
        return false;
    } //alder
    
    if (document.dyrSex.value == "0") {
        visfejltekst('Køn skal udfyldes!');
        document.pagewrap.dyrSex.focus();
        return false;
    } //køn
    
    if (document.dyrTekst.value == "") {
        visfejltekst('Navn skal udfyldes!');
        document.dyrTekst.focus();
        return false;
    } //navn
    
    
}

function dyrTypeOnBlurValidering() {
    if (document.dyrType.value == "0") {
        visfejltekst('Dyr skal udfyldes!');
        document.dyrType.focus();
        return false;
} //dyr onBlur
}

function dyrAlderOnBlurValidering() {
    if (document.dyrAlder.value == "0") {
        visfejltekst('Alder skal udfyldes!');
        document.dyrAlder.focus();
        return false;
} //alder onBlur
}

function dyrSexOnBlurValidering() {
    if (document.dyrSex.value == "0") {
        visfejltekst('Køn skal udfyldes!');
        document.dyrSex.focus();
        return false;
} //køn onBlur
}

function dyrTekstOnBlurValidering() {
    if (document.dyrTekst.value == "") {
        visfejltekst('Navn skal udfyldes!');
        document.dyrTekst.focus();
        return false;
} //navn onBlur
}
