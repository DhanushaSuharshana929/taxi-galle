<!-- revolution slider -->
<section class="no-top no-bottom" aria-label="section-slider">
    <div class="fullwidthbanner-container">
        <div class="" id="revolution-slider-half">
            <ul>
                <?php
                foreach ($sliders as $slider) {
                    ?>
                    <li  data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center"/>
                        <div class="tp-caption slide-big-heading sft hidden-xs hidden-sm"
                             data-x="-115"
                             data-y="455"
                             data-speed="800"
                             data-start="400"
                             data-easing="easeInOutExpo"
                             data-endspeed="450">
                                 <?php echo strtoupper($slider['title']); ?>
                        </div>

                        <div class="tp-caption slide-sub-heading sft hidden-xs hidden-sm"
                             data-x="-115"
                             data-y="520"
                             data-speed="1000"
                             data-start="800"
                             data-easing="easeOutExpo"
                             data-endspeed="400">
                                 <?php echo $slider['description']; ?>
                        </div>

                    </li>


                    <?php
                }
                ?>

            </ul>
            <div class="tp-bannertimer hide"></div>
        </div>
    </div>
</section>

<div id="form" class="container1 form">
    <div class="col-sm-12">
        <div class="">
            <div id="form-contact1">
                <div class="form-top"><h3>ONLINE INQUIRY FORM</h3></div>
                <div class="row form-group">
                    <input type="text" name="txtName" id="txtName" class="form-control input-validater" value="" placeholder="Your Name">
                    <span id="spanName"></span>
                </div>
                <div class="row form-group">
                    <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater" value="" placeholder="Your Email">
                    <span id="spanEmail"></span>
                </div>
                <div class="row form-group">
                    <textarea name="txtMessage" id="txtMessage" class="form-control input-validater" placeholder="Your Message"></textarea>
                </div>
                <!--                <div class="row form-group">
                                    <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Security code >> ">
                                    <span id="capspan" ></span>
                                </div>-->
                <!--                <div class="row">
                                    <div class="col-md-4 cap-margin"> 
                                        <label></label>
                                        <span><?php include("./contact-home/captchacode-widget.php"); ?></span>
                                    </div>
                
                                </div>-->
            </div>
        </div>
    </div>
    <div class="row">
        <button type="submit" id="btnSubmit" class="btn-contact-home">Send Now</button>
    </div>

    <!--    <div class="input-margin">
            <div class="div-check" >
                <img src="contact-home/img/checking.gif" id="checking"/>
            </div> 
        </div>-->

    <div id="dismessage"></div>
</div>

<!-- revolution slider end -->