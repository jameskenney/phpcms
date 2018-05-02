<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 5/1/2018
 * Time: 11:35 PM
 */
?>

<?php
header("Content-type: text/css; charset: UTF-8");
?>

/*! HTML5 Boilerplate v6.0.1 | MIT License | https://html5boilerplate.com/ */

/*
 * What follows is the result of much research on cross-browser styling.
 * Credit left inline and big thanks to Nicolas Gallagher, Jonathan Neal,
 * Kroc Camen, and the H5BP dev community and team.
 */

/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */

html {
	color:       #222;
	font-size:   1em;
   line-height: 1.4;
}

/*
 * Remove text-shadow in selection highlight:
 * https://twitter.com/miketaylr/status/12228805301
 *
 * Vendor-prefixed and regular ::selection selectors cannot be combined:
 * https://stackoverflow.com/a/16982510/7133471
 *
 * Customize the background color to match your design.
 */

::-moz-selection {
	background:  #b3d4fc;
	text-shadow: none;
}

::selection {
	background:  #b3d4fc;
	text-shadow: none;
}

/*
 * A better looking default horizontal rule
 */

hr {
	display:    block;
	height:     1px;
   border:     0;
   border-top: 1px solid #ccc;
   margin:     1em 0;
   padding:    0;
}

/*
 * Remove the gap between audio, canvas, iframes,
 * images, videos and the bottom of their containers:
 * https://github.com/h5bp/html5-boilerplate/issues/440
 */

audio,
canvas,
iframe,
img,
svg,
video {
	vertical-align: middle;
}

/*
 * Remove default fieldset styles.
 */

fieldset {
	border:  0;
	margin:  0;
	padding: 0;
}

/*
 * Allow only vertical resizing of textareas.
 */

textarea {
	resize: vertical;
}

/* ==========================================================================
   Browser Upgrade Prompt
   ========================================================================== */

.browserupgrade {
	margin:     0.2em 0;
   background: #ccc;
   color:      #000;
   padding:    0.2em 0;
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */

body {
	display:       grid;
	justify-items: center;
}

.wrapper {
	display:               grid;
	grid-gap:              5px;
   box-sizing:            border-box;
   grid-template-columns: repeat(3, minmax(250px, 1fr));
   grid-template-areas:   "nav-admin nav-admin nav-admin" "header header header" "nav-main nav-main nav-main" "main main aside" "footer footer footer";
   padding-top: 50px;
}

header {
	grid-area:        header;
   background-color: #8791b9;
   /*height: 10vh;*/
}

.nav-admin {
	color:            white;
	grid-area:        nav-admin;
   background-color: black;
   /*height: 5vh;*/
}

main {
	grid-area:        main;
   background-color: coral;
}

nav.main {
	grid-area:        nav-main;
   background-color: #26a599;
   /*height: 5vh;*/
}

aside {
	grid-area:        aside;
   background-color: #fff176;
}

footer {
	color:            white;
	grid-area:        footer;
   background-color: #1976d2;
}

.wrapper {
	max-width: 1140px !important;
}

.user-data {
	grid-area:        user-data;
   width:            100%;
   background-color: #fff176;
   padding:          10px;
   text-align:       left;
}

.roll-1 {
	grid-area:        roll-1;
   width:            100%;
   background-color: #fff176;
   padding:          10px;
   text-align:       left;
}

.roll-2 {
	grid-area:        roll-2;
   width:            100%;
   background-color: #fff176;
   padding:          10px;
   text-align:       left;
}

.email .form-control {
	margin-bottom: 25px;
}

.chosen-container-multi,
.chosen-search-input {
	margin-bottom: 25px;
}

#roles-button {
   margin-bottom: 25px;
}

.select2-container .select2-selection--single {
	height: 38px !important;
}

.form-header h3 {
	display:               grid;
	grid-template-columns: 1fr 1fr;
   grid-template-areas:   "user pencil-alt";
   justify-content:       space-around;
}

.form-header h3 {
	display:               grid;
	grid-template-columns: 3fr 1fr;
   grid-template-areas:   "user pencil-alt";
   justify-content:       space-around;
}

.signup-form-container .login-title {
	justify-self: start;
}

.signup-form-container .login-title-right {
	justify-self: end;
}

.signup-form-container h3 .user {
	grid-area:    user;
   height:       16px;
   justify-self: start;
   margin-right: 5px;
}

.signup-form-container h3 .pencil-alt {
	grid-area: pencil-alt;
   height:    16px;
}

.form-signin {
	max-width:             500px;
   margin:                0 auto;
   background-color:      #efefef;

   border:                1px solid #c9c9c9;
                              -webkit-border-radius: 5px;
   -moz-border-radius:    5px;
   border-radius:         5px;
   -webkit-box-shadow:    0 1px 2px rgba(0, 0, 0, .05);
   -moz-box-shadow:       0 1px 2px rgba(0, 0, 0, .05);
   box-shadow:            0 1px 2px rgba(0, 0, 0, .05);

   font-family:           Tahoma, Geneva, sans-serif;
   color:                 #900;
   font-weight:           lighter;
}

.form-signin .form-signin-heading {
	color: #00a2d1;
}

.form-signin input[type="text"],
.form-signin input[type="password"],
.form-signin input[type="email"] {
	font-size: 16px;
   height:    45px;
   padding:   7px 9px;
}

.signin-form, .body-container {
	margin-top: 110px;
}

.signin-form .container {
	margin-bottom: 30px;
}

.signup-form-container {
	border-radius: 5px;
   margin:        4% auto;
   max-width:     500px;
   box-shadow:    0 1px 5px rgba(0, 0, 0, 0.1)
}

.input-group-relative {
	position: relative;
}

.input-group-addon {
	z-index: 99;
   position: absolute;
   height:   16px;
   color:    #555;
   left: 12px;
   bottom: 12px;
   padding: 8px 12px 4px;
   background-color: #eee;
   border:           1px solid #ccc;
   border-radius:    4px;
}

.select2-selection__rendered {
	padding-left: 50px !important;
}

.input-group-addon {
	z-index: 101;
   position: absolute;
   height:   38px;
   width:   38px;
   color:    #555;
   left: 0px;
   bottom: 0px;
   //background-size: 38px 38px;

}

.input-group-addon img {
	z-index: 99;
   /*padding:          8px 12px 4px;*/
   font-size:        16px;
   font-weight:      normal;
   line-height:      1;
   color:            transparent;
   text-align:       center;
   align-self:       center;
   padding-bottom: 8px;
}

.input-group-addon::after {
	/*box-sizing: border-box;*/
	content:    "";//
	/*background-size: 38px 38px;*/
}

.input-group-relative .form-control {
	padding: 6px 9px 6px 45px;
}

audio, canvas, iframe, img, svg, video {
	vertical-align: middle;
}

.form-header {
	color:                   #444;
	background:              #f4f4f4;
	border-top-left-radius:  5px;
   border-top-right-radius: 5px;
   border-top:              1px solid #c9c9c9;
   border-left:             1px solid #c9c9c9;
   border-right:            1px solid #c9c9c9;

   display:                 block;
   padding:                 8px 18px;
   position:                relative;
   border-bottom:           1px solid #ccc;
}

.form-header .form-title {
	display:     inline-block;
	font-size:   18px;
   margin:      0;
   line-height: 1
}

.form-body {
	background:   #f4f4f4;
	border-left:  1px solid #c9c9c9;
   border-right: 1px solid #c9c9c9;
   padding:      20px;
}

.form-footer {
	background:                 #f4f4f4;
	border-top:                 1px solid #ccc;
   border-bottom-left-radius:  5px;
   border-bottom-right-radius: 5px;
   border-left:                1px solid #c9c9c9;
   border-right:               1px solid #c9c9c9;
   border-bottom:              1px solid #c9c9c9;
   padding:                    15px 20px;
   display:                    grid;
}

.form-footer .form-group {
	margin: 0;
}

.form-footer .form-group {
	align-self: center;
}

.form-footer .right-col {
	justify-self: end;
   text-align:   right;
}

.form-control {
	font-size: 16px;
   height:    auto;
   padding:   6px 9px 6px 45px;
}

#btn-roles  img,
#btn-signup img,
#btn-logout img {
   width:  20px;
   height: 20px;
}

.form-group #error {
   color: #a94442;
}

#password_strength_panel {
   background: none repeat scroll 0 0 #eee;
   margin:     20px auto 20px;
   text-align: center;
   width:      800px;
}

.clear_both {
	clear: both;
}

div.form-group-zero {
	margin-bottom: 5px;
}

#pass_meter {
   background:    none repeat scroll 0 0 #52b3ec;
   border:        1px solid #1997e1;
   border-radius: 5px;
   color:         #fff;
   text-shadow:   1px 1px 2px black;
   height:        40px;
   margin:        12px 16px 0 !important;
   padding:       10px;
   width:         100% !important;
   text-align:    center;
   font-weight:   bold;
}

.btn-info {
	color:            #fff;
	background-color: #1997e1;
   border-color:     #1478b3;
}

#progress {
   margin-top: 20px;
}

.form-horizontal .form-group {
	margin-left:  0;
   margin-right: 0;
}

h1,
h2,
h3,
p,
.nav-admin,
nav.main,
header,
footer {
	padding: 10px;
}

h3 {
	display:       grid;
	align-content: center;
   margin:        0;
}

h3 .login-title {
	font-size:  20px;
   align-self: center;
}

/* ==========================================================================
   Helper classes
   ========================================================================== */

/*
 * Hide visually and from screen readers
 */

.hidden {
	display: none !important;
}

/*
 * Hide only visually, but have it available for screen readers:
 * https://snook.ca/archives/html_and_css/hiding-content-for-accessibility
 *
 * 1. For long content, line feeds are not interpreted as spaces and small width
 *    causes content to wrap 1 word per line:
 *    https://medium.com/@jessebeach/beware-smushed-off-screen-accessible-text-5952a4c2cbfe
 */

.visuallyhidden {
	border:            0;
	clip:              rect(0 0 0 0);
   -webkit-clip-path: inset(50%);
   clip-path:         inset(50%);
   height:            1px;
   margin:            -1px;
   overflow:          hidden;
   padding:           0;
   position:          absolute;
   width:             1px;
   white-space:       nowrap; /* 1 */
}

/*
 * Extends the .visuallyhidden class to allow the element
 * to be focusable when navigated to via the keyboard:
 * https://www.drupal.org/node/897638
 */

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
	clip:              auto;
	-webkit-clip-path: none;
   clip-path:         none;
   height:            auto;
   margin:            0;
   overflow:          visible;
   position:          static;
   width:             auto;
   white-space:       inherit;
}

/*
 * Hide visually and from screen readers, but maintain layout
 */

.invisible {
	visibility: hidden;
}

/*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */

.clearfix:before,
.clearfix:after {
	content: " "; /* 1 */
	display: table; /* 2 */
}

.clearfix:after {
	clear: both;
}

/* ==========================================================================
   EXAMPLE Media Queries for Responsive Design.
   These examples override the primary ('mobile first') styles.
   Modify as content requires.
   ========================================================================== */

@media only screen and (min-width: 35em) {
	/* Style adjustments for viewports that meet the condition */
}

@media print,
(-webkit-min-device-pixel-ratio: 1.25),
(min-resolution: 1.25dppx),
(min-resolution: 120dpi) {
	/* Style adjustments for high resolution devices */
}

/* ==========================================================================
   Print styles.
   Inlined to avoid the additional HTTP request:
   http://www.phpied.com/delay-loading-your-print-css/
   ========================================================================== */

@media print {
	*,
	*:before,
   *:after {
		background:  transparent !important;
      color:       #000 !important;
      /* Black prints faster:
                                        http://www.sanbeiji.com/archives/953 */
      box-shadow:  none !important;
      text-shadow: none !important;
   }

   a,
   a:visited {
		text-decoration: underline;
   }

   a[href]:after {
		content: " (" attr(href) ")";
   }

   abbr[title]:after {
		content: " (" attr(title) ")";
   }

   /*
    * Don't show links that are fragment identifiers,
    * or use the `javascript:` pseudo protocol
    */
   a[href^="#"]:after,
   a[href^="javascript:"]:after {
		content: "";
	}

   pre {
		white-space: pre-wrap !important;
   }

   pre,
   blockquote {
		border:            1px solid #999;
      page-break-inside: avoid;
   }

   /*
    * Printing Tables:
    * http://css-discuss.incutio.com/wiki/Printing_Tables
    */
   thead {
		display: table-header-group;
	}

   tr,
   img {
		page-break-inside: avoid;
   }

   p,
   h2,
   h3 {
		orphans: 3;
		widows:  3;
	}

   h2,
   h3 {
		page-break-after: avoid;
   }
}

.user-permissions .col-sm-12 {
	padding-left:  0;
   padding-right: 0;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
	line-height: 38px !important;
}

.nav-menu {
	display: flex;
	flex-direction: row;
   flex-wrap: nowrap;
   justify-content: space-around;
   width: 100%;
}

/* Search button to match style guide */
.btn-outline-entice {
	color: #26a195;
	background-color: transparent;
   background-image: none;
   border-color: #26a195;
}

.btn-outline-entice:hover {
	color: #fff;
	background-color: #26a195;
   border-color: #26a195;
}

.btn-outline-entice:focus, .btn-outline-entice.focus {
	box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-entice.disabled, .btn-outline-entice:disabled {
	color: #26a195;
	background-color: transparent;
}

.btn-outline-entice:not(:disabled):not(.disabled):active, .btn-outline-entice:not(:disabled):not(.disabled).active,
.show > .btn-outline-pentice.dropdown-toggle {
	color: #fff;
	background-color: #26a195;
   border-color: #26a195;
}

.btn-outline-entice:not(:disabled):not(.disabled):active:focus, .btn-outline-entice:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-entice.dropdown-toggle:focus {
	box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}


/* Button to match style guide */

.btn-entice {
	color: #fff;
	background-color: #26A195;
   border-color: #26A195;
}

.btn-entice:hover {
	color: #fff;
	background-color: #187067;
   border-color: #187067;
}

.btn-entice:focus, .btn-entice.focus {
	box-shadow: 0 0 0 0.2rem rgba(38, 161, 149, 0.5);
}

.btn-entice.disabled, .btn-entice:disabled {
	color: #fff;
	background-color: #26A195;
   border-color: #26A195;
}

.btn-entice:not(:disabled):not(.disabled):active, .btn-entice:not(:disabled):not(.disabled).active,
.show > .btn-entice.dropdown-toggle {
	color: #fff;
	background-color: #23998d;
   border-color: #23998d;
}

.btn-entice:not(:disabled):not(.disabled):active:focus, .btn-entice:not(:disabled):not(.disabled).active:focus,
.show > .btn-entice.dropdown-toggle:focus {
	box-shadow: 0 0 0 0.2rem rgba(38, 161, 149, 0.5);
}

.form-control:focus {
	border-color: #26A195;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(38, 161, 149, 0.6);
}



.entice-orange {
	color: #FC653F;
}

.btn-blue {
	background-color: #26A195;
}

.background-jumbotron-text {
	background-color: rgba(38,161,149,.5);
}

.jumbotron-text {
	font-size: 30px;
   color: #fff;
   max-width: 1000px;
   margin-top: 160px;
}

.jumbotron {
	background-image: url('/assets/images/dont-just-stand-there1.jpg');
   height: 100%;
   width: 100%;
   background-size: cover;
}

.front-center-page-div {
	background-color: #DAD6C6;
   border-radius: 25px;
   text-align: center;
}

.material-icons.md-48 {
	padding-top: 20px;
}

.material-icons.blue600 {
	color: #26A195;
}


.home-container {
	width: 90%;
}


.navbar {
	width: 100%;
}


.center_page_content {
	padding-top: 25px;
}




/* Rules for sizing the icon. */
.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }

/* Rules for using icons as black on a light background. */
.material-icons.md-dark { color: rgba(0, 0, 0, 0.54); }
.material-icons.md-dark.md-inactive { color: rgba(0, 0, 0, 0.26); }

/* Rules for using icons as white on a dark background. */
.material-icons.md-light { color: rgba(255, 255, 255, 1); }
.material-icons.md-light.md-inactive { color: rgba(255, 255, 255, 0.3); }
