// inspired by https://github.com/vue-foundation/vue-foundation/blob/master/src/foundation.js
// jQuery is included with webpack.ProvidePlugin
// Foundation core and utils - Best to import all of these
import { Foundation } from 'foundation-sites/js/foundation.core';
import {
	rtl,
	GetYoDigits,
	transitionend,
} from 'foundation-sites/js/foundation.core.utils';
import { Box } from 'foundation-sites/js/foundation.util.box';
import { onImagesLoaded } from 'foundation-sites/js/foundation.util.imageLoader';
import { Keyboard } from 'foundation-sites/js/foundation.util.keyboard';
import { MediaQuery } from 'foundation-sites/js/foundation.util.mediaQuery';
import { Motion, Move } from 'foundation-sites/js/foundation.util.motion';
import { Nest } from 'foundation-sites/js/foundation.util.nest';
import { Timer } from 'foundation-sites/js/foundation.util.timer';
import { Touch } from 'foundation-sites/js/foundation.util.touch';
import { Triggers } from 'foundation-sites/js/foundation.util.triggers';

// Foundation plugins - Pick and choose your plugins here!
// If you comment out a plugin you will need to comment out
// the corresponding Foundation.plugin line also.
// This is a template project so they have all been imported.
import { Abide } from 'foundation-sites/js/foundation.abide';
import { Accordion } from 'foundation-sites/js/foundation.accordion';
import { AccordionMenu } from 'foundation-sites/js/foundation.accordionMenu';
import { Drilldown } from 'foundation-sites/js/foundation.drilldown';
import { Dropdown } from 'foundation-sites/js/foundation.dropdown';
import { DropdownMenu } from 'foundation-sites/js/foundation.dropdownMenu';
import { Equalizer } from 'foundation-sites/js/foundation.equalizer';
import { Interchange } from 'foundation-sites/js/foundation.interchange';
// import { Magellan } from 'foundation-sites/js/foundation.magellan'
// import { OffCanvas } from 'foundation-sites/js/foundation.offcanvas'
// import { Orbit } from 'foundation-sites/js/foundation.orbit'
import { ResponsiveMenu } from 'foundation-sites/js/foundation.responsiveMenu';
import { ResponsiveToggle } from 'foundation-sites/js/foundation.responsiveToggle';
import { Reveal } from 'foundation-sites/js/foundation.reveal';
// import { Slider } from 'foundation-sites/js/foundation.slider'
import { SmoothScroll } from 'foundation-sites/js/foundation.smoothScroll';
import { Sticky } from 'foundation-sites/js/foundation.sticky';
import { Tabs } from 'foundation-sites/js/foundation.tabs';
import { Toggler } from 'foundation-sites/js/foundation.toggler';
import { Tooltip } from 'foundation-sites/js/foundation.tooltip';
import { ResponsiveAccordionTabs } from 'foundation-sites/js/foundation.responsiveAccordionTabs';

// Require non-modular scripts
require('motion-ui');
require('what-input');

Foundation.addToJquery(jQuery);

// Add Foundation Utils to Foundation global namespace for backwards
// compatibility.

Foundation.rtl = rtl;
Foundation.GetYoDigits = GetYoDigits;
Foundation.transitionend = transitionend;

Foundation.Box = Box;
Foundation.onImagesLoaded = onImagesLoaded;
Foundation.Keyboard = Keyboard;
Foundation.MediaQuery = MediaQuery;
Foundation.Motion = Motion;
Foundation.Move = Move;
Foundation.Nest = Nest;
Foundation.Timer = Timer;

// Touch and Triggers previously were almost purely side effect driven,
// so no // need to add it to Foundation, just init them.

Touch.init(jQuery);
Triggers.init(jQuery, Foundation);

// both parameters are needed, otherwise webpack will remove the
// plugin from the global namespace.
// see https://github.com/zurb/foundation-sites/issues/10792

Foundation.plugin(Abide, 'Abide');
Foundation.plugin(Accordion, 'Accordion');
Foundation.plugin(AccordionMenu, 'AccordionMenu');
Foundation.plugin(Drilldown, 'Drilldown');
Foundation.plugin(Dropdown, 'Dropdown');
Foundation.plugin(DropdownMenu, 'DropdownMenu');
Foundation.plugin(Equalizer, 'Equalizer');
Foundation.plugin(Interchange, 'Interchange');
// Foundation.plugin(Magellan, 'Magellan')
// Foundation.plugin(OffCanvas, 'OffCanvas')
// Foundation.plugin(Orbit, 'Orbit')
Foundation.plugin(ResponsiveAccordionTabs, 'ResponsiveAccordionTabs');
Foundation.plugin(ResponsiveMenu, 'ResponsiveMenu');
Foundation.plugin(ResponsiveToggle, 'ResponsiveToggle');
Foundation.plugin(Reveal, 'Reveal');
// Foundation.plugin(Slider, 'Slider')
Foundation.plugin(SmoothScroll, 'SmoothScroll');
Foundation.plugin(Sticky, 'Sticky');
Foundation.plugin(Tabs, 'Tabs');
Foundation.plugin(Toggler, 'Toggler');
Foundation.plugin(Tooltip, 'Tooltip');

jQuery(($) => $(document).foundation());

export default Foundation;
