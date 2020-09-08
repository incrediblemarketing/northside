<?php
/**
 * Display Site Nav
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

?>
<div class="search-form">
	<?php get_search_form(); ?> 
</div>
<nav class="site-nav">
	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php get_template_part( 'components/svg/logo' ); ?>
</a>

	<?php
	$args = array(
		'theme_location' => 'header-menu',
		'container'      => false,
		'menu_class'     => 'menu',
	);
	wp_nav_menu( $args );
	?>
	<div class="search--area">
		<i class="far fa-search-plus"></i>
	</div>
	<a href="/about/book-now/" class="btn--white">Book Now</a>
	<button data-toggle="menu">
		<span></span>
		<span></span>
		<span></span>
		<p>Menu</p>
	</button>
</nav>
<?php if ( get_field( 'header_banner_text', 'options' ) ) : ?>
	<div class="banner">
		<?php echo get_field( 'header_banner_text', 'options' ); ?>
	</div>
<?php endif; ?>
<div class="side--fixed">
	<!-- GTranslate: https://gtranslate.io/ -->
	<select onchange="doGTranslate(this);" class="notranslate" id="gtranslate_selector" aria-label="Website Language Selector"><option value="">Languages</option><option value="en|zh-TW">繁體中文</option><option value="en|en">English</option><option value="en|tl">Filipino</option><option value="en|fr">Français</option><option value="en|de">Deutsch</option><option value="en|ja">日本語</option><option value="en|ko">한국어</option><option value="en|ms">Bahasa Melayu</option><option value="en|ne">नेपाली</option><option value="en|fa">فارسی</option><option value="en|es">Español</option><option value="en|th">ไทย</option><option value="en|vi">Tiếng Việt</option></select><style>
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
</style>

<div id="google_translate_element2"></div>
<script>
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script>
function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className.indexOf('goog-te-combo')!=-1){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
</script>


	
	<?php get_template_part( 'components/call' ); ?>

	<?php get_template_part( 'components/social-icons' ); ?>
</div>
