
/*


down vote
accepted
git log <yourlasttag>..HEAD ?

If you want them like in your example, on the one line with commit id + message, then

git log <yourlasttag>..HEAD --oneline

and in case you don't know your latest tag or want this to be dynamic, on windows you could do

for /f "delims=" %a in ('git describe --tags --abbrev^=0') do @set latesttag=%a
git log %latesttag%..HEAD --oneline
and on linux

git log `git describe --tags --abbrev=0`..HEAD --oneline

*/


==== 1.1.0 Maintenance and cleaning version

    fix: carousel behavior in search
    fix: activities filters background
    fix: carrousel arrows
    Fix: homepage main area now take 90% of container <1200px
    Fix: Change animation of step 3 in home page for the dropbox/popup for .mobile and .tablet
    fix: toggle css moved to same location and same selector
    fix: destination routes url calls when arriving directly on flight
    Fix: Styling the tickets in flights mode <770px
    fix: css for the map labels
    Fix: Flights mode no longer go off screen horizontaly <770px
    fix: date formating in spanish in the search form

    perf: included asyncjs for better server requesting
    perf: logging previous routes for easier access
    perf: caching last 3 routes calls for 5 minutes

    improvment: maps popup now auto close
    refactor: removing History.js api (useless on top of history api)
    refactor: moved map related code to map.css

    refactor+feat: routing system and 2ways databinding.
    feat: the destinations now auto update themselves
    feat: notification for searched agent
    feat: alpha testing asynchronous update of prices if search is not anywhere.
    feat: maps now group themselves when zoom level is low.
    feat: country search now works
    feat: map now take all space when in full screen
    New: Styling the recap box in flights mode <480px


=== 1.1.1 Various bugs and fix

    refactor: multiple filter calls.
    fix: single search bug.
    fix: cache notification problems


== 1.1.2 Mobile ajustements

    fix: filter box behavior on mobiles
    fix: map behavior on tablets
    feat: tablet app incitation message for ios app.
    refactor: re-order the other destiantions carousel


1.1.3 == Previous button bug


1.1.4 == Map ajustements

    improvment: map now show prices, and zooms on click
    fix: currency switching issue

1.1.5 == Maintenance and bug fix

fix: bug in uk with currency label
feat: api route for getting the cheapest fares available in the app


1.1.6 == Maintenance and bug fix

    feat: Cost of live now changes currency symbol

1.2.0 == International + Filters

    feat: filtering destinations
    feat: manual update of destinations
    feat: revamp of the nav bar and the action bar
    fix: binding of query parameters
    fix: map now correctly recenter after a search
    feat: prices on map are now correctly geo placed for countries
    feat: action bar is now auto placed on scroll
    feat: pictures are not on css anymore
    feat: moods filters are now send to api
    fix: moods filtering from urls.
    feat: action bar is now scroll bound
    feat: activities now display in a popover when in results mode
    refactor: removed extra filter button
    refactor: destinations images are now in html instead of css
    fix: prices in map mode were not rounded
    Fix : the filter box in flights mode no longer bug on desktop because of the modal
    Fix: modal classes no longer add padding to filter in flights mode
    Add: modal filters for flights in destination mode
    feat: added classes for future user dashboard
    feat: added region search
    feat: action bar now fixed to top


1.2.1 == Tweaks for international search

    fix: missing buttons labels
    fix: clear button controls
    fix: moods toggle behavior in map mode.


1.2.2 == Fix inspire mie nav menu issue

    fix: inspire menu link.
    feat: background now linear in search results


1.2.3 == Various bugs

    style: missing translations for action bar
    fix: caching of search results was broken
    fix: updating of filters count was broken
    fix: filters binding was incorrect
    refactor: filter counting and clearing is now included in the binding object.

1.2.4 == Currency symbol

    fix: euro symbol on map
    
    
1.3.0 == Hotels links

    feat: hotels links on travels cards an presentation
    

1.3.1 == Hotels links

    feat: hotels links on travels cards an presentation
    refactor: hiding hotels links for now
    Fix: js bug on sliders
    Style: missing translation for buttons
    refactor: adding classes for managing non search extended mode
    Fix: Button hotels in flight mode was not working
    Style: Color of the logo
    Fix: bug in api with getting the destinations
    Feat: The action bar recap now include activities count.
    fix: search activities transmission from homepage page to search
    feat: price of accommodation is now optionnal
    style: css var teal is now used for the current pretol blue in the app. 
    style: small fixing of the discover destination popup 
    Feat: new url for hotels
    
    
1.3.2 ==Js fix

    fix: use strict in accommodationController.js
    

1.3.3 ==Js fix

    fix: activities calls 

    
1.3.4 ==Js fix

    fix: missing space in sub search label 
    

1.3.5 == removing pre search

    feat: removing php pre-search feature


1.4.0 == User accounts and search overhowl 
    
    `Requires a composer update
    
    feat: User account. /fr/user/registration
    feat: Destination results now limited to 16 results
    feat: Button plus for adding more results
    feat: Select button for sorting destinations
    feat: user Dashboard
    feat: A/B testing feature
    feat: 3 options A/B on the homepage blocks
    feat: legwork for flights popup
    feat: navigation mode on the map
    fix: db install script
    fix: origin input security check
    feat: separating flights and destination sorts
    feat: simplified map display
    feat: browsable map with clicable destinations
    refactor: search.Controller an Search.views refactor
    refactor: added missing tracker for flights
    fix: adjusted message when no flights where found.
    fix: extra destination now get the loading gif
    feat: updated map.js to support options for labels
    fix: map button must not return disabled destinations (aka beauvais)
    style: background images on pages other than homepage
    fix: url problem with getAssets features
    fix: actionbar.css url
    refactor: moving to kwg\defaultController
    fix: problem in db install update script 
    refactor: preparing citypage structure
    refactor: adding latest folder for imports
    refactor: citypage separation
    refactor: simplification of search js
    refactor: flight routes ajustments and fixes
    refactor: separating pagination of destinations and flights
    fix: carriers and airport filtering now simplified (now works by excluding elements)
    refactor: temporarily removed destination browsing on the map
    refactor: more results when in map mode
    fix: rounding of accomodotation price
    fix: slicing of number of results
    refactor: migrating from mixpanel to segment.io 


1.4.1 == css fixes
 
    style: z-index on sort dropin
    style: sort button focus style


1.4.2 == accommodation fixes

    refactor: accommodation prices is now an array
    fix: citypage layout glitches

1.4.3 == destinations labels

    refactor: Changed destinations labels

1.4.4 == inspire me page
    fix: inspire me page bugs fix

1.4.5 == inspire me page
    fix: inspire me page bugs fix


1.4.6 == inspire me page + A/B Tests
    style: background attachment on inspire me page
    fix: A/B testing engine ramdom not working
    feat: a/b test now run for a week
    feat: user account properties now goes to segment.io
    fix: redirect loops on assets and trailing slashes
    fix: locale fallback system
    fix: locale injection when mounting users
    style: footer styling and register urls


1.4.7 == Segment tracking field
    feat: added segment tracking for redirect url
    
   


1.4.8 == Accommodation price bugfix
    fix: accommodation price
    style: font-size on flights items


1.4.9 == Fixes
    fix: destination select not updated on page change
    feat: revamp of homepage
    refactor: ajusting footer
    style: changed default police to Lato


1.4.11 == Fixes
    fix: font-size in asset


1.4.13 == New homepage
    
    feat: Added travel deals boxes on the homepage
    feat: travels deals popup
    feat: favoriting destinations for new accounts
    feat: cookie disclaimer'
    refactor: changed all tracking events names
    refactor: changed all tracking data attribute triggers
    refactor: Moved userjs data to the currentUser object
    refactor: Added a tagmanager project for injecting tests js tags.
    fix: problems with login in
    fix: privacy policy urls
    typo: registration form translation
      
    
1.4.13 == Tracking optimisation
    
    fix: track searches not working on homepage
    
1.4.14 == Moods bug
    
    fix: track searches not working on homepage
    fix: moods not working when multiple moods selected
       
1.4.15 == Page label 
    
    refactor: Changed label for page tracking
    feat: added link for more flights when in popup mode
    
    
    
       
1.4.16 == homepage js 
    
    fix: remaining useless js on home.controls.js
    
    
1.4.17 == homepage js 
    
    fix: bugs with login and login check urls
    feat: analytics tracking
    feat: sherlog tracking
    feat: navbottom link tracking  
    feat: Facebook login
    
    
1.4.18 == Star destination 
    
    feat: star a destination
    refactor: injected notify js for better notifications
    style: login and register modal styling and labels
    feat: city search  api
    feat: flight popup for registered users
    feat: sort by cheapest on accommoadtion whitelabel
    fix: events artists in modal
    feat: register and login in the same tab
    
    
1.4.19 == Missing events + register popup
    
    feat: missing events
    feat: register popup with different values propositions
    fix: wrong js minified file loaded
 
1.4.20 == cheapest accommodation first
    
    refactor: priority given to cheap accommodation
    

1.4.21 == fix problem with boostrap.php
    
    fix: bootstrap.php not liking request usage outside of middleware
        
        
1.4.22 == various fixes and better dashboard
    
    fix: missing events
    fix: bug with flights modal box on map mode
    fix: silent bug on blogheader parts
    style: better tabs on register popup 
    style: better dashboard presentation
    feat: tracking returning users
    feat: favoriting destinations 
    feat: autodetection of userLocation
    refactor: deprecated user location detection
    
    
1.4.23 == Flight modal bug fix

    typo: various translations typosgit 
    fix: extras agents popoover in flight modal 
    fix: db-install import script
    fix: missing destinations on search recap text
    
    
1.4.24 == Blog header fix

    fix: blog header links 
    fix: db-install import script
    fix: missing destinations on search recap text
    fix: notify block positioning
    fix: better feedback when updating destinations.
    
    
1.5.0 == New flights landing page

    refactor: fixing various issues with the destination page
    refactor: adjusting code for better performance
    fix: flights landing page for finding flights quickly.
    feat: removed multiple destination selection
    feat: added examples to select box 
    feat: better feedback when searching via selectbox
    
    
1.5.1 == flights landing page css

    style: adjusting css of form on flight landing page
    
    
1.5.2 == bugs fix

    style: missing destination-mode class on first search
    fix: deactivating filter fixing to bottom
    fix: destination SEO label
    
    
1.5.3 == Do not track cookie

    feat: added do not track cookie to user behavior
    fix: modal z-index
    fix: flightslanding responsive form
    
    
    
1.5.4 == Do not track cookie on v2 pages

    feat: added do not track cookie to v2 layout.
    feat: added reset password link.
    feat: restyled dashboard.
    fix: Missing translations.
    
    
1.5.5 == Various fixes on translations

    fix: register tab default focus
    refactor: removed target blank on accommodation links
    fix: navtop logo did not redirect to right page
    fix: debug elements showing on city page
    
    
1.5.6 == Raising city caching to 1 day.

    feat: augmented caching to 1day for songkick, weather and meetups
    
    
1.5.7 & 1.5.8 == background on pages with page.css loaded

    feat: put an image background on pages that loads page.css
    
    
1.5.9 == Correction of css bug on cards

    fix:  card styles css re-organisation
    
    
1.5.10 == Correction of css bug on cards

    fix: location cache duration
    
1.5.11 == bug in destination picker with option anywhere

    fix: bug in destination picker with option anywhere
    
    
1.5.12 == Welcome email

    feat: added welcome email to users who register.
    fix: Singletrip search
    
1.5.13 == Clic sur le nom de la destination  

    fix: clicking on a destination on the page results does nothing
    
    
1.5.14 == Mailchimp api  

    feat: connected to mailchimp api, on confirmation emails
    feat: fixed few styles problems on homepage
    feat: Favorite destinations starring 
    
    
   
1.5.15 == Idea feed  

    feat: added idea feed box
    feat: widget support
    refactor: citypage style and fixes
    fix: citypage content verification
    
1.5.16 == Fix selct problems

    fix: controls on destinations input
    fix: destinations select not correctly set when changing mode
    
    
1.5.17 == Fix flights landing

    fix: css on flights landing page
        
    
1.6.0 == Tabs autocomplete

    feat: working on tab autocomplete
    refactor: js code reorganisation
    feat: Transition de select2
    feat: Saving and bookmarking destinations
    feat: seeing destinations and bookmarks in dashboard
    
    
1.6.1 == Access control on api routes

    feat: access control * on api routes
    
    
1.6.2 == outbound departure time filter bug

    fix: outbound departure time filter bug    

1.6.3 == Refresh search prices

    feat: refresh search prices
    
1.6.4 == destinations pages fixes

    feat: added agenda menu
    fix: corrected html in tags behavior
    fix: search query now shows in the the inpireme page
    fix: Star destinations
    fix: fav destination height
    feat: citypage information details page.
    
1.6.5 == bootstrap bug

    fix: bug in bootstrap before function
    
1.6.6 == header bug

    fix: blog header collapsing isssue

1.6.7 == fixing nav and details page

    fix: bug on city pages
    fix: bug on contact form
    style: applying layout V2 to contact page
    
    
1.6.8 == fulltext search

    feat: full text search
    feat: link to citypage from desinations popup 
    fix: destinations footer broken in case of search
    fix: merge issues on citypage-V2 
    
    
1.6.9 == fix mobile problem on filter button

    fix: mobile problem on filter button
    
     
1.6.10 == fix problems on homepage search

    fix: conflict between the actionbar and the homepage search
    feat: detailed results on the map search, even on the compact mode
    style: bookmark buttons are now on top of the browser
    refactor: removing unnecessary imports in the homepage
    
    
1.6.11 ====

    feat: laying out the dashboard
    fix: when an url has incorrect dates, set them to the next wkd
    feat: Reducing number of queries to mongo
    feat: saving queries to cookie and restoring it.
    feat: adding better buttons for bookmarking and saving to favorites
    style: border of flight popups items
    style: showing country on mouse over
    style: preparing fade for carriers and price tags
    refactor: various cleanup in js
    refactor: created app.min compilation
    
1.6.11b ====

    fix: blog background color, fix:missing translations
    fix: query saving cooking not working for single trips


1.6.12 ====

    fix: error messages when ajax calls fail
    fix: nouiSlider price
    refactor: inclunding datepicker only on pages that require it 
    refactor: binding Search.js namespace to the app
    feat: The origin city now changes every time you launch a search
    fix: display problems on the map info window
    fix: silent search mode not behaving correctly
    feat: map now allow searching and browsing  
    
    
1.8.0 ==== MIGRATING SEARCH TO BACKBONE MODEL, COLLECTIONS AND VIEWS

    fix: problem with swtithing locale when you are on a page
    fix: filter modal on flight pages
    fix: search now support aiport names and code
    fix: bug in citypage details
    style: fixing header break point, and color issues
    style: fixed header v2 breakpoint and burdger display
    style: fade in for single trip checkbox
    refactor: using backbone collections for cities
    refactor: using backbone collections for displayed destinations
    refactor: using backbone collections for displayed fares
    refactor: Integrating mapview.
    refactor: cleaning and removing dead code
    refactor: cleaning searchController
    refactor: cleaning and removing results and flatResults
    feat: auto loading controllers and services
    feat: flightmodal and destinationsList now use their own view and template
    feat: flights now also use their on mode and template
    feat: map partially uses it's own view
    style: created a fullcreen loader with a backdrop
    type: updated the text for the action bar recap
       feat: dashboard bookmarks are now default and cleaner
        feat: deleting a bookmark from dashboard
        feat: selecting a favorite destination
        feat: cheapest fares lists
        feat: automatic email with cheapest fare list
           feat: better nav on the fab board
            code: app style dashboard
            typo: translations in french
            style: flight filter box
    fix: flightpopup won't load if the destination did not exists
    fix: removed useless dependency on countries 
    fix: tracking messages not sent on change 
    refactoring: Next weekend functions are now in kwgFlight
    
    
1.8.1 ====

    fix: bug on get closest cities when parameters are from http get
    
1.8.2 ====

    typo: various incorrect french translations
    
    
1.8.3 =====
     
       fix: check destinations wanted and visited
       fix: star icon not working properly on citypages

1.8.4 ===== preparing support for HTTPS
       
       fix: hovering destination card does not shows country name.
        fix: datepicker not worker correctly       
        fix: actionbar roundtrip dates missing'
        fix: bugs in compiled version of the dashboard.
        feat: clearing cache from the command line
     
    
    
1.8.5 ========
     
     fix: bug in citypages with contributors
     feat: correct attributions of modifications
     fix: dashboard: destination refresh was broken
     feat: hovering dropdown opens it.
     feat: first time on dashboard message.
     
     
1.8.6 ========

    fix: registration
    fix: Citypage code improvements
     
   
1.9.0 ========

    feat: you can now bookmark everything on the dashboard by drag and drop
    refactor: changed name of route for the other bookmarks : generic => other
    typo: few labels still in english grrr
    fix: language switch
    
    
1.9.1 =========

    feat: adding contributors to citypages
    feat: dashboard statistics a now up to date
    refactor: api dirty code 
    feat: upadted seo texts fo flights and destination search
    feat: buttons for bookmarking flights
    feat: copy paste on dashboard
    feat: changed bookmark icon
    feat: you can now invite people on kenweego from the dashboard
    feat: you can now invite people on all social networks
    feat: fixed smtp problems
    fix: bug on on cheapfares url generation
    
    
1.9.2 =========

    feat: view user public profile
    
    
1.9.3 ========
    
    refactor: registration and login form seo, optimized for dashboard.
    fix: missing price in flight share message
    feat: sorting results by creation date
    fix: bug in starring function
    
    
1.9.4 =========
    
    fix: inline search form was hidden but still clickable.
    fix: urls of images in homepage.
    fix: securing tip creation.
    fix: more infos link on search page.
    refactor: actions icons styling.
    refactor: small case for type.
    feat: make bookmark public or private. 
    
    
1.9.5 =========

    fix: double imports of vendors
    feat: loading icons on new bookmark form
    style: new bookmark form width
    
    
1.9.6 =========
    
     fix: deleting bookmarks url fix

1.9.7 =========

    fix: various bugs in flight search mode
    fix: useless update action bar
    perf: requiring less destinations as it's a destination mode
    perf: potential memory leak in the abort method
    style: rendering of direct fares
    
    
1.9.8 =========

    perf: created an async function for launching meetups caching
    perf: cleaned code for events and details
    feat: home slider with ajusted logos
    
    
1.9.9 =========

    feat: no follow and target blank on citypage links
    feat: collapse on citypage contents
    
    
1.9.10 =========

    fix: partners images
    refactor: the way bookmarks are displayed
    style: import url mode. 
    fix: various memory leaks on backbone views
    fix: bug on keys in search udpate query
    code: added responsive vars to options of app
    perf: do not update maps on mobiel
    perf: do not update flights in card mode
    
    
1.10 ============

    feat: weekly email to users with fares prices
    
    
1.10.1 ==============

    feat: viewing readonly cards
    style: actions icons and readonly status
    
1.10.2 ==============
    
    style: redesigned the login page, to match a value proposition style
    feat: when search duration is long, put the country first. 
    fix: NaN on accommodation prices
    
    
1.10.3 =================

    fix: if departure is today, flight search show an error
    fix: if search dates are wrong, the app always redirect to single flight
    
1.10.4 =================

    refactor+perf: map: using infoxbox instead markers for map labels
    refactor: removed all dependencies in map.js
    refactor+perf: Only changed models a rendered on the map
    perf: for rendering no need to flush all the markers anymore
    perf: for rendering changes no need to change all markers
    feat: map markers displays country on hover.
    
    
1.10.4b =================
    
    fix: wrong minifiacation of infobox.js due to the presence of eval

1.10.5 =================

    fix: better backdrop on flight mode
    
  
1.10.6 =================

    fix: localstorage is not available in private browsing mode on IOS
    feat: enabling tips and edits on citypages, for all users.
    style: changed background image to sand and stone
    
1.10.7 =================

    feat: bookmark buttons always available to the user.
    feat: auto loading of tooltips icons
    style: added screenshots to register page
    
   
1.10.8 =================
    
    feat: tooltip on map fullscreen button
    typo: map fullscreen button translation typo
    
    
1.10.9 =================

    fix: style of map and map cards


1.10.9b =================

    fix: style of map cards.
    
    
1.10.11 =================

    fix: various bugs in the bookmark api
    fix: buttons for delete bookmark styles
    fix: user login.
    feat: infinite scroll.
    
1.10.12 =================
    
    feat: fares list widget
    
    
1.10.13 =================
    
    fix: location was being to restrictive
    
    
    
1.10.14 =================
    
    fix: widget location data
    
    
1.10.15 =================

    refactor: using database for fares prices
    scheme of widgets
    
    
1.10.16 =================
        
    fix: request uri broken because of request->initialize in fare controller
    
    
1.10.17 =================

    feat: nav menu now show's top destinations and options
    
    
1.10.18 =================

    fix: problem with seo names of cities
    
    
1.10.19 =================

    fix: problems with assets compilation in admin

    
1.10.20 =================

    fix: problem with locale switching
        fix: citypage broken
        
        
1.10.20B =================

    typo: missing destiantions tips label
    fix: switch locale
    
        
1.10.21 =================

    fix: regression in swtich locale 
    
    
1.10.22 =================

    fix: preferred destinations

1.10.21 =================

    fix: debug left in menu
    
    
    
1.11.0 ==================

    feat: changed destination selector on homepage.
    style: mixpanel affiliate link for more tracking points
    fix: zoom level on map is now adjusted to search duration
    fix: query cookie saving
    fix: weekly mail tracking pixel
    fix: removing kenwego from utm sources
    fix: redirect url after login
    fix: emails sent twice for confirmation and welcome
    fix: langage not registered
    typo: welcome message popup
    
    
1.11.1 ==================    

    fix: problems with isotope navboard
    fix: problems with registering with facebook
    
    
1.11.2 ==================
  
    fix: problems when launching single destination search
    
    
1.11.3 ==================
  
    refactor: Controls when submitting a search form
    refactor: remove initialization for select2 destinations
    style: style of input when it has selected values
    fix: not showing map points without prices
    
    
1.11.4 ==================

    feat: close button on autocomplete box
    feat: bookmarking destinations on map
    style: replaced tilde by plus-minus &#177;
    feat: wanderlists
   
   
1.11.5 ==================

    fix: bug in the flight search results
    fix: bug because of missing meta section in bookmarks
    fix: bug with rendering flightmode when city infos is not present
    style: pan crepe as a loader
    
    
    
1.11.6 ==================

    feat: New Widgets : buttons
   
   
1.12.0 ==================

    feat: search by month.
    refactor: upgraded happyjs and better checking of inputs
    fix: problem of map positionning
    fix: more agents popover not showing. 
    refactor: flight modals parameters and events.
    refactor: happy js function
    feat: widget generator
   
    
1.13.0 ==================

    feat: dashboard : friends only visibility
    feat: user profile
    feat: multi destination selector on searchmode and flightslanging
    feat: user profile link in invite email
    feat: booking redirecting upgrades
    refactor: using selectize in dashboard instead of select2
    
    
1.13.1 ==================

    fix: problem with dates checkin when dates are in the past (in widgets and in searchController
    fix: tracking elements on homepage.
    
    
1.13.3 ==================

    fix: restoring deleted xeditable files
    fix: various notice bugs in the code
 
    
1.13.4 ==================

    fix: date format
    
1.13.5 ==================
    
    feat: user list
    feat: friendship request
    fix: security access on edit routes
    
    
1.13.6 ==================

    feat: adding url and drag and drop now open the create form
    fix: price tags not showing on bookmarks of type urls
    fix: visited and wanted cities not showing in dashboard stats
    fix: visited and wanted not added to bookmarks
    fix: js not updating wanted buttons correctly
    
    
1.13.7 ==================

    feat: user firendrequest email
    feat: user firend list
    
    
1.13.8 ==================

    fix: bug in city pages
    feat: songkick events imports
    refactor: events details routes naming
    
    
1.13.9 ==================    
    
    fix: locale switching bug
    
    
    
    
1.13.10 ==================    
    
    style: user list
    fix: image url
    feat: user list and search
    
    
1.13.11 ==================   
    
        fix: init of isotope
        feat: link to user search page
        feat: better display of otherBookmarks
        
        
1.13.12 ==================   

    fix: view tripidea bookmark
    refactor: view bookmarks code for performance and cleanliness
    fix: urls of images
    feat: auto save urls,image and description of bookmarks.
    