var editAdd = [openNav, closeNav],
    c = 0;
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$('.hambar').click(function(){
    editAdd[c++%2]();
});
$(".sidenav a:nth-child(2)").css("color","#03B15E");