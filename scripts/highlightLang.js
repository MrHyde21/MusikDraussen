var langEN = $( ".langEN" );
var langDE = $( ".langDE" );
var langJP = $( ".langJP" );
$lang = $_GET["Lang"];

console.log(lang);
if(lang == "EN"){
	LangEN.addClass("currentLang");
}
if(lang == "DE"){
	langDE.addClass("currentLang");
}
if(lang == "JP"){
	langJP.addClass("currentLang");
}