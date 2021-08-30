<?php
    require_once '../config.php';
    require_once 'header.inc.php';
?>

<main>
    <div class="container">
        <h1>Template Strings</h1>
        <div class="teaser">
            <p>Template strings are strings wrapped with backticks (`), allowing embedded expressions called substitutions.</p>
        </div>

        <div class="article variables">
            <p>
            Template strings, also called template literals, use back-ticks ` ` rather than the quotes like " " or ' ' to define a string.
            You can use both single and double quotes inside such a template.
            Template literals allow multiline strings, as well. 
            </p>
            <p>
            <img src="../images/great-job.png" 
                 id="important-img"
                 with="24" 
                 height="24">Template literals allow variables and expressions in strings.
            </p>
        </div>

        <!-- EXAMPLE 1 -->
        <div class="codeArea flex-container codeExample">
            <div class="col-6 code"
                 style="padding-right:0px; padding-left:0px; width:100%;">
                <h4>Example 1: Variable Substitution</h4>
                <pre class="language-css">
                    <code class="language-css">
let firstName = "Petra";
let lastName = "Grimes";

/*  introduction string, containing single AND
    double quotes, as well as two placeholders */
let intro = `Let's introduce ${firstName} ${lastName} "officially"!`;

console.log(intro);</code>
                </pre>
            </div>
            <div class="col-6 output"
                 style="padding-right:0px; padding-left:0px; width:100%;">
                <button onclick="S_templateStrings1();">Run</button>
                <button onclick="clearResultText(1);">Reset</button>
                
                <p id="result-text-1" class="result-text">&nbsp;</p>
            </div>
        </div>

        <!-- EXAMPLE 2 -->
        <div class="codeArea flex-container codeExample">
            <div class="col-6 code"
                 style="padding-right:0px; padding-left:0px; width:100%;">
                <h4>Example 2: Expression Substitution</h4>
                <pre class="language-css">
                    <code class="language-css">
let a = 4;
let b = 17;

/*  statement string with math expression placeholders that
    will be replaced by their respective results */
let statement = `Twenty-one is ${a + b} and not ${2 * a + b}.`;

console.log(statement);</code>
                </pre>
            </div>
            <div class="col-6 output" 
                 style="padding-right:0px; padding-left:0px; width:100%;">
                <button onclick="S_templateStrings2();">Run</button>
                <button onclick="clearResultText(2);">Reset</button>
                
                <p id="result-text-2" class="result-text">&nbsp;</p>

                <!-- RELATED MATERIAL ---------------------------------------------------->
                <h3>Related Topics</h3>
                <p>Quotes Inside Strings, Multiline Strings, HTML Templates</p>

                <h3>More Examples</h3>
                <a href="#">Template Strings - Mariano</a><br>
                <a href="#">Template Strings - Caro</a>
                <p style="height:1px;"></p>

                <h3>More Info</h3>
                <a href="https://www.w3schools.com/js/js_string_templates.asp" target="_blank">String Templates - w3schools</a><br>
                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals" target="_blank">Template Strings - MDN Web Docs</a>
                <p style="height:1px;"></p>

            </div>
        </div>

    </div>

    <div class="tableOfContent">
        <ul>
            <li><a href="#"></a>TOC Links</li>
        </ul>
    </div>
</main>

<script src="../js/topic.S-chris.js"></script>

<?php
    require_once 'footer.inc.php';
?>