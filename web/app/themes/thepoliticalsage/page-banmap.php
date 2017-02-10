<?php
/**
 * Template Name: Banmap
 */
?>
<div class="container-fluid map-wrapper">
  <div class="row">
    <div id="header-col" class="col-xs-12">
      <div class="map-header responsive-text"> 
        <h1>The Muslim Ban According to The Senate</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2 col-lg-0">
      <div id="legend">
        <div id="big-screen-legend">
          <div class="row legend-row"><div id="oppose-icon"class="legend-icon"></div>
            <p>Fully Opposed</p>
          </div>
          <div class="row legend-row"><div id="half-icon"class="legend-icon"></div>
            <p>Split</p>
          </div>
          <div class="row legend-row"><div id="support-icon"class="legend-icon"></div>
            <p>Fully Supportive</p>
          </div>
        </div>
        <div id="small-screen-legend" class="legend-row">
          <div class="row">
            <div class="col-4">
              <div class="row"><div id="oppose-icon"class="legend-icon"></div>
                <p>Fully Opposed</p>
              </div>
            </div>
            <div class="col-4">
              <div class="row"><div id="half-icon" class="legend-icon"></div>
                <p>Split</p>
              </div>
            </div>
            <div class="col-4">
              <div class="row"><div id="support-icon" class="legend-icon"></div>
                <p>Fully Supportive</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-8" id="map-col">
      <div id="tooltip">
        <i id="close-tooltip" class="icon fa-times"></i>
        <div id="tooltip-body"></div>
      </div>
      <div id="map-container"></div>
    </div>
  </div>
</div>
