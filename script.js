function SGPA() {

    var form = document.getElementById("forms");  //form id to calculate sgpa
    // credits c 
    c1 = parseInt(c1.value);
    c2 = parseInt(c2.value);
    c3 = parseInt(c3.value);
    c4 = parseInt(c4.value);
    c5 = parseInt(c5.value);
    c6 = parseInt(c6.value);
    c7 = parseInt(c7.value);
    c8 = parseInt(c8.value);
    c9 = parseInt(c9.value);

    //grades g
    g1 = parseInt(g1.value);
    g2 = parseInt(g2.value);
    g3 = parseInt(g3.value);
    g4 = parseInt(g4.value);
    g5 = parseInt(g5.value);
    g6 = parseInt(g6.value);
    g7 = parseInt(g7.value);
    g8 = parseInt(g8.value);
    g9 = parseInt(g9.value);

    //prevent auto submitting
    event.preventDefault()

    result.value = parseFloat(((c1 * g1) + (c2 * g2) + (c3 * g3) + (c4 * g4) + (c5 * g5) + (c6 * g6) + (c7 * g7) + (c8 * g8) + (c9 * g9)) / (c1 + c2 + c3 + c4 + c5 + c6 + c7 + c8 + c9)).toFixed(2);
}

function percentage() {
    var form = document.getElementById("form"); // form id to calculate percentage from sgpa
    sgpa = parseFloat(sgpa.value);
    resultpercentage.value = parseFloat(sgpa - 0.75) * (10);
    event.preventDefault()
}