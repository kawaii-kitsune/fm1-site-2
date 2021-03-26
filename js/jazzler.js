var xmlDocHistory;
var xmlDocNext;
var xmlDocNow;


function appendHistory(){
    var ul = document.getElementById("historyList");
    ul.innerHTML = "";
    for(let index=15;index=12;index--){
        var artist=xmlDocHistory.getElementsByTagName("Song")[index].getElementsByTagName("Artist")[0].attributes.name.value
        var title=xmlDocHistory.getElementsByTagName("Song")[index].attributes.title.value
    var listElem=artist+" - "+title;
    
    var li = document.createElement("li");
    li.appendChild(document.createTextNode(listElem));
    li.setAttribute("id", ''+index+'');
    ul.appendChild(li);
    }
}
 function appendNext(){
     var artist=xmlDocNext.getElementsByTagName("Song")[0].getElementsByTagName("Artist")[0].attributes.name.value
     var title=xmlDocNext.getElementsByTagName("Song")[0].attributes.title.value
     var listElem="Playing Next: "+artist+" - "+title+"";
     document.getElementById("nextSong").innerHTML=listElem;
     
     
 }
function appendNowOnAir(){
    var song=xmlDocNow.getElementsByTagName("Song")[0].attributes.title.value;
    var artist=xmlDocNow.getElementsByTagName("Artist")[0].attributes.name.value;
    var artistEl = document.getElementById("artist"); 
    var songEl = document.getElementById("song");
    artistEl.innerHTML=artist;
    songEl.innerHTML=song;

}

function getXMLFile(path, callback){
    let request = new XMLHttpRequest();
    request.open("GET", path);
    request.setRequestHeader("Content-Type","text/xml");
    request.onreadystatechange=function(){
        if(request.readyState===4 && request.status===200){
            callback(request.responseXML);
        }
    };
    request.send();
}

function XMLread(){
getXMLFile("Jazler/AirPlayHistory.xml",function(xml)
{   xmlDocHistory=xml;
    appendHistory();
});

 getXMLFile("Jazler/AirPlayNext.xml",function(xml)
 {   xmlDocNext=xml;
     appendNext();
 });
getXMLFile("Jazler/NowOnAir.xml",function(xml)
{   xmlDocNow=xml;
    appendNowOnAir();
});
}

//  window.setInterval(function(){ // Set interval for checking
//      XMLread();
//  }, 5000); 