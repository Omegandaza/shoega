<?php
session_start();
?>

<!DOCTYPE html>
<!-- saved from url=(0031)http://articlemenswear.com/cart -->
<html class=" wf-lato-n4-active wf-lato-n7-active wf-active js no-touch svg inlinesvg svgclippaths no-ie8compat" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Blockshop Theme Version 2.1.4 by Troop Themes - http://troopthemes.com/ -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="shortcut icon" type="image/png" href="http://cdn.shopify.com/s/files/1/0238/2599/t/8/assets/favicon.png?8555481816346325461">
  

  
    <title>Your Shopping Cart | ARTICLE</title>
  
  
  
  
  <link rel="canonical" href="./save_checkout.php">
  
  




  
  




























<script type="text/javascript" async="" src="./Your Shopping Cart _ ARTICLE_files/dc.js"></script><script type="text/javascript" async="" src="./Your Shopping Cart _ ARTICLE_files/shopify_stats.js"></script><script>
  WebFontConfig = {
    
    
    google: { families: ['Lato:400,700', 'Lato:400,700', 'Lato:400,700', ] }
    
  };
</script>
<link rel="stylesheet" href="./Your Shopping Cart _ ARTICLE_files/css"><script src="./Your Shopping Cart _ ARTICLE_files/webfont.js"></script>


  <script>
//<![CDATA[
      var Shopify = Shopify || {};
      Shopify.shop = "article-menswear.myshopify.com";
      Shopify.theme = {"name":"Blockshop","id":31203969,"theme_store_id":606,"role":"main"};

//]]>
</script>



<script id="__st">
//<![CDATA[
var __st={"a":2382599,"offset":-18000,"reqid":"80751cfc-bd62-48c9-93eb-75e623944dfa","pageurl":"articlemenswear.com\/cart","t":"prospect","u":"007d1f721166"};
//]]>
</script>
<script>
//<![CDATA[
      (function() {
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = '//cdn.shopify.com/s/javascripts/shopify_stats.js?v=6';
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();

//]]>
</script>
<script type="text/javascript">var _gaq = _gaq || [];_gaq.push(["_setAccount","UA-41005762-1"]);_gaq.push(["_addDevId","o5cUG"]);_gaq.push(["_setAllowLinker",true]);_gaq.push(["_setDomainName","none"]);_gaq.push(["_setCustomVar"]);_gaq.push(["_trackPageview"]);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = '//stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script><script type="text/javascript" src="./Your Shopping Cart _ ARTICLE_files/ga_urchin_forms-0826cdefee6590321eb5c0c435eeebf7a8425a5493a9e95059c40e07e069ad52.js"></script>


  <link href="./Your Shopping Cart _ ARTICLE_files/style.css" rel="stylesheet" type="text/css" media="all">

  <!--[if lt IE 8]>
    <script src="//cdn.shopify.com/s/files/1/0238/2599/t/8/assets/json2.js?8555481816346325461" type="text/javascript"></script>
  <![endif]-->

  <!--[if lt IE 9]>
  <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/0238/2599/t/8/assets/dd_roundies.js?8555481816346325461" type="text/javascript"></script>
  <script>
  DD_roundies.addRule('.circle', '45px');
  </script>
  <![endif]-->

  <script src="./Your Shopping Cart _ ARTICLE_files/custom.modernizr.js" type="text/javascript"></script>
  <script src="./Your Shopping Cart _ ARTICLE_files/jquery.min.js" type="text/javascript"></script>
  <script src="./Your Shopping Cart _ ARTICLE_files/jquery-ui.min.js" type="text/javascript"></script>
  <script src="./Your Shopping Cart _ ARTICLE_files/api.jquery-a9f37ae01db732bf734ee4fb780b836ab158c640f8e4468a17cf7000f96d0cbd.js" type="text/javascript"></script>
  <script src="./Your Shopping Cart _ ARTICLE_files/option_selection-ab46215b6f146585c0b823a42613e4c1877e368805c0adec2adedf68286e502d.js" type="text/javascript"></script>

  

  <script>
    var twitterID = '',
    general_external_links_enabled = true,
    general_scroll_to_active_item = false,
    shop_url = 'http://articlemenswear.com',
    shop_money_format = '${{amount}}',
    home_slider_auto_enabled = true,
    home_slider_rotate_frequency = 5000,
    home_widget_twitter_enabled = true,
    home_widget_blog_enabled = true,
    home_widget_instagram_client_id = 'b9250ffaa750473497707f1f507165dd',
    product_zoom_enabled = true,
    product_modal_enabled = true,
    currency_switcher_enabled = false;
  </script>

<style type="text/css"></style></head>



<?php

if(!isset($_SESSION["intLine"]))
{
  echo "Cart empty";
  exit();
}

mysql_connect("localhost","root","cream123");
mysql_select_db("test");

?>

<body class="page-your-shopping-cart template-cart">

  <header class="main-header">
    <div class="bg"></div>
    <div class="row top">
      

      <div class="columns logo-center">
        <h1 class="title clearfix" role="banner">
  
    <a href="http://articlemenswear.com/" role="banner" title="ARTICLE">
    <img src="./Your Shopping Cart _ ARTICLE_files/logo-retina.png" data-retina="114.png" alt="ARTICLE" style="width: 500px;"> 
    </a>
  
</h1>
      </div>

      <div class="search-account columns">
        <div class="menu">
  

  
    <a class="searchbar-open" href="http://articlemenswear.com/cart#">Search<span aria-hidden="true" class="glyph search"></span></a>
  

  
    <a class="account-open" href="http://articlemenswear.com/cart#">Account<span aria-hidden="true" class="glyph account"></span></a>
  
    
</div>

<div class="searchbar-container">
  <form action="http://articlemenswear.com/search" method="get" role="search">
    
    <input name="q" type="text" placeholder="Search store..." class="search-box hint text">
    
    <button class="glyph search"></button>
  </form>
  <a href="http://articlemenswear.com/cart#" aria-hidden="true" class="searchbar-close glyph cross"></a>
</div>

<div class="account-container">
  
    
    
    
    

    
      <a href="http://articlemenswear.com/account/login" id="customer_login_link">Log in</a> or <a href="http://articlemenswear.com/account/register" id="customer_register_link">Sign up</a>
    
  
  <a href="http://articlemenswear.com/cart#" aria-hidden="true" class="account-close glyph cross"></a>
</div>




      </div>
      
    </div><!-- .row -->

    <div class="bottom-row">
      <div class="row">
        <div class="columns menu-container text-center">
          <div class="main-menu">
  <nav role="navigation" class="widescreen clearfix">
    <ul class="font-nav">
      
          
          

          
          
          
          
            <li class="nav-item">
              <a class="nav-item-link" href="http://articlemenswear.com/collections/sale">
                SALE
              </a>
            </li>
          

      
          
          

          
          
          
          
            <li class="nav-item dropdown">
              <a class="nav-item-link" href="http://articlemenswear.com/collections/frontpage">
                Departments <span aria-hidden="true" class="glyph arrow-down"></span>
              </a>

                <ul class="sub-nav">
                  <li>
                    <div class="columns large-3">
                      <ul>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/all" title="">Shop All</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/accessories-1" title="">Accessories</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/bags" title="">Bags</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/blazers" title="">Blazers &amp; Suits</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/pants" title="">Bottoms</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/denim" title="">Denim</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/shoes" title="">Footwear</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/grooming" title="">Grooming</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/home-goods" title="">Home </a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/ties" title="">Neckwear </a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/outerwear" title="">Outerwear</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/shirts" title="">Shirts</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/tees" title="">Tops</a></li>
                      
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>

          

      
          
          

          
          
          
          
            <li class="nav-item dropdown">
              <a class="nav-item-link" href="http://articlemenswear.com/pages/brands">
                Brands <span aria-hidden="true" class="glyph arrow-down"></span>
              </a>

                <ul class="sub-nav">
                  <li>
                    <div class="columns large-3">
                      <ul>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/a-p-c" title="">A.P.C.</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/apolis" title="">Apolis</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/billy-kirk" title="">Billy Kirk</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/billy-reid" title="">Billy Reid</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/deus-ex-machina" title="">Deus Ex Machina</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/filson" title="">Filson</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/freemans-sporting-club" title="">Freemans Sporting Club</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/gant-diamond" title="">Gant Diamond G</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/gant" title="">Gant Rugger</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/grayers" title="">Grayers</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/industry-of-all-nations" title="">Industry of all Nations</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/miansai" title="">Miansai</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/noble" title="">Noble Denim</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/private-white-vc" title="">Private White VC</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/quoddy" title="">Quoddy</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/raen" title="">Raen</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/rogue-territory" title="">Rogue Territory</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/saturdays-nyc" title="">Saturdays NYC</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/shinola" title="">Shinola</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/the-hill-side" title="">The Hill-Side</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/tanner-goods" title="">Tanner Goods</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/todd-synder" title="">Todd Snyder</a></li>
                      
                        <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/todd-snyder-champion" title="">Todd Snyder + Champion</a></li>
                      
                      </ul>
                    </div>
                  </li>
                </ul>
            </li>

          

      
          
          

          
          
          
          
            <li class="nav-item">
              <a class="nav-item-link" href="http://archive.articlemenswear.com/" target="_blank">
                ARCHIVE
              </a>
            </li>
          

      
    </ul>
  </nav>

</div>

        </div>
        
        <div class="columns cart-container">
          <div class="cart">
 	<div class="show-for-medium-up">
	  <a class="cart-link" href="./save_checkout.php">Cart <span class="number-wrapper ">(<span class="number">1</span>)</span><span aria-hidden="true" class="glyph cart"></span></a>

		<div class="recently-added">
		  <table width="100%">
			  <thead>
			    <tr>
			      <td colspan="3">Recently Added</td>
			    </tr>
			  </thead>
			  
			  <tbody>
					

			  </tbody>

			  <tfoot>
			    <tr>
						<td class="items-count"><a href="./save_checkout.php"><span class="number">1</span> Items</a></td>
						<td colspan="2" class="text-right all-caps"><strong>Total <span class="total-price" style="margin-left:5px;">$55.00</span></strong></td>
			    </tr>
			  </tfoot>
			  
			</table>

			<div class="row"> 
			  <div class="checkout columns">
			    <a class="button" href="./save_checkout.php">Go to Checkout</a>
			  </div><!-- #cart-meta -->
			</div>

			<div class="error">
			  <p>The item you just added is unavailable. Please select another product or variant.</p>
			</div>

		</div>
	</div>

	<div class="show-for-small hide-for-ie9-down">
		<div class="recently-added-mask hide"></div>
		<div class="recently-added mobile">
			<a aria-hidden="true" class="close glyph cross"></a>
			

			<div class="row">
				<div class="columns">
					<p><strong class="all-caps">Recently Added</strong></p>
					<p class="mobile-item"></p>
					<p class="items-count"><a href="./save_checkout.php"><span class="number">1</span> Items</a></p>
					<p><strong class="all-caps">Total <span class="total-price" style="margin-left:5px;">$55.00</span></strong></p>
				</div>
			</div>

			<div class="row">
			  <div class="checkout columns">
			    <a class="button" href="./save_checkout.php">Go to Checkout</a>
			  </div><!-- #cart-meta -->
			</div>

			<div class="error">
			  <p>The item you just added is unavailable. Please select another product or variant.</p>
			</div>

		</div>
	</div>
</div>


        </div>

        <div class="mobile-tools">
          <a class="glyph menu" href=""></a>
          
          <a href="http://articlemenswear.com/search" class="glyph search"></a>
          
          
          <a href="http://articlemenswear.com/account" class="glyph account"></a>
          
          <a href="./save_checkout.php" class="glyph cart"></a>

        </div>
      </div>
    </div>

    <div class="main-menu-dropdown-panel">
      <div class="row text-center">
      
      </div>
    </div>

    <div class="mobile-menu">
      <nav role="navigation">
  <ul class="font-nav">
    
        
        

        
        
        
        
          <li class="nav-item">
            <a class="nav-item-link" href="http://articlemenswear.com/collections/sale">
              SALE
            </a>
          </li>
        

    
        
        

        
        
        
        
          <li class="nav-item dropdown">
            <a class="dropdown-link" href="http://articlemenswear.com/collections/frontpage">
              Departments <span aria-hidden="true" class="glyph plus"></span><span aria-hidden="true" class="glyph minus"></span>
            </a>
            <ul class="sub-nav">
              <li class="bg"></li>
              
                <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/all" title="">Shop All</a></li>
              
                <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/accessories-1" title="">Accessories</a></li>
              
                
              
            </ul>
          </li>

        

    
        
        

        
        
        
        
          <li class="nav-item dropdown">
            <a class="dropdown-link" href="http://articlemenswear.com/pages/brands">
              Brands <span aria-hidden="true" class="glyph plus"></span><span aria-hidden="true" class="glyph minus"></span>
            </a>
            <ul class="sub-nav">
              <li class="bg"></li>
              
                <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/a-p-c" title="">A.P.C.</a></li>
              
                <li class="sub-nav-item"><a href="http://articlemenswear.com/collections/apolis" title="">Apolis</a></li>
              
                
              
            </ul>
          </li>

        

    
        
        

        
        
        
        
          <li class="nav-item">
            <a class="nav-item-link" href="http://archive.articlemenswear.com/" target="_blank">
              ARCHIVE
            </a>
          </li>
        

    
  </ul>
</nav>




    </div>

    <div class="row">
      <div class="header-divider"></div>
    </div>

  </header>

  <section class="main-content">
    
      <header class="row">
  <div class="columns">
    <h1 class="page-title">Your Cart</h1>
  </div>
</header>





















<form action="./save_checkout.php" method="post" class="custom">
  <div class="row">
    <div class="columns">


      <table width="100%" class="cart-table">
        <thead>
          <tr>
            <th class="image">&nbsp;</th>
            <th class="title">Name</th>
            <th class="quantity">Quantity</th>
            <th class="total">Total</th>
          </tr>
        </thead>
        <tbody>

      


        <?php

        
        $Total = 0;
        $SumTotal = 0;

// Create connection




  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
    if($_SESSION["strProductID"][$i] != "")
    {
    $strSQL = "SELECT * FROM Product WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
    $objQuery = mysql_query($strSQL)  or die(mysql_error());
    $objResult = mysql_fetch_array($objQuery);
    $Total = $_SESSION["strQty"][$i] * $objResult["ProductPrice"];
    $SumTotal = $SumTotal + $Total;
    echo '
        
        <tr>
          <td class="image">
            
            <a href="http://articlemenswear.com/products/2x2-beanie-by-saturdays-nyc-1?variant=10348850497">
            
              <img src="collections/shoes/'.$objResult["ProductDetail"] .'">
            </a>

            <p class="mobile-title"><a href="http://articlemenswear.com/products/2x2-beanie-by-saturdays-nyc-1"> </a></p>

            
          </td>
          <td class="title">
            
            <p><a href="http://articlemenswear.com/products/2x2-beanie-by-saturdays-nyc-1?variant=10348850497">'. $objResult["ProductName"] .'</a></p>
            
            
          </td>
          <td class="quantity">
            
            <input type="text" class="field styled-input" name="updates[]" id="updates_10348850497" value="'. $_SESSION["strQty"][$i] .'">
            
            
            </td>
          <td class="total">
            
            <span class="money">$'. number_format($Total,2) .'</span>
            
            </td>
        
        </tr>
        
        </tbody>
      ';
      }
    }
    ?>




      </table><br>
      <h3>Total = <?php echo number_format($SumTotal,2);?> </h3>

      <br><br>





    </div>

  </div> <!-- .row -->
      
  <div class="row">

    <div class="columns large-5 show-for-medium-up">
      <div class="shipping-rates-calculator">
        
<img class="loading-spinner" style="margin: 30px; display: none;" width="24" height="24" src="./Your Shopping Cart _ ARTICLE_files/AjaxLoader.gif">

<form name="form1" method="post" action="save_save_checkout.php">
<div id="shipping-calculator" class="shipping-calculator" style="display: block;">
  



<p>
    <label for="address_zip">Name</label>
    <input type="text" name="txtName">
    
  </p> 

<p>
    <label for="address_zip">Address</label>
    <input type="text" name="txtAddress">
  </p> 

<p>
    <label for="address_zip">Telephone</label>
    <input type="text" name="txtTel">
  </p> 
<p>
    <label for="address_zip">Email</label>
    <input type="text" name="txtEmail">
  </p>

<input type="submit" name="Submit" value="Submit">

  <div id="wrapper-response"></div>
  
</div>
</form>





<script type="text/javascript" charset="utf-8">
//<![CDATA[
// Including jQuery conditionnally.
if (typeof jQuery === 'undefined') {
  document.write("\u003cscript src=\"https:\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1\/jquery.min.js\" type=\"text\/javascript\"\u003e\u003c\/script\u003e");
  document.write('<script type="text/javascript">jQuery.noConflict();<\/script>');
}

//]]>
</script>
<script src="./Your Shopping Cart _ ARTICLE_files/jquery.tmpl.min.js" type="text/javascript"></script>
<script src="./Your Shopping Cart _ ARTICLE_files/countries.js" type="text/javascript"></script>
<script src="./Your Shopping Cart _ ARTICLE_files/shopify_common-67d2eec0094b97880bd561bbaf6a50254e3511053519ae0c25599b9660e5d09b.js" type="text/javascript"></script>

<script>
$( document ).ready(function() {

  $('#address_country').on('change', function() {
    $('.loading-spinner').show()
    $('.shipping-calculator').hide()
    if ($(this).val() == '') {
      $(this).val($(this).attr('data-default'));
    }
    Foundation.libs.forms.refresh_custom_select($(this), true);
    setTimeout(function() {
      $('.loading-spinner').hide();
      $('.shipping-calculator').show();
    }, 200);
  });

  $('#address_province').on('change', function() {
    if ($(this).val() == '') { 
      $(this).val($(this).attr('data-default'));
    }
    Foundation.libs.forms.refresh_custom_select($(this), true);
  });

  Shopify.CountryProvinceSelector2 = function(country_domid, province_domid, options) {
    var $countryEl;

    this.countryEl = document.getElementById(country_domid);
    this.provinceEl = document.getElementById(province_domid);
    this.provinceContainer = document.getElementById(options["hideElement"] || province_domid);
    $countryEl = this.countryEl;
    $($countryEl).bind('change', Shopify.bind(this.countryHandler, this));
    this.initCountry();
    return this.initProvince();
  };

  Shopify.CountryProvinceSelector2.prototype = Shopify.CountryProvinceSelector.prototype;

  Shopify.CountryProvinceSelector2.prototype.setOptions = function(selector, values) {
    var i, opt, _i, _ref;

    opt = document.createElement("option");
    opt.value = '';
    opt.innerHTML = "-- Please Select --";
    selector.appendChild(opt);

    for (i = _i = 0, _ref = values.length - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
      opt = document.createElement("option");
      opt.value = values[i];
      opt.innerHTML = values[i];
      selector.appendChild(opt);
      i++;
    }
    return $(selector).change();
  };

  $('#address_country').trigger('change');
});
</script>

<script src="./Your Shopping Cart _ ARTICLE_files/jquery.cart.js" type="text/javascript"></script> 

<script>

Shopify.Cart.ShippingCalculator.show( {
  submitButton: "Calculate Shipping", 
  submitButtonDisabled: "Calculating...",
  moneyFormat: "${{amount}} USD"
} );


</script>


      </div>

      <div class="continue-shopping show-for-medium-up">
        <span><a href="http://articlemenswear.com/collections/accessories-1"><span aria-hidden="true" class="glyph arrow-left"></span> Continue Shopping</a></span>
      </div>
    </div>




    <div class="continue-shopping columns show-for-small columns hide-for-ie9-down">
      <span><a href="http://articlemenswear.com/collections/accessories-1"><span aria-hidden="true" class="glyph arrow-left"></span> Continue Shopping</a></span>
    </div>

  </div> <!-- .row -->
</form>


 <!-- if cart.item_count > 0  -->



  </section>

  <footer class="main-footer">

    <div class="row bottom">
      <div class="column-1 large-4 columns">
        <h2 class="title"></h2>
        
        <div class="content">
          
            
          
            <ul class="footer-nav plain-list" role="navigation">
            
              <li><a href="http://articlemenswear.com/pages/returns-exchanges" title="Returns &amp; Exchanges">Returns &amp; Exchanges</a></li>
            
              <li><a href="http://articlemenswear.com/pages/terms-of-service" title="Terms Of Service">Terms Of Service</a></li>
            
              <li><a href="http://articlemenswear.com/pages/privacy" title="Privacy">Privacy</a></li>
            
              <li><a href="http://articlemenswear.com/pages/contact" title="Contact">Contact</a></li>
            
              <li><a href="http://articlemenswear.com/pages/about" title="About">About</a></li>
            
            </ul>
          
        </div>
      </div>
      
      
      <div class="column-3 large-4 columns">
        
          
          
            <h2 class="title">Subscribe</h2>
          

          <div class="content" id="mailing-list-module">
            
            
              <p>Signup to get the latest news...</p>
            

            
              <form method="post" action="http://articlemenswear.com/contact" class="contact-form" accept-charset="UTF-8"><input type="hidden" value="customer" name="form_type"><input type="hidden" name="utf8" value="✓">
              
                     
            <input type="hidden" id="contact_tags" name="contact[tags]" value="newsletter">
            <input type="hidden" id="newsletter-first-name" name="contact[first_name]" value="Subscriber">
            <input type="hidden" id="newsletter-last-name" name="contact[last_name]" value="Newsletter">
            <input type="email" placeholder="Your Email" name="contact[email]">
            <input type="submit" class="button prefix" value="OK" name="subscribe" id="email-submit">

            
            </form> 
            
          

          <div class="social-follow">
            <a title="Facebook" aria-hidden="true" target="_blank" class="glyph facebook" href="http://articlemenswear.com/facebook.com/articlemenswear"></a>
            <a title="Twitter" aria-hidden="true" target="_blank" class="glyph twitter" href="http://articlemenswear.com/twitter.com/articlemenswear"></a>
            <a title="Instagram" aria-hidden="true" target="_blank" class="glyph instagram" href="http://articlemenswear.com/instagram.com/articlemenswear"></a>
            
            
            
            
            

            
          </div>
        </div> 
      </div>
      
      <div class="column-1 large-4 columns">
        <h2 class="title"></h2>
        <div class="content">
          <p class="text"></p>
          <div class="&lt;a href=" http:="" articlemenswear.com"="">Copyright Article Culture Co LLC 2015</div>
        </div>

      </div>

      </div>
      


      
    

    
      
    


  </footer>

  

  <script src="./Your Shopping Cart _ ARTICLE_files/plugins.js" type="text/javascript"></script>
  <script src="./Your Shopping Cart _ ARTICLE_files/shop.js" type="text/javascript"></script>
  <?
  mysql_close();
?>



</body></html>