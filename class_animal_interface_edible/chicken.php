<?php
class Chicken extends Animal implements Edible {
    protected function makeSound()
    {
        return "Chips chips";
    }
    public function howToEat()
    {
        return "Nuốt cả con Chicken";
    }
}
