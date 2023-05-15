<footer>
  <?php if (!empty($site->footer())): ?>
    <p>
      <?php echo $site->footer() ?>
    </p>
  <?php else: ?>
    <p>Copyright &copy;
      <?php echo date("Y"); ?>
    </p>
  <?php endif; ?>

  <p>
    <?php echo $L->get('Designed by'); ?> <a target="_blank" href="https://amerey.eu">Amerey</a> |
    <?php echo $L->get('Powered by'); ?> <a target="_blank" href="https://www.bludit.com">Bludit.com</a>
  </p>

  <!-- go to top button -->
  <div class="go-top">
    <a class="smoothscroll" href="#top"></a>
  </div>
</footer>
