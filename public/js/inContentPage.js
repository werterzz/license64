navbar = document.getElementsByClassName("navbar-nav")[0].children;

for (let element of navbar)
{
    element.addEventListener("click", () => {
        if (element.firstElementChild.innerText == "ข้อสอบ")
        {
            window.location.href = '/license64/public/?page=exam';
        } 
        else if (element.firstElementChild.innerText == "เนื้อหา")
        {
            window.location.href = '/license64/public/?page=content';
        } 
        else if (element.firstElementChild.innerText == "วิดีโอ")
        {
            window.location.href = '/license64/public/?page=video';
        } 
    });
}