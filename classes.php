<?php
/**
 * Настольная лампа
 */
class TableLamp
{
  public $color;
  public $power;
  public $typeLamp;
  public $weight;
  public $manufacturer;
  private $shemaPower;

  public function onLamp()
  {
    return $pressON;
  }
  public function offLamp()
  {
    return $pressOFF;
  }
  public function zamenaLampochki()
  {
    return $newLampochka;
  }
  public function MaxMinPower()
  {
    return $movingRegulator;
  }
  private function Remont()
  {
    $schemaOtLampy = $shemaPower;
    return $adressRepairGoWithLamp;
  }

}

/**
 * Автомобильный навигатор
 */
class Navigator
{
  public $razmerDisplay;
  public $typeOS;
  public $typeProgNavi;
  public $kreplenie;
  public $manufacturer;
  private $baterry;
  private $proshivka;

  public function onNavi()
  {
    return $pressON;
  }
  public function offNavi()
  {
    return $pressOFF;
  }
  public function updateMapNavi()
  {
    return $newMapOrNewPO;
  }
  public function updateSoftwareNavi()
  {
    return $newSoftmovingRegulator;
  }
  private function updateProshivka()
  {
    return $goSpecialServiceForUpdateProshivka;
  }
  private function ReplaceBattery()
  {
    return $goSpecialServiceReplaceBattery;
  }

}
/**
 * Книга
 */
class Books
{
  public $title;
  public $autor;
  public $kolPage;
  public $category;
  private $price;
  private $kodISBN;

  public function setPrice($priceReal=0)
  {
    $this->price = $priceReal;
  }
  public function getPrice()
  {
      return $this->price;
  }
  public function setISBN($kodISBN)
  {
    $this->kodISBN = $kodISBN;
  }
  public function getISBN()
  {
      return $this->kodISBN;
  }
}

/**
 * Комментарий
 */
class Comments
{
  public $text;
  private $idNews;
  private $dateComments;
  private $idUser;

  function __construct($currentIdNews, $currentDate, $currentIdUser)
  {
         $this->idNews = $currentIdNews;
         $this->dateComment = $currentDate;
         $this->idUser = $currentIdUser;
  }
}


 ?>
