( function( api ) {

	// Extends our custom "coming-soon-shortly" section.
	api.sectionConstructor['coming-soon-shortly'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );