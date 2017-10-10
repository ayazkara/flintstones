<?php
 include("header.php");
?>
<div class="content-body" style="background-image:url('pic/slider/main/slide-4.jpg');">
  <div class="container page">
    <!-- section portfolio item-->
    <section class="page-section mb-0 pt-0 pb-50" style="color:black;">
      <div class="bg-gray-3 p-30-40" style="opacity: 0.7;">
        <div  class="col-md-12">
            <div style="float:right;"><h3>Price:<span style="color:#ffc107;"><b> $139</b></span></h3></diV>
        </div>
      <div class="cws_divider"></div>
      <h4 class="mb-20 mt-30">Kapadokya Tur</h4>
      <div class="row">
        <div class="col-md-12">
          <p class="mb-15">Barcelo Eresin Topkapi offers a modern setting in Istanbul and features a swimming pool, free Wi-Fi and complimentary private parking on-site. It also has a sauna, a Jacuzzi and a Turkish steam bath. </p>
          <p class="mb-15">Guests can enjoy a range of massage treatments and beauty therapy at the on-site spa, U Spa. It offers child-minding services, a currency exchange and a reception that is available 24/7. It also has superb facilities for meetings and events. </p>
          <p class="mb-15">Rooms offer premium amenities, including mini bars, pillow menus and rain showers. All have a sofa bed, slippers and tea and coffee making facilities. </p>
          <p class="mb-15">The hotel's restaurant, Picasso, serves Turkish and international cuisine. In the evening, guests are able to relax in the cosy lounge bar.</p>
          <p>The area surrounding <ins class="alt-4">Barcelo Eresin</ins>  is popular for its shopping. The helpful staff at the tour desk are available to book tours and sightseeing trips in Istanbul.</p>
        </div>
      </div>
    </div>
    </section>
    <!-- ! section portfolio item-->


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
<?php
 include("footer.php");
?>
