var switchValue = false

document.documentElement.setAttribute('data-theme', 'light')
window.addEventListener('load', ()=>{
    var theme_switch = document.querySelectorAll(".theme_switch")
    if(window.localStorage.getItem('darkTheme') == 'true'){
        switchValue = true
        document.documentElement.setAttribute('data-theme', 'dark')
        theme_switch.forEach(el=>{
            el.classList.add("toggleOn")
        })
    }
    else{
        document.documentElement.setAttribute('data-theme', 'light')
        switchValue = false   
        theme_switch.forEach(el=>{
            el.classList.remove("toggleOn")
        })
    }
})
function switchToggle(){
    var theme_switch = document.querySelectorAll(".theme_switch")
    theme_switch.forEach(el=>{
        el.classList.toggle("toggleOn")
    })
    console.log(switchValue);
    if(!switchValue){
        switchValue = true
        document.documentElement.setAttribute('data-theme', 'dark')
        window.localStorage.setItem('darkTheme', true)
    }
    else{
        window.localStorage.setItem('darkTheme', false)
        switchValue = false
        document.documentElement.setAttribute('data-theme', 'light')
    }
}

var menu_item = document.querySelectorAll("ul li")
var currentPage
window.addEventListener("load", function(){
    let urls = ["/profile.php", "/messages", "/help", "/payments", "/timetable", "/pd.php"]
    menu_item.forEach((element, index)=>{
        let currentPage = urls.findIndex((el)=>{return window.location.pathname.includes(el)})
        if(currentPage === index) element.classList.add("currentPage")
        else element.classList.remove("currentPage") 
    })
})

var leftMenu = document.querySelector('.leftMenu')
var screeno = window.innerWidth;
if (screeno <= 992){
    leftMenu.classList.add('sasi')
    leftMenu.classList.remove('col-3')
}
else{
    leftMenu.classList.remove('sasi')
}

var screeno = window.innerWidth;

var btn_burger = document.querySelector('.btn_burger')
var btnImg = document.querySelector('.btn_burger img')
var screeno = window.innerWidth;
var num = false;
function burger_open(){
    
    if (!num){
        
        leftMenu.classList.remove('sasi')
        num = true
        btnImg.src = "https://om.invanto.com/bundles/dotfogcore/om/images/remove.svg"
    }
    else{
        leftMenu.classList.add('sasi')
        num = false
        btnImg.src = "content/img/xui.png"
    }
}