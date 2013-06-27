// JavaScript Document
function ajaxLoadPage(pageURL,contentID)
{
	 if (pageURL.length > 0){
//        $("#loading").show();
        $.ajax({url: pageURL, cache: false, success: function(message) {                                    
                $(contentID).empty().append(message);
  //              $("#loading").hide();             
        }
    });                         
}
}

function simpleTabSelected(tabsID, tabPageURL,tabContentID)
{
   ajaxLoadPage(tabPageURL,tabContentID); 
   $('ul.'+tabsID+' a').removeClass('selected');
   $(this).addClass('selected');		
}

//Check All/Un Check All checkbox elements
//ref	=1 --> Check All element clicked
//red	=0	-> Check Box element clicked
// checkAllId	=	ID of the check all checkbox, exm: 'checkAll'
// checkAllListId	=	ID(array) of the checkboxes list, exm: 'del[]'
function checkAllCheckBoxes(ref,checkAllId, checkAllListId) {
  var chkAll = document.getElementById(checkAllId);
  var checks = document.getElementsByName(checkAllListId);
  var boxLength = checks.length;
  var allChecked = false;
  var totalChecked = 0;
  if ( ref == 1 ) {
    if ( chkAll.checked == true ) {
      for ( i=0; i < boxLength; i++ ) {
        checks[i].checked = true;
      }
    }
    else {
      for ( i=0; i < boxLength; i++ ) {
        checks[i].checked = false;
      }
    }
  }
  else {
    for ( i=0; i < boxLength; i++ ) {
      if ( checks[i].checked == true ) {
        allChecked = true;
        continue;
      }
      else {
        allChecked = false;
        break;
      }
    }
    if ( allChecked == true ) {
      chkAll.checked = true;
    }
    else {
      chkAll.checked = false;
    }
  }
  for ( j=0; j < boxLength; j++ ) {
    if ( checks[j].checked == true ) {
      totalChecked++;
	}
  }
}

// reload secure image(turining number image)
function refreshSecureImage()
{
	document.getElementById('secure_image').src = document.getElementById('secure_image').src + '&' + (new Date()).getMilliseconds();
}

//redirect to new URL
function redirect(url)
{
	window.location.href	=	url;
}

// open center popup window
function openPopup(windowUri,windowHeight, windowWidth, windowName)
{
    var centerWidth = (window.screen.width - windowWidth) / 2;
    var centerHeight = (window.screen.height - windowHeight) / 2;

    newWindow = window.open(windowUri, windowName, 'resizable=0,width=' + windowWidth + 
        ',height=' + windowHeight + 
        ',left=' + centerWidth + 
        ',top=' + centerHeight);

    newWindow.focus();
    return newWindow.name;
}
