let holder = document.getElementById("lastFiveHolder");

class Article {
    constructor(title, pic){
        this.title = title;
        this.pic = pic;
    }
}

let list = [];

function init(){
    list = [
        new Article("Jussát várja a Vaják...","pics/vajak.jpg"),
        new Article("Fush-Ro-Dah!","pics/skyrim.jpg"),
        new Article("GTA San Andreas - A Kritika","https://toptechytips.com/wp-content/uploads/2019/10/GTA-San-Andreas-Apk-obb.jpg"),
        new Article("Teszt","pics/latin.jpg"),
        new Article("Teszt","pics/latin.jpg")
    ];

    for(let i = 0; i < list.length; i++){
        let pic = list[i].pic;
        let title = list[i].title;

        holder.innerHTML += '<div onmouseover="change('+i+')">'+title+'</div>';
            if(i == 0){
                change(0); 
            }
    }
}

function change(id){
    let actualPic = document.getElementById("actualPreviewImage");

    reset_animation(actualPic);

    actualPic.style.backgroundImage = "url('" + list[id].pic + "')";
    let title = document.getElementById("actualPreviewTitle");
    title.innerHTML = list[id].title;

}

function reset_animation(pic) {
  pic.style.animation = 'none';
  pic.offsetHeight;
  pic.style.animation = null; 
}

let actual_num = 0;

function next_post(){
    
    if(actual_num != 5){
        actual_num++;
    } else {
        actual_num = 0;
    }
    
    change(actual_num);
}

function prev_post(){
    if(actual_num != 0){
        actual_num--;
    } else {
        actual_num = 4;
    }
    change(actual_num);
}

function mobile_dropdown_handler(){
    let mobile_menu = document.getElementById("mobile_dropdown_menu");
    if(mobile_menu.style.visibility != "visible"){
        mobile_menu.style.visibility = "visible";}
    else {
        mobile_menu.style.visibility = "hidden";
    }
}

init();