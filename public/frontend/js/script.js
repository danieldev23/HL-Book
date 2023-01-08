

function settingsMenuToggle() {
    document.querySelector(".settings-menu").style.cssText = 'max-height: 450px'

}

function up() {
    document.querySelector(".settings-menu").style.cssText = 'max-height: 0'

}
// var darkButton = document.querySelector(".darkTheme");


    function DarkMode() {
    var darkButton = document.body
    // var darkSidebar_left = document.getElementsByClassName('left-sidebar')
    darkButton.classList.toggle("darkmode");
    document.getElementsByClassName('left-sidebar').classList.toggle('left-sidebar-mode')


}
let alerts = document.querySelectorAll('.alert');
alerts.forEach(item=>{
    item.addEventListener('click', function(event){
        if(event.target.classList.contains('close')){
            item.style.display = 'none';
        }
    })
})
window.addEventListener('offline', function(){
    document.getElementById('success').style.display = 'none';
    document.getElementById('error').style.display = 'grid';
})
window.addEventListener('online', function(){
    document.getElementById('error').style.display = 'none';
    document.getElementById('success').style.display ='grid';
});

let menu = document.getElementById('menu');
document.addEventListener('contextmenu', function(event){
    event.preventDefault()
    menu.style.display = 'block'
    menu.style.top = event.y + 'px'
    menu.style.left = event.x + 'px'
})
document.addEventListener('click', function(){
    menu.style.display = 'none'
})