  <div id="push"></div>
<!-- End Wrap -->
</div>

<footer>

  <?php if (QubitAcl::check('userInterface', 'translate')): ?>
    <?php echo get_component('sfTranslatePlugin', 'translate') ?>
  <?php endif; ?>
  <div class="container">
    <?php echo get_component_slot('footer') ?>
    <div class="row-fluid">
      <div class="span6"  id="copyright">
        <div class="row-fluid">
          <div class="span12">
            <?php echo link_to(image_tag('/plugins/arSparcPlugin/images/fit-wordmark.png', array('alt' => __('Fashion Institute of Technology - State University of New York'))), 'http://www.fitnyc.edu/') ?>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <p>©2016 Fashion Institute of Technology</br>
              All rights reserved.
            </p>
          </div>
        </div>
      </div>
      <div class="span6" id="social">
        <div class="row-fluid">
          <div class="span12">
            <p>This site is an initiative of the FIT Library.</p>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <ul>
      				<li><a href="http://www.fitnyc.edu/library/"><i class="fa fa-home fa-3x"></i></a></li>
      				<li><a href="https://www.facebook.com/FITLibrary"><i class="fa fa-facebook fa-3x"></i></a></li>
      				<li><a href="https://twitter.com/FITLibrary"><i class="fa fa-twitter fa-3x"></i></a></li>
      				<li><a href="http://pinterest.com/fitlibrary/"><i class="fa fa-pinterest-p fa-3x"></i></a></li>
      				<li><a href="https://www.instagram.com/fitnyclibrary/"><i class="fa fa-instagram fa-3x"></i></a></li>
      			</ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="print-date">
    <?php echo __('Printed: %d%', array('%d%' => date('Y-m-d'))) ?>
  </div>

</footer>

<?php if (null !== $gaKey = sfConfig::get('app_google_analytics_api_key')): ?>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '<?php echo $gaKey ?>']);
    _gaq.push(['_trackPageview']);
    <?php include_slot('google_analytics') ?>
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
<?php endif; ?>
