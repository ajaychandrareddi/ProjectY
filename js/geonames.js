var whos=null;
function getplaces(gid,src)
{	
	whos = src;
	var request = "http://www.geonames.org/childrenJSON?geonameId="+gid+"&callback=listPlaces&style=long&lang=fr";
	aObj = new JSONscriptRequest(request);
	aObj.buildScriptTag();
	aObj.addScriptTag();
}

function listPlaces(jData)
{
	counts = jData.geonames.length<jData.totalResultsCount ? jData.geonames.length : jData.totalResultsCount;
	who = document.getElementById(whos);
	who.options.length = 0;
	
	if(counts) {
		if (whos=='province'){
    		who.options[who.options.length] = new Option('-- Select State --','')
		} else if (whos=='region'){
			who.options[who.options.length] = new Option('-- Select Division --','')
		} else if (whos=='city'){
			who.options[who.options.length] = new Option('-- Select City --','')
		}		    		
	} else {
    	who.options[who.options.length] = new Option('No Data Available','NULL')
	}

	for(var i=0;i<counts;i++){who.options[who.options.length] = new Option(jData.geonames[i].name,jData.geonames[i].geonameId)}

	delete jData;
	jData = null;

}