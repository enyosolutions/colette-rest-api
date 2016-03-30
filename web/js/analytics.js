/**
 * Created by faou on 13/02/2015.
 */

$(function () {
    if (window.analytics) {
        console.log('binding elements');
        $('body').on('click', '[data-kwg-track-click]', TrackingService.bindClick);
        $('body').on('change', '[data-kwg-track-change]', TrackingService.bindChange);

        if (window.User && User.currentUser && User.currentUser.id != "") {
            analytics.identify(User.currentUser.id, {
                id: User.currentUser.id,
                userId: User.currentUser.id,
                firstName: User.currentUser.firstname,
                email: User.currentUser.email
            });
            analytics.ready(function () {
                if (User.currentUser.id != analytics.user().id()) {
                    analytics.alias(User.currentUser.id);
                }
            });
        }
        analytics.identify({Source: TrackingService.trafficSource()});
        //If the user is not a returning visitor make him one.
       /* if($.cookie("kwg.users.tracking.returningvisitor") == undefined){
            $.cookie("kwg.users.tracking.returningvisitor", 1, {path: '/'});
        }
        */
    }
});


var TrackingService = {
    bindClick: function (evt) {
        console.log('track');
        var $elm = $(this);
        var statuses = $elm.data('kwg-track-click') || $elm.attr('name') || $elm.attr('id');
        statuses = statuses.split('|').map(function(elm){return elm.trim()});
        var category = $elm.data('kwg-track-cat') || undefined;
        var attrs = ($elm.data() && Object.keys($elm.data()).length > 0) ? $elm.data() : (evt.target.attributes ? evt.target.attributes : {});

        var attrsClean = {};
        if (attrs instanceof Array) {
            for (var i = 0, n = attrs.length; i < n; i++) {
                attrsClean[attrs[i].nodeName] = attrs[i].nodeValue;
            }
        }
        else {
            for (var i in attrs) {
                if (i.indexOf("kwgTrackProps") === 0) {
                    attrsClean[i.replace('kwgTrackProps', '')] = attrs[i];
                }
            }
        }
        statuses.map(function(status) {
            analytics.track(status, attrsClean);
        });
    },


    bindChange: function (evt) {
        var $elm = $(evt.target);

        var statuses = $elm.data('kwg-track-change') || $elm.attr('name') || $elm.attr('id');
        statuses = statuses.split('|').map(function(elm){return elm.trim()});

        var category = $elm.data('kwg-track-cat') || undefined;
        var attrs = ($elm.data() && Object.keys($elm.data()).length > 0) ? $elm.data() : (evt.target.attributes ? evt.target.attributes : {});

        var attrsClean = {};
        if (attrs instanceof Array) {
            for (var i = 0, n = attrs.length; i < n; i++) {
                attrsClean[attrs[i].nodeName] = attrs[i].nodeValue;
            }
        }
        else {
            for (var i in attrs) {
                if (i.indexOf("kwgTrackProps") === 0) {
                    attrsClean[i.replace('kwgTrackProps', '')] = attrs[i];
                }
            }
        }
        statuses.map(function(status) {
            analytics.track(status, attrsClean);
        });
    },



    trafficSource: function () {
        if (document.referrer.search('https?://(.*)google.([^/?]*)') === 0) {
            return 'Google';
        } else if (document.referrer.search('https?://(.*)bing.([^/?]*)') === 0) {
            return 'Bing';
        } else if (document.referrer.search('https?://(.*)yahoo.([^/?]*)') === 0) {
            return 'Yahoo';
        } else if (document.referrer.search('https?://(.*)facebook.([^/?]*)') === 0) {
            return 'Facebook';
        } else if (document.referrer.search('https?://(.*)twitter.([^/?]*)') === 0) {
            return 'Twitter';
        } else if (document.referrer.search('https?://(.*)quora.([^/?]*)') === 0) {
            return 'quora';
        }
        else {
            return 'Other';
        }
    }
};