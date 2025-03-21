<?php
	if(isset($_GET['lang']))
		$lang = $_GET['lang'];
	else
		$lang = 'en';
		
	switch ($lang) {
		case 'fr':
			$html_lang = "fr";
			
			// Domaines : catégories et promos
			$categories_text = "Netim propose près de 1 000 extensions géographiques (ccTLDs) et génériques (gTLDs).";
			$categories_text_btn = "Trouvez le nom<br />de domaine idéal";
			$categories_url = "https://www.netim.fr/nom-domaine/recherche-categorie.html";

			// Promotions
			$promos_text = "Netim propose régulièrement des promotions sur les noms de domaine. Certaines extensions sont à 1€ HT<br />la première année.";
			$promos_text_btn = "Découvrir l'ensemble<br />de nos promotions";
			$promos_url = "https://www.netim.fr/nom-domaine/extensions-promo.html";
			
			// Découverte des offres d'hébergement
			$hosting_text = "Site personnel, institutionnel ou marchand, choisissez l’offre correspondant à vos projets.";
			$hosting_text_btn = "Découvrir nos offres d'hébergement";
			$hosting_url = "https://www.netim.fr/produits-services/hebergement-web/";
			
			// Signaler un abus
			$report_txt = "Signaler un abus";
			$report_url = "https://www.netim.fr/signaler-un-abus.html";
			
			// Menu footer
			$li1 = "Netim.fr";
			$li2 = "Enregistrer un nom de domaine";
			$li3 = "Transférer un nom de domaine";
			$li4 = "Hébergement web";
			$li5 = "Certificats SSL / HTTPS";
			$li6 = "E-mails";
			$li7 = "Blog";
			$li8 = "Support";
			$li9 = "Espace client";
			
			$li1_url = "https://www.netim.fr/";
			$li2_url = "https://www.netim.fr/nom-domaine/";
			$li3_url = "https://www.netim.fr/nom-domaine/transfert-entrant.html";
			$li4_url = "https://www.netim.fr/produits-services/hebergement-web/";
			$li5_url = "https://www.netim.fr/produits-services/certificat-ssl/";
			$li6_url = "https://www.netim.fr/produits-services/hebergement-mail/";
			$li7_url = "https://netim.blog/";
			$li8_url = "https://support.netim.com/fr/wiki/Accueil";
			$li9_url = "https://www.netim.fr/direct/";
			
			$titre = 'Ce site est hébergé par Netim';
			
			break;
				
		default:
			$html_lang = "en";
			
			// Domaines : catégories et promos
			$categories_text = "Netim offers nearly 1,000 geographical (ccTLDs) and generic (gTLDs) extensions.";
			$categories_text_btn = "Find the perfect<br />domain name";
			$categories_url = "https://www.netim.com/domain-name/search-by-category.html";
			
			// Promotions
			$promos_text = "Netim regularly offer discounts on domain names. Some extension start at $1.50 excl.tax for the first year.";
			$promos_text_btn = "Discover all of<br />our special offers";
			$promos_url = "https://www.netim.com/domain-name/discounted-extensions.html";
			
			// Découverte des offres d'hébergement
			$hosting_text = "Whether your website is personal, professional or an online store, you will find the perfect offer for your projects!";
			$hosting_text_btn = "Discover our web<br />hosting plans";
			$hosting_url = "https://www.netim.com/products-services/web-hosting/";
			
			// Signaler un abus
			$report_txt = "Report abuse";
			$report_url = "https://www.netim.com/submit-a-complaint.html";
			
			// Menu footer
			$li1 = "Netim.com";
			$li2 = "Register a domain";
			$li3 = "Transfer a domain";
			$li4 = "Web Hosting";
			$li5 = "SSL/HTTPS certificates";
			$li6 = "Emails";
			$li7 = "Blog";
			$li8 = "Support";
			$li9 = "Customer center";
			
			$li1_url = "https://www.netim.com/";
			$li2_url = "https://www.netim.com/domain-name/";
			$li3_url = "https://www.netim.com/domain-name/transfer.html";
			$li4_url = "https://www.netim.com/products-services/web-hosting/";
			$li5_url = "https://www.netim.com/products-services/ssl-certificate/";
			$li6_url = "https://www.netim.com/products-services/mail-hosting/";
			$li7_url = "https://netim.blog/en/";
			$li8_url = "https://support.netim.com/en/wiki/Main_Page";
			$li9_url = "https://www.netim.com/direct/";
			
			$titre = 'This website is hosted by Netim';
			
			break;
	}
?>

<!doctype html>
<html lang="<?php echo $html_lang ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noindex, follow">
		
		<style>
			/* min-reset-adapté */
			html,body,p,ul,li,hr,h1,h2{margin:0;padding:0}h1,h2{font-size:100%;font-weight:normal}ul{list-style:none}button{margin:0}html{-webkit-box-sizing:border-box;box-sizing:border-box}*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit}img{height:auto;max-width:100%}
			/* end */

			html {
				height: 100%;
				font-family: 'Nunito', sans-serif;
				font-weight: 400;
				font-size: 14px;
				color: #777;
				background: -webkit-gradient(linear, left top, left bottom, from(rgba(44,166,209,1)), to(rgba(255,255,255,1)));
				background: -o-linear-gradient(rgba(44,166,209,1) 0%, rgba(255,255,255,1) 100%);
				background: linear-gradient(rgba(44,166,209,1) 0%, rgba(255,255,255,1) 100%);
				background-repeat: no-repeat;
				background-attachment: fixed;
			}

			body {
				padding: 20px;
				text-align: center;
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
					-ms-flex-direction: column;
						flex-direction: column;
				-webkit-box-pack: justify;
					-ms-flex-pack: justify;
						justify-content: space-between;
			}

			header { margin: 50px 0 20px; }

			header p { color: #fff; }

			main,
			footer {
				margin-bottom: 40px;
			}

			a { 
				color: #2ca6d1;
				text-decoration: none;
			}
			a:hover { color: #0f4663; }

			a, p, .btn {
				-webkit-transition: all .3s;
				-o-transition: all .3s;
				transition: all .3s;
			}

			hr {
				width: 50%;
				margin: auto auto 30px;
				border: 1px solid #2ca6d1;
			}

			h1 {
				width: 280px;
				margin: auto;
				margin-bottom: 20px;
				font-size: 1.9em;
				font-weight: bold;
				color: #fff;
			}

			h1 span {
				display: block;
			}

			h1 strong {
				display: inline-block;
				width: 280px;
				color: #0f4663;
				font-size: 1.5em;
			}


			/* ------ MAIN ------ */
			section {
				display: -ms-grid;
				display: grid;
				grid-gap: 70px;
				padding: 50px;
			}

			.encarts article {
				background: #fcfcfc;
				width: 230px;
				height: 265px;
				margin: auto;
				border-radius: 5px;
				-webkit-box-shadow: 0 0 2px 2px rgba(0,0,0,0.16);
						box-shadow: 0 0 2px 2px rgba(0,0,0,0.16);
				position: relative;
			}

			.encarts article .circle-img {
				width: 90px;
				height: 90px;
				position: absolute;
				top: calc(0% - 45px);
				left: calc(50% - 45px);
				border: 7px solid #fcfcfc;
				border-radius: 50%;
				background: -webkit-gradient(linear, left top, left bottom, from(#197a97), to(#2ca6d1));
				background: -o-linear-gradient(#197a97, #2ca6d1);
				background: linear-gradient(#197a97, #2ca6d1);
				-webkit-box-shadow: 0 0 2px 2px rgba(0,0,0,0.16);
						box-shadow: 0 0 2px 2px rgba(0,0,0,0.16);
				margin: auto;
			}

			.encarts article .circle-img img { width: 40%; }
			.encarts article:first-child .circle-img img { 
				width: 66%;
				padding-top: 8px;
			}

			/* Centrage du text */
			.encarts article {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-align: center;
					-ms-flex-align: center;
						align-items: center;
				-webkit-box-pack: center;
					-ms-flex-pack: center;
						justify-content: center;
			}

			.encarts article .article-txt {
				margin-bottom: 20px;
				padding: 0 20px;
			}

			.encarts article .btn {
				position: absolute;
				top: calc(100% - 70px);
				left: calc(50% - 85px);
			}
			/* ------ FOOTER ------ */
			footer li { margin-bottom: 20px; }


			/* ------ CLASSES GLOBALES ------ */
			.btn {
				width: 170px;
				-webkit-box-shadow: 0 0 2px 2px rgba(0,0,0,0.16);
						box-shadow: 0 0 2px 2px rgba(0,0,0,0.16);
				border-radius: 25px;
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-pack: center;
					-ms-flex-pack: center;
						justify-content: center;
				-webkit-box-align: center;
					-ms-flex-align: center;
						align-items: center;
				overflow: hidden;
				margin: auto;
			}

			.btn a {
				width: 100%;
				height: 100%;
			}

			.btn-action { 
				background: #fff;
				height: 40px;
			}
			.btn-action a { color: #fe8427; }
			.btn-action:hover { background: #fe8427; }
			.btn-action:hover a { color: #fff; }

			.btn-info { 
				background: #fe8427;
				height: 50px;
			}
			.btn-info a { color: #fff; }
			.btn-info:hover { background: #fff; }
			.btn-info:hover a { color: #fe8427; }

			.body-reseller { height: 75vh; }

			.colo-netim {
				background: #0059a0;
				border: 3px solid #0074d0;
			}

			.colo-reseller {
				background: #9f35ff;
				border: 3px solid #551a8a;
			}

			.footer-reseller hr {
				margin-bottom: 25px;
				margin-top: 25px;
			}

			.flx {
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
			}

			.flx-vdir {
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
					-ms-flex-direction: column;
						flex-direction: column;
			}

			.flx-align-center {
				-webkit-box-align:  center;
					-ms-flex-align:  center;
						align-items:  center;
			}

			.flx-jc-center {
				-webkit-box-pack: center;
					-ms-flex-pack: center;
						justify-content: center;
			}

			.flx-jc-spb {
				-webkit-box-pack: justify;
					-ms-flex-pack: justify;
						justify-content: space-between;
			}

			.mini-flag {
				position: absolute;
				width: 30px;
				padding: 0;
				cursor: pointer;
	/*			border: 1px solid #e4e4e4; */
			}

			.mini-flag img {
				border-radius: 50%;
				height: 26px;
				border: 3px solid rgba(255,255,255,0.5);
			}

			.mini-flag:focus { outline: none; }

			.fr { left: calc(50% + 5px); }
			.gb { left: calc(50% - 35px); }

			.opacity { opacity: .3; }

			/* ------ RESPONSIVE ------ */
			@media screen and (min-width: 768px) {
				h1 { width: inherit; }
				h1 strong { display: inline; }
			}

			@media screen and (min-width: 1024px) {
				header { margin: 100px 0 20px; }

				h1 span { display: inline; }

				main { margin-bottom: 20px; }

				footer { margin: 20px; }
				footer ul {
					width: 1000px;
					margin: auto;
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-pack: justify;
						-ms-flex-pack: justify;
							justify-content: space-between;
				}

				section { 
					-ms-grid-columns: (1fr)[3]; 
					grid-template-columns: repeat(3, 1fr);
					grid-gap: 20px;
					max-width: 1000px;
					margin: auto;
				}

				section.section-contact {
					-ms-grid-columns: 1fr;
					grid-template-columns: repeat(1, 1fr);
				}

				footer li { 
					height: 50px;
					max-width: 120px;
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-align: center;
						-ms-flex-align: center;
							align-items: center;
					margin-bottom: 20px;
				}
			}

			@media screen and (min-width: 1024px) and (min-height: 620px) {

				.body-netim { height: 100vh; }

				.footer-reseller {
					position: absolute;
					bottom: 0px;
					left: calc(50% - 500px);
				}
			}
		</style>
		
		<title><?php echo $titre ?></title>
	</head>

	<body class="body-netim">

		<!-- ELEMENTS EN POSITION ABSOLUTE -->
		<a href="?lang=en" class="mini-flag gb <?php echo ($lang!="en")?'opacity':''; ?>">
			<img src="data:image/png;base64,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UmVhZHlxyWU8AAADJmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RjNCNDhDNEVGNjVEMTFFOTlFNTlDMEY1MTNGQ0Q1NEYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RjNCNDhDNEZGNjVEMTFFOTlFNTlDMEY1MTNGQ0Q1NEYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGM0I0OEM0Q0Y2NUQxMUU5OUU1OUMwRjUxM0ZDRDU0RiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGM0I0OEM0REY2NUQxMUU5OUU1OUMwRjUxM0ZDRDU0RiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsDaDXMAAAnHSURBVHja3JgLWM5nH8c/z9P5XFIqIYxmW2Zs2NsyTJRRc5p1msMm6UWzV1YjNu0asq3NMVI0KSKLmWMxzKmNsXlRCdWb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" alt="EN" />
			
		</a>
		<a href="?lang=fr" class="mini-flag fr <?php echo ($lang!="fr")?'opacity':''; ?>">
			<img src="data:image/png;base64,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UmVhZHlxyWU8AAADFGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxNzVCODVBQUY2NUUxMUU5OTFDNkVCRkQ0NkMzRTRDOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxNzVCODVBOUY2NUUxMUU5OTFDNkVCRkQ0NkMzRTRDOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9IkIwQTJBQzUwMjZENDcyQjM3NzlGNDI2NUM4NTdCNTQ2IiBzdFJlZjpkb2N1bWVudElEPSJCMEEyQUM1MDI2RDQ3MkIzNzc5RjQyNjVDODU3QjU0NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pscjh/4AAAM6SURBVHja7N1PbhMxGIbxmVGWcAN2HARxAK7FmhWsuuUYXIoFEkJjQqtOIpy6ziTx2M7vUSVQKj7UzNPv9Z+ZeJzefx0emcenP4cxDM9//Z+w/3r+3hSGlyhcav715+OHdz++f9pXDMM0tEkYwjROPz9/+f3tYXrz9uT7MD6+DxdSplSrlyFiHFATE68q61udsJujS7JPqPDy5cuJrcKleu1Wy4+cfq/qLDUNgChEM1GY0xhTMXQsaZWl2h0rJibCZ5ctXkrHgihEQ1EYT8SWXpc5/p+jdc7CpeaOErGbH0XHArHQUBTmLEUu+3rHu0LxP9yqlO0cHWuLCfwjHZciFu5yVpg5ZwlX+jW7YqlX/qMQ+i6lY8EYCyAWiAViAcQCsUAsgFggFogFEAvEArEAYoFYIBZALBALxAKIBWKBWACxQCwQCyAWiAViAcQCsUAsgFggFogFEAvEArEAYrXCSCyAWM3gWDmAWCAWiAUQC8RCB+wyz4t/OmY3fcjgVqXm4DrqWCAWsD4Kl6yZokBZ0ufwytHR8wtLha1KOcVexwKxGsLgvcIojGMoTqtlIpZJ6VKiUMcCsbAB3TTf3ZSRTCcmYqvfuBuU6mmB1P1YALFQw6wwc4Mv3s5bvVd4YSnoWCBWY4NevauyKIxXIOM1zJO3uMwZrxQq9S8ULZLqWCAWsDIKp/YHJz0tkHrEHuherI4G7t0039QdpPGMLL0muVUp6FggFnCjWWFm1lwxtiSgjgXcgVjBXmFtUZiaxefd7XnFe1DXlZr3r9gr1LFArEbQrYh1mxGW60gsEEsUYv2s8MQz7NFjC+kZ3Dy+PoMrVsrviI4FUQjzkHOjMLEm2cwCKR91LBCrpfywV0gsEAu4c7Hc3VDdrDA1dKn7GYpDKVLpWCBWS7NC1BuF8UecnbyCISOtCpcShToWiAVcJQpXn6w0Zbxy01LQsUAss0JcEoWJO0gPF27t/Z+FSo02oXUsEKsh7BVWF4Wb3/95eSmn2OtYIBZwSRSeO6/POVmpcCkLpjoWiNUQBu8VRmHqqfbk0fOJswVLl+ooCj1iDxBLqtcwKzz+XJc5ozVnfkRM4VLQsdAhfwUYADxahZXbycD9AAAAAElFTkSuQmCC" alt="FR" />
		</a>
		<!-- END -->

		
		<header>
			<h1><?php echo $titre ?></h1>
		</header>

		<main>

			<!-- LES 3 ENCARTS -->
			<section class="encarts">
				<article>
					<p class="circle-img flx flx-jc-center flx-align-center">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAABeCAYAAADBuu07AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY3RURFRkI2NENCOTExRUE5NDc4REIwQjgyQzhEMzcxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY3RURFRkI3NENCOTExRUE5NDc4REIwQjgyQzhEMzcxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjdFREVGQjQ0Q0I5MTFFQTk0NzhEQjBCODJDOEQzNzEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjdFREVGQjU0Q0I5MTFFQTk0NzhEQjBCODJDOEQzNzEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7HaBqpAAAQz0lEQVR42uxd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" alt="url www search" />
					</p>
					<p class="article-txt">
						<?php echo $categories_text ?>
					</p>
					<p class="btn btn-info">
						<a class="flx flx-jc-center flx-align-center" href="<?php echo $categories_url ?>"><?php echo $categories_text_btn ?></a>
					</p>
				</article>
				<article>
					<p class="circle-img flx flx-jc-center flx-align-center">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACcCAYAAACdmlKEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiZTE2ZTY2Ny1hMmIyLWFlNDQtODY5MC1hNjlhZGJjNjFkNTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MjVDQTY5QzU0Q0JBMTFFQTlEQjE5NjNCMUMzOTQ3MDUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MjVDQTY5QzQ0Q0JBMTFFQTlEQjE5NjNCMUMzOTQ3MDUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTM2OGZmNTQtZGRkOS1kZjQwLTkwZDUtZGRkMGJjYzFmOGUwIiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6MWExOWQ1MjAtNDgzOS05MDRjLThmNDEt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" alt="white percent" />
					</p>
					<p class="article-txt">
						<?php echo $promos_text ?>
					</p>
					<p class="btn btn-info">
						<a class="flx flx-jc-center flx-align-center" href="<?php echo $promos_url ?>"><?php echo $promos_text_btn ?></a>
					</p>
				</article>
				<article>
					<p class="circle-img flx flx-jc-center flx-align-center">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACqCAYAAABPubY0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU1RjI3NTlGNENCQTExRUFCM0ZERDg2ODhGMjYxNkIzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU1RjI3NUEwNENCQTExRUFCM0ZERDg2ODhGMjYxNkIzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTVGMjc1OUQ0Q0JBMTFFQUIzRkREODY4OEYyNjE2QjMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTVGMjc1OUU0Q0JBMTFFQUIzRkREODY4OEYyNjE2QjMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6rPvnzAAAIV0lEQVR42uyd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" alt="white database" />
					</p>
					<p class="article-txt">
						<?php echo $hosting_text ?>
					</p>
					<p class="btn btn-info">
						<a class="flx flx-jc-center flx-align-center" href="<?php echo $hosting_url ?>"><?php echo $hosting_text_btn ?></a>
					</p>
				</article>
			</section>
	
			<!-- LIENS CONTACT ET REPORTER UN ABUS -->
			<section class="section-contact">
				<p class="btn btn-action">
					<a class="flx flx-jc-center flx-align-center" href="<?php echo $report_url ?>"><?php echo $report_txt ?></a>
				</p>
			</section>

		</main>

		<footer>
			<hr>
			<nav>
				<ul>
					<li><a href="<?php echo $li1_url ?>"><?php echo $li1 ?></a></li>
					<li><a href="<?php echo $li2_url ?>"><?php echo $li2 ?></a></li>
					<li><a href="<?php echo $li3_url ?>"><?php echo $li3 ?></a></li>
					<li><a href="<?php echo $li4_url ?>"><?php echo $li4 ?></a></li>
					<li><a href="<?php echo $li5_url ?>"><?php echo $li5 ?></a></li>
					<li><a href="<?php echo $li6_url ?>"><?php echo $li6 ?></a></li>
					<li><a href="<?php echo $li7_url ?>"><?php echo $li7 ?></a></li>
					<li><a href="<?php echo $li8_url ?>"><?php echo $li8 ?></a></li>
					<li><a href="<?php echo $li9_url ?>"><?php echo $li9 ?></a></li>
				</ul>
			</nav>
		</footer>

	</body>
</html>