(function ($) {
  Drupal.behaviors.drupallab = {
    attach: function (context, settings) {
      $('.ziehharmonika').ziehharmonika({
        collapsible: false, // Disallow last open ziehharmonika to be closed
        prefix: '✎' // Gives headlines a certain prefix
      });
      // By default, the first element will be opened
      $('.ziehharmonika h3:eq(0)').ziehharmonika('open', true);

    }
  };
}(jQuery));
