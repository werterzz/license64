x = document.getElementsByClassName("navbar-nav")[0].children
console.log(x)
header = document.getElementsByClassName("header");
headTabOne = document.getElementsByClassName("headTabOne");
tabOneBox = document.getElementsByClassName("tab-one-box");
tabOne = document.getElementsByClassName("tab-one");
tabTwo = document.getElementsByClassName("tab-two");
tabThree = document.getElementsByClassName("tab-three");
randomExam = document.getElementsByClassName("randomExam");
tabThreeContain = document.getElementsByClassName("tab-three-contain");

// tabTwo
// -------------------------------------------------------
for (let element of x)
{
    element.addEventListener("click", () => {
        for (let oldElement of x)
        {
            oldElement.firstElementChild.classList.remove('tab-selected');
            oldElement.firstElementChild.classList.remove('active');
            headTabOne[0].classList.add('hidden');
            tabOneBox[0].classList.add('hidden');
            randomExam[0].classList.add('hidden');
            tabOne[0].classList.add('hidden');
            tabOne[1].classList.add('hidden');
            tabTwo[0].classList.add('hidden');
            tabThree[0].classList.add('hidden');
            tabThreeContain[0].classList.add('hidden');
            
        }
        element.firstElementChild.classList.add('tab-selected');
        element.firstElementChild.classList.add('active');
        console.log(element.firstElementChild)
        if (element.firstElementChild.innerText == "ข้อสอบ")
        {
          // header[0].innerText = "ข้อสอบ";
          headTabOne[0].classList.remove('hidden');
          tabOne[0].classList.remove('hidden');
          tabOneBox[0].classList.remove('hidden');
        } 
        else if (element.firstElementChild.innerText == "เนื้อหา")
        {
          // header[0].innerText = "เนื้อหา";
          tabTwo[0].classList.remove('hidden');
        } 
        else if (element.firstElementChild.innerText == "วิดีโอ")
        {
          // header[0].innerText = "วิดีโอ";
         tabThree[0].classList.remove('hidden'); 
         tabThreeContain[0].classList.remove('hidden');
        } 
        
    });
}
fetch("/data/document.json")
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
  // console.log(json)
  for (element of json.items){
    //   console.log(element)
    tabThree[0].innerHTML += `<li><a href="/tabthree/${element.snippet.title}/${element.id}"> ${element.snippet.title}</a></li>`
}  
});
// -------------------------------------------------------

// tabone
// -------------------------------------------------------
fetch("/data/exam.json")
.then(response => response.json())
.then(json => {
  let i = 0;
  for (element of json){
    tabOne[0].innerHTML += `<li><a href="/tabone/${i}/0"> ${element.name}</a></li>`
    i++;
}  
});

var tabOneRow = document.getElementsByClassName("tabOneRow");
for (let element of headTabOne[0].children)
{
  element.addEventListener("click", () => {
    for (let oldElement of headTabOne[0].children)
    {
      oldElement.classList.remove('selectHead');
    }
    for (let oldElement of tabOneRow)
    {
      oldElement.classList.add('hidden');
    }
    element.classList.add('selectHead');
    if (element.innerHTML == "หมวดหมู่")
    {
      tabOneRow[0].classList.remove('hidden');
      tabOneRow[1].classList.add('hidden');
      randomExam[0].classList.add('hidden');
    }
    else if (element.innerHTML == "ข้อสอบย้อนหลัง")
    {
      tabOneRow[0].classList.add('hidden');
      tabOneRow[1].classList.remove('hidden');
      randomExam[0].classList.remove('hidden');
    }
  });
}
// -------------------------------------------------------

// check page load on navbar in content

window.addEventListener('load', (event) => {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var selected = url.searchParams.get("page");
  if (selected == "exam") x[0].firstElementChild.click();
  else if (selected == "content") x[1].firstElementChild.click();
  else if (selected == "video") x[2].firstElementChild.click();
});