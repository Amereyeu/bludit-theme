<main role="main">
  <!-- intro section -->
  <section class="intro">
    <!-- slogan and description -->
    <div class="intro__meta">
      <?php if ($site->slogan()): ?>
        <h1>
          <?php echo $helper->slogan(); ?>
        </h1>
      <?php endif ?>
      <?php if ($site->description()): ?>
        <p>
          <?php echo $helper->description(); ?>
        </p>
      <?php endif ?>
    </div>

    <!-- social icons side -->
    <div class="social">
      <?php if (!empty(Theme::socialNetworks())): ?>
        <h3 class="social__label">
          <?php echo $L->get('Follow me') ?>
        </h3>

        <ul class="social__icons">
          <?php foreach (Theme::socialNetworks() as $key => $label): ?>
            <li>
              <a class="<?php echo $key ?>" href="<?php echo $site->{$key}(); ?>" target="_blank" rel="nofollow noreferrer"
                data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $label ?>">
                <i class="icon <?php echo 'fa-' . $key ?>" aria-hidden="true"></i>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>

    <!-- contacts bottom -->
    <div class="contacts">
      <div class="contact">
        <h4 class="contact__title">
          <?php echo $L->get('Email') ?>
        </h4>

        <div class="contact__info">
          <?php echo $L->get('address') ?>
        </div>
      </div>

      <div class="contact">
        <h4 class="contact__title">
          <?php echo $L->get('Phone') ?>
        </h4>

        <div class="contact__info">
          <?php echo $L->get('number') ?>
        </div>
      </div>
    </div>

    <!-- scroll down image -->
    <div class="scroll-down" onclick="scrolldown()">
      <img src="<?php echo (Theme::src('img/scroll-down.png')) ?>" alt="<?php echo $page->title() ?>" />
    </div>
  </section>

  <!-- posts -->
  <section class="posts" id="content">
    <h4 class="posts__title">
      <?php echo $L->get('Latest posts') ?>
    </h4>

    <div class="posts__list">
      <?php foreach ($content as $page): ?>
        <!-- post -->
        <article class="post">
          <a href="<?php echo $page->permalink(); ?>">
            <figure>
              <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/default.svg')) ?>" />

              <figcaption>
                <h2>
                  <?php echo $page->title(); ?>
                </h2>
                <p>
                  <?php if (strlen($page->description()) > 0) {
                    echo $page->description();
                  } else {
                    echo $helper->content2excerpt($page->content(false), 50);
                  }
                  ?>
                </p>
              </figcaption>
            </figure>
          </a>
        </article>
      <?php endforeach ?>
    </div>
  </section>

  <!-- Pagination -->
  <?php if (Paginator::numberOfPages() > 1): ?>
    <div class="pagination">
      <div class="pagination__previous">
        <?php if (Paginator::showPrev()): ?>
          <a class="pagination__previous__button" href="<?php echo Paginator::previousPageUrl() ?>">
            <?php echo $L->get('Newer'); ?>
          </a>
        <?php endif; ?>
      </div>

      <div class="pagination__numbers">
        <?php echo Paginator::currentPage() ?> /
        <?php echo Paginator::numberOfPages() ?>
      </div>

      <div class="pagination__next">
        <?php if (Paginator::showNext()): ?>
          <a class="pagination__next__button" href="<?php echo Paginator::nextPageUrl() ?>">
            <?php echo $L->get('Older'); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  <?php endif ?>
</main>

<script>
  function scrolldown() {
    const element = document.getElementById("content");
    element.scrollIntoView({ behavior: "smooth", inline: "nearest" });
  }
</script>
