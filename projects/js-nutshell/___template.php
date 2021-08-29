require_once 'header.inc.php';
<main>
    <div class="container">
        <h1>Topic Title</h1> <!-- TITLE -->
        <div class="teaser">
            <p>
                <!-- TEASER -->
            </p>
        </div>
    
        <div class="article">
            <p>
                <!-- ARTICLE -->
            </p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <div class="col-6 code">
                <h4>Code:</h4>
                <p>
                    <!-- CODE -->
                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>
                    <!-- OUTPUT HERE -->
                </p>
                <button class="btn run" onclick="run(this)">Run</button>
                <button class="btn reset" onclick="reset(this)">Reset</button>
            </div>
        </div>
    </div>

    <div class="tableOfContent">
        <ul>
            <li><a href="#"></a>Link</li>
        </ul>
    </div>
</main>
require_once 'footer.inc.php';