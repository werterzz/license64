x = document.getElementsByClassName("footer")[0].firstElementChild.children
header = document.getElementsByClassName("header");
headTabOne = document.getElementsByClassName("headTabOne");
tabOneBox = document.getElementsByClassName("tab-one-box");
tabOne = document.getElementsByClassName("tab-one");
tabTwo = document.getElementsByClassName("tab-two");
tabThree = document.getElementsByClassName("tab-three");

// tabTwo
// -------------------------------------------------------
for (let element of x)
{
    element.addEventListener("click", () => {
        for (let oldElement of x)
        {
            oldElement.classList.remove('tab-selected');
            headTabOne[0].classList.add('hidden');
            tabOneBox[0].classList.add('hidden');
            tabOne[0].classList.add('hidden');
            tabTwo[0].classList.add('hidden');
            tabThree[0].classList.add('hidden');
            
        }
        element.classList.add('tab-selected');
        if (element.children[1].innerHTML == "ข้อสอบ")
        {
          header[0].innerHTML = "ข้อสอบ";
          headTabOne[0].classList.remove('hidden');
          tabOne[0].classList.remove('hidden');
          tabOneBox[0].classList.remove('hidden');
        } 
        else if (element.children[1].innerHTML == "เนื้อหา")
        {
          header[0].innerHTML = "เนื้อหา";
          tabTwo[0].classList.remove('hidden');
        } 
        else if (element.children[1].innerHTML == "วิดีโอ")
        {
          header[0].innerHTML = "วิดีโอ";
         tabThree[0].classList.remove('hidden'); 
        } 
        
    });
}
fetch("../data/document.json")
.then(response => response.json())
.then(json => {
  // console.log(json)
  for (element of json){
    tabTwo[0].innerHTML += `<li><a href="/tabtwo/${element.name}"> ${element.name}</a></li>`
}  
});
// -------------------------------------------------------



// tabthree
// -------------------------------------------------------

apiKey = "AIzaSyBZX3L-FXBCyrWZ1BObYQNh1KsSun2wwdc";
channel = "UC00_7bash9xUUEVtgQ2LWcA";

fetch('https://www.googleapis.com/youtube/v3/playlists?key=' + apiKey + '&channelId=' + channel + '&part=snippet,id&maxResults=20')
.then(response => response.json())
.then(json => {
  console.log(json)
  for (element of json.items){
    //   console.log(element)
    tabThree[0].innerHTML += `<li><a href="/tabthree/${element.snippet.title}/${element.id}"> ${element.snippet.title}</a></li>`
}  
});
// -------------------------------------------------------

fetch("../data/exam.json")
.then(response => response.json())
.then(json => {
  let i = 0;
  for (element of json){
    tabOne[0].innerHTML += `<li><a href="/tabone/${i}/0"> ${element.name}</a></li>`
    i++;
}  
});
