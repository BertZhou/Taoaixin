<?php
    Cart::add(37, 'Item name', 5, 100.00, ['color' => 'red', 'size' => 'M']);
    Cart::add(37, 'Item name', 1, 100.00, ['color' => 'red', 'size' => 'M']);
    Cart::add(37, 'Item name', 5, 100.00, ['color' => 'red', 'size' => 'M']);
    $count = Cart::count(); // 11 (5+1+5)