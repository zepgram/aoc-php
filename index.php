<?php

use Aoc\AocResolver;

require 'vendor/autoload.php';
?>

<form name="form" action="" method="get">
    <label>Day:</label>
    <input type="text" id="day" name="day" size="10" value="<?= $_GET['day']; ?>" required/>
    <label>Problem:</label>
    <input type="text" id="problem" name="problem" size="10" value="<?= $_GET['problem']; ?>" required/>
    <input type="submit" value="Submit"/>
</form>

<?php
$application = new AocResolver($_GET['day'], $_GET['problem']);
$solution = null;
try {
    $solution = $application->resolve();
} catch (\Exception $e) {
    $error = $e->getMessage();
}
?>

<div>
<?php if ($solution): ?>
    The result for day <?= $_GET['day'] ?> and problem <?= $_GET['problem'] ?> is: <?= $solution; ?>
<?php else: ?>
    Result is null :/
<?php endif; ?>
<?php if (isset($error)):
    echo $error;
endif; ?>
</div>

