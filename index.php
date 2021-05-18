<?php
  require_once 'Product.php';
  require_once 'User.php';
  require_once 'CreditCard.php';



  $bag = new Product ('bag', 'A Sport bag', 9.99, true, 'XX1110');
  $wallet = new Product ('wallet', 'Armani men wallet', 24.99, true, 'XX2110');
  $user1 = new User ('Pinko', 'Pallino', '2000-12-30', 'pinko', 'name');
  $credit_card = new CreditCard ('1234567898765', 'Visa', 'Pinko Pallino', '2025-05', '123');

  $user1->setCreditCard($credit_card);

  $user1->addShoppingCart($bag, 5);
