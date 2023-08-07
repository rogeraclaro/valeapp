(function ($) {
    "use strict"; // Start of use strict

    var getUrlParameter = function (param, defaultValue) {
        var vars = {};
        window.location.href.replace(location.hash, '').replace(
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function (m, key, value) { // callback
                vars[key] = value !== undefined ? value : '';
            }
        );

        if (param) {
            return vars[param] ? vars[param] : defaultValue;
        }
        return vars;
    };

    /********************* Get Mixpanel properties ****************************/
    var infoMarket;
    var config = {
        operationCode: _campaign,
        mixpanelToken: ''
    };

    switch (_country) {
        case 'DE':
            // VP GERMANY
            config.mixpanelToken = '9b6b75a37c6eff06bf14132f67d55e37';
            infoMarket = 'DE - Veepee';
            break;
        case 'AT':
            // VP AUSTRIA
            config.mixpanelToken = 'e1fcf2661096212f64500ac5c70b6956';
            infoMarket = 'AT - Veepee';
            break;
        case 'ES':
            if (window.location.host == 'www.veepee.es' || window.location.host == 'www.mutagency.com') {
                // VP SPAIN
                config.mixpanelToken = '2cf592140dba3dc4402b360233a6dd45';
                infoMarket = 'ES - Veepee';
            } else if (window.location.host == 'es.privalia.com' || window.location.host == 'mutagency.com') {
                // PV SPAIN
                config.mixpanelToken = 'e39a3b46dfc09817178d1c18a2bceda5';
                infoMarket = 'ES - Privalia';
            };
            break;
        case 'IT':
            if (window.location.host == 'www.veepee.it' || window.location.host == 'www.mutagency.com') {
                // VP ITALY
                config.mixpanelToken = 'b1d06f62ef92319ca25f11d487b35d8b';
                infoMarket = 'IT - Veepee';
            } else if (window.location.host == 'it.privalia.com' || window.location.host == 'mutagency.com') {
                // PV ITALY
                config.mixpanelToken = '1cc66c7dc984f3f7830675b6c8dd0e1f';
                infoMarket = 'IT - Privalia';
            };
            break;
        case 'FR':
            if (window.location.host == 'fr.veepee.be' || window.location.href.indexOf('BEFR') > -1) {
                // VP BELGIUM FR
                config.mixpanelToken = '69a6e42ce2809abc255bb9ae23faeb4b';
                infoMarket = 'BEFR - Veepee';
            } else if ((window.location.host == 'www.veepee.lu') || (window.location.href.indexOf('LUFR') > -1)) {
                // VP LUXEMBOURG FR
                config.mixpanelToken = '29c32372870a21fdfd1d5734f4fafabb';
                infoMarket = 'LUFR - Veepee';
            }
            break;
        case 'NL':
            if (window.location.host == 'nl.veepee.be' || window.location.href.indexOf('BENL') > -1) {
                // VP BELGIUM NL
                config.mixpanelToken = '974bdc6ae4584aa38454bab8fa711507';
                infoMarket = 'BENL - Veepee';
            } else if ((window.location.host == 'www.veepee.nl') || (window.location.href.indexOf('NLNL') > -1)) {
                // VP NETHERLANDS NL
                config.mixpanelToken = 'adc328f10cd88ca5604020c26154816b';
                infoMarket = 'NLNL - Veepee';
            }
            break;
        default:
            console.error('Country not specified');
    }

    console.table({ operationCode: config.operationCode, market: infoMarket });

    mixpanel.init(config.mixpanelToken, {
        api_host: 'https://data.services.vente-privee.com/frontservices/api-tracking',
        disable_notifications: true,
        autotrack: false,
        track_pageview: false
    });

    var mp_properties = getUrlParameter('mp_properties', null);
    var propriet = [];

    if (mp_properties) {
        mp_properties = decodeURIComponent(mp_properties);
        mp_properties = atob(mp_properties);
        propriet = JSON.parse(mp_properties);
    }

    mixpanel.identify(propriet['Member ID']);

    mixpanel.register({
        "Interface": propriet['Interface'],
        "UTM Term [Last Touch]": propriet['UTM Term [Last Touch]'],
        "UTM Content [Last Touch]": propriet['UTM Content [Last Touch]'],
        "UTM Campaign [Last Touch]": propriet['UTM Campaign [Last Touch]'],
        "UTM Medium [Last Touch]": propriet['UTM Medium [Last Touch]'],
        "UTM Source [Last Touch]": propriet['UTM Source [Last Touch]'],
        "CRM Segment": propriet['CRM Segment'],
        "# of Completed Purchases": propriet['# of Completed Purchases'],
        "Member ID": propriet['Member ID'],
        "Optimizely Current A\/B Tests": propriet['Optimizely Current A\/B Tests'],
        "Source": propriet['Source'],
        "Point Reached On Homepage": propriet['Point Reached On Homepage']
    });

    // Trigger page view
    mixpanel.track("View B2B mini website", {
        "Operation Code": config.operationCode,
    });

    function goFor(href, target) {
        switch (target) {
            case '_top':
                window.top.location.href = href;
                break;
            case '_parent':
                window.parent.location.href = href;
                break;
            default:
                window.location.href = href;
        }
    }

    // Send "Click" mixpanel event
    var isRedirecting = false;
    var bindTracking = function (e) {

        var label = this.getAttribute('data-label');
        var href = this.getAttribute('href');
        var target = this.getAttribute('target');
        var redirectionPopup = document.querySelector('.redirection-popup');
        var hasValidLink = href !== undefined && href !== '#' && href !== null;

        if (hasValidLink && !isRedirecting && !this.classList.contains('no-timer')) {
            e.preventDefault();
            isRedirecting = true;

            // Create a random timer
            const random = parseInt(Math.random() * 2000);
            const timeoutInterval = 2000 + random;

            // Show the redirection popup
            redirectionPopup.classList.add('active');

            // Redirects the user after the timer ends
            let timeout = setTimeout(() => {
                clearTimeout(timeout);
                goFor(href, target);

                setTimeout(() => {
                    redirectionPopup.classList.remove('active');
                    isRedirecting = false;
                }, 500);
            }, timeoutInterval);
        }

        // Send the event to mixpanel
        mixpanel.track("Click", {
            "Operation Code": config.operationCode,
            "Click Name": "Mini site " + label
        });
    };

    var trackedElements = document.getElementsByClassName("event");

    // Bind "Click" mixpanel event on click
    for (var i = 0; i < trackedElements.length; i++) {
        trackedElements[i].addEventListener('click', bindTracking, false);
    }

})(jQuery);
