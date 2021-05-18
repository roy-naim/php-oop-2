<?php
require_once 'Auth.php';

class User {
  use Auth;

  private $name;
  private $last_name;
  private $date_of_birth;
  private $credit_card;

  private $shopping_cart = [];

  public function __construct($name, $last_name, $date_of_birth, $username, $password)
  {
    $this->name = $name;
    $this->description = $last_name;
    $this->date_of_birth = $date_of_birth;
    $this->username = $username;
    $this->password = $password;
  }
  public setCreditCard($credit_card)
  {
    $this->credit_card = $credit_card;
  }

  public addShoppingCart($product, $number_items)
  {
    $this->shopping_cart[] = [
    'product' = $product,
    'number_items' = $number_items,
    ];

  }
}
