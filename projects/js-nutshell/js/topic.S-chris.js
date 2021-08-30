// Template Strings -----------------------------------------------------------------

/*  
    Example 1: Insert first and last name into sentence

    Show the resulting string in the dev console and also
    in the "console-text" area in the HTML page.
*/
function S_templateStrings1() {
    // code snippet begin ----
    let firstName = "Petra";
    let lastName = "Grimes";

    /*  introduction string, containing single AND
        double quotes, as well as two placeholders */
    let intro = `Let's introduce ${firstName} ${lastName} "officially"!`;

    console.log(intro);  
    // code snippet end   ----
    
    setInnerHTML("#result-text-1", intro);
}

/*  
    Example 2: 

    Show the resulting string in the dev console and also
    in the "console-text" area in the HTML page.
*/
function S_templateStrings2() {
    // code snippet begin ----
    let a = 4;
    let b = 17;

    /*  statement string with math expression placeholders that
        will be replaced by their respective results */
    let statement = `Twenty-one is ${a + b} and not ${2 * a + b}.`;

    console.log(statement);  
    // code snippet end   ----
    
    setInnerHTML("#result-text-2", statement);
}

// HELPER FUNCTIONS ----------------------------------------------------------------

function setInnerHTML(selector, text) {
    let elem = document.body.querySelector(selector);
    if (elem) elem.innerHTML = text;
}

function clearResultText(n) {
    setInnerHTML("#result-text-" + n, '&nbsp;');
}