(function ($) {
  Drupal.behaviors.drupallab = {
    attach: function (context, settings) {
      $('.ziehharmonika').ziehharmonika({
        // Disallow last open ziehharmonika to be closed.
        collapsible: false,
        // Gives headlines a certain prefix.
        prefix: '\u270E'
      });
      // By default, the first element will be opened
      $('.ziehharmonika h3:eq(0)').ziehharmonika('open', true);
    }
  };
}(jQuery));
