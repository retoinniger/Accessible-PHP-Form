// regex script

// Regex lastname, surname, city
var regExpText=/^([a-zA-ZüÜäÄöÖéèàâçÉÈÂÇ]){1}?([a-zA-ZüÜäÄöÖéèàâçÉÈÂÇß\-\.\s\'\´\`])*$/;

//RegEx street
var regExpStreet=/^([0-9a-zA-ZüÜäÄöÖéèàâçÉÈÂÇ]){1}?([0-9a-zA-ZüÜäÄöÖéèàâçÉÈÂÇß\-\.\s\'\´\`])*$/;

//RegEx zip
var regExpZip=/^([0-9]{4,5})*$/;
//für internationale Formate zip.html undzip.js beachten

//RegEx phone
var regExpPhone=/^([0-9\s\(\)\+\-\/]{9,30})*$/;

//RegEx email
var regExpMail=/^([a-zA-Z0-9_\.\-])+@([a-zA-Z0-9_\.\-]*([a-zA-Z0-9\-]{2,})\.([a-zA-Z]{2,6}))*$/;