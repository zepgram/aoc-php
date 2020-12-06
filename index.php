<?php

use Aoc\AocResolver;

require 'vendor/autoload.php';

$application = new AocResolver($_GET['day'], $_GET['problem']);
$solution = null;
try {
    $solution = $application->resolve();
} catch (\Exception $e) {
    $error = $e->getMessage();
}
?>

<div class="vertical-center">
    <form name="form" action="" method="get">
        <label>Day:</label>
        <input type="text" id="day" name="day" size="10" value="<?= $_GET['day']; ?>" required/>
        <label>Problem:</label>
        <input type="text" id="problem" name="problem" size="10" value="<?= $_GET['problem']; ?>" required/>
        <input type="submit" value="[Submit]"/>
    </form>
    <br>
    <div>
    <?php if ($solution): ?>
        <p>The result for day <?= $_GET['day'] ?> and problem <?= $_GET['problem'] ?> is: <em><?= $solution; ?></em></p>
    <?php else: ?>
        <p>Result is null :/</p>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <p><?= $error; ?></p>
    <?php endif; ?>
    </div>
</div>

<style>
    body {
        background: #0f0f23;
        color: #cccccc;
        font-family: "Source Code Pro", monospace;
        font-size: 14pt;
        min-width: 60em;
    }
    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    input {
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        appearance: textfield;
        background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
        -webkit-rtl-ordering: logical;
        cursor: text;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 2px;
        border-width: 2px;
        border-style: inset;
        border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        border-image: initial;
    }
    input[type="text"], textarea {
        background: transparent;
        color: inherit;
        border: 1px solid #666666;
        background: #10101a;
        padding: 0 2px;
        font-family: inherit;
        font-size: inherit;
        margin: 0;
    }
    input[type="submit"] {
        background: transparent;
        border: 0;
        font-family: inherit;
        font-size: inherit;
        margin: 0;
        padding: 0;
        color: #009900;
        cursor: pointer;
    }
    em {
        color: #ffffff;
        font-style: normal;
        text-shadow: 0 0 5px #ffffff;
    }
</style>