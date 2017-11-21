<?php date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra'); ?>
<div class="site-wrap js-site-wrap">
  <div class="center">
    <div class="container">
      <div class="row">
        <!-- BEGIN site-->
        <div class="site site--main">
          <header class="site__header">
            <h1 class="site__title">Mon Parcours</h1>
            <h5 class="site__headline">Found:<strong> 641 apatments</strong></h5>
          </header>
          <button type="button" data-goto-target=".js-search-form" class="widget__btn--goto js-goto-btn">Show Filter</button>
          <div class="site__panel">
            <div class="listing__sort">
              <div class="form-group">
                <label for="in-listing-sort" class="control-label">Sort by:</label>
                <div class="form-control--select">
                  <select id="in-listing-sort" class="form-control js-in-select">
                    <option>Price + P&amp;P: Highest First</option>
                    <option>Time: Ending Soonset</option>
                    <option>Time: Newly Listed</option>
                    <option>Price + P&amp;P: Lowest First</option>
                    <option>Price + P&amp;P: Highest First</option>
                    <option>Price: Lowest First</option>
                    <option>Price: Highest First</option>
                    <option>Distance: Nearest First</option>
                    <option>Condition: New First</option>
                    <option>Condition: Used First</option>
                    <option>Best Match</option>
                  </select>
                </div>
              </div>
            </div>
            <!--end of block .listing__sort-->
            <div class="listing__view"><span class="control-label">View:</span><a href="properties_listing_grid.html" class="btn--white active"><i class="fa fa-th-large"></i></a><a href="properties_listing_list.html" class="btn--white"><i class="fa fa-bars"></i></a><a href="properties_listing_table.html" class="btn--white"><i class="fa fa-table"></i></a></div>
            <!--end of block .listing__view-->
          </div>

          <!--end of block .listing__param-->
          <div class="site__main">
            <div class="widget js-widget widget--main">
              <div class="widget__content">
                <div class="listing listing--grid listing--lg-4 js-properties-list">
                  <?php foreach ($parcours as $etape): ?>
                   <div class="listing__item">
                    <div class="properties properties--grid properties--simple">
                      <div class="properties__thumb"><a href="<?php echo base_url('index.php/parcours/etape/'); echo $etape['numEtape'];?>" class="item-photo"><img src="<?php echo base_url('public/');?>media-demo/properties/554x360/02.jpg" alt=""/>
                        <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Départ : <?php echo date("H", strtotime($etape['dateDepart']))."h".date("i", strtotime($etape['dateDepart']));?></span><span class="properties__params">Arrivée : <?php echo date("H", strtotime($etape['dateArrivee']))."h".date("i", strtotime($etape['dateArrivee']));?></span>
                        </figure></a><span class="properties__ribon">For rent</span>
                      </div>
                      <!-- end of block .properties__thumb-->
                      <div class="properties__details">
                        <div class="properties__info"><a href="<?php echo base_url('index.php/parcours/etape/'); echo $etape['numEtape'];?>" class="properties__address"><span class="properties__address-street"><?php echo $etape['villeDepart']." - ".$etape['villeArrivee'];?></span><span class="properties__address-city"><?php echo strftime ("%A %d %B", strtotime($etape['dateDepart'])); ?></span></a>
                          <div class="properties__offer">
                            <div class="properties__offer-column">
                              <div class="properties__offer-label">Commision</div>
                              <div class="properties__offer-value"><strong> $79</strong>
                              </div>
                            </div>
                            <div class="properties__offer-column">
                              <div class="properties__offer-value"><strong><?php echo $etape['distance'];?></strong><span class="properties__offer-period"> km</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end of block .properties__info-->
                    </div>
                    <!-- end of block .properties__item-->
                  </div>
                <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END site-->
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</div>
        <!-- END CENTER SECTION-->