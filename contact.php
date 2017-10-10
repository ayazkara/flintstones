<?php
	include("header.php");
?>

	  <!-- content-->
    <div class="content-body">
      <div class="container page">
        <div class="row" >
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold"><?php echo $dil["iletisim"];?></span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon">
                <li> <a href="#">flintstone@example.commm<i class="flaticon-suntour-email"></i></a></li>
                <li> <a href="#">(000)-000-0000<i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="#">Göreme / Nevşehir<i class="flaticon-suntour-map"></i></a></li>
              </ul>
              <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3116.132656928749!2d34.829002315781416!3d38.64582997961027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDM4JzQ1LjAiTiAzNMKwNDknNTIuMyJF!5e0!3m2!1str!2str!4v1506420766989" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			 </div>
          </div>
        </div>
      </div>
      <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
        <div class="container">
          <h4 class="title-section mb-20"><span class="font-bold"><?php echo $dil["iletisim"];?></span></h4>
          <div class="widget-contact-form pb-0">
            <!-- contact-form-->
            <div class="email_server_responce"></div>
            <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="input-container">
                    <input type="text" name="name" value="" size="40" placeholder="<?php echo $dil["name"];?>" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="email" value="" size="40" placeholder="<?php echo $dil["email"];?>" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
              </div>
              <div class="input-container">
                <textarea name="message" cols="40" rows="4" placeholder="<?php echo $dil["aciklama"];?>" aria-invalid="false" aria-required="true"></textarea>
              </div>
              <input type="submit" value="<?php echo $dil["gonder"];?>"" class="cws-button alt">
            </form>
            <!-- /contact-form-->
          </div>
        </div>
      </div>
    </div>
    <!-- ! content-->
<?php
	include("footer.php");
?>
