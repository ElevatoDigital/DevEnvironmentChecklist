<li class="<?php echo $result ? 'result_passed' : 'result_failed';?>">
    <h2><?php echo renderEscape($title);?></h2>

    <div class="result_expected"><span>Expected: </span><?php echo renderEscape($expected);?></div>
    <div class="result_found"><span>Found: </span><?php echo renderEscape($found);?></div>
</li>
