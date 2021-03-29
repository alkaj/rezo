

class Post {
    private $post_id;
    private $content;
    private $quota;
    private $date;
    private $user_id;

    public function index() {
        $req = "select * from post;";
    }

    public function store($request) {
        $req = "insert into post(content, user_id, date)values(:content, :user_id, now());";
    }
}