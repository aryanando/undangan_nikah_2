<?php

include_once("./config-database.php");
include_once("./environment.php");

$coments_data = mysqli_query($mysqli, "SELECT * FROM coments ORDER BY id DESC");

// var_dump($coments);
// die();

if (isset($_GET['to'])) {
	$data = str_replace('+', ' ', $_GET['to']);
} else {
	$data = "Data Kosong";
}

?>


<!DOCTYPE html>
<html lang="id">

<!-- Mirrored from inv.wekita.id/tema-05/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 09:35:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<style type="text/css">
		.cui-comment-text img {
			max-width: 100% !important;
		}
	</style>
	<meta name='robots' content='noindex, follow' />

	<!-- This site is optimized with the Yoast SEO plugin v20.13 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Undangan Website Tema 05</title>
	<meta name="description" content="Titik Jamal Intimate Wedding - Official Website" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="TITIK & JAMAL" />
	<meta property="og:description" content="Titik Jamal Intimate Wedding - Official Website" />
	<meta property="og:url" content="https://undangan.arsya.tech" />
	<meta property="og:site_name" content="Wekita.id" />
	<meta property="article:modified_time" content="2023-05-30T17:25:12+00:00" />
	<meta property="og:image" content="https://undangan.arsya.tech/Assets/images/Gallery-1.jpeg" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="800" />
	<meta property="og:image:type" content="image/webp" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Estimasi waktu membaca" />
	<meta name="twitter:data1" content="7 menit" />
	<script type="application/ld+json" class="yoast-schema-graph">
		{
			"@context": "https://schema.org",
			"@graph": [{
				"@type": "WebPage",
				"@id": "https://inv.wekita.id/tema-05/",
				"url": "https://inv.wekita.id/tema-05/",
				"name": "Undangan Website Tema 05",
				"isPartOf": {
					"@id": "https://inv.wekita.id/#website"
				},
				"primaryImageOfPage": {
					"@id": "https://inv.wekita.id/tema-05/#primaryimage"
				},
				"image": {
					"@id": "https://inv.wekita.id/tema-05/#primaryimage"
				},
				"thumbnailUrl": "https://inv.wekita.id/wp-content/uploads/2023/05/Slide5.webp",
				"datePublished": "2023-05-26T12:43:17+00:00",
				"dateModified": "2023-05-30T17:25:12+00:00",
				"description": "Buat undangan website untuk pernikahanmu secara mudah, murah dan cepat. Jadikan acara kamu jadi lebih berkesan ! Undangan Website Tema 05",
				"breadcrumb": {
					"@id": "https://inv.wekita.id/tema-05/#breadcrumb"
				},
				"inLanguage": "id",
				"potentialAction": [{
					"@type": "ReadAction",
					"target": ["https://inv.wekita.id/tema-05/"]
				}]
			}, {
				"@type": "ImageObject",
				"inLanguage": "id",
				"@id": "https://inv.wekita.id/tema-05/#primaryimage",
				"url": "https://inv.wekita.id/wp-content/uploads/2023/05/Slide5.webp",
				"contentUrl": "https://inv.wekita.id/wp-content/uploads/2023/05/Slide5.webp",
				"width": 800,
				"height": 800
			}, {
				"@type": "BreadcrumbList",
				"@id": "https://inv.wekita.id/tema-05/#breadcrumb",
				"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"name": "Beranda",
					"item": "https://inv.wekita.id/"
				}, {
					"@type": "ListItem",
					"position": 2,
					"name": "Undangan Website Tema 05"
				}]
			}, {
				"@type": "WebSite",
				"@id": "https://inv.wekita.id/#website",
				"url": "https://inv.wekita.id/",
				"name": "Wekita.id",
				"description": "Sebar Undangan sambil Rebahan",
				"inLanguage": "id"
			}]
		}
	</script>
	<!-- / Yoast SEO plugin. -->

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="alternate" type="application/rss+xml" title="Wekita.id &raquo; Feed" href="https://inv.wekita.id/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Wekita.id &raquo; Umpan Komentar" href="https://inv.wekita.id/comments/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Wekita.id &raquo; Undangan Website Tema 05 Umpan Komentar" href="feed/index.html" />
	<script>
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/inv.wekita.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=c6d4f54ff5f7e221a70cdd46daa396b3"
			}
		};
		/*! This file is auto-generated */
		! function(i, n) {
			var o, s, e;

			function c(e) {
				try {
					var t = {
						supportTests: e,
						timestamp: (new Date).valueOf()
					};
					sessionStorage.setItem(o, JSON.stringify(t))
				} catch (e) {}
			}

			function p(e, t, n) {
				e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
				var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
					r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
				return t.every(function(e, t) {
					return e === r[t]
				})
			}

			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
					case "emoji":
						return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
				}
				return !1
			}

			function f(e, t, n) {
				var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
					a = r.getContext("2d", {
						willReadFrequently: !0
					}),
					o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
				return e.forEach(function(e) {
					o[e] = t(a, e, n)
				}), o
			}

			function t(e) {
				var t = i.createElement("script");
				t.src = e, t.defer = !0, i.head.appendChild(t)
			}
			"undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, e = new Promise(function(e) {
				i.addEventListener("DOMContentLoaded", e, {
					once: !0
				})
			}), new Promise(function(t) {
				var n = function() {
					try {
						var e = JSON.parse(sessionStorage.getItem(o));
						if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
					} catch (e) {}
					return null
				}();
				if (!n) {
					if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
						var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
							r = new Blob([e], {
								type: "text/javascript"
							}),
							a = new Worker(URL.createObjectURL(r), {
								name: "wpTestEmojiSupports"
							});
						return void(a.onmessage = function(e) {
							c(n = e.data), a.terminate(), t(n)
						})
					} catch (e) {}
					c(n = f(s, u, p))
				}
				t(n)
			}).then(function(e) {
				for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
				n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
					n.DOMReady = !0
				}
			}).then(function() {
				return e
			}).then(function() {
				var e;
				n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
			}))
		}((window, document), window._wpemojiSettings);
	</script>
	<style>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min85ff.css?ver=c6d4f54ff5f7e221a70cdd46daa396b3' media='all' />
	<style id='classic-theme-styles-inline-css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);

		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='uaf_client_css-css' href='../wp-content/uploads/useanyfont/uaf5eeb.css?ver=1692844999' media='all' />
	<link rel='stylesheet' id='wdp-centered-css-css' href='../wp-content/plugins/weddingpress/assets/css/wdp-centered-timeline.min85ff.css?ver=c6d4f54ff5f7e221a70cdd46daa396b3' media='all' />
	<link rel='stylesheet' id='wdp-horizontal-css-css' href='../wp-content/plugins/weddingpress/assets/css/wdp-horizontal-styles.min85ff.css?ver=c6d4f54ff5f7e221a70cdd46daa396b3' media='all' />
	<link rel='stylesheet' id='wdp-fontello-css-css' href='../wp-content/plugins/weddingpress/assets/css/wdp-fontello85ff.css?ver=c6d4f54ff5f7e221a70cdd46daa396b3' media='all' />
	<link rel='stylesheet' id='exad-main-style-css' href='../wp-content/plugins/weddingpress/assets/css/exad-styles.min85ff.css?ver=c6d4f54ff5f7e221a70cdd46daa396b3' media='all' />
	<link rel='stylesheet' id='cui_style-css' href='../wp-content/plugins/weddingpress/addons/comment-kit2/css/cui_style8a54.css?ver=1.0.0' media='screen' />
	<style id='cui_style-inline-css'>
		.cui-wrapper {
			font-size: 14px
		}

		.cui-post-author {
			color: white !important;
			background: #777 !important;
		}

		.cui-wrapper ul.cui-container-comments li.cui-item-comment .cui-comment-avatar img {
			max-width: 28px;
			max-height: 28px;
		}

		.cui-wrapper ul.cui-container-comments li.cui-item-comment .cui-comment-content {
			margin-left: 38px;
		}

		.cui-wrapper ul.cui-container-comments li.cui-item-comment ul .cui-comment-avatar img {
			max-width: 24px;
			max-height: 24px;
		}

		.cui-wrapper ul.cui-container-comments li.cui-item-comment ul ul .cui-comment-avatar img {
			max-width: 21px;
			max-height: 21px;
		}

		.cui_comment_count_card.cui_card-tidak_hadir {
			background-color: #d90a11;
		}

		.cui_comment_count_card.cui_card-hadir {
			background-color: #3D9A62;
		}

		.cui_comment_count_card.cui_card-masih_ragu {
			background-color: #d7a916;
		}
	</style>
	<link rel='stylesheet' id='hello-elementor-css' href='../wp-content/themes/hello-elementor/style.min653d.css?ver=2.7.1' media='all' />
	<link rel='stylesheet' id='hello-elementor-theme-style-css' href='../wp-content/themes/hello-elementor/theme.min653d.css?ver=2.7.1' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='../wp-content/plugins/elementor/assets/css/frontend-lite.min6319.css?ver=3.15.2' media='all' />
	<link rel='stylesheet' id='elementor-post-7-css' href='../wp-content/uploads/elementor/css/post-734e3.css?ver=1691694414' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mind618.css?ver=5.21.0' media='all' />
	<link rel='stylesheet' id='swiper-css' href='../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='elementor-pro-css' href='../wp-content/plugins/elementor-pro/assets/css/frontend-lite.min5829.css?ver=3.15.1' media='all' />
	<link rel='stylesheet' id='weddingpress-wdp-css' href='../wp-content/plugins/weddingpress/assets/css/wdp9b4a.css?ver=3.0.11' media='all' />
	<link rel='stylesheet' id='kirim-kit-css' href='../wp-content/plugins/weddingpress/assets/css/guest-book9b4a.css?ver=3.0.11' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='../wp-content/uploads/elementor/css/global34e3.css?ver=1691694414' media='all' />
	<link rel='stylesheet' id='elementor-post-716-css' href='../wp-content/uploads/elementor/css/post-71676ee.css?ver=1691696298' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CItaliana%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPlayball%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CComic+Neue%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CGreat+Vibes%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAllura%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBilbo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJura%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.1' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script src='../wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
	<script src='../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1' id='jquery-migrate-js'></script>
	<link rel="https://api.w.org/" href="https://inv.wekita.id/wp-json/" />
	<link rel="alternate" type="application/json" href="https://inv.wekita.id/wp-json/wp/v2/pages/716" />
	<link rel="alternate" type="application/json+oembed" href="https://inv.wekita.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Finv.wekita.id%2Ftema-05%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://inv.wekita.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Finv.wekita.id%2Ftema-05%2F&amp;format=xml" />
	<meta name="format-detection" content="telephone=no">
	<meta name="generator" content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<link rel="icon" href="../wp-content/uploads/2023/05/cropped-loglog-32x32.png" sizes="32x32" />
	<link rel="icon" href="../wp-content/uploads/2023/05/cropped-loglog-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="../wp-content/uploads/2023/05/cropped-loglog-180x180.png" />
	<meta name="msapplication-TileImage" content="https://inv.wekita.id/wp-content/uploads/2023/05/cropped-loglog-270x270.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body data-rsssl=1 class="page-template page-template-elementor_canvas page page-id-716 elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-716" style="background-color: #E8D3C3;">
	<div data-elementor-type="wp-page" data-elementor-id="716" class="elementor elementor-716" data-elementor-post-type="page">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-1e0dfa25 closeclick elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="1e0dfa25" data-element_type="section">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e2ce3ba wdp-sticky-section-no" data-id="4e2ce3ba" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-339f28e5 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default wdp-sticky-section-no" data-id="339f28e5" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1cdb9413 wdp-sticky-section-no" data-id="1cdb9413" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-5649cbc1 elementor-absolute wdp-sticky-section-no elementor-widget elementor-widget-image" data-id="5649cbc1" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<style>
													/*! elementor - v3.15.0 - 09-08-2023 */
													.elementor-widget-image {
														text-align: center
													}

													.elementor-widget-image a {
														display: inline-block
													}

													.elementor-widget-image a img[src$=".svg"] {
														width: 48px
													}

													.elementor-widget-image img {
														vertical-align: middle;
														display: inline-block
													}
												</style> <img decoding="async" fetchpriority="high" width="800" height="322" src="https://inv.wekita.id/wp-content/uploads/2023/05/Mini-BUNGA-TEMA-05-COVER2-1-1024x412.webp" class="attachment-large size-large wp-image-228" alt="" srcset="https://inv.wekita.id/wp-content/uploads/2023/05/Mini-BUNGA-TEMA-05-COVER2-1-1024x412.webp 1024w, https://inv.wekita.id/wp-content/uploads/2023/05/Mini-BUNGA-TEMA-05-COVER2-1-300x121.webp 300w, https://inv.wekita.id/wp-content/uploads/2023/05/Mini-BUNGA-TEMA-05-COVER2-1-768x309.webp 768w, https://inv.wekita.id/wp-content/uploads/2023/05/Mini-BUNGA-TEMA-05-COVER2-1.webp 1326w" sizes="(max-width: 800px) 100vw, 800px" />
											</div>
										</div>
										<section class="elementor-section elementor-inner-section elementor-element elementor-element-3a5705fe elementor-section-height-min-height elementor-section-boxed elementor-section-height-default wdp-sticky-section-no" data-id="3a5705fe" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2d82244b wdp-sticky-section-no" data-id="2d82244b" data-element_type="column">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-element elementor-element-57ee58b wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="57ee58b" data-element_type="widget" data-widget_type="spacer.default">
															<div class="elementor-widget-container">
																<style>
																	/*! elementor - v3.15.0 - 09-08-2023 */
																	.elementor-column .elementor-spacer-inner {
																		height: var(--spacer-size)
																	}

																	.e-con {
																		--container-widget-width: 100%
																	}

																	.e-con-inner>.elementor-widget-spacer,
																	.e-con>.elementor-widget-spacer {
																		width: var(--container-widget-width, var(--spacer-size));
																		--align-self: var(--container-widget-align-self, initial);
																		--flex-shrink: 0
																	}

																	.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
																	.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
																	.e-con>.elementor-widget-spacer>.elementor-widget-container,
																	.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
																		height: 100%
																	}

																	.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
																	.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
																		height: var(--container-widget-height, var(--spacer-size))
																	}
																</style>
																<div class="elementor-spacer">
																	<div class="elementor-spacer-inner"></div>
																</div>
															</div>
														</div>
														<div class="elementor-element elementor-element-62206629 wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="62206629" data-element_type="widget" data-widget_type="text-editor.default">
															<div class="elementor-widget-container">
																<style>
																	/*! elementor - v3.15.0 - 09-08-2023 */
																	.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
																		background-color: #69727d;
																		color: #fff
																	}

																	.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
																		color: #69727d;
																		border: 3px solid;
																		background-color: transparent
																	}

																	.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
																		margin-top: 8px
																	}

																	.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
																		width: 1em;
																		height: 1em
																	}

																	.elementor-widget-text-editor .elementor-drop-cap {
																		float: left;
																		text-align: center;
																		line-height: 1;
																		font-size: 50px
																	}

																	.elementor-widget-text-editor .elementor-drop-cap-letter {
																		display: inline-block
																	}
																</style>
																<p>THE WEDDING OF</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-381f0b30 wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="381f0b30" data-element_type="widget" data-widget_type="text-editor.default">
															<div class="elementor-widget-container">
																<p>Titik &amp; Jamal</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<section class="elementor-section elementor-inner-section elementor-element elementor-element-4aeaa2b5 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default wdp-sticky-section-no" data-id="4aeaa2b5" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-707908c9 wdp-sticky-section-no" data-id="707908c9" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-element elementor-element-4c7c33a9 wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="4c7c33a9" data-element_type="widget" data-widget_type="text-editor.default">
															<div class="elementor-widget-container">
																Kepada Bapak/Ibu/Saudara/i </div>
														</div>
														<div class="elementor-element elementor-element-b5d5d10 wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="b5d5d10" data-element_type="widget" data-widget_type="text-editor.default">
															<div class="elementor-widget-container">
																<?= $data ?> </div>
														</div>
														<div class="elementor-element elementor-element-7b7396af elementor-align-center clicktoclose wdp-sticky-section-no elementor-widget elementor-widget-button" data-id="7b7396af" data-element_type="widget" id="tombol-buka" data-widget_type="button.default">
															<div class="elementor-widget-container">
																<div class="elementor-button-wrapper">
																	<a class="elementor-button elementor-size-sm" role="button">
																		<span class="elementor-button-content-wrapper">
																			<span class="elementor-button-icon elementor-align-icon-left">
																				<i aria-hidden="true" class="far fa-envelope-open"></i>
																			</span>
																			<span class="elementor-button-text">Buka
																				Undangan</span>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="elementor-element elementor-element-30714b3e wdp-sticky-section-no elementor-widget elementor-widget-html" data-id="30714b3e" data-element_type="widget" id="hide" data-widget_type="html.default">
															<div class="elementor-widget-container">
																<script>
																	document.addEventListener('DOMContentLoaded', function() {
																		jQuery(function($) {
																			$('.clicktoclose').click(function() {
																				$(this).parents('.closeclick').slideUp(500);
																			});
																		});
																	});
																</script>

																<style>
																	.clicktoclose {
																		cursor: pointer;
																	}
																</style>

																<script>
																	var x = document.getElementById("song");
																	window.onbeforeunload = function() {
																		window.scrollTo(0, 0)
																	};
																	disableScrolling();
																	document.body.style.overflowY = "hidden";
																	document.body.style.heigth = "100vh";
																	document.getElementById("tombol-buka")
																		.onclick = function() {
																			myFunction()
																		};

																	function myFunction() {
																		document.body.style.overflowY = "unset";
																		document.getElementById("tombol-buka").style.visibility = "hidden";
																		enableScrolling();
																		playAudio()
																	}

																	function disableScrolling() {
																		var x = window.scrollX;
																		var y = window.scrollY;
																		window.onscroll = function() {
																			window.scrollTo(x, y)
																		}
																	}

																	function enableScrolling() {
																		window.onscroll = function() {}
																	}

																	function playAudio() {
																		x.play()
																	}

																	function pauseAudio() {
																		x.pause()
																	}
																</script>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-2be4a376 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="2be4a376" data-element_type="section" id="home">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-59efdecd wdp-sticky-section-no" data-id="59efdecd" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-18234500 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default wdp-sticky-section-no" data-id="18234500" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3b697f58 wdp-sticky-section-no" data-id="3b697f58" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-background-overlay"></div>
										<div class="elementor-element elementor-element-11e911b2 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="11e911b2" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-11770958 elementor-section-height-min-height elementor-section-content-top elementor-section-boxed elementor-section-height-default wdp-sticky-section-no" data-id="11770958" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2d0b2 wdp-sticky-section-no" data-id="2d0b2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-background-overlay"></div>
										<div class="elementor-element elementor-element-5f43421c animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading" data-id="5f43421c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<style>
													/*! elementor - v3.15.0 - 09-08-2023 */
													.elementor-heading-title {
														padding: 0;
														margin: 0;
														line-height: 1
													}

													.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
														color: inherit;
														font-size: inherit;
														line-height: inherit
													}

													.elementor-widget-heading .elementor-heading-title.elementor-size-small {
														font-size: 15px
													}

													.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
														font-size: 19px
													}

													.elementor-widget-heading .elementor-heading-title.elementor-size-large {
														font-size: 29px
													}

													.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
														font-size: 39px
													}

													.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
														font-size: 59px
													}
												</style>
												<h2 class="elementor-heading-title elementor-size-default">Titik &amp;
													Jamal</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-44a9e727 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="44a9e727" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p>We invite you to intimate wedding party</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-1a6325f6 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-countdown" data-id="1a6325f6" data-element_type="widget" data-settings="{&quot;_animation_mobile&quot;:&quot;pulse&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="weddingpress-countdown.default">
											<div class="elementor-widget-container">

												<div class="wpkoi-elements-countdown-wrapper">
													<div class="wpkoi-elements-countdown-container wpkoi-elements-countdown-label-block ">
														<ul id="wpkoi-elements-countdown-1a6325f6" class="wpkoi-elements-countdown-items" data-date="Oct 30 2023 09:00:00">
															<li class="wpkoi-elements-countdown-item">
																<div class="wpkoi-elements-countdown-days"><span data-days class="wpkoi-elements-countdown-digits">00</span><span class="wpkoi-elements-countdown-label">Hari</span>
																</div>
															</li>
															<li class="wpkoi-elements-countdown-item">
																<div class="wpkoi-elements-countdown-hours"><span data-hours class="wpkoi-elements-countdown-digits">00</span><span class="wpkoi-elements-countdown-label">Jam</span>
																</div>
															</li>
															<li class="wpkoi-elements-countdown-item">
																<div class="wpkoi-elements-countdown-minutes"><span data-minutes class="wpkoi-elements-countdown-digits">00</span><span class="wpkoi-elements-countdown-label">Menit</span>
																</div>
															</li>
															<li class="wpkoi-elements-countdown-item">
																<div class="wpkoi-elements-countdown-seconds"><span data-seconds class="wpkoi-elements-countdown-digits">00</span><span class="wpkoi-elements-countdown-label">Detik</span>
																</div>
															</li>
														</ul>
														<div class="clearfix"></div>
													</div>
												</div>


												<script type="text/javascript">
													jQuery(document).ready(function($) {
														'use strict';
														$("#wpkoi-elements-countdown-1a6325f6").countdown();
													});
												</script>

											</div>
										</div>
										<div class="elementor-element elementor-element-76fd3571 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="76fd3571" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p>Senin, 30 Oktober 2023</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-67e0699d elementor-align-center elementor-tablet-align-center elementor-mobile-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button" data-id="67e0699d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;swing&quot;}" data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm" href="#date">
														<span class="elementor-button-content-wrapper">
															<span class="elementor-button-text">Save The Date</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-eef1460 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="eef1460" data-element_type="section" id="mempelai">
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68b238ad wdp-sticky-section-no" data-id="68b238ad" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-f39e077 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="f39e077" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1c70e713 wdp-sticky-section-no" data-id="1c70e713" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-4a77ba6e reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="4a77ba6e" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">
													Assalamu'alaikum Wr. Wb.</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-48ac3b68 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="48ac3b68" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p>Tanpa mengurangi rasa hormat.</p>
												<p>Kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk
													menghadiri acara pernikahan kami :</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-d6d9f9 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image" data-id="d6d9f9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img decoding="async" width="768" height="751" src="/Assets/images/Picture1-2-768x751-1-1.png" class="elementor-animation-grow attachment-full size-full wp-image-243" alt="" srcset="/Assets/images/Picture1-2-768x751-1-1.png 768w, /Assets/images/Picture1-2-768x751-1-1.png 300w" sizes="(max-width: 768px) 100vw, 768px" />
											</div>
										</div>
										<div class="elementor-element elementor-element-3b66048b reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="3b66048b" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Titik Hidayati​</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-2858f1b4 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="2858f1b4" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												Putri Kedua Bapak Maliki <br>&amp; Ibu Choiriyah </div>
										</div>
										<div class="elementor-element elementor-element-5ec2870d e-grid-align-tablet-center e-grid-align-mobile-center reveal elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="5ec2870d" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<style>
													/*! elementor - v3.15.0 - 09-08-2023 */
													.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
													.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
													.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
														line-height: 1;
														font-size: 0
													}

													.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
														display: inline-grid
													}

													.elementor-widget-social-icons .elementor-grid {
														grid-column-gap: var(--grid-column-gap, 5px);
														grid-row-gap: var(--grid-row-gap, 5px);
														grid-template-columns: var(--grid-template-columns);
														justify-content: var(--justify-content, center);
														justify-items: var(--justify-content, center)
													}

													.elementor-icon.elementor-social-icon {
														font-size: var(--icon-size, 25px);
														line-height: var(--icon-size, 25px);
														width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
														height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
													}

													.elementor-social-icon {
														--e-social-icon-icon-color: #fff;
														display: inline-flex;
														background-color: #69727d;
														align-items: center;
														justify-content: center;
														text-align: center;
														cursor: pointer
													}

													.elementor-social-icon i {
														color: var(--e-social-icon-icon-color)
													}

													.elementor-social-icon svg {
														fill: var(--e-social-icon-icon-color)
													}

													.elementor-social-icon:last-child {
														margin: 0
													}

													.elementor-social-icon:hover {
														opacity: .9;
														color: #fff
													}

													.elementor-social-icon-android {
														background-color: #a4c639
													}

													.elementor-social-icon-apple {
														background-color: #999
													}

													.elementor-social-icon-behance {
														background-color: #1769ff
													}

													.elementor-social-icon-bitbucket {
														background-color: #205081
													}

													.elementor-social-icon-codepen {
														background-color: #000
													}

													.elementor-social-icon-delicious {
														background-color: #39f
													}

													.elementor-social-icon-deviantart {
														background-color: #05cc47
													}

													.elementor-social-icon-digg {
														background-color: #005be2
													}

													.elementor-social-icon-dribbble {
														background-color: #ea4c89
													}

													.elementor-social-icon-elementor {
														background-color: #d30c5c
													}

													.elementor-social-icon-envelope {
														background-color: #ea4335
													}

													.elementor-social-icon-facebook,
													.elementor-social-icon-facebook-f {
														background-color: #3b5998
													}

													.elementor-social-icon-flickr {
														background-color: #0063dc
													}

													.elementor-social-icon-foursquare {
														background-color: #2d5be3
													}

													.elementor-social-icon-free-code-camp,
													.elementor-social-icon-freecodecamp {
														background-color: #006400
													}

													.elementor-social-icon-github {
														background-color: #333
													}

													.elementor-social-icon-gitlab {
														background-color: #e24329
													}

													.elementor-social-icon-globe {
														background-color: #69727d
													}

													.elementor-social-icon-google-plus,
													.elementor-social-icon-google-plus-g {
														background-color: #dd4b39
													}

													.elementor-social-icon-houzz {
														background-color: #7ac142
													}

													.elementor-social-icon-instagram {
														background-color: #262626
													}

													.elementor-social-icon-jsfiddle {
														background-color: #487aa2
													}

													.elementor-social-icon-link {
														background-color: #818a91
													}

													.elementor-social-icon-linkedin,
													.elementor-social-icon-linkedin-in {
														background-color: #0077b5
													}

													.elementor-social-icon-medium {
														background-color: #00ab6b
													}

													.elementor-social-icon-meetup {
														background-color: #ec1c40
													}

													.elementor-social-icon-mixcloud {
														background-color: #273a4b
													}

													.elementor-social-icon-odnoklassniki {
														background-color: #f4731c
													}

													.elementor-social-icon-pinterest {
														background-color: #bd081c
													}

													.elementor-social-icon-product-hunt {
														background-color: #da552f
													}

													.elementor-social-icon-reddit {
														background-color: #ff4500
													}

													.elementor-social-icon-rss {
														background-color: #f26522
													}

													.elementor-social-icon-shopping-cart {
														background-color: #4caf50
													}

													.elementor-social-icon-skype {
														background-color: #00aff0
													}

													.elementor-social-icon-slideshare {
														background-color: #0077b5
													}

													.elementor-social-icon-snapchat {
														background-color: #fffc00
													}

													.elementor-social-icon-soundcloud {
														background-color: #f80
													}

													.elementor-social-icon-spotify {
														background-color: #2ebd59
													}

													.elementor-social-icon-stack-overflow {
														background-color: #fe7a15
													}

													.elementor-social-icon-steam {
														background-color: #00adee
													}

													.elementor-social-icon-stumbleupon {
														background-color: #eb4924
													}

													.elementor-social-icon-telegram {
														background-color: #2ca5e0
													}

													.elementor-social-icon-thumb-tack {
														background-color: #1aa1d8
													}

													.elementor-social-icon-tripadvisor {
														background-color: #589442
													}

													.elementor-social-icon-tumblr {
														background-color: #35465c
													}

													.elementor-social-icon-twitch {
														background-color: #6441a5
													}

													.elementor-social-icon-twitter {
														background-color: #1da1f2
													}

													.elementor-social-icon-viber {
														background-color: #665cac
													}

													.elementor-social-icon-vimeo {
														background-color: #1ab7ea
													}

													.elementor-social-icon-vk {
														background-color: #45668e
													}

													.elementor-social-icon-weibo {
														background-color: #dd2430
													}

													.elementor-social-icon-weixin {
														background-color: #31a918
													}

													.elementor-social-icon-whatsapp {
														background-color: #25d366
													}

													.elementor-social-icon-wordpress {
														background-color: #21759b
													}

													.elementor-social-icon-xing {
														background-color: #026466
													}

													.elementor-social-icon-yelp {
														background-color: #af0606
													}

													.elementor-social-icon-youtube {
														background-color: #cd201f
													}

													.elementor-social-icon-500px {
														background-color: #0099e5
													}

													.elementor-shape-rounded .elementor-icon.elementor-social-icon {
														border-radius: 10%
													}

													.elementor-shape-circle .elementor-icon.elementor-social-icon {
														border-radius: 50%
													}
												</style>
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-grow elementor-repeater-item-6154405" target="_blank" href="https://www.instagram.com/titikhidayatii/">
															<span class="elementor-screen-only">Instagram</span>
															<i class="fab fa-instagram"></i> </a>
													</span>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-5b7c5f96 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="5b7c5f96" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p>&amp;</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-1e15d7cd animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image" data-id="1e15d7cd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
											<div class="elementor-widget-container">
												<img decoding="async" width="768" height="751" src="/Assets/images/Picture2-3-768x751-1-1.png" class="elementor-animation-grow attachment-full size-full wp-image-245" alt="" srcset="/Assets/images/Picture2-3-768x751-1-1.png 768w, /Assets/images/Picture2-3-768x751-1-1.png 300w" sizes="(max-width: 768px) 100vw, 768px" />
											</div>
										</div>
										<div class="elementor-element elementor-element-77bf5a8 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="77bf5a8" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Jamaludin Muhammad Akbar</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-146ceac7 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="146ceac7" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p>Putra Kedua Bapak Sunardi <br />&amp; Ibu Sri Suhartini </p>
											</div>
										</div>
										<div class="elementor-element elementor-element-32609f33 e-grid-align-tablet-center e-grid-align-mobile-center reveal elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="32609f33" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-grow elementor-repeater-item-6154405" target="_blank" href="https://www.instagram.com/lamajnun/">
															<span class="elementor-screen-only">Instagram</span>
															<i class="fab fa-instagram"></i> </a>
													</span>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-2cfb98c6 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="2cfb98c6" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-4192616e elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="4192616e" data-element_type="section" id="galeri">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-213d7757 wdp-sticky-section-no" data-id="213d7757" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-background-overlay"></div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-76882f32 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="76882f32" data-element_type="section" data-settings="{&quot;shape_divider_top&quot;:&quot;opacity-fan&quot;}">
							<div class="elementor-shape elementor-shape-top" data-negative="false">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
									<path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z" />
									<path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z" />
									<path class="elementor-shape-fill" style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z" />
									<path class="elementor-shape-fill" d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z" />
								</svg>
							</div>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-200853bb wdp-sticky-section-no" data-id="200853bb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-2dd49980 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="2dd49980" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-490cb4cc reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="490cb4cc" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h1 class="elementor-heading-title elementor-size-default">Galeri</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-60b621 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="60b621" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6920ffa5 wdp-sticky-section-no" data-id="6920ffa5" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-68e13d78 animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-timeline" data-id="68e13d78" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="weddingpress-timeline.default">
											<div class="elementor-widget-container">

												<div class="twae-vertical twae-wrapper twae-one-sided-wrapper">
													<div class="twae-timeline-centered twae-timeline-sm twae-line twae-one-sided-timeline">
														<article class="twae-timeline-entry twae-right-aligned">
															<div class="twae-timeline-entry-inner">
																<time class="twae-label-extra-label">
																	<span class="twae-label">2015</span>
																	<span class="twae-extra-label"></span>
																</time>
																<div class="twae-bg-orange twae-icon"><i aria-hidden="true" class="fas fa-heart"></i>
																</div>
																<div class="twae-bg-orange twae-data-container">
																	<!-- <span class="twae-title">Awal Bertemu</span> -->
																	<div class="twae-timeline-img"><img loading="lazy" width="1295" height="864" src="/Assets/images/Gallery-1.jpeg" class="attachment-full size-full" alt="" decoding="async" srcset="/Assets/images/Gallery-1.jpeg 1295w, /Assets/images/Gallery-1.jpeg 300w, /Assets/images/Gallery-1.jpeg 1024w, /Assets/images/Gallery-1.jpeg 768w" sizes="(max-width: 1295px) 100vw, 1295px" />
																	</div>
																	<div class="twae-description">
																		<p>Kampus UMM adalah tempat kami bertemu untuk pertama kali. Waktu itu kami adalah teman sekelas.</p>
																	</div>
																</div>
															</div>
														</article>
														<article class="twae-timeline-entry twae-right-aligned">
															<div class="twae-timeline-entry-inner">
																<time class="twae-label-extra-label">
																	<span class="twae-label">2017</span>
																	<span class="twae-extra-label"></span>
																</time>
																<div class="twae-bg-orange twae-icon"><i aria-hidden="true" class="fas fa-heart"></i>
																</div>
																<div class="twae-bg-orange twae-data-container">
																	<!-- <span class="twae-title">Acara Lamaran</span> -->
																	<div class="twae-timeline-img"><img loading="lazy" width="1295" height="864" src="/Assets/images/Gallery-2.jpeg" class="attachment-full size-full" alt="" decoding="async" srcset="/Assets/images/Gallery-2.jpeg 1295w, /Assets/images/Gallery-2.jpeg 300w, /Assets/images/Gallery-2.jpeg 1024w, /Assets/images/Gallery-2.jpeg 768w" sizes="(max-width: 1295px) 100vw, 1295px" />
																	</div>
																	<div class="twae-description">
																		<p>Kami berteman dan berkuliah bersama. Setelah beberapa semester, pertemanan kami berlanjut menjadi ketertarikan yang lebih serius. 7 Maret 2017 kami memulai hubungan ini.</p>
																	</div>
																</div>
															</div>
														</article>
														<article class="twae-timeline-entry twae-right-aligned">
															<div class="twae-timeline-entry-inner">
																<time class="twae-label-extra-label">
																	<span class="twae-label">2023</span>
																	<span class="twae-extra-label"></span>
																</time>
																<div class="twae-bg-orange twae-icon"><i aria-hidden="true" class="fas fa-heart"></i>
																</div>
																<div class="twae-bg-orange twae-data-container">
																	<!-- <span class="twae-title">Pernikahan</span> -->
																	<div class="twae-timeline-img"><img loading="lazy" width="1295" height="864" src="/Assets/images/Gallery-3.jpeg" class="attachment-full size-full" alt="" decoding="async" srcset="/Assets/images/Gallery-3.jpeg 1295w, /Assets/images/Gallery-3.jpeg 300w, /Assets/images/Gallery-3.jpeg 1024w, /Assets/images/Gallery-3.jpeg 768w" sizes="(max-width: 1295px) 100vw, 1295px" />
																	</div>
																	<div class="twae-description">
																		<p>Setelah 6 tahun lebih kami menjalani hubungan yang penuh lika-liku dan pernah menjalani LDR di tengah hubungan, pada 17 Februari kami melakukan pertemuan keluarga untuk pertama kalinya. 30 oktober 2023 kami sepakat untuk membangun bahtera rumah tangga bersama.</p>
																	</div>
																</div>
															</div>
														</article>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-c750394 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="c750394" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-3efa583e elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="3efa583e" data-element_type="section">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-794068d9 wdp-sticky-section-no" data-id="794068d9" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-254ddc25 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="254ddc25" data-element_type="section" data-settings="{&quot;shape_divider_top&quot;:&quot;mountains&quot;}">
							<div class="elementor-shape elementor-shape-top" data-negative="false">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
									<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
									<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
									<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
								</svg>
							</div>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-15a9ba wdp-sticky-section-no" data-id="15a9ba" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-background-overlay"></div>
										<div class="elementor-element elementor-element-4c563d42 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="4c563d42" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-343d4e1c reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="343d4e1c" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<p class="elementor-heading-title elementor-size-default">"Dan
													kawinkanlah orang-orang yang sendirian di antara kamu, dan
													orang-orang yang layak (berkawin) dari hamba-hamba sahayamu yang
													lelaki dan hamba-hamba sahayamu yang perempuan. Jika mereka miskin
													Allah akan memampukan mereka dengan karunia-Nya. Dan Allah Maha luas
													(pemberian-Nya) lagi Maha Mengetahui." <br><br>An Nur : 32
												</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-62735ae4 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="62735ae4" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-40634200 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="40634200" data-element_type="section" id="date">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f1ecdad wdp-sticky-section-no" data-id="3f1ecdad" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-39f3a220 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="39f3a220" data-element_type="widget" id="event" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-48c37e6e elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="48c37e6e" data-element_type="section">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-53a800a4 wdp-sticky-section-no" data-id="53a800a4" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-214302e0 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="214302e0" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<p class="elementor-heading-title elementor-size-default">Live Streaming
												</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-4496875e reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="4496875e" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p>Kami mengundang Bapak/Ibu/Saudara/i <br />untuk menyaksikan
													Pernikahan kami<br />secara Virtual yang disiarkan langsung
													<br />melalui Sosial Media di bawah ini
												</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-26e4e057 reveal elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-icon" data-id="26e4e057" data-element_type="widget" data-widget_type="icon.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-wrapper">
													<div class="elementor-icon">
														<i aria-hidden="true" class="fab fa-instagram"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-22e959dc reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="22e959dc" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">30 Oktober 2023</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-41e3d97b reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="41e3d97b" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Pukul 09.00 WIB</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-9e172e9 elementor-align-center elementor-mobile-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button" data-id="9e172e9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;swing&quot;}" data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-size-sm" role="button" href="#">
														<span class="elementor-button-content-wrapper">
															<span class="elementor-button-icon elementor-align-icon-left">
																<i aria-hidden="true" class="fab fa-instagram"></i>
															</span>
															<span class="elementor-button-text">Click Here</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-718bebcd elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="718bebcd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2db0bdfb wdp-sticky-section-no" data-id="2db0bdfb" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-4a576680 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="4a576680" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<p class="elementor-heading-title elementor-size-default">Akad Nikah</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-622ffd38 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="622ffd38" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Senin, 30 Oktober 2023</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-76089ff6 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="76089ff6" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Pukul 09.00 WIB</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-1c33bb5e reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="1c33bb5e" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Cafe Barka, Gunungsari, Bumiaji, Batu</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-690d9537 elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="690d9537" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6cf35113 wdp-sticky-section-no" data-id="6cf35113" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-369c8414 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="369c8414" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<p class="elementor-heading-title elementor-size-default">Resepsi</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-c5ec661 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="c5ec661" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Senin, 30 Oktober 2023</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-3f31cbd9 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="3f31cbd9" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Pukul 14.00 WIB</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-12e24ee3 reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="12e24ee3" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p class="italic mb-4">Cafe Barka, Gunungsari, Bumiaji, Batu</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-7b141c98 elementor-align-center elementor-mobile-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button" data-id="7b141c98" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;swing&quot;}" data-widget_type="button.default">
							<div class="elementor-widget-container">
								<div class="elementor-button-wrapper">
									<a class="elementor-button elementor-button-link elementor-size-sm" href="https://maps.app.goo.gl/dPPMvs7oEQ18jvt7A" target="_blank">
										<span class="elementor-button-content-wrapper">
											<span class="elementor-button-icon elementor-align-icon-left">
												<i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
											<span class="elementor-button-text">Lihat Lokasi</span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-3df9343b wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="3df9343b" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- <section
			class="elementor-section elementor-top-section elementor-element elementor-element-496f3440 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
			data-id="496f3440" data-element_type="section" id="galeri"
			data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-10facfe3 wdp-sticky-section-no"
					data-id="10facfe3" data-element_type="column"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-41eb4b94 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading"
							data-id="41eb4b94" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">Photo Gallery</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-abe0769 elementor-skin-slideshow animated-slow elementor-arrows-yes wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-media-carousel"
							data-id="abe0769" data-element_type="widget"
							data-settings="{&quot;skin&quot;:&quot;slideshow&quot;,&quot;slideshow_slides_per_view_mobile&quot;:&quot;3&quot;,&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:11,&quot;sizes&quot;:[]},&quot;slideshow_slides_per_view&quot;:&quot;4&quot;,&quot;speed&quot;:2000,&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}"
							data-widget_type="media-carousel.default">
							<div class="elementor-widget-container">
								<link rel="stylesheet"
									href="../wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">
								<div class="elementor-swiper">
									<div class="elementor-main-swiper swiper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<a href="../wp-content/uploads/2023/05/edit-5-elmy-1.jpg"
													data-elementor-open-lightbox="yes"
													data-elementor-lightbox-slideshow="abe0769"
													data-elementor-lightbox-title="edit-5-elmy-1.jpg"
													data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjU0LCJ1cmwiOiJodHRwczpcL1wvaW52Lndla2l0YS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDVcL2VkaXQtNS1lbG15LTEuanBnIiwic2xpZGVzaG93IjoiYWJlMDc2OSJ9">
													<div class="elementor-carousel-image" role="img"
														aria-label="edit-5-elmy-1.jpg"
														style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-5-elmy-1.html)">


													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="../wp-content/uploads/2023/05/edit-4-elmy-1-1.jpg"
													data-elementor-open-lightbox="yes"
													data-elementor-lightbox-slideshow="abe0769"
													data-elementor-lightbox-title="edit-4-elmy-1-1.jpg"
													data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjU1LCJ1cmwiOiJodHRwczpcL1wvaW52Lndla2l0YS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDVcL2VkaXQtNC1lbG15LTEtMS5qcGciLCJzbGlkZXNob3ciOiJhYmUwNzY5In0%3D">
													<div class="elementor-carousel-image" role="img"
														aria-label="edit-4-elmy-1-1.jpg"
														style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-4-elmy-1-1.html)">


													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="../wp-content/uploads/2023/05/edit-3-elmy-2.jpg"
													data-elementor-open-lightbox="yes"
													data-elementor-lightbox-slideshow="abe0769"
													data-elementor-lightbox-title="edit-3-elmy-2.jpg"
													data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjU5LCJ1cmwiOiJodHRwczpcL1wvaW52Lndla2l0YS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDVcL2VkaXQtMy1lbG15LTIuanBnIiwic2xpZGVzaG93IjoiYWJlMDc2OSJ9">
													<div class="elementor-carousel-image" role="img"
														aria-label="edit-3-elmy-2.jpg"
														style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-3-elmy-2.html)">


													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="../wp-content/uploads/2023/05/edit-2-elmy-2.jpg"
													data-elementor-open-lightbox="yes"
													data-elementor-lightbox-slideshow="abe0769"
													data-elementor-lightbox-title="edit-2-elmy-2.jpg"
													data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjYxLCJ1cmwiOiJodHRwczpcL1wvaW52Lndla2l0YS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDVcL2VkaXQtMi1lbG15LTIuanBnIiwic2xpZGVzaG93IjoiYWJlMDc2OSJ9">
													<div class="elementor-carousel-image" role="img"
														aria-label="edit-2-elmy-2.jpg"
														style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-2-elmy-2.html)">


													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="../wp-content/uploads/2023/05/edit-6-elmy-2.jpg"
													data-elementor-open-lightbox="yes"
													data-elementor-lightbox-slideshow="abe0769"
													data-elementor-lightbox-title="edit-6-elmy-2.jpg"
													data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjYyLCJ1cmwiOiJodHRwczpcL1wvaW52Lndla2l0YS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyM1wvMDVcL2VkaXQtNi1lbG15LTIuanBnIiwic2xpZGVzaG93IjoiYWJlMDc2OSJ9">
													<div class="elementor-carousel-image" role="img"
														aria-label="edit-6-elmy-2.jpg"
														style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-6-elmy-2.html)">


													</div>
												</a>
											</div>
										</div>
										<div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
											tabindex="0">
											<i aria-hidden="true" class="eicon-chevron-left"></i> <span
												class="elementor-screen-only">Previous</span>
										</div>
										<div class="elementor-swiper-button elementor-swiper-button-next" role="button"
											tabindex="0">
											<i aria-hidden="true" class="eicon-chevron-right"></i> <span
												class="elementor-screen-only">Next</span>
										</div>
									</div>
								</div>
								<div class="elementor-swiper">
									<div class="elementor-thumbnails-swiper swiper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="elementor-carousel-image" role="img"
													aria-label="edit-5-elmy-1.jpg"
													style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-5-elmy-1.html)">


												</div>
												</a>
											</div>
											<div class="swiper-slide">
												<div class="elementor-carousel-image" role="img"
													aria-label="edit-4-elmy-1-1.jpg"
													style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-4-elmy-1-1.html)">


												</div>
												</a>
											</div>
											<div class="swiper-slide">
												<div class="elementor-carousel-image" role="img"
													aria-label="edit-3-elmy-2.jpg"
													style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-3-elmy-2.html)">


												</div>
												</a>
											</div>
											<div class="swiper-slide">
												<div class="elementor-carousel-image" role="img"
													aria-label="edit-2-elmy-2.jpg"
													style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-2-elmy-2.html)">


												</div>
												</a>
											</div>
											<div class="swiper-slide">
												<div class="elementor-carousel-image" role="img"
													aria-label="edit-6-elmy-2.jpg"
													style="background-image: url(https_/inv.wekita.id/wp-content/uploads/2023/05/edit-6-elmy-2.html)">


												</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- <section
			class="elementor-section elementor-top-section elementor-element elementor-element-3b5afad8 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
			data-id="3b5afad8" data-element_type="section">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2eb0cf2b wdp-sticky-section-no"
					data-id="2eb0cf2b" data-element_type="column"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-363ad50d wdp-sticky-section-no elementor-widget elementor-widget-spacer"
							data-id="363ad50d" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-efdd650 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading"
							data-id="efdd650" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h1 class="elementor-heading-title elementor-size-default">Amplop Digital</h1>
							</div>
						</div>
						<div class="elementor-element elementor-element-2cf1f1d1 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading"
							data-id="2cf1f1d1" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<p class="elementor-heading-title elementor-size-default">Doa Restu Anda merupakan
									<br>karunia yang sangat berarti bagi kami.<br><br>Dan jika memberi adalah ungkapan
									tanda kasih<br> Anda, Anda dapat memberi kado secara cashless.
								</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-4e25cf42 elementor-align-center elementor-mobile-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-button"
							data-id="4e25cf42" data-element_type="widget" id="cashless"
							data-settings="{&quot;_animation&quot;:&quot;swing&quot;}"
							data-widget_type="button.default">
							<div class="elementor-widget-container">
								<div class="elementor-button-wrapper">
									<a class="elementor-button elementor-size-sm" role="button">
										<span class="elementor-button-content-wrapper">
											<span class="elementor-button-icon elementor-align-icon-left">
												<i aria-hidden="true" class="fas fa-gift"></i> </span>
											<span class="elementor-button-text">Kirim Hadiah</span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<section
							class="elementor-section elementor-inner-section elementor-element elementor-element-37a37de0 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no elementor-invisible"
							data-id="37a37de0" data-element_type="section" id="amplop"
							data-settings="{&quot;animation&quot;:&quot;slideInUp&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26b13675 wdp-sticky-section-no"
									data-id="26b13675" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-1030cde5 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
											data-id="1030cde5" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6ca757 wdp-sticky-section-no"
													data-id="6ca757" data-element_type="column"
													data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-background-overlay"></div>
														<div class="elementor-element elementor-element-5d360202 wdp-sticky-section-no elementor-widget elementor-widget-image"
															data-id="5d360202" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" loading="lazy" width="5000"
																	height="1588"
																	src="../wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2.png"
																	class="attachment-full size-full wp-image-239"
																	alt=""
																	srcset="https://inv.wekita.id/wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2.png 5000w, https://inv.wekita.id/wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2-300x95.png 300w, https://inv.wekita.id/wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2-1024x325.png 1024w, https://inv.wekita.id/wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2-768x244.png 768w, https://inv.wekita.id/wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2-1536x488.png 1536w, https://inv.wekita.id/wp-content/uploads/2023/05/BCA_logo_Bank_Central_Asia-1-2-2048x650.png 2048w"
																	sizes="(max-width: 5000px) 100vw, 5000px" />
															</div>
														</div>
														<div class="elementor-element elementor-element-6c4a6876 wdp-sticky-section-no elementor-widget elementor-widget-image"
															data-id="6c4a6876" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" loading="lazy" width="2560"
																	height="610"
																	src="../wp-content/uploads/2023/05/bri.png"
																	class="attachment-full size-full wp-image-124"
																	alt=""
																	srcset="https://inv.wekita.id/wp-content/uploads/2023/05/bri.png 2560w, https://inv.wekita.id/wp-content/uploads/2023/05/bri-300x71.png 300w, https://inv.wekita.id/wp-content/uploads/2023/05/bri-1024x244.png 1024w, https://inv.wekita.id/wp-content/uploads/2023/05/bri-768x183.png 768w, https://inv.wekita.id/wp-content/uploads/2023/05/bri-1536x366.png 1536w, https://inv.wekita.id/wp-content/uploads/2023/05/bri-2048x488.png 2048w"
																	sizes="(max-width: 2560px) 100vw, 2560px" />
															</div>
														</div>
														<div class="elementor-element elementor-element-6e6a0742 wdp-sticky-section-no elementor-widget elementor-widget-image"
															data-id="6e6a0742" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" loading="lazy" width="1290"
																	height="480"
																	src="../wp-content/uploads/2023/05/Bank-BNI-Logo-PNG-480p-FileVector69-2.png"
																	class="attachment-full size-full wp-image-133"
																	alt=""
																	srcset="https://inv.wekita.id/wp-content/uploads/2023/05/Bank-BNI-Logo-PNG-480p-FileVector69-2.png 1290w, https://inv.wekita.id/wp-content/uploads/2023/05/Bank-BNI-Logo-PNG-480p-FileVector69-2-300x112.png 300w, https://inv.wekita.id/wp-content/uploads/2023/05/Bank-BNI-Logo-PNG-480p-FileVector69-2-1024x381.png 1024w, https://inv.wekita.id/wp-content/uploads/2023/05/Bank-BNI-Logo-PNG-480p-FileVector69-2-768x286.png 768w"
																	sizes="(max-width: 1290px) 100vw, 1290px" />
															</div>
														</div>
														<div class="elementor-element elementor-element-7fa8addc wdp-sticky-section-no elementor-widget elementor-widget-image"
															data-id="7fa8addc" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" loading="lazy" width="3800"
																	height="1080"
																	src="../wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com.png"
																	class="attachment-full size-full wp-image-122"
																	alt=""
																	srcset="https://inv.wekita.id/wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com.png 3800w, https://inv.wekita.id/wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com-300x85.png 300w, https://inv.wekita.id/wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com-1024x291.png 1024w, https://inv.wekita.id/wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com-768x218.png 768w, https://inv.wekita.id/wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com-1536x437.png 1536w, https://inv.wekita.id/wp-content/uploads/2023/05/BSI-Bank-Syariah-Indonesia-Logo-PNG1080p-Vector69Com-2048x582.png 2048w"
																	sizes="(max-width: 3800px) 100vw, 3800px" />
															</div>
														</div>
														<div class="elementor-element elementor-element-280750ba wdp-sticky-section-no elementor-widget elementor-widget-image"
															data-id="280750ba" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" loading="lazy" width="150"
																	height="150"
																	src="../wp-content/uploads/2023/05/chip-atm-1-2.png"
																	class="attachment-full size-full wp-image-242"
																	alt="" />
															</div>
														</div>
														<div class="elementor-element elementor-element-7c4a82cf wdp-sticky-section-no elementor-widget elementor-widget-heading"
															data-id="7c4a82cf" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<p
																	class="elementor-heading-title elementor-size-default">
																	1206 7312 14140</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-44b925e7 wdp-sticky-section-no elementor-widget elementor-widget-heading"
															data-id="44b925e7" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<p
																	class="elementor-heading-title elementor-size-default">
																	Jamal</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-14e471dc elementor-align-right elementor-tablet-align-right elementor-mobile-align-right wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-copy-text"
															data-id="14e471dc" data-element_type="widget"
															data-widget_type="weddingpress-copy-text.default">
															<div class="elementor-widget-container">

																<div class="elementor-image img"></div>

																<div class="head-title"></div>
																<div class="elementor-button-wrapper">
																	<div class="copy-content spancontent"
																		style="display: none;">1206731214140</div>

																	<a style="cursor:pointer;" onclick="copyText(this)"
																		data-message="berhasil disalin"
																		class="elementor-button" role="button">

																		<div class="elementor-button-content-wrapper">
																			<span
																				class="elementor-button-icon elementor-align-icon-left">
																				<i aria-hidden="true"
																					class="far fa-copy"></i> </span>
																			<span class="elementor-button-text">Copy
																			</span>
																		</div>
																	</a>

																</div>

																<style type="text/css">
																	.spancontent {
																		padding-bottom: 20px;
																	}

																	.copy-content {
																		color: #6EC1E4;
																		text-align: center;
																	}

																	.head-title {
																		color: #6EC1E4;
																		text-align: center;
																	}
																</style>

																<script>
																	function copyText(el) {
																		var content = jQuery(el).siblings('div.copy-content').html()
																		var temp = jQuery("<textarea>");
																		jQuery("body").append(temp);
																		temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
																		document.execCommand("copy");
																		temp.remove();
																		var text = jQuery(el).html()
																		jQuery(el).html(jQuery(el).data('message'))
																		var counter = 0;
																		var interval = setInterval(function () {
																			counter++;
																			if (counter == 1) {
																				jQuery(el).html(text)
																			}
																		}, 500);
																	}

																</script>

															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-4d54d072 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
											data-id="4d54d072" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-513bbc30 wdp-sticky-section-no"
													data-id="513bbc30" data-element_type="column"
													data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-background-overlay"></div>
														<div class="elementor-element elementor-element-7ea5627 wdp-sticky-section-no elementor-widget elementor-widget-image"
															data-id="7ea5627" data-element_type="widget"
															data-widget_type="image.default">
															<div class="elementor-widget-container">
																<img decoding="async" loading="lazy" width="1200"
																	height="342"
																	src="../wp-content/uploads/2023/05/1200px-Logo_dana_blue.svg-1.png"
																	class="attachment-full size-full wp-image-248"
																	alt=""
																	srcset="https://inv.wekita.id/wp-content/uploads/2023/05/1200px-Logo_dana_blue.svg-1.png 1200w, https://inv.wekita.id/wp-content/uploads/2023/05/1200px-Logo_dana_blue.svg-1-300x86.png 300w, https://inv.wekita.id/wp-content/uploads/2023/05/1200px-Logo_dana_blue.svg-1-1024x292.png 1024w, https://inv.wekita.id/wp-content/uploads/2023/05/1200px-Logo_dana_blue.svg-1-768x219.png 768w"
																	sizes="(max-width: 1200px) 100vw, 1200px" />
															</div>
														</div>
														<div class="elementor-element elementor-element-7764c6ae wdp-sticky-section-no elementor-widget elementor-widget-spacer"
															data-id="7764c6ae" data-element_type="widget"
															data-widget_type="spacer.default">
															<div class="elementor-widget-container">
																<div class="elementor-spacer">
																	<div class="elementor-spacer-inner"></div>
																</div>
															</div>
														</div>
														<div class="elementor-element elementor-element-5e29e292 wdp-sticky-section-no elementor-widget elementor-widget-heading"
															data-id="5e29e292" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<p
																	class="elementor-heading-title elementor-size-default">
																	XXXXXX</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-23ba620e wdp-sticky-section-no elementor-widget elementor-widget-heading"
															data-id="23ba620e" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<p
																	class="elementor-heading-title elementor-size-default">
																	Titik Hidayati</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-73af14a5 elementor-align-right elementor-tablet-align-right elementor-mobile-align-right wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-copy-text"
															data-id="73af14a5" data-element_type="widget"
															data-widget_type="weddingpress-copy-text.default">
															<div class="elementor-widget-container">

																<div class="elementor-image img"></div>

																<div class="head-title"></div>
																<div class="elementor-button-wrapper">
																	<div class="copy-content spancontent"
																		style="display: none;">XXXXXX</div>

																	<a style="cursor:pointer;" onclick="copyText(this)"
																		data-message="berhasil disalin"
																		class="elementor-button" role="button">

																		<div class="elementor-button-content-wrapper">
																			<span
																				class="elementor-button-icon elementor-align-icon-left">
																				<i aria-hidden="true"
																					class="far fa-copy"></i> </span>
																			<span class="elementor-button-text">Copy
																			</span>
																		</div>
																	</a>

																</div>

																<style type="text/css">
																	.spancontent {
																		padding-bottom: 20px;
																	}

																	.copy-content {
																		color: #6EC1E4;
																		text-align: center;
																	}

																	.head-title {
																		color: #6EC1E4;
																		text-align: center;
																	}
																</style>

																<script>
																	function copyText(el) {
																		var content = jQuery(el).siblings('div.copy-content').html()
																		var temp = jQuery("<textarea>");
																		jQuery("body").append(temp);
																		temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
																		document.execCommand("copy");
																		temp.remove();
																		var text = jQuery(el).html()
																		jQuery(el).html(jQuery(el).data('message'))
																		var counter = 0;
																		var interval = setInterval(function () {
																			counter++;
																			if (counter == 1) {
																				jQuery(el).html(text)
																			}
																		}, 500);
																	}

																</script>

															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-411a8f42 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
											data-id="411a8f42" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-176df1ac wdp-sticky-section-no"
													data-id="176df1ac" data-element_type="column"
													data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-background-overlay"></div>
														<div class="elementor-element elementor-element-10eb9ef8 elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-icon"
															data-id="10eb9ef8" data-element_type="widget"
															data-widget_type="icon.default">
															<div class="elementor-widget-container">
																<div class="elementor-icon-wrapper">
																	<div class="elementor-icon">
																		<i aria-hidden="true" class="fas fa-gift"></i>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-element elementor-element-77edc0ec wdp-sticky-section-no elementor-widget elementor-widget-heading"
															data-id="77edc0ec" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<p
																	class="elementor-heading-title elementor-size-default">
																	kIRIM hADIAH</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-f09819f wdp-sticky-section-no elementor-widget elementor-widget-text-editor"
															data-id="f09819f" data-element_type="widget"
															data-widget_type="text-editor.default">
															<div class="elementor-widget-container">
																<p>Nama Penerima : Titik Hidayati</p>
																<p>No. HP : 0812-9938-5305</p>
																<p>Bumiaji, Kota Batu</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</section>
						<div class="elementor-element elementor-element-7c9328cc wdp-sticky-section-no elementor-widget elementor-widget-spacer"
							data-id="7c9328cc" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-5a5a3036 wdp-sticky-section-no elementor-widget elementor-widget-html"
							data-id="5a5a3036" data-element_type="widget" id="hide" data-widget_type="html.default">
							<div class="elementor-widget-container">
								<script>
									jQuery(function () {
										jQuery('#cashless').on('click', function () {


											// Dynamic Content for Elementor
											// The element doesn't have a CSS ID or a CSS Class
											jQuery('#amplop').slideToggle(1000);

											if (jQuery(this).attr('href') == '#') {
												return false;
											}
										});
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<section class="elementor-section elementor-top-section elementor-element elementor-element-58959f0f elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="58959f0f" data-element_type="section">
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e1164c4 wdp-sticky-section-no" data-id="1e1164c4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-4ab9780a elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="4ab9780a" data-element_type="section" id="ucapan" data-settings="{&quot;shape_divider_top&quot;:&quot;mountains&quot;,&quot;shape_divider_bottom&quot;:&quot;mountains&quot;}">
							<div class="elementor-shape elementor-shape-top" data-negative="false">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
									<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
									<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
									<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
								</svg>
							</div>
							<div class="elementor-shape elementor-shape-bottom" data-negative="false">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
									<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
									<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
									<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
								</svg>
							</div>
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2fd28feb wdp-sticky-section-no" data-id="2fd28feb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7890f8e0 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="7890f8e0" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-3499b5d wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="3499b5d" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-441c7209 reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="441c7209" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h1 class="elementor-heading-title elementor-size-default">Ucapkan Sesuatu</h1>
											</div>
										</div>
										<div class="elementor-element elementor-element-6ab95ad reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="6ab95ad" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h1 class="elementor-heading-title elementor-size-default">Berikan
													Ucapan &amp; Doa Restu</h1>
											</div>
										</div>
										<section class="elementor-section elementor-inner-section elementor-element elementor-element-743af111 elementor-section-full_width reveal elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="743af111" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-33b3a65 wdp-sticky-section-no" data-id="33b3a65" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-element elementor-element-a7816a5 wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="a7816a5" data-element_type="widget" data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<p class="elementor-heading-title elementor-size-default">
																	*NB: Diharapkan tidak spam</p>
															</div>
														</div>
														<div class="elementor-element elementor-element-486eba6e wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-kit2" data-id="486eba6e" data-element_type="widget" data-widget_type="weddingpress-kit2.default">
															<div class="elementor-widget-container">
																<div class='cui-wrapper cui-facebook cui-border' style='overflow: hidden;'>
																	<div class='cui-wrap-link'>
																		<div class='header-cui'><a id='cui-link-716' class='cui-link cui-icon-link cui-icon-link-true auto-load-true' href='index435f.html?post_id=716&amp;comments=0&amp;get=300&amp;order=DESC' title='0 Comments'><span>0</span>
																				Comments</a></div>
																	</div><!--.cui-wrap-link-->
																	<div id='cui-wrap-commnent-716' class='cui-wrap-comments' style='display:none;'>
																		<div id='cui-wrap-form-716' class='cui-clearfix'>
																			<div class="cui-comment-attendence">
																				<div id="invitation-count-716" class="cui_comment_count_card_wrap">
																					<div class="cui_comment_count_card_row_2">
																						<div class="cui_comment_count_card cui_card-hadir">
																							<span>0</span><span>Hadir</span>
																						</div>
																						<div class="cui_comment_count_card cui_card-tidak_hadir">
																							<span>0</span><span>Tidak
																								hadir</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="cui-clearfix cui-wrap-form ">
																				<div id='cui-container-form-716' class='cui-container-form cui-no-login'>
																					<div id='respond-716' class='respond cui-clearfix'>
																						<form action='./' method='post' id='0'>
																							<p class="comment-form-author cui-field-1">
																								<input name="author" type="text" aria-required="true" class="cui-input" placeholder="<?= $data ?>" value="<?= $data ?>" id='comentNama' disabled /><span class="cui-required">*</span><span class="cui-error-info cui-error-info-name">Mohon
																									maaf! Khusus untuk
																									tamu undangan</span>
																							</p>
																							<div class="cui-wrap-textarea">
																								<textarea id="comentTextarea" class="waci_comment cui-textarea autosize-textarea" name="comment" aria-required="true" placeholder="Ucapan" rows="2"></textarea><span class="cui-required">*</span><span class="cui-error-info cui-error-info-text">2
																									characters
																									minimum.</span>
																							</div>
																							<div class="nm-wrap-comments">
																								<div class="row">
																								</div>
																							</div>
																							<div class="cui-clearfix cui-wrap-select cui-field-wrap cui-select-attending">

																								<select class="waci_comment cui-select" name="konfirmasi" id="konfirmasi">
																									<option value="" disabled selected>
																										Konfirmasi
																										Kehadiran
																									</option>
																									</option>
																									<option value="Hadir">
																										Hadir</option>
																									<option value="Tidak hadir">
																										Tidak hadir
																									</option>
																								</select><span class="cui-required"></span><span class="cui-error-info cui-error-info-confirm"></span>
																							</div>


																							<div class='cui-wrap-submit cui-clearfix'>
																								<p class='form-submit'>
																									<span class="cui-hide">Do
																										not change these
																										fields
																										following</span>
																									<input type="text" class="cui-hide" name="name" value="username">
																									<input type="text" class="cui-hide" name="nombre" value="">
																									<input type="text" class="cui-hide" name="form-cui" value="">
																									<input type="button" class="cui-form-btn cui-cancel-btn" value="Cancel">

																								</p>
																							</div>
																						</form>
																						<center>
																						<button id='submit-comment' class="btn btn-primary">KIRIM</button>
																						</center>
																						
																						<script>
																							$("#submit-comment").click(function() {
																								console.log($("#comentNama").val());
																								console.log($("#comentTextarea").val());
																								$.ajax({
																									type: "POST",
																									url: "<?= $base_url ?>/add-coment.php",
																									data: {
																										nama: $("#comentNama").val(),
																										content: $("#comentTextarea").val()
																									},
																									success: function(data) {
																										console.log(data);
																									}
																									// dataType: dataType
																								});

																							});
																						</script>
																					</div>
																				</div><!--.cui-container-form-->
																			</div><!--.cui-clearfix cui-relative-->
																		</div><!--.cui-wrap-form-->
																		<div id='cui-comment-status-716' class='cui-comment-status'></div>
																		<div id="cui-box" class="cui-box">
																			<ul id="cui-container-comment-98931" class="cui-container-comments cui-order-DESC  cui-has-7-comments cui-multiple-comments" data-order="DESC" style="display: block;">

																				<?php while ($coment = mysqli_fetch_array($coments_data)) { ?>

																					<li class="comment even thread-even depth-1 cui-item-comment" data-likes="0">
																						<div id="cui-comment-58394" class="cui-comment cui-clearfix">

																							<div class="cui-comment-avatar">
																								<img src="">
																							</div><!--.cui-comment-avatar-->

																							<div class="cui-comment-content">
																								<div class="cui-comment-info">
																									<a class="cui-commenter-name" title="<?= htmlspecialchars($coment['nama'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($coment['nama'], ENT_QUOTES, 'UTF-8') ?></a>
																
																								</div><!--.cui-comment-info-->
																								<div class="cui-comment-text">
																									<p><?= htmlspecialchars($coment['content'], ENT_QUOTES, 'UTF-8') ?></p>
																								</div><!--.cui-comment-text-->

																								<div class="cui-comment-actions">
																									<span class="cui-comment-time"><i class="far fa-clock"></i>
																										<?= htmlspecialchars($coment['time'], ENT_QUOTES, 'UTF-8') ?> </span>
																									<!-- <a href="?comment_id=58394&amp;post_id=98931" class="cui-reply-link" id="cui-reply-link-58394">Reply</a> -->
																								</div><!--.cui-comment-actions-->

																							</div><!--.cui-comment-content-->
																						</div><!--.cui-comment-->
																						<!--</li>-->
																					</li><!-- #comment-## -->

																				<?php } ?>
																			</ul>
																		</div>
																		<div class='cui-holder-716 cui-holder'></div>
																	</div><!--.cui-wrap-comments-->
																</div><!--.cui-wrapper-->
															</div>
														</div>
														<div class="elementor-element elementor-element-3a014ac3 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="3a014ac3" data-element_type="widget" data-widget_type="spacer.default">
															<div class="elementor-widget-container">
																<div class="elementor-spacer">
																	<div class="elementor-spacer-inner"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<div class="elementor-element elementor-element-24d7ad5f wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="24d7ad5f" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-75b7b4c6 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="75b7b4c6" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-221c616 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="221c616" data-element_type="section">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f49cc1b wdp-sticky-section-no" data-id="4f49cc1b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-427ee5dc animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image" data-id="427ee5dc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img decoding="async" loading="lazy" width="391" height="398" src="/Assets/images/fototerakhir.png" class="attachment-full size-full wp-image-264" alt="" srcset="/Assets/images/fototerakhir.png 391w, /Assets/images/fototerakhir.png 295w" sizes="(max-width: 391px) 100vw, 391px" />
							</div>
						</div>
						<div class="elementor-element elementor-element-6630d9fd reveal wdp-sticky-section-no elementor-widget elementor-widget-text-editor" data-id="6630d9fd" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<p>Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i
									berkenan hadir dan memberikan doa restu. Atas kehadiran dan doa restunya, kami
									mengucapkan terima kasih.</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-108d395b reveal wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="108d395b" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">Wassalamu'alaikum Wr. Wb.
								</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-1e4da826 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="1e4da826" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<p>Titik &amp; Jamal</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-469c3b80 wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="469c3b80" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-13e91fc elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="13e91fc" data-element_type="section">
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-65fd20a1 wdp-sticky-section-no" data-id="65fd20a1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-56a5164c wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="56a5164c" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3f1aec33 wdp-sticky-section-no" data-id="3f1aec33" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-785c54bf wdp-sticky-section-no elementor-widget elementor-widget-heading" data-id="785c54bf" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default"><span style="font-family: Montserrat, sans-serif; font-size: 11px; font-weight: 400; white-space: normal;">Edited by Nando & Aisya
										with&nbsp;</span><span style="font-family: Montserrat, sans-serif; font-size: 11px; font-weight: 400; white-space: normal; color: rgb(66, 66, );"><img decoding="async" draggable="false" role="img" class="emoji" alt="❤" src="https://s.w.org/images/core/emoji/13.0.1/svg/2764.svg"></span><span style="font-family: Montserrat, sans-serif; font-size: 11px; font-weight: 400; white-space: normal; ;">&nbsp;Thanks To Source&nbsp;</span><span style="font-family: Montserrat, sans-serif; font-size: 11px; font-weight: 400; white-space: normal; ;">Wekita.id</span>
								</h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-3e4c9928 elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="3e4c9928" data-element_type="widget" data-widget_type="social-icons.default">
							<div class="elementor-widget-container">
								<!-- <div class="elementor-social-icons-wrapper elementor-grid"> 
									<span class="elementor-grid-item">
										<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-d0d1213"
											href="https://www.instagram.com/wekita.id/" target="_blank">
											<span class="elementor-screen-only">Instagram</span>
											<i class="fab fa-instagram"></i> </a>
									</span>
									<span class="elementor-grid-item">
										<a class="elementor-icon elementor-social-icon elementor-social-icon-whatsapp elementor-repeater-item-c981bfa"
											href="https://wa.me/message/WOQMLMZCP4EGC1" target="_blank">
											<span class="elementor-screen-only">Whatsapp</span>
											<i class="fab fa-whatsapp"></i> </a>
									</span>
								</div>-->
							</div>
						</div>
						<div class="elementor-element elementor-element-12b981bb wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="12b981bb" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-78be60ef wdp-sticky-section-no elementor-widget elementor-widget-html" data-id="78be60ef" data-element_type="widget" id="hide" data-widget_type="html.default">
							<div class="elementor-widget-container">
								<script>
									function reveal() {
										var reveals = document.querySelectorAll(".reveal");

										for (var i = 0; i < reveals.length; i++) {
											var windowHeight = window.innerHeight;
											var elementTop = reveals[i].getBoundingClientRect().top;
											var elementVisible = 150;

											if (elementTop < windowHeight - elementVisible) {
												reveals[i].classList.add("active");
											} else {
												reveals[i].classList.remove("active");
											}
										}
									}

									window.addEventListener("scroll", reveal);
								</script>

								<style>
									.reveal {
										position: relative;
										transform: translateY(6rem) scale(0.93);
										opacity: 0;
										transition: 1s all ease;
									}

									.reveal.active {
										transform: translateY(0);
										opacity: 1;
									}
								</style>


								<script>
									function revealin() {
										var reveals = document.querySelectorAll(".revealin");

										for (var i = 0; i < reveals.length; i++) {
											var windowHeight = window.innerHeight;
											var elementTop = reveals[i].getBoundingClientRect().top;
											var elementVisible = 150;

											if (elementTop < windowHeight - elementVisible) {
												reveals[i].classList.add("active");
											} else {
												reveals[i].classList.remove("active");
											}
										}
									}

									window.addEventListener("scroll", revealin);
								</script>

								<style>
									.revealin {
										position: relative;
										transform: translate(6rem) scale(0.93);
										opacity: 0;
										transition: 2s all ease;
									}

									.revealin.active {
										transform: translatez(0);
										opacity: 1;
									}
								</style>
							</div>
						</div>
						<div class="elementor-element elementor-element-56aa632d wdp-sticky-section-no elementor-widget elementor-widget-spacer" data-id="56aa632d" data-element_type="widget" data-widget_type="spacer.default">
							<div class="elementor-widget-container">
								<div class="elementor-spacer">
									<div class="elementor-spacer-inner"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7ebb67b9 wdp-sticky-section-no" data-id="7ebb67b9" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6f71c585 elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-weddingpress-audio" data-id="6f71c585" data-element_type="widget" data-settings="{&quot;sticky&quot;:&quot;bottom&quot;,&quot;sticky_offset&quot;:203,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset&quot;:0}" data-widget_type="weddingpress-audio.default">
							<div class="elementor-widget-container">

								<script>
									var settingAutoplay = 'yes';
									window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
								</script>

								<div id="audio-container" class="audio-box">

									<audio id="song" loop>
										<source src="/Assets/audios/menikahimu.mp3" type="audio/mp3">
									</audio>

									<div class="elementor-icon-wrapper" id="unmute-sound" style="display: none;">
										<div class="elementor-icon elementor-animation-shrink">
											<i aria-hidden="true" class="fas fa-pause-circle"></i>
										</div>
									</div>

									<div class="elementor-icon-wrapper" id="mute-sound" style="display: none;">
										<div class="elementor-icon elementor-animation-shrink">
											<i aria-hidden="true" class="fas fa-compact-disc"></i>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-672e567a elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="672e567a" data-element_type="section" id="hoho" data-settings="{&quot;sticky&quot;:&quot;bottom&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-63f7260b wdp-sticky-section-no" data-id="63f7260b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-505f2ef0 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="505f2ef0" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-471b3a0c wdp-sticky-section-no" data-id="471b3a0c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-628e929e elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="628e929e" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-home elementor-animation-pulse-grow elementor-repeater-item-4185e3b" href="#home" target="_blank">
															<span class="elementor-screen-only">Home</span>
															<i class="fas fa-home"></i> </a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-3011b3fb wdp-sticky-section-no" data-id="3011b3fb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-1df5d1d9 elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="1df5d1d9" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-heart elementor-animation-pulse-grow elementor-repeater-item-4185e3b" href="#mempelai" target="_blank">
															<span class="elementor-screen-only">Heart</span>
															<i class="far fa-heart"></i> </a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-29001aa1 wdp-sticky-section-no" data-id="29001aa1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7cd6fef6 elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="7cd6fef6" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-images elementor-animation-pulse-grow elementor-repeater-item-4185e3b" href="#galeri" target="_blank">
															<span class="elementor-screen-only">Images</span>
															<i class="far fa-images"></i> </a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-515a6b12 wdp-sticky-section-no" data-id="515a6b12" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-686e382f elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="686e382f" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-calendar-alt elementor-animation-pulse-grow elementor-repeater-item-4185e3b" href="#date" target="_blank">
															<span class="elementor-screen-only">Calendar-alt</span>
															<i class="far fa-calendar-alt"></i> </a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1555bb76 wdp-sticky-section-no" data-id="1555bb76" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-267b91dc elementor-shape-rounded elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-widget elementor-widget-social-icons" data-id="267b91dc" data-element_type="widget" data-widget_type="social-icons.default">
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid">
													<span class="elementor-grid-item">
														<a class="elementor-icon elementor-social-icon elementor-social-icon-comment-dots elementor-animation-pulse-grow elementor-repeater-item-4185e3b" href="#ucapan" target="_blank">
															<span class="elementor-screen-only">Comment-dots</span>
															<i class="far fa-comment-dots"></i> </a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="hide elementor-section elementor-top-section elementor-element elementor-element-1a746962 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no" data-id="1a746962" data-element_type="section" id="hide">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f47a6d3 wdp-sticky-section-no" data-id="3f47a6d3" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-740e21b hide wdp-sticky-section-no elementor-widget elementor-widget-html" data-id="740e21b" data-element_type="widget" data-widget_type="html.default">
							<div class="elementor-widget-container">
								<script>
									var x = document.getElementById("song");
									window.onbeforeunload = function() {
										window.scrollTo(0, 0)
									};
									disableScrolling();
									document.body.style.overflowY = "hidden";
									document.body.style.heigth = "100vh";
									document.getElementById("tombol-buka")
										.onclick = function() {
											myFunction()
										};

									function myFunction() {
										document.body.style.overflowY = "unset";
										document.getElementById("tombol-buka").style.visibility = "hidden";
										enableScrolling();
										playAudio()
									}

									function disableScrolling() {
										var x = window.scrollX;
										var y = window.scrollY;
										window.onscroll = function() {
											window.scrollTo(x, y)
										}
									}

									function enableScrolling() {
										window.onscroll = function() {}
									}

									function playAudio() {
										x.play()
									}

									function pauseAudio() {
										x.pause()
									}
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- <section
			class="elementor-section elementor-top-section elementor-element elementor-element-da940f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
			data-id="da940f9" data-element_type="section"
			data-settings="{&quot;sticky&quot;:&quot;bottom&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c567c4b wdp-sticky-section-no"
					data-id="c567c4b" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section
							class="elementor-section elementor-inner-section elementor-element elementor-element-ca8061a elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
							data-id="ca8061a" data-element_type="section"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9705ff3 wdp-sticky-section-no"
									data-id="9705ff3" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-445d283 elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-icon"
											data-id="445d283" data-element_type="widget"
											data-widget_type="icon.default">
											<div class="elementor-widget-container">
												<div class="elementor-icon-wrapper">
													<a class="elementor-icon" href="https://wekita.id/#katalog">
														<i aria-hidden="true" class="far fa-arrow-alt-circle-left"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3897b1d wdp-sticky-section-no"
									data-id="3897b1d" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-deab654 elementor-headline--style-highlight wdp-sticky-section-no elementor-widget elementor-widget-animated-headline"
											data-id="deab654" data-element_type="widget"
											data-settings="{&quot;marker&quot;:&quot;underline_zigzag&quot;,&quot;highlighted_text&quot;:&quot;TEMA 05&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
											data-widget_type="animated-headline.default">
											<div class="elementor-widget-container">
												<link rel="stylesheet"
													href="../wp-content/plugins/elementor-pro/assets/css/widget-animated-headline.min.css">
												<h3 class="elementor-headline">
													<span
														class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
														<span
															class="elementor-headline-dynamic-text elementor-headline-text-active">TEMA
															05</span>
													</span>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ea2da81 wdp-sticky-section-no"
									data-id="ea2da81" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-3326260 elementor-align-justify zoom-1 wdp-sticky-section-no elementor-widget elementor-widget-button"
											data-id="3326260" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a class="elementor-button elementor-button-link elementor-size-sm"
														href="https://wa.me/message/46S77EFCZCJAN1" target="_blank">
														<span class="elementor-button-content-wrapper">
															<span
																class="elementor-button-icon elementor-align-icon-left">
																<i aria-hidden="true" class="fas fa-shopping-cart"></i>
															</span>
															<span class="elementor-button-text">Pesan</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section> -->
	</div>
	<link rel='stylesheet' id='e-animations-css' href='../wp-content/plugins/elementor/assets/lib/animations/animations.min6319.css?ver=3.15.2' media='all' />
	<script src='../wp-content/plugins/weddingpress/assets/js/wdp-swiper.min.js' id='wdp-swiper-js-js'></script>
	<script src='../wp-content/plugins/weddingpress/assets/js/qr-code.js' id='weddingpress-qr-js'></script>
	<script src='../wp-content/plugins/weddingpress/assets/js/wdp-horizontal.js' id='wdp-horizontal-js-js'></script>
	<script src='../wp-content/plugins/weddingpress/assets/js/exad-scripts.min9b4a.js?ver=3.0.11' id='exad-main-script-js'></script>
	<script id='cui_js_script-js-extra'>
		var CUI_WP = {
			"ajaxurl": "https:\/\/inv.wekita.id\/wp-admin\/admin-ajax.php",
			"cuiNonce": "3bbcb40beb",
			"jpages": "true",
			"jPagesNum": "10",
			"textCounter": "true",
			"textCounterNum": "500",
			"widthWrap": "",
			"autoLoad": "true",
			"thanksComment": "Thanks for your comment!",
			"thanksReplyComment": "Thanks for answering the comment!",
			"duplicateComment": "You might have left one of the fields blank, or duplicate comments",
			"accept": "Accept",
			"cancel": "Cancel",
			"reply": "Reply",
			"textWriteComment": "Ucapan",
			"classPopularComment": "cui-popular-comment",
			"textToDisplay": "Text to display",
			"textCharacteresMin": "2 characters minimum",
			"textNavNext": "Next",
			"textNavPrev": "Previous",
			"textMsgDeleteComment": "Do you want delete this comment?",
			"textLoadMore": "Load more"
		};
	</script>
	<script src='../wp-content/plugins/weddingpress/addons/comment-kit2/js/cui_script8a54.js?ver=1.0.0' id='cui_js_script-js'></script>
	<script src='../wp-content/plugins/weddingpress/addons/comment-kit2/js/libs/jquery.jPages.minac14.js?ver=0.7' id='cui_jPages-js'></script>
	<script src='../wp-content/plugins/weddingpress/addons/comment-kit2/js/libs/jquery.textareaCounterd5f7.js?ver=2.0' id='cui_textCounter-js'></script>
	<script src='../wp-content/plugins/weddingpress/addons/comment-kit2/js/libs/jquery.placeholder.min5d0a.js?ver=2.0.7' id='cui_placeholder-js'></script>
	<script src='../wp-content/plugins/weddingpress/addons/comment-kit2/js/libs/autosize.mind50e.js?ver=1.14' id='cui_autosize-js'></script>
	<script src='../wp-content/themes/hello-elementor/assets/js/hello-frontend.min8a54.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
	<script src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script src='../wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min5829.js?ver=3.15.1' id='elementor-pro-webpack-runtime-js'></script>
	<script src='../wp-content/plugins/elementor/assets/js/webpack.runtime.min6319.js?ver=3.15.2' id='elementor-webpack-runtime-js'></script>
	<script src='../wp-content/plugins/elementor/assets/js/frontend-modules.min6319.js?ver=3.15.2' id='elementor-frontend-modules-js'></script>
	<script src='../wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
	<script src='../wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11' id='regenerator-runtime-js'></script>
	<script src='../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
	<script src='../wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1' id='wp-hooks-js'></script>
	<script src='../wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef' id='wp-i18n-js'></script>
	<script id="wp-i18n-js-after">
		wp.i18n.setLocaleData({
			'text direction\u0004ltr': ['ltr']
		});
	</script>
	<script id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = {
			"ajaxurl": "https:\/\/inv.wekita.id\/wp-admin\/admin-ajax.php",
			"nonce": "5adf89674f",
			"urls": {
				"assets": "https:\/\/inv.wekita.id\/wp-content\/plugins\/elementor-pro\/assets\/",
				"rest": "https:\/\/inv.wekita.id\/wp-json\/"
			},
			"shareButtonsNetworks": {
				"facebook": {
					"title": "Facebook",
					"has_counter": true
				},
				"twitter": {
					"title": "Twitter"
				},
				"linkedin": {
					"title": "LinkedIn",
					"has_counter": true
				},
				"pinterest": {
					"title": "Pinterest",
					"has_counter": true
				},
				"reddit": {
					"title": "Reddit",
					"has_counter": true
				},
				"vk": {
					"title": "VK",
					"has_counter": true
				},
				"odnoklassniki": {
					"title": "OK",
					"has_counter": true
				},
				"tumblr": {
					"title": "Tumblr"
				},
				"digg": {
					"title": "Digg"
				},
				"skype": {
					"title": "Skype"
				},
				"stumbleupon": {
					"title": "StumbleUpon",
					"has_counter": true
				},
				"mix": {
					"title": "Mix"
				},
				"telegram": {
					"title": "Telegram"
				},
				"pocket": {
					"title": "Pocket",
					"has_counter": true
				},
				"xing": {
					"title": "XING",
					"has_counter": true
				},
				"whatsapp": {
					"title": "WhatsApp"
				},
				"email": {
					"title": "Email"
				},
				"print": {
					"title": "Print"
				}
			},
			"facebook_sdk": {
				"lang": "id_ID",
				"app_id": ""
			},
			"lottie": {
				"defaultAnimationUrl": "https:\/\/inv.wekita.id\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
			}
		};
	</script>
	<script src='../wp-content/plugins/elementor-pro/assets/js/frontend.min5829.js?ver=3.15.1' id='elementor-pro-frontend-js'></script>
	<script src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script src='../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Bagikan di Facebook",
				"shareOnTwitter": "Bagikan di Twitter",
				"pinIt": "Buat Pin",
				"download": "Unduh",
				"downloadImage": "Unduh gambar",
				"fullscreen": "Layar Penuh",
				"zoom": "Perbesar",
				"share": "Bagikan",
				"playVideo": "Putar Video",
				"previous": "Sebelumnya",
				"next": "Selanjutnya",
				"close": "Tutup",
				"a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
				"a11yCarouselPrevSlideMessage": "Previous slide",
				"a11yCarouselNextSlideMessage": "Next slide",
				"a11yCarouselFirstSlideMessage": "This is the first slide",
				"a11yCarouselLastSlideMessage": "This is the last slide",
				"a11yCarouselPaginationBulletMessage": "Go to slide"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Mobile Portrait",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Landscape",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet Portrait",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Landscape",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Layar lebar",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.15.2",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"e_optimized_assets_loading": true,
				"e_optimized_css_loading": true,
				"additional_custom_breakpoints": true,
				"e_swiper_latest": true,
				"theme_builder_v2": true,
				"hello-theme-header-footer": true,
				"landing-pages": true,
				"page-transitions": true,
				"notes": true,
				"loop": true,
				"form-submissions": true,
				"e_scroll_snap": true
			},
			"urls": {
				"assets": "https:\/\/inv.wekita.id\/wp-content\/plugins\/elementor\/assets\/"
			},
			"swiperClass": "swiper",
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description",
				"hello_header_logo_type": "title",
				"hello_footer_logo_type": "logo"
			},
			"post": {
				"id": 716,
				"title": "Undangan%20Website%20Tema%2005",
				"excerpt": "",
				"featuredImage": "https:\/\/inv.wekita.id\/wp-content\/uploads\/2023\/05\/Slide5.webp"
			}
		};
	</script>
	<script src='../wp-content/plugins/elementor/assets/js/frontend.min6319.js?ver=3.15.2' id='elementor-frontend-js'></script>
	<script src='../wp-content/plugins/elementor-pro/assets/js/elements-handlers.min5829.js?ver=3.15.1' id='pro-elements-handlers-js'></script>
	<script src='../wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min5829.js?ver=3.15.1' id='e-sticky-js'></script>
	<script id='weddingpress-wdp-js-extra'>
		var cevar = {
			"ajax_url": "https:\/\/inv.wekita.id\/wp-admin\/admin-ajax.php",
			"plugin_url": "https:\/\/inv.wekita.id\/wp-content\/plugins\/weddingpress\/"
		};
	</script>
	<script src='../wp-content/plugins/weddingpress/assets/js/wdp.min9b4a.js?ver=3.0.11' id='weddingpress-wdp-js'></script>
	<script src='../wp-content/plugins/weddingpress/assets/js/guest-form9b4a.js?ver=3.0.11' id='kirim-kit-js'></script>
</body>

<!-- Mirrored from inv.wekita.id/tema-05/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 09:35:41 GMT -->

</html>