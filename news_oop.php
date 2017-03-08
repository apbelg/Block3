<?php
/**
 * Новости
 */
class ClassNews
{
  public $idNews;
  public $textNews;

  public function getTextNews ($idNews)
  {
    return $this->textNews;
  }
}

 $ourNews1 = new ClassNews();
 $ourNews1->idnews = 1;
 $ourNews1->textNews = 'Супер новость № 1';

 $ourNews2 = new ClassNews();
 $ourNews2->idnews = 2;
 $ourNews2->textNews = 'Супер новость № 2';

 $ourNews3 = new ClassNews();
 $ourNews3->idnews = 3;
 $ourNews3->textNews = 'Супер новость № 3';

 for ($i=1; $i < 4 ; $i++) {

     $nomStrNews = 'ourNews'.$i;
     $news = $nomStrNews;
     echo '<h5>'.$$news->getTextNews($i).'</h5><br>';
 }

?>
