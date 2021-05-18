<?php
class Products {
  private $name;
  private $description;
  private $price;
  private $available;
  private $shop_code;
}

public function __construct($name, $description, $price, $available, $shop_code)
{
  $this->name = $name;
  $this->description = $description;
  $this->price = $price;
  $this->available = $available;
  $this->shop_code = $shop_code;
}
