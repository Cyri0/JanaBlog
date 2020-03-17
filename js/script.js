let holder = document.getElementById("lastFiveHolder");

class Article {
    constructor(id, title, pic){
        this.title = title;
        this.pic = pic;
        this.id = id;
        this.url = this.makeLink();
    }
    makeLink(){
        return "article.html?post_id=" + this.id;
    }
}

let list = [];

function initList(){
    let li = [
        new Article(1, "Jussát várja a Vaják...","pics/vajak.jpg"),
        new Article(2, "Fush-Ro-Dah!","pics/skyrim.jpg"),
        new Article(3, "GTA San Andreas - A Kritika","https://toptechytips.com/wp-content/uploads/2019/10/GTA-San-Andreas-Apk-obb.jpg"),
        new Article(4, "Teszt","pics/latin.jpg"),
        new Article(5, "Teszt","pics/latin.jpg")
    ];

    return li;
}

function init(){

    list = initList();

    for(let i = 0; i < list.length; i++){
        let pic = list[i].pic;
        let title = list[i].title;
        let link = list[i].url;

        holder.innerHTML += '<a href="'+link+'"><div onmouseover="change('+i+')">'+title+'</div></a>';
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

    let link = document.getElementById("image_link");
    link.href = list[id].url;
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