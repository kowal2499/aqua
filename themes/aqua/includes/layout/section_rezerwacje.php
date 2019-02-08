<?php ?>
<div class="container">
  <h2><?= pll__($options['aqua_calendar_h1']); ?>
  <div class="lead"><?= pll__($options['aqua_calendar_lead']); ?></div>
  </h2>

<div class="info-box">
  <div class="row">
  
    <div class="col-md-4 text-center">
    
      <p>
        <?php echo stripslashes(htmlspecialchars_decode((pll__($options['aqua_calendar_desc1'])))); ?>
      </p>
      <hr>
      <p>
        <?php echo stripslashes(htmlspecialchars_decode((pll__($options['aqua_calendar_desc2'])))); ?>
      </p>
      <hr>

      <p>
       <?php echo stripslashes(htmlspecialchars_decode((pll__($options['aqua_calendar_desc3'])))); ?>
      </p>
      
    
      
    </div>
    <div class="col-md-8">
      <div id="erla-calendar"></div>
      <input type="hidden" id="calendar-dates" value="<?= $options['aqua_txt_calendar']; ?>">
      <input type="hidden" id="calendar-day-names" value="<?= pll__($options['aqua_calendar_days_names']); ?>">
      <input type="hidden" id="calendar-month-names" value="<?= pll__($options['aqua_calendar_months_names']); ?>">
    </div>

    <div class="sign">
        <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
      </div>

    </div><!-- info-box -->


  </div>
  
</div>