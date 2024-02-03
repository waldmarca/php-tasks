<?php 
abstract class TariffAbstract implements TariffInterface 
{
  protected $pricePerKilometr;
  protected $pricePerMinute;
  protected $distance;
  protected $minutes;
  /** @var ServiceInterface[] */
  protected $services = [];

  public function __construct(int $distance, int $minutes) 
  {
    $this->distance = $distance;
    $this->minutes = $minutes;
  }
  public function countPrice(): int 
  {
    $price = $this->distance * $this->pricePerKilometr + $this->minutes * $this->pricePerMinute;

    if ($this->services) {
      foreach ($this->services as $service) {
        $service->apply($this, $price);
      }
    }

    return $price;
  }
  public function addService(ServiceInterface $service): TariffInterface
  {
    array_push($this->services, $service);
    return $this;
  }
  public function getMinutes(): int 
  {
    return $this->minutes;
  }
  public function getDistance(): int 
  {
    return $this->distance;
  }

  public function getServices() 
  {
    $result = [];
    foreach ($this->services as $service) {
      $result[] = $service->name;
    }
    return implode(', ', $result);
  }
}
?>