<?php

class Math {
    public int $width;
    public int $hight;

    public function __construct(int $w, int $h) {
        if ($w < 0 || $h < 0) {
            echo "error negative values!\n";
        }
        $this->width = $w;
        $this->hight = $h;
    }

    public function getArea(): int {
        return $this->width * $this->hight;
    }

    public function getPerimeter(): int {
        return ($this->width + $this->hight) * 2;
    }
}
// $rectangle = new Math(10, -5);

class Account {
    public static int $count = 0;

    public int $id;    
    public string $name;
    private int $balance;

    public function __construct(string $n) {
        self::$count++;
        $this->id = self::$count;
        $this->name = $n;
        $this->balance = 0; 
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit(int $amount) {
        $this->balance += $amount;
    }

    public function withdraw(int $amount) {
        $this->balance -= $amount;
    }
}
// $sami = new Account("Sami");
