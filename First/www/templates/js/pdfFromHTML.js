
function pdfromHTML(){

var doc = new jsPDF('p', 'in', 'letter');
var source = $('#me').first();
var specialElementHandlers = {
'#bypassme': function(element, renderer) {
return true;
}
};
 
doc.fromHTML(
$('#me').get(0),
0.5, // x coord
0.5, // y coord
{
'width': 7.5, // max width of content on PDF
'elementHandlers': specialElementHandlers
});
 if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{
     var blob = doc.output();
     window.open(URL.createObjectURL(blob));
}
else
{
     
     
    doc.save('me.pdf');
}



}