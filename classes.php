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


 ?>
