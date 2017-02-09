<?php
/**
 * Template Name: Banmap
 */
?>
<div class="container-fluid map-wrapper" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/banmap/background.png">
  <div class="row">
    <div id="header-col" class="col-xs-12">
      <div id="map-header"> 
        <h1>The Muslim Ban According to The Senate</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2 col-lg-0">
      <div id="legend">
        <div id="big-screen-legend">
          <div class="row legend-row"><img id="oppose-icon" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/teal_icon.png">
            <p>Fully Opposed</p>
          </div>
          <div class="row legend-row"><img id="half-icon" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/blue_icon.png">
            <p>Split</p>
          </div>
          <div class="row legend-row"><img id="support-icon" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/black_icon.png">
            <p>Fully Supportive</p>
          </div>
        </div>
        <div id="small-screen-legend" class="legend-row">
          <div class="row">
            <div class="col-xs-4">
              <div class="row"><img id="oppose-icon" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/teal_icon.png" class="legend-icon"></div>
              <div class="row">
                <p>Fully Opposed</p>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="row"><img id="half-icon" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/blue_icon.png" class="legend-icon"></div>
              <div class="row">
                <p>Split</p>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="row"><img id="support-icon" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/black_icon.png" class="legend-icon"></div>
              <div class="row">
                <p>Fully Supportive</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-8 col-lg-8">
      <div id="tooltip">
        <div class="container"><img id="close-tooltip" src="<?= get_template_directory_uri(); ?>/assets/images/banmap/close.png" style="cursor: pointer"></div>
        <div id="body"></div>
      </div>
      <div id="map-container"></div>
      <!--svg#statesvg(width="960" height="600")-->
    </div>
  </div>
</div>
