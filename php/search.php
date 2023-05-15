<?php

$searchTerm = urldecode($url->parameter('search'));
$searchTerm = Text::removeHTMLTags($searchTerm);
$searchTerm = trim($searchTerm);
$searchTerm = htmlspecialchars($searchTerm);

echo '<script>var uploadsFolder = "' . HTML_PATH_UPLOADS . '", searchTerm="' . $searchTerm . '", domainBase="' . DOMAIN_PAGES . '" ;</script>' . PHP_EOL;

echo Theme::javascript('js/search.js');
?>

<main id="content" class="container" role="main">

  <div class="search">
    <form method="get">
      <input type="search" name="search" placeholder="<?php echo $L->get('search-placeholder') ?>"
        value="<?php echo $searchTerm; ?>" class="search__input" autocomplete="off" spellcheck="false" />
    </form>

    <?php if ($searchTerm): ?>
      <h4 class="search__title">
        <?php echo $L->get('Search results for') ?> "
        <?php echo $searchTerm; ?>"
      </h4>
    <?php else: ?>
      <h4 class="search__title">
      </h4>
    <?php endif; ?>

    <div class="search__loop">
    </div>
  </div>

  <div class="more">
    <a href="#" id="load-posts" data-posts_per_page="6" class="more__button hide">
      <?php echo $L->get('Load more posts') ?>
    </a>
  </div>
</main>

<script>
  var translations = {
    "search-results-for": "<?php echo $L->get('Search results for') ?>",
    "nothing-found-for": "<?php echo $L->get('Nothing found for') ?>",
    "search-term-too-short": "<?php echo $L->get('Search term too short') ?>",
  };
</script>
