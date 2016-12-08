// Auto resize input


function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

$('input[type="text"], input[type="email"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);


console.clear();
// Adapted from georgepapadakis.me/demo/expanding-textarea.html
(function(){
  
  var textareas = document.querySelectorAll('.expanding'),
      
      resize = function(t) {
        t.style.height = 'auto';
        t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
        t.style.height = (t.scrollHeight + t.offset ) + 'px';
        t.style.overflow = '';
      },
      
      attachResize = function(t) {
        if ( t ) {
          console.log('t.className',t.className);
          t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

          resize(t);

          if ( t.addEventListener ) {
            t.addEventListener('input', function() { resize(t); });
            t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
          }

          t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
        }
      };
  
  // IE7 support
  if ( !document.querySelectorAll ) {
  
    function getElementsByClass(searchClass,node,tag) {
      var classElements = new Array();
      node = node || document;
      tag = tag || '*';
      var els = node.getElementsByTagName(tag);
      var elsLen = els.length;
      var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
      for (i = 0, j = 0; i < elsLen; i++) {
        if ( pattern.test(els[i].className) ) {
          classElements[j] = els[i];
          j++;
        }
      }
      return classElements;
    }
    
    textareas = getElementsByClass('expanding');
  }
  
  for (var i = 0; i < textareas.length; i++ ) {
    attachResize(textareas[i]);
  }
  
})();

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) 
        color += letters[Math.floor(Math.random() * 16)];
    
    document.getElementsByTagName("body")[0].style.backgroundColor  = color;
}


function startSelect(id, hover) {
    // Declare Selectors
    var selectInputSelector = "#" + id + " input";
    var selectComponentSelector = "#" + id + " .select";
    var selectOptionsSelector = "#" + id + " .options";
    var selectAllOptionsSelector = selectOptionsSelector + " .option";

    // Declare Components
    var selectInput = $(selectInputSelector);
    var selectComponent = $(selectComponentSelector);
    var selectOptions = $(selectOptionsSelector);

    // Delcare States
    var visible = false;
    var currentOption = false;

    // Logic: Set the name of the input
    selectInput.attr('name', id);
  
    // Logic: Trigger Options
    var triggerOptions = function() {
        if(visible) {
            selectOptions.removeClass('visible');
            visible = false;
        }
        else {
            selectOptions.addClass('visible');
            visible = true;
        }
    }
        
    // Events: Trigger Options on Hover
    if (hover) {
        selectComponent.hover(function(){
            selectOptions.addClass('visible');
            visible = true;
        })
    }

    // Events: Register Options triggering fn
    selectComponent.click(function(e){
        // Only fire in here
        e.preventDefault();
        e.stopPropagation();

        triggerOptions()        
    })

    // Events: Register outside clicking
    $(document).click(function(){
        if(visible) {
            selectOptions.removeClass('visible');
            visible = false;
        }
    })

    // Events: Register each option
    var allOptionsArray = $(selectAllOptionsSelector).toArray()
    allOptionsArray.forEach(function(option) {
        var optionComponent = $(option)
        optionComponent.click(function() {
            if (currentOption) {
                currentOption.removeClass('selected')
            }
            var value = optionComponent.attr('data-value')
            selectInput.val(value)
            $(selectComponentSelector + " .text").removeClass('placeholder').text(optionComponent.text())
            
            currentOption = optionComponent
            currentOption.addClass('selected')
        })
    })

}

startSelect('select-component-1', true);

