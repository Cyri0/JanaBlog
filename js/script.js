let holder = document.getElementById("lastFiveHolder");

class Article {
    constructor(title, pic){
        this.title = title;
        this.pic = pic;
    }
}

function init(){
    let list = [
        new Article("Jussát várja a Vaják","vajak.jpg"),
        new Article("Lorem Ipsum dolor si amet","latin.jpg")
        ];

    for(let i = 0; i < list.length; i++){
        let pic = list[i].pic;
        let title = list[i].title;

        holder.innerHTML += '<div onmouseover="changeImg(\''+pic+'\')">'+title+'</div>';
            if(i == 0){
                changeImg(pic); 
            }
    }
}

function changeImg(pic){
    let actualPic = document.getElementById("actualPreviewImage");
    actualPic.src = "pics/" + pic;
}