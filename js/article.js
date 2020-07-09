
class Article {
    constructor(id, title, pic, db_id){
        this.title = title;
        this.pic = pic;
        this.id = id;
        this.url = this.makeLink(db_id);
    }
    makeLink(db_id){
        return "article.php?post_id=" + db_id;
    }
}