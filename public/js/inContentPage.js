navbar = document.getElementsByClassName("navbar-nav")[0].children;

for (let element of navbar)
{
    element.addEventListener("click", () => {
        if (element.firstElementChild.innerText == "ข้อสอบ")
        {
            window.location.href = '/?page=exam';
        } 
        else if (element.firstElementChild.innerText == "เนื้อหา")
        {
            window.location.href = '/?page=content';
        } 
        else if (element.firstElementChild.innerText == "วิดีโอ")
        {
            window.location.href = '/?page=video';
        } 
    });
}