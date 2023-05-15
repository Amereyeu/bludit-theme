<main class="container" role="main">
  <?php Theme::plugins('pageBegin'); ?>
  <article class="post <?php echo $page->isStatic() ? 'static-page' : ''; ?>">

    <?php if ($login->isLogged()) if ($canEdit = checkRole(array('admin', 'editor'))): ?>
        <a href="<?php echo HTML_PATH_ADMIN_ROOT . 'edit-content/' . $page->slug() ?>" class="post__edit" target="_blank">
          <span>
          <?php echo $L->get('Edit Article') ?>
          </span>
          <i class="icon fa-arrow-right"></i>
        </a>
    <?php endif; ?>

    <h1 class="post__title">
      <?php echo $page->title(); ?>
    </h1>

    <div class="post__meta">
      <div class="post__meta__name">by
        <?php echo $page->user('nickname'); ?> -
      </div>

      <div class="post__meta__time">
        <time datetime="<?php echo $page->dateRaw('c') ?>">
          <?php echo $page->date() ?>
        </time>
      </div>

      <div class="post__meta__read">
        -
        <?php echo $page->readingTime(); ?>
      </div>

      <?php if ($page->category()): ?>
        <div class="post__meta__tags">
          <a href="<?php echo DOMAIN_CATEGORIES . $page->categoryKey() ?>" rel="tag">
            <?php echo $page->category() ?>
          </a>
        </div>
      <?php endif ?>
    </div>

    <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/default.svg')) ?>"
      class="post__image" alt="<?php echo $page->title() ?>" />

    <div class="post__content">
      <?php echo $page->content(); ?>
    </div>

    <div class="post__meta__bottom">
      <div class="post__meta__bottom__tags">
        <?php foreach ($page->tags(true) as $tagKey => $tagName): ?>
          <a href="<?php echo DOMAIN_TAGS . $tagKey ?>" rel="tag">
            <?php echo $tagName ?>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="post__meta__bottom__socials">
        <div class="share">
          <p>
            <?php echo $L->get('share') ?> :
          </p>

          <span class="twitter"
            data-url="https://twitter.com/share?text=<?php echo urlencode($page->title()) ?>&amp;url=<?php echo urlencode($page->permalink()) ?>"
            rel="nofollow noreferrer">
            <i class="icon fa-twitter"></i>
          </span>

          <span class="facebook"
            data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page->permalink()) ?>"
            rel="nofollow noreferrer">
            <i class="icon fa-facebook"></i>
          </span>

          <span
            data-url="https://www.reddit.com/submit?url=<?php echo urlencode($page->permalink()) ?>&amp;title=<?php echo urlencode($page->title()) ?>"
            rel="nofollow noreferrer">
            <i class="icon fa-reddit"></i>
          </span>

          <a href="mailto:?subject=<?php echo rawurlencode($page->title()) ?>&amp;body=<?php echo urlencode($page->permalink()) ?>"
            rel="nofollow noreferrer">
            <i class="icon fa-envelope"></i>
          </a>
        </div>
      </div>
    </div>
  </article>

  <?php Theme::plugins('pageEnd'); ?>
</main>
