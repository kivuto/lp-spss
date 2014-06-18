  <div id="<?php echo $blocks[$counter]; ?>" class="row mainContent content-introduction content-overlay-video" data-block="<?php echo $blocks[$counter]; ?>">
      <video autoplay muted loop poster="img/background.jpg">
      </video>   
      <img src="img/background.jpg">
      <div class="ovrlay">
          <div class="container">
              <div class="row">
                  <div class="large-12 columns center">
                        <h1>Overlay Video Block</h1>
                  </div> 
              </div> 
              <div class="row hide-for-mobile">
                  <div class="large-12 columns info center">
                      <p>Aenean vitae dolor ac mauris vehicula malesuada.</p>
                  </div> 
              </div>
              <div class="row">
                  <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1 center">
                  <li>
                      <a class="vimeo ctaBtn" href="//player.vimeo.com/video/91340823" onclick="tib('', '<?php echo $gaEvent; ?>', '<?php echo $gaEvent; ?> - Clickthrough', '<?php echo $gaEvent; ?> - Clickthrough - Introduction - Watch video'); return false;">
                          <div class="button ctaBtn">
                             <span>Aenean vitae</span>
                          </div>
                      </a>
                  </li>
              </ul>
              </div>
          </div>  
      </div>     
  </div>