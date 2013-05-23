<?php
	// Set the proper response header
	header('Content-type: text/javascript'); 
?>

(function() {

	window.Simplr = {
		Config : {
			Data : {
				ConsoleActive : false
			},
			mToggleConsole : function(on) {
				$("#_simplr_core_console").remove();
				Simplr.Config.Data.ConsoleActive = false;
				if(on) {
					try {
						if( typeof window.console != "undefined" && typeof window.console.group != "undefined") {
							$(function() {
								var consoleHTML = '<p id="_simplr_core_console" style="margin: 0; text-align: center; position: fixed; top: 0; width: 100%; left: 0; border-bottom: 1px solid #000; color: #fff; font-weight: bold; background-color: #f00; padding: 5px; font-size: 11px; opacity: .75;">[console]: Console Messaging Active</p>';
								$("body").append(consoleHTML);
								$("#_simplr_core_console").mouseover(function() { $(this).slideUp(); }).mouseout(function() { $(this).delay(3000).slideDown(); });
							});
							Simplr.Config.Data.ConsoleActive = true;
						}
					} catch(e) {}
				}
				return Simplr.Config.Data.ConsoleActive;
			}
		}
	};

	<?php
	
		// Cache
		include("cache/cache.js");
		
		// Controller
		include("controller/controller.js");
	
		// Cookie	
		include("cookie/cookie.js");
	
        // Console
        include("console/console.js");
    	
		// Form
		include("form/form.js");
		
		// Layout
		include("layout/innerxhtml.js");
		include("layout/layout.js");
		
		// Trigger
		include("trigger/trigger.js");
		
		// Util
		include("util/util.js");
		
		// Validation
		include("validation/validation.js");
        include("validation/defaultCodesAndValidators.js");
		
		// View
		include("view/view.js");
		
	?>

})();