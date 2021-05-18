<?php
  /**
   *
   */
  class CreditCard
  {
    private $number;
    private $card_circuit;
    private $holder;
    private $expired_at;
    private $cvv;    

    public __construct($number, $card_circuit, $holder, $expired_at, $cvv)
    {
      $this->number = $number;
      $this->card_circuit = $card_circuit;
      $this->holder = $holder;
      $this->expired_at = $expired_at;
      $this->cvv = $cvv;
    }
  }
