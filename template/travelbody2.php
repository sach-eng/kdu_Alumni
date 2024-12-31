<div class="views-exposed-form block block-views-exposed-filter-blocks block-views-exposed-filter-blocks-block" data-drupal-selector="views-exposed-form-list-of-trips-block-trips-page-embed" id="block-viewsexposedfilterblock">
  
    
      <form action="/travel/trips" method="get" id="views-exposed-form-list-of-trips-block-trips-page-embed" accept-charset="UTF-8">
  <div class="js-form-item form-item form-type-select js-form-type-select form-item-field-trip-type-value js-form-item-field-trip-type-value">
      <label for="edit-field-trip-type-value--2">Program Type</label>
        <select data-drupal-selector="edit-field-trip-type-value" id="edit-field-trip-type-value--2" name="field_trip_type_value" class="form-select"><option value="All" selected="selected">- Any -</option><option value="sea">By Sea</option><option value="river">By River</option><option value="land">By Land</option><option value="rail">By Rail</option><option value="sports">Sports Programs</option><option value="family">Family Programs</option><option value="springbreak">Spring Break</option><option value="hbs">HBS Exclusive</option></select>
        </div>
<div class="js-form-item form-item form-type-select js-form-type-select form-item-field-trip-region-value js-form-item-field-trip-region-value">
      <label for="edit-field-trip-region-value--2">Region</label>
        <select data-drupal-selector="edit-field-trip-region-value" id="edit-field-trip-region-value--2" name="field_trip_region_value" class="form-select"><option value="All" selected="selected">- Any -</option><option value="na">North America &amp; Caribbean</option><option value="la">South &amp; Central America</option><option value="europe">Europe</option><option value="africa">Africa</option><option value="mideast">Middle East</option><option value="asia">Asia</option><option value="oceania">Oceania</option><option value="polar">Polar Regions</option></select>
        </div>
<div class="js-form-item form-item form-type-select js-form-type-select form-item-field-trip-season-value js-form-item-field-trip-season-value">
      <label for="edit-field-trip-season-value--2">Season</label>
        <select data-drupal-selector="edit-field-trip-season-value" id="edit-field-trip-season-value--2" name="field_trip_season_value" class="form-select"><option value="All" selected="selected">- Any -</option><option value="Winter 2023-2024">Winter 2023-2024</option><option value="Spring 2024">Spring 2024</option><option value="Summer 2024">Summer 2024</option><option value="Fall 2024">Fall 2024</option><option value="Winter 2024-2025">Winter 2024-2025</option><option value="Spring 2025">Spring 2025</option><option value="Summer 2025">Summer 2025</option><option value="fall_2025">Fall 2025</option><option value="winter_2025_2026">Winter 2025-2026</option></select>
        </div>
<div class="js-form-item form-item form-type-select js-form-type-select form-item-field-trip-activity-level-value js-form-item-field-trip-activity-level-value">
      <label for="edit-field-trip-activity-level-value--2">Activity Level</label>
        <select data-drupal-selector="edit-field-trip-activity-level-value" id="edit-field-trip-activity-level-value--2" name="field_trip_activity_level_value" class="form-select"><option value="All" selected="selected">- Any -</option><option value="activitylevel1">1</option><option value="activitylevel2">2</option><option value="activitylevel3">3</option><option value="activitylevel4">4</option><option value="activitylevel5">5</option></select>
        </div>
<div class="js-form-item form-item form-type-textfield js-form-type-textfield form-item-field-trip-dates-value js-form-item-field-trip-dates-value">
      <label for="edit-field-trip-dates-value--2">Trip Dates -  start date (field_trip_dates)</label>
        <input data-drupal-selector="edit-field-trip-dates-value" data-msg-maxlength="This field field has a maximum length of 128." type="text" id="edit-field-trip-dates-value--2" name="field_trip_dates_value" value="" size="30" maxlength="128" class="form-text">

        </div>
<div class="js-form-item form-item form-type-textfield js-form-type-textfield form-item-field-trip-dates-end-value-1 js-form-item-field-trip-dates-end-value-1">
      <label for="edit-field-trip-dates-end-value-1--2">Trip Dates -  start date (field_trip_dates)</label>
        <input data-drupal-selector="edit-field-trip-dates-end-value-1" data-msg-maxlength="This field field has a maximum length of 128." type="text" id="edit-field-trip-dates-end-value-1--2" name="field_trip_dates_end_value_1" value="" size="30" maxlength="128" class="form-text">

        </div>
<div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions--2"><input data-drupal-selector="edit-submit-list-of-trips-2" type="submit" id="edit-submit-list-of-trips--2" value="Apply" class="button js-form-submit form-submit">
</div>


</form>

  </div>
<div class="views-element-container block block-views block-views-blocklist-of-trips-block-trips-page-embed" id="block-views-block-list-of-trips-block-trips-page-embed">
  
    
      <div><div class="js-view-dom-id-18a072fca90c3f300b98cdaf2b6d812bb1b51b36624c5c10094dd48591249678">
  
  
  

      <header>
      
    </header>
  
  
  

  <div class="item-list">
  
        <div id="trip_locations">
      <div id="map_canvas"></div>
    </div>
    
    <div id="map_legend">
      <span class="sea">Sea</span>
      <span class="river">Rivers/Lakes</span>
      <span class="land">Land</span>
      <span class="rail">Rail</span>
      <span class="sports">Sports</span>
      <span class="family">Family</span>
      <span class="springbreak">Spring&nbsp;Break</span>
      <span class="hbs">HBS&nbsp;Exclusive</span>
    </div>
    
    <ul>

          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/athens-rome-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Greece_Delphi_%C2%A9Kufoleto_640x480.jpg?itok=G66pdOgA" width="640" height="480" alt="Delphi">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Sep 26, 2024 - Oct 5, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/athens-rome-2024.html">Cruising the Mediterranean: Athens to Rome</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/robert-darnton.html" hreflang="en">Robert Darnton</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/athens-rome-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            This program highlights archaeological sites that are remnants of the grand civilizations of ancient Greece and Rome.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/western-Mediterranean-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_SeaCloud_II_640x480_0.jpg?itok=Guion0t2" width="640" height="480" alt="Sea Cloud II">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 13, 2024 - Oct 22, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/western-Mediterranean-2024.html">Western Mediterranean Civilizations</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/diana-sorensen.html" hreflang="en">Diana Sorensen</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/sea-cloud-ii.html" hreflang="en">Sea Cloud II</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/western-Mediterranean-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Cruise to the temples and cities left behind by waves of civilizations, including prehistoric peoples and the ancient Greeks, Carthaginians, and Romans.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/south-caucasus-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/MIR-HAASouthCaucasus2024-ImageOverview.jpg?itok=PwZSYVV1" width="640" height="480" alt="Placeholder">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 17, 2024 - Oct 31, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/south-caucasus-2024.html">Exploring the South Caucasus (Azerbaijan, Georgia, Armenia)</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/karl-eikenberry.html" hreflang="en">Karl Eikenberry</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/south-caucasus-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Venerable cultures, fabulous food &amp; wine, and towering terrain await you on this adventure to Azerbaijan, Georgia, and Armenia.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/catalan-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Cathedral%20La%20Seu%20in%20Palma%20de%20Mallorca%20islands%2C%20Spain_640x480.jpeg?itok=6RGHXu7h" width="640" height="480" alt="Cathedral La Seu in Palma de Mallorca">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 18, 2024 - Oct 26, 2024</div>
      
                                                                            </div>
        <h3 class="teaser-title h5"><a href="trips/catalan-2024.html">Catalan Interlude</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/diana-sorensen.html" hreflang="en">Diana Sorensen</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/sea-cloud-ii.html" hreflang="en">Sea Cloud II</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/catalan-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Experience the gems of Catalonia on this Balearic Sea adventure that combines a land program and an elegant cruise on the elegant <em>Sea Cloud II</em>.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/turkey-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Turkey_Iznektiles640x480.jpg?itok=n3Oi5b2W" width="640" height="480" alt="Turkey teaser image">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 22, 2024 - Nov 5, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/turkey-2024.html">Legendary Türkiye</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/joseph-greene.html" hreflang="en">Joseph A. Greene</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/turkey-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            From Istanbul to Antalya discover ancient ruins, traverse stunning landscapes, and tour the dramatic Turquoise Coast.&nbsp;

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/vietnam-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Vietnam_StatuaryHue_640x480.jpg?itok=4yK43GhQ" width="640" height="480" alt="Statuary Hue">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 24, 2024 - Nov 7, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/vietnam-2024.html">Journey through Vietnam</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/lizabeth-cohen.html" hreflang="en">Lizabeth Cohen</a></div>
       
            <div class="field field--name-field-trip-leader2 field--type-entity-reference field--label-hidden field__item"><a href="leaders/herrick-chapman.html" hreflang="en">Herrick Chapman</a></div>
      
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/vietnam-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Journey through Vietnam, a land of natural beauty, abiding tradition, and profoundly hospitable people.&nbsp;<strong>SOLD OUT - WAITLIST ONLY</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/antarctica-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_teaser_2022%20Peguins.jpg?itok=OSjv5ijJ" width="640" height="480" alt="Penguins on glacier">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Nov 7, 2024 - Nov 27, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/antarctica-2024.html">Antarctica & South Georgia on <em>L'Austral</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-noleader field--type-string field--label-hidden field__item">To be announced</div>
      
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/laustral.html" hreflang="en">L&#039;Austral</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/antarctica-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Enjoy an expedition to explore the stunning natural settings of South Georgia and the Antarctic Peninsula, in the wake of the great explorers of the high southern latitudes.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/cuba-havana-trinidad-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/536784262507_640x480y.JPG?itok=ULTdl68k" width="640" height="480" alt="Bienvenidos">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Nov 10, 2024 - Nov 17, 2024</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/cuba-havana-trinidad-2024.html">Cuba's Cultural Heritage</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/erin-goodman.html" hreflang="en">Erin Goodman</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/cuba-havana-trinidad-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Unravel the richness of Cuba on a program that includes time in Havana, Cienfuegos, Trinidad, and Santa Clara.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/costa-rica-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/iStock_Frog_Fall14Catalog%20-%20Copy.jpg?itok=JJv4NeFy" width="640" height="480" alt="Costa Rica Tree Frog">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Dec 26, 2024 - Jan 2, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/costa-rica-2024.html">Costa Rica Family Adventure</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/hopi.html" hreflang="en">Hopi Hoekstra</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/costa-rica-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Discover a region of turquoise waters and crystalline rivers, of volcanoes, rainforests, and cloud forests. Learn from local biologists about sea turtle conservation, enjoy a cooking class,&nbsp;hike through rainforest trails and over hanging bridges, and raft down Class II / III rapids.&nbsp;<strong>SOLD OUT - WAIT LIST ONLY!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/family-tanzania-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_Tanzania_Giraffe_.gif?itok=CPMM1NOz" width="640" height="480" alt="baby giraffe">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Dec 26, 2024 - Jan 6, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/family-tanzania-2024.html">Family Tanzania Safari </a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/james-costa.html" hreflang="en">James Costa</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/family-tanzania-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            This classic family safari heads deep into the wilds of northern Tanzania, where you'll experience an unmatched blend of world-class wildlife viewing, exhilarating nature walks, and intimate encounters with tribal culture. <strong>Almost sold out - only one room&nbsp; left!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/family-cuba-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/536784262507_640x480y_0.JPG?itok=mjArna_I" width="640" height="480" alt="Bienvenidos">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Dec 27, 2024 - Jan 1, 2025</div>
      
                                                                            </div>
        <h3 class="teaser-title h5"><a href="trips/family-cuba-2024.html">A Family Program in Cuba</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/erez-manela-0.html" hreflang="en">Erez Manela</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/family-cuba-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Learn about Cuba’s history and discuss the reforms driving changes with local guests, while experiencing a variety of Cuban art, music, and dance during activities designed for all ages.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/egypt-family-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_1Giza-edited.jpg?itok=LF_dUoCf" width="640" height="480" alt="camel next to pyramid">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Dec 27, 2024 - Jan 5, 2025</div>
      
                                                                            </div>
        <h3 class="teaser-title h5"><a href="trips/egypt-family-2024.html">Egypt & the Nile</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/alison-frank-johnson.html" hreflang="en">Alison Frank Johnson</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/nile-adventurer.html" hreflang="en">Sanctuary Nile Adventurer</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/egypt-family-2024.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Ring in the New Year on an eight-night journey featuring timeless wonders and special access to the ancient treasures of Egypt.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/southeast-asia-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/03_SuperStock_RF_1609R-28643.jpg?itok=udHj92cQ" width="640" height="480" alt="Angkor Wat">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Jan 5, 2025 - Jan 23, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/southeast-asia-2025.html">Southeast Asia Odyssey</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/alexandra-vacroux.html" hreflang="en">Alexandra Vacroux</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/southeast-asia-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            This odyssey through Vietnam, Cambodia, Laos, and Thailand highlights sublime landscapes and spectacular ruins, historic cities and tranquil countryside, and features encounters with Buddhist monks and rural villagers.<strong>SOLD OUT - WAITLIST ONLY</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/bali-phuket-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Koh%20Rok%20Island%2C%20Thailand.jpg?itok=lSIA2csv" width="640" height="480" alt="Koh Rok Island">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Feb 6, 2025 - Feb 25, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/bali-phuket-2025.html">Bali to Phuket on <em>Le Lapérouse </em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/james-salzman.html" hreflang="en">James Salzman</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/le-laperouse.html" hreflang="en">Le Laperouse</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/bali-phuket-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            From Bali to Phuket, immerse yourself in a diversity of landscapes from legendary cities to jungle, volcanic mountains, and white sandy beaches.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/colombo-mumbai-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Goa%2C%20India.jpg?itok=l2yWj4-T" width="640" height="480" alt="Goa, India">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Feb 27, 2025 - Mar 13, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/colombo-mumbai-2025.html">Colombo to Mumbai on <em>Le Lapérouse </em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/sugata-bose.html" hreflang="en">Sugata Bose</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/le-laperouse.html" hreflang="en">Le Laperouse</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/colombo-mumbai-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            From Colombo to Mumbai, visit a variety of UNESCO World Heritage sites and encounter a mosaic of peoples and cultures amidst luxuriant landscapes.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/southern-africa-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_Giraffe%204_grosvenortours.co_.za_.jpg?itok=fOK6CS66" width="640" height="480" alt="two giraffes">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Mar 6, 2025 - Mar 23, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/southern-africa-2025.html">Southern Africa Odyssey</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/mark-van-baalen.html" hreflang="en">Mark Van Baalen</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/southern-africa-2025.html#what2expect">4</a>
            </div>
        
        <div class="description">
            Traverse the Kalahari via South Africa, Zimbabwe, Botswana, and Namibia! See spectacular Victoria Falls, go on safari at Chobe National Park, and marvel at the world’s largest crested dunes at Sossusvlei. End with a four-night stay in beautiful Cape Town. <strong>Sold Out - Wait list only!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/morocco-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_Morocco_SuperStock_1778R-15180532.jpg?itok=TSL9d5MW" width="640" height="480" alt="Morocco">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Mar 11, 2025 - Mar 24, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/morocco-2025.html">Moroccan Discovery</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/charles-m-stang.html" hreflang="en">Charles M. Stang</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/morocco-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Encounter ancient ruins and sacred mosques, endless desert and storied mountains, and imposing kasbahs and spirited souks as you travel from the imperial cities of Rabat, Fez, and Marrakech to the High Atlas and vast Sahara.&nbsp;<strong>Sold out - waitlist only!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/iceland-2024.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Reykjav%C3%ADk%20winter%202640x480.jpg?itok=5UoilJbK" width="640" height="480" alt="Reykjavik, Iceland">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Mar 14, 2025 - Mar 18, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/iceland-2024.html">Excursion to Iceland: Four Days of Highlights</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/stephen-mitchell.html" hreflang="en">Stephen A. Mitchell</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/iceland-2024.html#what2expect">2</a>
            </div>
        
        <div class="description">
            See what Iceland offers during this four-day program. In addition to breathtaking natural beauty, enjoy fascinating cultural experiences, fabulous cuisine, and opportunities to view the spectacular Northern Lights (depending on weather conditions).

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/epic-journey-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Greece_Rhodes_iStock-626002784_high.jpg?itok=nw9H_y7o" width="640" height="480" alt="Rhodes">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Apr 9, 2025 - Apr 18, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/epic-journey-2025.html">Epic Journey Across Time: Cyprus, Rhodes & Türkiye's Lycian Coast on <em>Emerald Azzurra</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/werner-sollors.html" hreflang="en">Werner Sollors</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/emerald-azzurra.html" hreflang="en">Emerald Azzurra</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/epic-journey-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Cruise from Cyprus to the Greek island of Rhodes and Türkiye's picturesque Turquoise Coast (Turkish Riviera), featuring unsung history, sacred treasures, Byzantine art, Ancient Wonders of the World, and UNESCO World Heritage sites.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/five-stans-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_Silk-Road_Uzbekistan_.gif?itok=dlTY9nZm" width="640" height="480" alt="tiled mosaic in Uzbekistan">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Apr 23, 2025 - May 10, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/five-stans-2025.html">Central Asia's Five 'Stans</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/mark-elliott.html" hreflang="en">Mark Elliott</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/five-stans-2025.html#what2expect">4</a>
            </div>
        
        <div class="description">
            Embark on an 18-day adventure to traverse all five of Central Asia's 'Stans. This journey delves into the tapestry of ancient and modern landscapes, winding through mountains, deserts, and steppes. <strong>Sold out - waitlist only!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/eastern-europe-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Hungary_Budapest_iStock-509908226_high.jpg?itok=GscO3kA4" width="640" height="480" alt="Budapest">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">May 1, 2025 - May 13, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/eastern-europe-2025.html">Exploring Eastern Europe: Warsaw, Krakow, Prague & Budapest</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/susan-rubin-suleiman.html" hreflang="en">Susan Rubin Suleiman </a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/eastern-europe-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Discover the historic cities of Warsaw, Krakow, Prague, and Budapest, where centuries-old architecture, vibrant cultural scenes, and poignant historical sites await. Enjoy guided tours, local cuisine, and immersive experiences in these captivating European destinations.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/burgundy-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/chateau-de-clos-de-vougeot-374419_960_720.jpg?itok=ONPKHq3H" width="640" height="480" alt="Chateau de clos de Vougeot">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">May 10, 2025 - May 18, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/burgundy-2025.html">Burgundy</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/janet-beizer.html" hreflang="en">Janet Beizer</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/burgundy-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Home to some of the planet’s greatest and most refined wines, Burgundy’s reputation is as good as it gets. This is the opportunity to discover the wines, personalities, and landscape of this wonderful part of France with a Harvard Study Leader and co-host Raymond Blake, an Irish wine journalist and author who has an intimate knowledge of the region.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/britain-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Ext_SuperStock_1436R-13617282.jpg?itok=TMqhF7FB" width="640" height="480" alt="London">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">May 12, 2025 - May 25, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/britain-2025.html">Journey Through Britain</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/gordon-teskey.html" hreflang="en">Gordon Teskey</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/britain-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Travel from city to country and back again—from gracious Edinburgh to England’s legendary Lake District, spectacular Snowdonia to the rural Cotswolds and Roman Bath, and ending in cosmopolitan London.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/scotland-norway-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Lofoten%2C%20Reine%2C%20Norway.%20Lofoten%20at%20day%2C%20Reine%2C%20Norway_dreamstime_m_115945889%20%281%29.jpg?itok=AjjJXEe-" width="640" height="480" alt="Reine, Norway">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">May 29, 2025 - Jun 8, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/scotland-norway-2025.html">From the Scottish Highlands and Orkney Islands to Norwegian Fjords on <em>Exploris One</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/catherine-mckenna.html" hreflang="en">Catherine McKenna</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/exploris-one.html" hreflang="en">Exploris One</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/scotland-norway-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Embark on an exploration of Norway and northern Scotland's breathtaking landscapes, remote islands, and ancient settlements during the height of spring. Enjoy Zodiac excursions, whale watching, and stepping ashore at picturesque fjord-side towns and tiny villages. <strong>SOLD OUT - WAIT LIST ONLY!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/family-galapagos-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/iStock_000025124240Large_Sea%20Turtl.jpg?itok=OZqzFdNV" width="640" height="480" alt="Large Sea turtle">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Jun 12, 2025 - Jun 20, 2025</div>
      
                                                                            </div>
        <h3 class="teaser-title h5"><a href="trips/family-galapagos-2025.html">Darwin's Galápagos: A Family Journey of Discovery on the Boutique Yacht<em> Isabela II</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/hopi.html" hreflang="en">Hopi Hoekstra</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/family-galapagos-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Cruise from island to island over seven days and six nights, venturing ashore to observe up close birds, sea lions, marine iguanas, sea turtles, penguins, fur seals, and other wildlife that exist only here. Swim and snorkel almost every day, and release your inner explorer as you traverse fields of lava and climb dormant volcanic craters.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/tanzania-rwanda-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/clouds%20landscape.jpg?itok=UpXDzpet" width="640" height="480" alt="Clouds Landscape">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Jun 17, 2025 - Jun 29, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/tanzania-rwanda-2025.html">Predators and Primates of East Africa: Rwanda and Tanzania</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/andrew-berry.html" hreflang="en">Andrew Berry </a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/tanzania-rwanda-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            The HAA Predators and Primates of East Africa safari combines two premier African wildlife experiences (Big Five &amp; Mountain Gorillas) in one seamless, choreographed adventure.

<strong>SOLD OUT - WAITLIST ONLY!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/turkey-family-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/iStock_000018634389Large_WEB.jpg?itok=REd2jXoM" width="640" height="480" alt="Istanbul">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Jun 24, 2025 - Jul 6, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/turkey-family-2025.html">Türkiye Family Adventure</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/erez-manela-0.html" hreflang="en">Erez Manela</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/turkey-family-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Türkiye’s rich cultural heritage, stunning landscapes, and family-friendly amenities make it an excellent destination for families. Enjoy warm hospitality, delicious and diverse cuisine, and stunning historical sites—plus 5 nights on privately charted gulets to explore the beautiful Turquoise Coast.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/greenland-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Sara%20Higgins%20938.jpg?itok=Quc5KuZ0" width="640" height="480" alt="Greenland Mountains">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Aug 30, 2025 - Sep 9, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/greenland-2025.html">Greenland's Arctic Grandeur</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/daniel-jacob.html" hreflang="en">Daniel Jacob</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/exploris-one.html" hreflang="en">Exploris One</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/greenland-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Cruise above the Arctic Circle, stepping ashore in remote, sparsely inhabited villages and ports to experience local culture and wildlife. Sample distinctive cuisine, peruse collections of Greenlandic art, and marvel at colossal ice formations. <strong>Single Occupancy Sold Out!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/new-guinea-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Kei%20Islands%2C%20Maluku%20Islands%20_%20Nathalie%20Michel.jpg?itok=89r0IJLk" width="640" height="480" alt="Kei Islands">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Sep 18, 2025 - Oct 7, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/new-guinea-2025.html">Mysteries of Indonesia & Papua New Guinea on <em>Le Soléal</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/peter-w-galbraith.html" hreflang="en">Peter W. Galbraith</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/le-soleal.html" hreflang="en">Le Soléal</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/new-guinea-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Embark <em>Le Soléal</em> for a17-day tropical expedition cruise from Darwin, Australia to the sublime natural landscapes of Indonesia and Papua New Guinea and then back to Cairns.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/italy-sicily-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_Taormina%20City.jpg?itok=EvGJtBfu" width="640" height="480" alt="Taormina">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 1, 2025 - Oct 15, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/italy-sicily-2025.html">Southern Italy & Sicily</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/karl-eikenberry.html" hreflang="en">Karl Eikenberry</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/italy-sicily-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Explore Italy’s southern climes from striking Sicily and the breathtaking Amalfi Coast to unheralded Apulia, the alluring “boot heel” where a vivid history, unique architecture, and bountiful plains join the sun and sea.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/tunisia-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/DH_web.jpg?itok=TKOY_ZIr" width="640" height="480" alt="Tunis">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 3, 2025 - Oct 15, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/tunisia-2025.html">Tunisia</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/joseph-greene.html" hreflang="en">Joseph A. Greene</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/tunisia-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Discover a rich blend of ancient history and vibrant culture, with stunning Roman ruins, beautiful Mediterranean beaches, and the unique landscapes of the Sahara Desert. Enjoy flavorful cuisine, bustling souks, and warm hospitality.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/adriatic-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_webKotor%20Bay%20View_dreamstime_m_32327415.jpg?itok=sYRKDDm8" width="640" height="480" alt="view of Kotor Bay">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 6, 2025 - Oct 17, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/adriatic-2025.html">Wonders of Croatia & Slovenia on <em>Queen Eleganza</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/diana-sorensen.html" hreflang="en">Diana Sorensen</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/queen-eleganza.html" hreflang="en">Queen Eleganza </a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/adriatic-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Embark on a seven-night Adriatic cruise along the Croatian coast from Dubrovnik to Zadar calling at Mljet, Korčula, Hvar, Split, and Trogir. Then, discover Ljubljana and magical Lake Bled in Slovenia.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/turkey-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/_web_Turkeys%20Tresasures.jpg?itok=37qlovdn" width="640" height="480" alt="Turkey">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 10, 2025 - Oct 24, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/turkey-2025.html">Legendary Türkiye</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-noleader field--type-string field--label-hidden field__item">To be announced</div>
      
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/turkey-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Beginning with four nights in magnificent Istanbul and ending in Antalya, explore ancient ruins such as Troy and Ephesus, visit important historical sites including Gallipoli, and experience stunning landscapes along the Turquoise Coast.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/southern-africa-zambezi-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/HMSC-web-2-South-Luangwa-N.P.gif?itok=FztTBSWl" width="640" height="480" alt="Elephants">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 14, 2025 - Oct 29, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/southern-africa-zambezi-2025.html">The Best of South Africa, Botswana, Namibia & Zimbabwe</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/brian-d-farrell.html" hreflang="en">Brian D. Farrell</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/zambezi-queen.html" hreflang="en">Zambezi Queen</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/southern-africa-zambezi-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Experience wildlife encounters in four countries—including a three-night Chobe River cruise offering uninterrupted views of Chobe National Park. Marvel at Victoria Falls, spend two nights at the acclaimed Mala Mala Private Game Reserve, and discover the rich natural and cultural heritage of Cape Town.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/athens_aqaba-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Egypt_Luxor_Karnak_iStock-640x480.jpg?itok=VRGM98GL" width="640" height="480" alt="Karnak at Luxor">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 19, 2025 - Nov 2, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/athens_aqaba-2025.html">Athens to Aqaba on <em>Island Sky</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/rita-freed.html" hreflang="en">Rita Freed</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/island-sky-0.html" hreflang="en">Island Sky</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/athens_aqaba-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Cruise from Athens to Aqaba, exploring iconic sites and archaeological wonders in Jordan, Saudi Arabia, Egypt, and Greece—all on one program!

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/camino-de-santiago-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/alexander-schimmeck-bsZgFVWFPh0-unsplashWEB.jpg?itok=biPtN6dm" width="640" height="480" alt="Camino de Santiago">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 24, 2025 - Nov 5, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/camino-de-santiago-2025.html">El Camino de Santiago: Walking in Northern Spain</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-noleader field--type-string field--label-hidden field__item">To be announced</div>
      
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/camino-de-santiago-2025.html#what2expect">4</a>
            </div>
        
        <div class="description">
            On this active program, hike the most interesting sections of the Camino de Santiago, known as the Way of St. James to pilgrims, enjoying exquisite cuisine, regional wines, breathtaking architecture, and splendid hotels en route. (Daily walks average 3.5 miles.)

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/egypt-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/10%20iStock-1097136032%20egypt_web_0.jpg?itok=-ZmMeQUZ" width="640" height="480" alt="Pyramid ">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Oct 27, 2025 - Nov 10, 2025</div>
      
                                                                            </div>
        <h3 class="teaser-title h5"><a href="trips/egypt-2025.html">Egypt & the Eternal Nile</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/lizabeth-cohen.html" hreflang="en">Lizabeth Cohen</a></div>
       
            <div class="field field--name-field-trip-leader2 field--type-entity-reference field--label-hidden field__item"><a href="leaders/herrick-chapman.html" hreflang="en">Herrick Chapman</a></div>
      
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/egypt-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Journey through antiquity from Cairo and the Great Pyramids to Abu Simbel, ancient Nubia, and Lake Nasser—and a classic voyage along the Nile from Aswan to Luxor before returning to Cairo.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/seychelles-madagascar-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Madagascar_Baobabs_iStock-521151567_medium.jpg?itok=1XT1OOzY" width="640" height="480" alt="Madagascar Baobabs">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Nov 7, 2025 - Nov 23, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/seychelles-madagascar-2025.html">Seychelles & Madagascar: Islands of the Indian Ocean on <em>Island Sky</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/bence-p-lveczky.html" hreflang="en">Bence P. Ölveczky</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/island-sky-0.html" hreflang="en">Island Sky</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/seychelles-madagascar-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Discover the Seychelles' pristine beaches, lush forests, and dramatic mountains, then delve into Madagascar's untouched coral reefs, vibrant mangroves, and ancient Baobab groves. Experience guided nature walks in search of Madagascar's unique lemur species and immerse yourself in the unparalleled beauty of these exotic destinations.

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/new-zealand-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Queenstown.jpg?itok=Q2-Ux92b" width="640" height="480" alt="Queenstown">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Nov 11, 2025 - Nov 24, 2025</div>
      
                                                </div>
        <h3 class="teaser-title h5"><a href="trips/new-zealand-2025.html">New Zealand by Sea: Queenstown to Auckland on <em>Heritage Adventurer</em></a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/noel-michele-holbrook.html" hreflang="en">Noel Michele Holbrook</a></div>
       
                    </div>
                    <div class="mode-of-travel">
                Ship:
                
            <div class="field field--name-field-trip-travelmode field--type-entity-reference field--label-hidden field__item"><a href="modes-of-travel/heritage-adventurer.html" hreflang="en">Heritage Adventurer</a></div>
      
            </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/new-zealand-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Begin with one night in Queenstown, the country’s adventure capital, followed by 10 nights cruising from Fiordland National Park to Auckland. A diverse menu of excursion options offers generous access to the island nation’s dramatic glacial fiords, geothermal wonders, cultural richness, and untamed wilderness. <strong>Single occupancy sold out!</strong>

        </div>
    </div>

</div><!--/.teaser-->
</li>
          <li><div class="travel-teaser teaser">

    <div class="teaser-image">
        
                                      <div class="field field--name-field-teaser-image field--type-image field--label-hidden field__item">  <a href="trips/costarica-family-2025.html" hreflang="en"><img loading="lazy" src="../sites/default/files/styles/thumbnail/public/travel/teaser/Macaws%20dreamstime_m_6801086WEB.jpg?itok=dlam-b4Y" width="640" height="480" alt="Macaws">

</a>
</div>
                        
    </div>
    <div class="teaser-text">
        <div class="travel-dates">
            
            <div class="field field--name-field-trip-dates field--type-daterange field--label-hidden field__item">Dec 26, 2025 - Jan 2, 2026</div>
      
                                                                            </div>
        <h3 class="teaser-title h5"><a href="trips/costarica-family-2025.html">Costa Rica Family Adventure</a></h3>
        <div class="study-leaders">
            Study Leader(s):
                            
            <div class="field field--name-field-trip-leader field--type-entity-reference field--label-hidden field__item"><a href="leaders/joseph-henrich.html" hreflang="en">Joseph Henrich</a></div>
       
                    </div>
                            <div class="activity-level">
                Activity Level
                <a href="trips/costarica-family-2025.html#what2expect">3</a>
            </div>
        
        <div class="description">
            Explore parks framed by turquoise waters, crystalline rivers, volcanoes, rainforests and cloud forests. Learn about sea turtle conservation on a special nighttime walking tour. Enjoy a cooking class, hike trails and hanging bridges in the rainforests and cloud forests, experience the nocturnal sounds of the rainforest, and raft down the Sarapiqui River.

        </div>
    </div>

</div><!--/.teaser-->
</li>
    
  </ul>

</div>

    

  
  

  
  
</div>
</div>

  </div>

  <ul class="d-none d-lg-block">
	<li><a href="trips-1.html">Trips</a></li>
	<li><a href="talks-1.html">Travel Talks Lecture Series</a></li>
	<li><a href="leaders-1.html">Travel Leaders</a></li>
	<li><a href="modes-of-travel-1.html">Modes of Travel</a></li>
	<li><a href="activity-level-ratings-1.html">Activity Level Ratings</a></li>
	<li><a href="resources-1.html">Travel Resources</a></li>
	<li><a href="signup-1.html">Join Our Mailing List</a></li>
</ul>