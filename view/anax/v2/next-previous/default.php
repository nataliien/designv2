<?php

namespace Anax\View;

/**
 * Render content within an article.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

// Prepare classes
$classes[] = "next-previous";
if (isset($class)) {
    $classes[] = $class;
}

// Prepare titles
$prevTitle = $previous["title"];
$nextTitle = $next["title"];

if (isset($nextPreviousTitle) && $nextPreviousTitle === false) {
    $prevTitle = t("Previous");
    $nextTitle = t("Next");
}



?><div <?= classList($classes) ?>>
    <?php if (isset($previous)) : ?>
        <div class="previous">« <a href="<?= url($previous["route"]) ?>"><?= $prevTitle ?></a></div>
    <?php endif; ?>
    <?php if (isset($next)) : ?>
        <div class="next"><a href="<?= url($next["route"]) ?>"><?= $nextTitle ?></a> »</div>
    <?php endif; ?>
</div>
