<header>
  <!-- navigation -->
  <div class="navigation">
    <div class="navigation__logo">
      <a href="<?php echo Theme::siteUrl() ?>" rel="home">
        <img src="<?php echo ($site->logo() ? $site->logo() : Theme::src('img/logo.png')) ?>"
          alt="<?php echo $site->title() ?>">
      </a>
    </div>

    <div id="menu-burger" class="drawer-trigger" data-toggle="modal" data-target="#drawer">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="navigation__list">
      <ul>
        <?php foreach ($staticContent as $staticPage):
          if (Text::stringContains($staticPage->key(), '404'))
            continue;
          ?>
          <li>
            <a href="<?php echo $staticPage->permalink(); ?>">
              <?php echo $staticPage->title(); ?>
            </a>
          </li>
        <?php endforeach ?>
        <li>
          <a href="/dtsearch">
            <i class="icon fa-search"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- modal for mobile devices -->
<div class="modal fade" id="drawer" tabindex="-1" role="dialog" aria-hidden="true">
  <div id="menu" class="close" data-dismiss="modal" aria-label="Close">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="modal-dialog" role="document">
    <!-- navigation -->
    <div class="modal-dialog__navigation">
      <ul>
        <?php foreach ($staticContent as $staticPage):
          if (Text::stringContains($staticPage->key(), '404'))
            continue;
          ?>
          <li>
            <a href="<?php echo $staticPage->permalink(); ?>">
              <?php echo $staticPage->title(); ?>
            </a>
          </li>
        <?php endforeach ?>
        <li>
          <a href="/dtsearch">
            <i class="icon fa-search"></i>
            <?php echo $L->get('Search') ?>
          </a>
        </li>
      </ul>
    </div>

    <!-- social icons -->
    <div class="modal-dialog__social">
      <?php if (!empty(Theme::socialNetworks())): ?>
        <h3 class="modal-dialog__social__title">
          <?php echo $L->get('Follow me') ?>
        </h3>

        <div class="social__icons">
          <?php foreach (Theme::socialNetworks() as $key => $label): ?>
            <a class="<?php echo $key ?>" href="<?php echo $site->{$key}(); ?>" target="_blank" rel="nofollow noreferrer"
              data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $label ?>">
              <i class="icon <?php echo 'fa-' . $key ?>" aria-hidden="true"></i>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
