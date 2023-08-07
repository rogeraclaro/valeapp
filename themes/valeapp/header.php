<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ValeApp
 */
wp_head();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex, nofollow" />
	<link rel="icon" href="" class="href_favicon" />

	<title>Vale App</title>

	<!-- BEGIN CONFIGURATION MIXPANEL & ANALITICS -->
	<script>
		var _campaign = 'PB_TEFAL228';
		var _global = 'TEFAL228';
		var _country = 'ES';
		var _brand = '';
	</script>
	<!-- END CONFIGURATION MIXPANEL & ANALITICS -->

	<!-- Google Tag Manager -->
	<script>
		var dataLayer = [{ campaign: _campaign, country: _country, global: _global }]; !function (a, e, t, n, g) { a[n] = a[n] || [], a[n].push({ "gtm.start": (new Date).getTime(), event: "gtm.js" }); var r = e.getElementsByTagName(t)[0], m = e.createElement(t); m.async = !0, m.src = "https://www.googletagmanager.com/gtm.js?id=GTM-5GT48S6", r.parentNode.insertBefore(m, r); }(window, document, "script", "dataLayer");	
	</script>
	<!-- End Google Tag Manager -->

	<!-- BEGIN MIXPANEL -->
	<script>
		!function (e, t) { if (!t.__SV) { var n, i, p = window; try { var a, o, r, l = p.location, s = l.hash; a = function (e, t) { return (o = e.match(RegExp(t + "=([^&]*)"))) ? o[1] : null; }, s && a(s, "state") && ("mpeditor" === (r = JSON.parse(decodeURIComponent(a(s, "state")))).action && (p.sessionStorage.setItem("_mpcehash", s), history.replaceState(r.desiredHash || "", e.title, l.pathname + l.search))); } catch (e) { } window.mixpanel = t, t._i = [], t.init = function (e, p, a) { function o(e, t) { var n = t.split("."); 2 == n.length && (e = e[n[0]], t = n[1]), e[t] = function () { e.push([t].concat(Array.prototype.slice.call(arguments, 0))); }; } var r = t; for (void 0 !== a ? r = t[a] = [] : a = "mixpanel", r.people = r.people || [], r.toString = function (e) { var t = "mixpanel"; return "mixpanel" !== a && (t += "." + a), e || (t += " (stub)"), t; }, r.people.toString = function () { return r.toString(1) + ".people (stub)"; }, n = "disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" "), i = 0; i < n.length; i++)o(r, n[i]); t._i.push([e, p, a]); }, t.__SV = 1.2, (p = e.createElement("script")).type = "text/javascript", p.async = !0, p.src = "undefined" != typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === e.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js", (a = e.getElementsByTagName("script")[0]).parentNode.insertBefore(p, a); } }(document, window.mixpanel || []);
	</script>
	<!-- END MIXPANEL -->
</head>
