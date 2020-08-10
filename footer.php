</div>
<footer id="mastfooter" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                  if (is_active_sidebar('sidebar-2')) {
                      dynamic_sidebar('sidebar-2');
                  }
                ?>
            </div>
        </div>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>