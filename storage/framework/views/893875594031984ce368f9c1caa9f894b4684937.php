<style type="text/css">

/****************/
/**
<?php echo e($allsettings->site_button_color); ?>

<?php echo e($allsettings->site_secondary_color); ?>

<?php echo e($allsettings->site_primary_color); ?>

 */
/****************/
.text-color
{
color:<?php echo e($allsettings->site_primary_color); ?>;
}
.text-color:hover
{
color:#29368b;
}
.btn-primary
{
color:#fff;background-color:<?php echo e($allsettings->site_button_color); ?>;border-color:<?php echo e($allsettings->site_button_color); ?>;box-shadow:none;
}
.btn-primary:hover
{
color:#fff;background-color:#29368b;border-color:#29368b;
}
.btn-primary:focus,.btn-primary.focus
{
color:#fff;background-color:#29368b;border-color:#29368b;box-shadow:none,0 0 0 0 rgba(254,128,128,0.5);
}
.widget-list-link:hover,.jplist-selected
{
color:<?php echo e($allsettings->site_button_color); ?> !important;
}
.ui-widget-header
{
background:<?php echo e($allsettings->site_button_color); ?> !important;
}
.ui-widget-content
{
border:1px solid <?php echo e($allsettings->site_button_color); ?> !important;
}
.link-color
{
color:<?php echo e($allsettings->site_button_color); ?> !important;
}

.form-control:focus{color:#4b566b;background-color:#fff;border-color:<?php echo e($allsettings->site_button_color); ?> !important;outline:0;}
.bg-primary{background-color:<?php echo e($allsettings->site_button_color); ?> !important}a.bg-primary:hover,a.bg-primary:focus,button.bg-primary:hover,button.bg-primary:focus{background-color:#29368b !important}
.btn-primary:not(:disabled):not(.disabled):active,.btn-primary:not(:disabled):not(.disabled).active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#29368b;border-color:#fe2a2b}
.navbar-light .navbar-nav .show>.nav-link,.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .nav-link.active{color:<?php echo e($allsettings->site_button_color); ?>;}
.navbar-light .navbar-nav .nav-link:hover,.navbar-light .navbar-nav .nav-link:focus{color:<?php echo e($allsettings->site_button_color); ?>;}
a:hover{color:<?php echo e($allsettings->site_button_color); ?>;text-decoration:none}
.dropdown-item:hover,.dropdown-item:focus{color:<?php echo e($allsettings->site_button_color); ?>;text-decoration:none;background-color:rgba(0,0,0,0)}.dropdown-item.active,.dropdown-item:active{color:<?php echo e($allsettings->site_button_color); ?>;text-decoration:none;background-color:rgba(0,0,0,0)}
.text-primary{color:<?php echo e($allsettings->site_button_color); ?> !important}
.dropdown-menu li:hover>.dropdown-item{color:<?php echo e($allsettings->site_button_color); ?>}.dropdown-menu .active>.dropdown-item{color:<?php echo e($allsettings->site_button_color); ?>}
.navbar-light .nav-item:hover .nav-link:not(.disabled),.navbar-light .nav-item:hover .nav-link:not(.disabled)>i{color:<?php echo e($allsettings->site_button_color); ?>;}.navbar-light .nav-item.active .nav-link:not(.disabled)>i,.navbar-light .nav-item.show .nav-link:not(.disabled)>i,.navbar-light .nav-item.dropdown .nav-link:focus:not(.disabled)>i{color:<?php echo e($allsettings->site_button_color); ?>;}
.bg-dark{background-color:#333333 !important}a.bg-dark:hover,a.bg-dark:focus,button.bg-dark:hover,button.bg-dark:focus{background-color:#08192b !important}
.topbar-dark .topbar-text>i,.topbar-dark .topbar-link>i{color:<?php echo e($allsettings->site_button_color); ?>}
.navbar-tool .navbar-tool-label{position:absolute;top:-.3125rem;right:-.3125rem;width:1.25rem;height:1.25rem;border-radius:50%;background-color:<?php echo e($allsettings->site_button_color); ?>;color:#fff;font-size:.75rem;font-weight:500;text-align:center;line-height:1.25rem}
.btn-outline-accent{color:#ffffff; background:<?php echo e($allsettings->site_button_color); ?>}
.btn-outline-accent:hover{color:#fff;background-color:<?php echo e($allsettings->site_primary_color); ?>;border-color:<?php echo e($allsettings->site_primary_color); ?>}
.product-title>a:hover{color:<?php echo e($allsettings->site_button_color); ?>}
.text-accent{color:#08192b !important}
.bg-faded-accent{background-color:rgba(78,84,200,0.1) !important}
.price-old{color:#999999;font-size:14px;}
.turn-page .turn-ul li:hover, .turn-page .turn-ul li:active { background: <?php echo e($allsettings->site_button_color); ?> !important; color: #fff;}
.turn-page .turn-ul li.on { background: <?php echo e($allsettings->site_button_color); ?> !important; color: #fff;}
.btn-wishlist:hover{color:<?php echo e($allsettings->site_button_color); ?>}
/* .flash-sale .price-badge { background:#DE2F2F; color:#FFFFFF; } */
.price-badge { background:#DE2F2F; color:#FFFFFF; }
.widget-product-title:hover>a{color:<?php echo e($allsettings->site_button_color); ?>}
.blog-entry-title>a:hover{color:<?php echo e($allsettings->site_button_color); ?>}
.breadcrumb-item>a:hover{color:<?php echo e($allsettings->site_button_color); ?>;text-decoration:none}
.homeblog img {height:240px;object-fit:cover;width:100%;}
.bg-darker{background-color:#333333 !important}
a{color:<?php echo e($allsettings->site_button_color); ?>;text-decoration:none;background-color:transparent}
.display-404{color:#fff;font-size:10rem;text-shadow:-0.0625rem 0 <?php echo e($allsettings->site_button_color); ?>,0 0.0625rem <?php echo e($allsettings->site_button_color); ?>,0.0625rem 0 <?php echo e($allsettings->site_button_color); ?>,0 -0.0625rem <?php echo e($allsettings->site_button_color); ?>}
.red{width: 100%;margin-top: .25rem;font-size: 80%;color: #f34770;}
.countdown-timer ul li{list-style:none;display:inline-block;background:#08192b;color:#FFFFFF;text-align:center;min-width:70px;opacity:0.6;}
.range-price { border: 0; color: <?php echo e($allsettings->site_button_color); ?> !important; font-weight: bold; font-size: 16px; margin-bottom: 14px;}
.lato{}.jplist-panel .jplist-pagination{cursor:pointer;float:right;line-height:30px}
.jplist-panel .jplist-pagination button{ list-style: none;  float: left;  width: 38px;  height: 36px; line-height: 36px; text-align: center; border: 1px solid #54667a; margin-left: -1px; cursor: pointer; background: #fff; }
.customlable {float: right !important;}
.jplist-label {
    height: 36px !important;
    line-height: 38px !important;
    border: 1px solid #54667a !important;
    margin-left: -1px;
    cursor: pointer !important;
    background: #fff !important;
    border-radius: 0px !important;
}
/* 
	.jplist-label { 
    cursor: pointer !important;
	  line-height:55px;
    border-radius:0px !important;
	} */
.jplist-panel button { border-radius:0px !important; box-shadow:0px !important; text-shadow:none !important; margin:10px 5px 0 0 !important; }	
.jplist-panel .jplist-pagination .jplist-current{color: #fff; background:<?php echo e($allsettings->site_button_color); ?> !important;}
.jplist-panel .jplist-pagination .jplist-pagingprev,.jplist-panel .jplist-pagination .jplist-pagingmid,.jplist-panel .jplist-pagination .jplist-pagingnext{float:left}.jplist-panel .jplist-pagination .jplist-pagingprev button,.jplist-panel .jplist-pagination .jplist-pagingnext button{font-size:20px;}.jplist-one-page{display:none}.jplist-empty{display:none}

.btn-outline-accent:focus, .btn-outline-accent.focus
{
background-color:<?php echo e($allsettings->site_button_color); ?> !important;
}
.nav-tabs .nav-link.active,.nav-tabs .nav-item.show .nav-link{color:<?php echo e($allsettings->site_button_color); ?>;background-color:rgba(0,0,0,0);border-color:<?php echo e($allsettings->site_button_color); ?>}
.nav-tabs .nav-link.active::before{background-color:<?php echo e($allsettings->site_button_color); ?>}
.nav-tabs .nav-link:hover{color:<?php echo e($allsettings->site_button_color); ?>}
.custom-control-input:checked ~ .custom-control-label::before{color:#fff;border-color:<?php echo e($allsettings->site_button_color); ?>;background-color:<?php echo e($allsettings->site_button_color); ?>;box-shadow:none}
.btn-primary.btn-shadow{}
.review_tag {
  background: <?php echo e($allsettings->site_button_color); ?>;
  -webkit-border-radius: 200px;
          border-radius: 200px;
  line-height: 30px;
  padding: 0 12px;
  color: #fff;
  font-weight: 500;
  margin-left: 10px;
}
.custom_radio
{
color: #fff;
border-color: <?php echo e($allsettings->site_button_color); ?>;
background-color: <?php echo e($allsettings->site_button_color); ?>;
box-shadow: none;
}
.nav-link-style:hover{color:<?php echo e($allsettings->site_button_color); ?>;}
.cz-range-slider-ui .noUi-connect{background-color:<?php echo e($allsettings->site_button_color); ?> !important;}


.navbar-nav li.nav-item.dropdown a.nav-link.dropdown-toggle:hover{
    color:<?php echo e($allsettings->site_button_color); ?>;
}
.navbar-nav li.nav-item.dropdown a.nav-link:hover{
    color:<?php echo e($allsettings->site_button_color); ?>;
}
.dropdown-item-color:hover{
    color:<?php echo e($allsettings->site_button_color); ?>;
}
.topmenu-item-color:hover{
    color:<?php echo e($allsettings->site_button_color); ?> !important;
}

span.sales-color{
    background-color:#e4e4e4 !important;
    -webkit-border-radius: 60px;
    border-radius: 60px;
}
.item-tags-color {
    background-color:#e4e4e4 !important;
    -webkit-border-radius: 5px;
    border-radius: 5px;
   
}

.info span.text-right {
    padding-right:10px;
}
/*----------------Add New------------------- */
.jplist-panel {
    display: block !important;
}

.sorting {
  padding: 30px;
  margin-top:20px;
}

.sorting ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.sorting ul li {
  margin: 0 10px;
  list-style:none;
  text-align: -webkit-match-parent;
}

.sorting ul li a {
    font-size: 15px;
    -webkit-border-radius: 100px;
    border-radius: 100px;
    font-weight: 500;
    line-height: 34px;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
    padding: 0 21px;
    background: #fff;
    color: #4b566b;
    display: inline-block;
}

.sorting ul li a:hover {
    background: <?php echo e($allsettings->site_button_color); ?>;
    color: #fff;
    border-radius:25px;
}



/***************************************
	START COUNTER UP AREA CSS
*****************************************/

/* Background Image */
.bgimage {
  position: relative;
}




.content_above {
  position: relative;
  z-index: 2;
}

.bg_image_holder {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  -webkit-background-size: cover !important;
          background-size: cover !important;
  background-position: 50% 50% !important;
  z-index: 0;
  -o-transition: opacity .3s linear;
  transition: opacity .3s linear;
  -webkit-transition: opacity .3s linear;
  opacity: 0;
}

.bgimage:before {
  z-index: 1;
}


.bg_image_holder img {
  display: none;
}


.mcolor1 {
  color: #77de51;
}

.mcolor2 {
  color: #feb71d;
}

.mcolor3 {
  color: #58c9e9;
}

.mcolor4 {
  color: #ff6a6d;
}

.pcolorbg {
  background: #0674ec;
}

.scolorbg {
  background: #7347c1;
}

.mcolorbg1 {
  background: #77de51;
}

.mcolorbg2 {
  background: #feb71d;
}

.mcolorbg3 {
  background: #58c9e9;
}

.mcolorbg4 {
  background: #ff6a6d;
}


.counter-up {
    overflow: hidden;
    padding: 96px 0;
}

.counter-up-area {
  position: relative;
}

.counter-up-area:before {
  position: absolute;
  content: '';
  height: 100%;
  width: 100%;
  background: rgba(13, 15, 19, 0.8);
}

.counter-up-area.counter-up--area2 {
  background-image: none;
}

.counter-up-area.counter-up--area2:before {
  display: none;
}

.counter-up-area.counter-up--area2 .counter-up {
  padding: 60px 0px;
}

.counter-up-area.counter-up--area2 .counter-up .counter p {
  color: #555;
}

span.counter {
  display: block;
}


.counter-up .counter {
  width: 25%;
  float: left;
  text-align: center;
}

.counter-up .counter span.lnr {
  display: block;
  font-size: 48px;
}

.counter-up .counter .count {
  font-size: 36px;
  margin-top: 35px;
  display: inline-block;
}

.counter-up .counter p {
  color: #ffffff;
  margin-top: 7px;
  font-size: 18px;
  margin-bottom: 0;
}

/***************************************
	END COUNTER UP AREA CSS
*****************************************/

/*************************************
      Start  Buyer Reviews 
************************************ */
.section--padding {
    padding-top: 60px;
    padding-bottom: 60px;
}

.section-title {
    text-align: center;
    padding-bottom: 53px;
}

.section-title h1 {
    font-weight: 400;
    margin-bottom: 24px;
}

.section-title h1 .highlighted {
    color: #16C8B2 !important;
}

.section-title p {
    padding: 0 230px;
    line-height: 30px;
    margin-bottom: 0;
}


.testimonial-slider {
    position: relative;
}

.testimonial-slider .slick-arrow {
    position: absolute;
    cursor: pointer;
    background: #fff;
    line-height: 50px;
    width: 50px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0 4px 15px rgba(67, 67, 67, 0.15);
    box-shadow: 0 4px 15px rgba(67, 67, 67, 0.15);
    text-align: center;
    color: #7347c1;
    top: 50%;
    z-index: 9;
}


.testimonial-slider .slick-arrow.lnr-chevron-left {
    left: 0;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.testimonial-slider .slick-arrow.lnr-chevron-right {
  right: 0;
  -webkit-transform: translate(50%, -50%);
      -ms-transform: translate(50%, -50%);
          transform: translate(50%, -50%);
}


.slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.testimonial .testimonial__about {
    margin-bottom: 20px;
    position: relative;
    z-index: 2;
}

.testimonial .testimonial__about .avatar {
    height: 80px;
    width: 80px;
    display: inline-block;
}
.testimonial .testimonial__about .name-designation {
    padding-left: 20px;
    display: inline-block;
}
.testimonial .testimonial__about .name-designation .name {
    font-size: 20px;
    margin-bottom: 4px;
}
.testimonial .testimonial__about .name-designation .name a {
    color: #000;
}
.testimonial .testimonial__about .name-designation .desig {
    color: #555;
    font-size: 15px;
}
.testimonial .testimonial__about .quote-icon {
    position: absolute;
    font-size: 60px;
    color: #FFC000;
    right: 0;
    z-index: -1;
}
.slick-initialized .slick-slide {
    display: block;
}
.testimonial {
    padding: 50px 40px;
    border: 1px solid #D9D9D9;
    border-radius: 4px;
    background: #fff;
    margin: 30px 15px;
}

.v_middle, .user_area .user_single .user__short_desc .user_avatar, .user_area .user_single .user__short_desc .user_info, .statement_info_card .icon, .statement_info_card .info {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    float: none;
}




/*************************************
      END  Buyer Reviews 
************************************ */


/*************************************
      START Why Choose Wrappixels? 
************************************ */
.feature2 {
    -webkit-box-shadow: 0 2px 50px rgba(0, 0, 0, 0.08);
    box-shadow: 0 2px 50px rgba(0, 0, 0, 0.08);
    position: relative;
    margin-bottom: 30px;
    background: #fff;
    height: 200px;
    width: 100%;
    display: table;
}
.feature2 .feature2__content {
    text-align: center;
    padding: 30px 0px 30px 0px;
}
.feature2 .feature2__content span.fa {
    font-size: 50px;
}
.theme-color {
    color: #16C8B2 !important;
}
.feature2 .feature2__content h3 {
    padding: 38px 0 25px;
    font-size: 21px;
}

.widget-list-item-new {
    margin-bottom: -0.5rem;
}

/*************************************
      END Why Choose Wrappixels? 
************************************ */


.footer-big {
    background: #444444 !important;
}



.footer-big p, .footer-big ul li, .footer-big .widget ul li a {
    color: #ababab;
}

.footer-big .widget ul li a:hover{
    color: <?php echo e($allsettings->site_button_color); ?>;
}


.footer-menu ul li a {
    font-size: 15px;
    line-height: 0;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
}



.top-menu{
    padding-left: 20px;
    padding-right: 20px;
}

.top-menu a {
    color: #999;
    text-decoration: none;
}

.top-menu a:hover {
    color: #fff;
    text-decoration: none;
}

.go_top {
  line-height: 40px;
  cursor: pointer;
  width: 40px;
  background: <?php echo e($allsettings->site_button_color); ?> !important;
  color: #fff;
  position: fixed;
  -webkit-box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
          box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
  -webkit-border-radius: 50%;
          border-radius: 50%;
  right: 20px;
  z-index: 111;
  bottom: 20px;
}

.go_top span {
    display: inline-block;
}

.product-card-actions a {
  /*color: <?php echo e($allsettings->site_button_color); ?> !important;*/
  /*border-radius: 100px;*/
}

.filter-bar .filter--select {
    width: 217px;
    margin: 0 23.93px;
}

.filter-bar .filter__option {
    display: inline-block;
    vertical-align: middle;
    padding: 29px 0;
}

.select-wrap {
    position: relative;
}
.select-wrap select {
    height: 45px;
    border: 1px solid #ececec;
    padding: 0 40px 0 020px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
}

.select-wrap span {
    font-size: 10px;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 18px;
}



.filter-bar .filter__option {
    display: inline-block;
    vertical-align: middle;
    padding: 29px 0;
}

.filter__option.filter--layout {
    padding: 10px 20px 11px;
    border: 1px solid #ececec;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.filter__option.filter--layout .svg-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.filter__option.filter--layout .svg-icon .svg {
    fill: #747b86;
}

svg {
    max-width: 100%;
}

.products {
    background: #eff1f5;
}
.section--padding2 {
    padding: 70px 0 120px;
}


.product--sidebar .sidebar-card, .support--sidebar .sidebar-card, .faq--sidebar .sidebar-card, .affliate_rule_module .sidebar-card, .sidebar--blog .sidebar-card, .product--sidebar .item-preview, .support--sidebar .item-preview, .faq--sidebar .item-preview, .affliate_rule_module .item-preview, .sidebar--blog .item-preview {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}

.product--sidebar .sidebar-card .card-title, .support--sidebar .sidebar-card .card-title, .faq--sidebar .sidebar-card .card-title, .affliate_rule_module .sidebar-card .card-title, .sidebar--blog .sidebar-card .card-title, .product--sidebar .item-preview .card-title, .support--sidebar .item-preview .card-title, .faq--sidebar .item-preview .card-title, .affliate_rule_module .item-preview .card-title, .sidebar--blog .item-preview .card-title {
    padding: 30px 30px 28px;
    display: block;
    margin-bottom: 0;
}

.product--sidebar .card--category a, .support--sidebar .card--category a, .faq--sidebar .card--category a, .affliate_rule_module .card--category a, .support--sidebar .card--forum_categories a, .faq--sidebar .card--forum_categories a, .affliate_rule_module .card--forum_categories a, .sidebar--blog .card--forum_categories a, .sidebar--blog .card--category a {
    display: block;
}
.sidebar-card .card-title, .item-preview .card-title {
    padding: 30px;
    border-bottom: 1px solid #ececec;
}

.product--sidebar .sidebar-card .collapsible-content, .support--sidebar .sidebar-card .collapsible-content, .faq--sidebar .sidebar-card .collapsible-content, .affliate_rule_module .sidebar-card .collapsible-content, .sidebar--blog .sidebar-card .collapsible-content, .product--sidebar .item-preview .collapsible-content, .support--sidebar .item-preview .collapsible-content, .faq--sidebar .item-preview .collapsible-content, .affliate_rule_module .item-preview .collapsible-content, .sidebar--blog .item-preview .collapsible-content {
    padding: 0 30px;
}

.show {
    display: block;
}
.product--sidebar .sidebar-card .card-content, .support--sidebar .sidebar-card .card-content, .faq--sidebar .sidebar-card .card-content, .affliate_rule_module .sidebar-card .card-content, .sidebar--blog .sidebar-card .card-content, .product--sidebar .item-preview .card-content, .support--sidebar .item-preview .card-content, .faq--sidebar .item-preview .card-content, .affliate_rule_module .item-preview .card-content, .sidebar--blog .item-preview .card-content {
    padding: 20px 0;
}
.product--sidebar .sidebar-card .card-title span, .support--sidebar .sidebar-card .card-title span, .faq--sidebar .sidebar-card .card-title span, .affliate_rule_module .sidebar-card .card-title span, .sidebar--blog .sidebar-card .card-title span, .product--sidebar .item-preview .card-title span, .support--sidebar .item-preview .card-title span, .faq--sidebar .item-preview .card-title span, .affliate_rule_module .item-preview .card-title span, .sidebar--blog .item-preview .card-title span {
    float: right;
    font-size: 12px;
    line-height: 20px;
    color: #555;
}

.product--sidebar .card--category ul li a, .support--sidebar .card--category ul li a, .faq--sidebar .card--category ul li a, .affliate_rule_module .card--category ul li a, .support--sidebar .card--forum_categories ul li a, .faq--sidebar .card--forum_categories ul li a, .affliate_rule_module .card--forum_categories ul li a, .sidebar--blog .card--forum_categories ul li a, .sidebar--blog .card--category ul li a {
    display: block;
    line-height: 36px;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
    color: #555;
}
.product--sidebar .card--category ul li a span.lnr, .support--sidebar .card--category ul li a span.lnr, .faq--sidebar .card--category ul li a span.lnr, .affliate_rule_module .card--category ul li a span.lnr, .support--sidebar .card--forum_categories ul li a span.lnr, .faq--sidebar .card--forum_categories ul li a span.lnr, .affliate_rule_module .card--forum_categories ul li a span.lnr, .sidebar--blog .card--forum_categories ul li a span.lnr, .sidebar--blog .card--category ul li a span.lnr {
    font-size: 10px;
    margin-right: 10px;
}

.display-none {
    display: none;
}

.box.jplist-no-results.text-shadow.align-center {
    text-align: center;
    margin-top: 50px;
}


.breadcrumb-area {
    padding-top: 52px !important;
    padding-bottom: 50px;
}


.product {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}

.product--list {
    overflow: hidden;
    height: 225px;
}

.product--list-small {
    height: 209px;
}


.product .product__thumbnail {
    position: relative;
}

.product--list .product__thumbnail, .product--list .product-desc, .product--list .product-meta, .product--list .product-purchase {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    border-right: 1px solid #ececec;
}

.product--list .product__thumbnail {
    width: 293px;
    float: left;
}
.product--list-small .product__thumbnail {
    width: 230px;
}


.listitem-thumbnail {
    width: 100%;
    height: 210px;
    object-fit: cover;
}
.product .product__thumbnail img {
    -webkit-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
    width: 100%;
}
.product--list .product__thumbnail img {
    width: 100%;
    -webkit-border-radius: 4px 0 0 4px;
    border-radius: 4px 0 0 4px;
}

.product .prod_btn {
    position: absolute;
    top: calc(50% + 40px);
    opacity: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 99;
    width: 100%;
    text-align: center;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
}


.transparent {
    background: transparent;
}

.btn--round {
    -webkit-border-radius: 100px;
    border-radius: 100px;
}

.product .prod_btn a {
    display: inline-block;
    color: #fff;
    border: 1px solid #fff;
    font-weight: 500;
    padding: 0 30px;
}
.product--list-small .prod_btn a {
    line-height: 35px;
    margin-left: 0;
}
.product--list .product__thumbnail .prod_btn .btn--sm {
    min-width: 140px;
}

.product--list .product__details {
    overflow: hidden;
    padding: 24px 0;
}



.product--list .product__thumbnail, .product--list .product-desc, .product--list .product-meta, .product--list .product-purchase {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    border-right: 1px solid #ececec;
}




.product--list .product__thumbnail {
    width: 293px;
    float: left;
}
.product--list-small .product__thumbnail {
    width: 230px;
}

.product .product__thumbnail:before {
    position: absolute;
    content: "";
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
    height: 100%;
    opacity: 0;
    z-index: 2;
    -webkit-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
    width: 100%;
    top: 0;
    background-color: #BF338E !important;
    background: #BF338E !important;
    left: 0;
}



.product--list .product-desc {
    width: 353px;
}
.product--list .product__details .product-desc, .product--list .product__details .product-meta {
    padding: 0 30px;
}
.product--list-small .product__details .product-desc, .product--list-small .product__details .product-meta {
    padding: 0 20px;
}

.product--list-small .product__details .product-desc {
    width: 300px;
}
.product-desc .product_title {
    margin-bottom: 15px;
    display: inline-block;
}
.product-desc .product_title h4 {
    font-size: 20px;
    text-transform: capitalize;
    font-weight: 500;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
}
.product-desc p {
    margin: 0;
}

.product-desc ul.titlebtm {
    padding-bottom: 23px;
}
.product--list .product-desc .titlebtm {
    padding-bottom: 0;
    padding-top: 24px;
}
.product--list-small .product__details .product-desc .titlebtm {
    padding-top: 18px;
}
.product_cat {
    text-transform: capitalize;
}
.product-desc ul.titlebtm > li {
    display: inline-block;
    margin-right: 16px;
}
.product-desc ul.titlebtm > li.product_cat {
    margin-right: 0;
}


.product-desc ul.titlebtm > li a {
    color: #000000;
    font-size: 15px;
}
.product-desc ul.titlebtm > li a, .product-desc ul.titlebtm > li p {
    font-size: 15px;
}
.product-desc ul li.product_cat a {
    color: #7347c1;
}
.product-desc ul li.product_cat a span {
    margin-right: 5px;
}



.product-meta {
    width: 310px;
}
.product--list .product__thumbnail, .product--list .product-desc, .product--list .product-meta, .product--list .product-purchase {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    border-right: 1px solid #ececec;
}

.product--list-small .product__details .product-meta {
    width: 180px;
}
.product--list .product__details .product-desc, .product--list .product__details .product-meta {
    padding: 0 30px;
}
.product--list-small .product__details .product-desc, .product--list-small .product__details .product-meta {
    padding: 0 20px;
}
.product-meta .author {
    margin-bottom: 25px;
}
.product-meta .author .auth-img {
    display: inline-block;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    height: 28px;
    width: 28px;
}

.author p {
    font-size: 12px;
}
.product-meta .author p {
    display: inline-block;
    margin: 0;
}
.product-meta .author p a {
    color: #000;
}

.product-meta .love-comments p {
    display: inline-block;
}

.product-meta .love-comments p span.lnr {
    color: #7347c1;
}
.rating {
    display: inline-block;
    vertical-align: middle;
}
.rating ul {
    float: left;
    padding-bottom: 0;
}
.rating ul li {
    float: left;
    margin-right: 3px;
}
.rating ul li span.fa-star-o {
    color: #7e7e7e;
}



.product-purchase {
    border-top: 1px solid #ececec;
    padding: 15px 30px;
    overflow: hidden;
}
.product--list .product__thumbnail, .product--list .product-desc, .product--list .product-meta, .product--list .product-purchase {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    border-right: 1px solid #ececec;
}
.product--list .product-purchase {
    border: 0;
    width: 155px;
    text-align: center;
}
.product--list-small .product__details .product-purchase {
    width: 150px;
    padding: 0;
}
.product-purchase .price_love {
    display: inline-block;
    vertical-align: middle;
}
.product--list .product-purchase .price_love {
    float: none;
    margin-right: 0;
    padding-bottom: 25px;
}
.product--list .product-purchase .price_love span {
    margin: 0;
}
.product--list .product-purchase .sell {
    float: none;
    display: block;
}

.product-purchase p {
    margin: 0;
    font-size: 15px;
    display: inline;
    color: #555;
}
.product-purchase .sell p span {
    color: #BF338E !important;
    font-size: 15px;
    margin-right: 4px;
}
.product-purchase .sell p span.lnr {
    margin-right: 7px;
}

.rating ul li span.fa-star, .rating ul li span.fa-star-half-o {
    color: #ffc000;
}

li {
    list-style: none;
}


.term_condition_area {
    background: #eff1f5;
    padding: 60px 0 120px;
}

.user_area {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
}
.user_area > ul {
    margin-bottom: 30px;
}
.user_area .user_single {
    padding: 30px 0;
}


.own-user {
    min-width: 33% !important;
}
.user_area .user_single .user__short_desc, .user_area .user_single .user__meta, .user_area .user_single .user__status {
    display: inline-block;
    vertical-align: middle;
    margin-right: 0px;
    padding: 0 28px;
    border-right: 1px solid #ececec;
}
.user_area .user_single .user__short_desc, .user_area .user_single .user__meta {
    min-height: 100px;
}
.user_area .user_single .user__short_desc {
    max-width: 350px;
}

.v_middle, .user_area .user_single .user__short_desc .user_avatar, .user_area .user_single .user__short_desc .user_info, .statement_info_card .icon, .statement_info_card .info {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    float: none;
}

.user_area .user_single .user__short_desc .user_avatar, .user_area .user_single .user__short_desc .user_info {
    display: inline-block;
}

img {
    max-width: 100%;
}
.rounded, .credit_modules .modules__content .amounts ul li p, .shortcode_modules .modules__content .amounts ul li p, .upload_modules .modules__content .amounts ul li p, .withdraw_module .modules__content .amounts ul li p {
    -webkit-border-radius: 200px !important;
    border-radius: 200px !important;
}


.v_middle, .user_area .user_single .user__short_desc .user_avatar, .user_area .user_single .user__short_desc .user_info, .statement_info_card .icon, .statement_info_card .info {
    display: inline-block;
    vertical-align: middle;
    margin-right: -3px;
    float: none;
}
.user_area .user_single .user__short_desc .user_avatar, .user_area .user_single .user__short_desc .user_info {
    display: inline-block;
}
.user_area .user_single .user__short_desc .user_info {
    width: calc(100% - 75px);
    padding-left: 15px;
}
.user_area .user_single .user__short_desc .user_info a {
    font-size: 18px;
    line-height: 26px;
    color: #000;
    font-weight: 500;
    display: inline-block;
    padding-bottom: 10px;
}


.social, .single_blog_content .share_tags .share .social_share {
    display: inline-block;
}
ul {
    padding: 0;
    margin: 0;
}
.social ul li, .single_blog_content .share_tags .share .social_share ul li {
    display: inline-block;
    margin-bottom: 10px;
}

.icon-badges {
    width: 32px;
    height: 32px;
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
}
.other-badges {
    width: 35px;
    height: 35px;
    border-radius: 50px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
}





.own-next {
    min-width: 33% !important;
}
.user_area .user_single .user__short_desc, .user_area .user_single .user__meta, .user_area .user_single .user__status {
    display: inline-block;
    vertical-align: middle;
    margin-right: 0px;
    padding: 0 28px;
    border-right: 1px solid #ececec;
}
.user_area .user_single .user__short_desc, .user_area .user_single .user__meta {
    min-height: 100px;
}
.user_area .user_single .user__meta {
    max-width: 195px;
    min-width: 195px;
}



.user_area .user_single .user__short_desc p, .user_area .user_single .user__meta p, .user_area .user_single .user__status p {
    margin: 0;
}
.user_area .user_single .user__meta p {
    line-height: 28px;
}


.last-next {
    text-align: center;
    min-width: 33% !important;
}
.user_area .user_single .user__short_desc, .user_area .user_single .user__meta, .user_area .user_single .user__status {
    display: inline-block;
    vertical-align: middle;
    margin-right: 0px;
    padding: 0 28px;
    border-right: 1px solid #ececec;
    
}
.user_area .user_single .user__status {
    border-right: 0;
}

.border_bottom {
  border-bottom: 1px solid #ececec;
}



/*********blog******* */
.single_blog {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
}
.blog--default {
    margin-bottom: 30px;
}
.single_blog figure img {
    -webkit-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
    width: 100%;
}
.single_blog .blog__content {
    padding-left: 30px;
    padding-right: 30px;
}
.blog--default .blog__content {
    border-bottom: 1px solid #ececec;
    padding-bottom: 10px;
}
.blog--default .blog__title {
    padding-top: 35px;
    display: inline-block;
    padding-bottom: 3px;
}
.single_blog .blog__title h4 {
    font-weight: 500;
    color: #000;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}
.blog--default .blog__title h4 {
    font-size: 30px;
    line-height: 100%;
}
.blog--default .blog__content .blog__meta .date_time, .blog--default .blog__content .blog__meta .comment_view, .blog--default .blog__content .blog__meta .author {
    display: inline-block;
}
.blog--default .blog__content .blog__meta .date_time span {
    margin-right: 6px;
}
.blog--default .blog__content .blog__meta .date_time p, .blog--default .blog__content .blog__meta .comment_view p, .blog--default .blog__content .blog__meta .author p {
    display: inline-block;
    margin-right: 25px;
    color: #898f96;
}
.blog--default .blog__content .blog__meta .date_time p, .blog--default .blog__content .blog__meta .comment_view p, .blog--default .blog__content .blog__meta .author p {
    display: inline-block;
    margin-right: 25px;
    color: #898f96;
}
.blog--default .blog__content .blog__meta .date_time p span, .blog--default .blog__content .blog__meta .comment_view p span, .blog--default .blog__content .blog__meta .author p span {
    margin-right: 6px;
}
.blog--default .blog__content .blog__meta .date_time p, .blog--default .blog__content .blog__meta .comment_view p, .blog--default .blog__content .blog__meta .author p {
    display: inline-block;
    margin-right: 25px;
    color: #898f96;
}

.blog--default .btn_text {
    padding: 25px 30px 30px;
}

.btn--md, .btn-md {
    line-height: 45px;
    padding: 0 22px;
    min-width: 150px;
}

/* 
.btn {
    background: #0674ec;
    padding: 0;
    margin: 0;
    text-transform: capitalize;
    font-size: 15px;
    font-weight: 500;
    color: #fff;
    display: inline-block;
    -webkit-box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
    border: none;
    position: relative;
} */

/* .theme-button {
    background: #BF338E !important;
} */

.blog--default {
    margin-bottom: 30px;
}
.single_blog {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
}
.blog--default .btn_text .btn {
    margin-top: 10px;
}
.single_blog figure img {
    -webkit-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
    width: 100%;
}

.blog_area {
    background: #eff1f5;
}


.sidebar-card, .item-preview {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}
.product--sidebar .sidebar-card, .support--sidebar .sidebar-card, .faq--sidebar .sidebar-card, .affliate_rule_module .sidebar-card, .sidebar--blog .sidebar-card, .product--sidebar .item-preview, .support--sidebar .item-preview, .faq--sidebar .item-preview, .affliate_rule_module .item-preview, .sidebar--blog .item-preview {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}

.card-title {
    margin-bottom: .75rem;
}
.sidebar-card .card-title, .item-preview .card-title {
    padding: 30px;
    border-bottom: 1px solid #ececec;
}
.product--sidebar .sidebar-card .card-title, .support--sidebar .sidebar-card .card-title, .faq--sidebar .sidebar-card .card-title, .affliate_rule_module .sidebar-card .card-title, .sidebar--blog .sidebar-card .card-title, .product--sidebar .item-preview .card-title, .support--sidebar .item-preview .card-title, .faq--sidebar .item-preview .card-title, .affliate_rule_module .item-preview .card-title, .sidebar--blog .item-preview .card-title {
    padding: 30px 30px 28px;
    display: block;
    margin-bottom: 0;
}
.sidebar--blog .card--blog_sidebar .card-title h4 {
    font-size: 20px;
}
.product--sidebar .sidebar-card .collapsible-content, .support--sidebar .sidebar-card .collapsible-content, .faq--sidebar .sidebar-card .collapsible-content, .affliate_rule_module .sidebar-card .collapsible-content, .sidebar--blog .sidebar-card .collapsible-content, .product--sidebar .item-preview .collapsible-content, .support--sidebar .item-preview .collapsible-content, .faq--sidebar .item-preview .collapsible-content, .affliate_rule_module .item-preview .collapsible-content, .sidebar--blog .item-preview .collapsible-content {
    padding: 0 30px;
}
.product--sidebar .sidebar-card .card-content, .support--sidebar .sidebar-card .card-content, .faq--sidebar .sidebar-card .card-content, .affliate_rule_module .sidebar-card .card-content, .sidebar--blog .sidebar-card .card-content, .product--sidebar .item-preview .card-content, .support--sidebar .item-preview .card-content, .faq--sidebar .item-preview .card-content, .affliate_rule_module .item-preview .card-content, .sidebar--blog .item-preview .card-content {
    padding: 20px 0;
}
.product--sidebar .card--category a, .support--sidebar .card--category a, .faq--sidebar .card--category a, .affliate_rule_module .card--category a, .support--sidebar .card--forum_categories a, .faq--sidebar .card--forum_categories a, .affliate_rule_module .card--forum_categories a, .sidebar--blog .card--forum_categories a, .sidebar--blog .card--category a {
    display: block;
}
.product--sidebar .card--category ul li a, .support--sidebar .card--category ul li a, .faq--sidebar .card--category ul li a, .affliate_rule_module .card--category ul li a, .support--sidebar .card--forum_categories ul li a, .faq--sidebar .card--forum_categories ul li a, .affliate_rule_module .card--forum_categories ul li a, .sidebar--blog .card--forum_categories ul li a, .sidebar--blog .card--category ul li a {
    display: block;
    line-height: 36px;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
    color: #555;
}

.sidebar-card, .item-preview {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}
.product--sidebar .sidebar-card, .support--sidebar .sidebar-card, .faq--sidebar .sidebar-card, .affliate_rule_module .sidebar-card, .sidebar--blog .sidebar-card, .product--sidebar .item-preview, .support--sidebar .item-preview, .faq--sidebar .item-preview, .affliate_rule_module .item-preview, .sidebar--blog .item-preview {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}


.sidebar-card .card-title, .item-preview .card-title {
    padding: 30px;
    border-bottom: 1px solid #ececec;
}
preview .card-title, .faq--sidebar .item-preview .card-title, .affliate_rule_module .item-preview .card-title, .sidebar--blog .item-preview .card-title {
    padding: 30px 30px 28px;
    display: block;
    margin-bottom: 0;
}
.sidebar--blog .sidebar--post .card-title ul {
    overflow: hidden;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}


.sidebar--blog .sidebar--post .card-title ul li a.active {
    color: #BF338E !important;
}

.sidebar--blog .sidebar--post .card-title ul li a {
    font-size: 20px;
    color: #000;
}

.product--sidebar .card--category ul li a, .support--sidebar .card--category ul li a, .faq--sidebar .card--category ul li a, .affliate_rule_module .card--category ul li a, .support--sidebar .card--forum_categories ul li a, .faq--sidebar .card--forum_categories ul li a, .affliate_rule_module .card--forum_categories ul li a, .sidebar--blog .card--forum_categories ul li a, .sidebar--blog .card--category ul li a {
    display: block;
    line-height: 36px;
    -webkit-transition: 0.3s ease;
    -o-transition: 0.3s ease;
    transition: 0.3s ease;
    color: #555;
}
.product--sidebar .card--category ul li a .item-count, .support--sidebar .card--category ul li a .item-count, .faq--sidebar .card--category ul li a .item-count, .affliate_rule_module .card--category ul li a .item-count, .support--sidebar .card--forum_categories ul li a .item-count, .faq--sidebar .card--forum_categories ul li a .item-count, .affliate_rule_module .card--forum_categories ul li a .item-count, .sidebar--blog .card--forum_categories ul li a .item-count, .sidebar--blog .card--category ul li a .item-count {
    float: right;
}

.sidebar--blog .card--blog_sidebar .card_content {
    padding: 0 25px;
}
.show {
    display: block;
}
.sidebar--blog .sidebar--post .post-list li {
    padding: 25px 0;
}
.sidebar--blog .sidebar--post .post-list .thumbnail_img {
    width: 71px;
    display: inline-block;
    height: 71px;
    vertical-align: middle;
}

.sidebar--blog .sidebar--post .post-list .thumbnail_img img {
    width: 100%;
}
.sidebar--blog .sidebar--post .post-list .title_area {
    width: calc(100% - 76px);
    display: inline-block;
    vertical-align: top;
    padding-left: 10px;
}
.sidebar--blog .sidebar--post .post-list .title_area a {
    display: inline-block;
    font-weight: 500;
    margin-bottom: 6px;
}
.sidebar--blog .sidebar--post .post-list .title_area a h4 {
    font-size: 15px;
    line-height: 24px;
    color: #333;
    font-weight: 500;
}
.sidebar--blog .sidebar--post .post-list .title_area .date_time span {
    display: inline-block;
}
.sidebar--blog .sidebar--post .post-list .title_area .date_time p {
    margin: 0;
    display: inline-block;
    color: #898f96;
    font-size: 15px;
}
.banner {
    position: relative;
}
.banner img {
    -webkit-border-radius: 4px;
    border-radius: 4px;
    width: 100%;
    height: 270px;
    object-fit: cover;
}
/**************end blog****************** */

/**************START CONTACT****************** */
.section-title {
    text-align: center;
    padding-bottom: 53px;
}
.section-title h1 {
    font-weight: 400;
    margin-bottom: 24px;
}
.cardify, .content_title, .table_module, .card_style1, .card_style2, .credit_modules, .shortcode_modules, .upload_modules, .withdraw_module, .statement_info_card, .statement_table, .thread_sort_area, .author_info, .comment_area, .contact_tile, .featured_event, .google_map .location_address .addres_module {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
}
.contact_tile {
    padding: 55px 38px 45px;
    margin-bottom: 30px;
    text-align: center;
}
.contact_tile .tiles__icon {
    font-size: 48px;
    color: #0674ec;
}
.contact_tile .tiles__title {
    color: #000;
    font-weight: 500;
    font-size: 20px;
    padding: 37px 0 24px;
    line-height: 30px;
}
.contact_tile .tiles__content p {
    margin-bottom: 0;
}

.cardify, .content_title, .table_module, .card_style1, .card_style2, .credit_modules, .shortcode_modules, .upload_modules, .withdraw_module, .statement_info_card, .statement_table, .thread_sort_area, .author_info, .comment_area, .contact_tile, .featured_event, .google_map .location_address .addres_module {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
}
.contact_form .contact_form__title, .comment_area .cmnt_reply_form .contact_form__title, .apply_form .contact_form__title, .ticket_form .contact_form__title {
    padding: 50px 0 45px;
    border-bottom: 1px solid #ececec;
    text-align: center;
}
.contact_form .contact_form__title h3, .comment_area .cmnt_reply_form .contact_form__title h3, .apply_form .contact_form__title h3, .ticket_form .contact_form__title h3 {
    color: #000;
}
.contact_form .contact_form--wrapper, .comment_area .cmnt_reply_form .contact_form--wrapper, .apply_form .contact_form--wrapper, .ticket_form .contact_form--wrapper {
    padding: 40px 0 60px;
}
input[type=date], input[type=datetime-local], input[type=email], input[type=number], input[type=password], input[type=search-md], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], textarea, select {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    width: 100%;
    padding: 0 20px;
}
.contact_form input, .comment_area .cmnt_reply_form input, .apply_form input, .ticket_form input, .contact_form select {
    line-height: 48px;
    height: 48px;
    color: #9e9e9e;
    border: 1px solid #e7e7e7;
}
.contact_form .form-group, .comment_area .cmnt_reply_form .form-group, .apply_form .form-group, .ticket_form .form-group {
    margin-bottom: 30px;
}
label, .form-group p.label {
    font-weight: 500;
    font-size: 15px;
    line-height: 26px;
    text-transform: capitalize;
    margin-bottom: 10px;
    color: #000;
}
.contact_form textarea, .comment_area .cmnt_reply_form textarea, .apply_form textarea, .ticket_form textarea {
    border: 1px solid #e7e7e7;
    padding-top: 20px;
    height: 129px;
}

.contact_form .sub_btn, .comment_area .cmnt_reply_form .sub_btn, .apply_form .sub_btn, .ticket_form .sub_btn {
    text-align: center;
    margin-top: 30px;
}

.btn:before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #000;
    left: 0;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    top: 0;
    opacity: 0;
    visibility: hidden;
    z-index: 0;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.contact-area {
    background: #eff1f5;
}

/**************END CONTACT****************** */
/**************Start HELP****************** */
.term_modules {
    padding-bottom: 50px;
}
.term_modules .term .term__title {
    padding: 32px 30px 22px;
    border-bottom: 1px solid #ececec;
}
.term_modules .term .term__title h4 {
    font-size: 24px;
    color: #000;
    line-height: 32px;
}
.term_modules .term .content {
    padding: 30px;
}
/**************END HELP****************** */

/**************START Login****************** */
.login_area, .signup_area, .pass_recover_area {
    background: #eff1f5;
}

.login, .signup_form, .recover_pass {
    padding: 60px 0;
}

.login .login--header, .signup_form .login--header, .recover_pass .login--header {
    border-bottom: 1px solid #ececec;
    text-align: center;
    padding: 0 50px 26px;
}
.login .login--header h3, .signup_form .login--header h3, .recover_pass .login--header h3 {
    color: #000;
    font-size: 26px;
    padding-bottom: 20px;
}
.login .login--header p, .signup_form .login--header p, .recover_pass .login--header p {
    margin-bottom: 0;
    line-height: 28px;
}
.login .login--form, .signup_form .login--form, .recover_pass .login--form {
    padding: 25px 50px 0;
}
.text_field {
    line-height: 50px;
    background: #f4f5f8;
    border: none;
}
.custom_checkbox {
    position: relative;
    margin-top: 10px;
}
.custom_checkbox input[type='checkbox'] {
    display: none;
}
.custom_checkbox label, .custom_checkbox .form-group p.label, .form-group .custom_checkbox p.label {
    margin-bottom: 0;
}
label span, .form-group p.label span {
    font-weight: 400;
    font-size: 15px;
    color: #555;
}
.custom_checkbox label .shadow_checkbox, .custom_checkbox .form-group p.label .shadow_checkbox, .form-group .custom_checkbox p.label .shadow_checkbox {
    height: 18px;
    width: 18px;
    top: 0;
    border: 1px solid #d3d3d3;
    display: inline-block;
    vertical-align: middle;
    position: relative;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}
.custom_checkbox label .shadow_checkbox:before, .custom_checkbox .form-group p.label .shadow_checkbox:before, .form-group .custom_checkbox p.label .shadow_checkbox:before {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    content: '\f00c';
    font-size: 12px;
    visibility: hidden;
    text-align: center;
    color: #fff;
    line-height: 18px;
    font-family: FontAwesome, sans-serif;
    background: #BF338E !important;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}
.custom_checkbox label .label_text, .custom_checkbox .form-group p.label .label_text, .form-group .custom_checkbox p.label .label_text {
    font-weight: 400;
    color: #555;
    display: inline-block;
    vertical-align: middle;
    margin-left: 11px;
}
.login_assist {
    margin-top: 40px;
}
.login_assist p {
    margin-bottom: 0;
    color: #898f96;
}
.login_assist .recover {
    text-align: left;
    display: inline-block;
}
.login_assist p a {
    color: #0674ec;
}
.login_assist p {
    margin-bottom: 0;
    color: #898f96;
}
.login_assist .signup {
    text-align: right;
    float: right;
}
/**************END Login****************** */


/*****************START PROFILE************************** */
.information_module {
    background: #fff;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    margin-bottom: 30px;
}
.author-card.sidebar-card, .author-card.item-preview {
    padding: 0;
}
.author-card .author-infos {
    padding: 30px 0;
    text-align: center;
}
.social, .single_blog_content .share_tags .share .social_share {
    display: inline-block;
}
.author-card .author-infos .social, .author-card .author-infos .single_blog_content .share_tags .share .social_share, .single_blog_content .share_tags .share .author-card .author-infos .social_share {
    margin-top: 30px;
    margin-bottom: 25px;
}
/*****************END PROFILE************************** */

background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}



.dropdown_1 {
  position: relative;
  display: inline-block;
}

.dropdown-content_1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  max-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content_1 a {
  color: black;
  padding: 12px 30px;
  text-decoration: none;
  display: block;
}

/* .dropdown-content a:hover {background-color: #f1f1f1} */
.dropdown-content_1 a:hover {
    color: <?php echo e($allsettings->site_button_color); ?>;
}

.dropdown_1:hover .dropdown-content_1 {
  display: block;
}

.dropbtn {
  border: none;
  background: none;
  color: #999;
  text-decoration: none;
}

.dropbtn:hover {
    color: <?php echo e($allsettings->site_button_color); ?>;
}

.dropdown_1:hover {
    color: #3D9A72;
}
</style>

<?php if($translate == 'ar'): ?>
<style type="text/css">
.btn-ss
{
padding:0 10px;
}
.mover15
{
  right:5px;
}

</style>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\wrappixels\resources\views/dynamic-style.blade.php ENDPATH**/ ?>