<?php
class Scrapp
{
    public $url;
    public $output;
    public $ch;
    public $newarray = [];
    public $paragraph;
    public $h__one;
    public $image;
    public $count;
    public $folder__name;
    public $time;

    /**
     * Scrapp constructor.
     * @param $https target url which we want to scrapp   http://www.tert.am/am/news/2016/01/28/ohanyan9/1914512
     */
    public function __construct($https)
    {
        $this->url = $https;
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_HEADER, 0);
        curl_setopt($this->ch, CURLOPT_URL, $this->url);
        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
        $this->output = curl_exec($this->ch);
        curl_close($this->ch);

    }

    /**
     * @param $gen__patern setting genereal pattern (div or paragraph or iamge tags)
     * @param general pattern (for scrapping div elements with item id)
     * '{<div\s+id="item"\s*>((?:(?:(?!<div[^>]*>|</div>).)++|<div[^>]*>(?1)</div>)*)</div>}si';
     * @param newarray new array where we hold scrapped html
     */
    public function validate_general($gen__patern)
    {
        preg_match_all($gen__patern, $this->output, $this->newarray);

    }
    /**
     *Connection to databse and dowloading images and putting in folder
     */
   // public function connect_insert()
//    {
//        $this->time = time() . '.png';
//        foreach ($this->image['2'] as $item) {
//            file_put_contents($this->folder__name . '/' . $this->time, file_get_contents($item));
//
//        }
//        $con = new DbConnection();

//        try {
//            $con->connect->query("insert into scrapped__content (image_url,tiltle,content,image__name)
//             values ('$this->time','$this->h__one','$this->paragraph','$item')");
//            echo "Inserted";
//        } catch (PDOException $ex) {
//            echo $ex->getmessage();
//        }
//    }

    /**
     * @param $header__pattern '/<h1 ?.*>(.*)<\/h1>/' scrapp all  h1  tags inside div id  item
     * @param $par__pattern '{<p>((?:(?:(?!<div[^>]*>|</div>).)++|<div[^>]*>(?1)</p>)*)</div>}si' scrapp all paragraphs
     * @param $image__finder '/(<img[^>]*src *= *["']?)([^"']*)/i' scrapp all images inside div id item
     */
    public function validate_content($header__pattern, $par__pattern, $image__finder)
    {
        foreach ($this->newarray as $value) {
            preg_match_all($header__pattern, $value['0'], $hone);
            preg_match_all($par__pattern, $value['0'], $parag);
            preg_match_all($image__finder, $value['0'], $this->image);
        }
        $this->paragraph .= $parag['0']['0'];
        $this->h__one .= $hone['0']['0'];

    }
    /**
     * @param $folderName create folder with folder that you prefer
     */
    public function create_folder($folderName)
    {
        $this->folder__name = $folderName;
        if (!is_dir($folderName)) {
            mkdir($folderName, 0777);
        }
    }
}

?>