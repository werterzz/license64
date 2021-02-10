pathname = window.location.pathname;
var res = pathname.split("/");

if (res[3] == "tabtwo")
{
    document.getElementsByClassName('nav-link')[0].classList.remove('tab-selected');
    document.getElementsByClassName('nav-link')[1].classList.add('tab-selected');
}
if (res[3] == "tabthree")
{
    document.getElementsByClassName('nav-link')[0].classList.remove('tab-selected');
    document.getElementsByClassName('nav-link')[2].classList.add('tab-selected');
}