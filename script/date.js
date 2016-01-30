
var datefield=document.createElement("input")
datefield.setAttribute("type", "date")
if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
    document.write('<link rel=\"stylesheet\" href=\"\/\/code.jquery.com\/ui\/1.11.4\/themes\/smoothness\/jquery-ui.css\">\\n')
    document.write('<script src=\"\/\/code.jquery.com\/jquery-1.10.2.js\"><\/script>\\n')
    document.write('<script src=\"\/\/code.jquery.com\/ui\/1.11.4\/jquery-ui.js\"><\/script>\\n') 
}

$(function() {
    $( "#datepicker" ).datepicker();
  });
