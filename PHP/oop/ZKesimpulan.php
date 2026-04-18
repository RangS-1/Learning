<?php

// =======================
// Namespace & Autoloading
// =======================
namespace App;

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// =======================
// Interface
// =======================
interface LoggerInterface {
    public function log(string $message): void;
}

// =======================
// Abstract Class
// =======================
abstract class Vehicle {
    protected string $brand; // visibility

    const TYPE = 'Transport'; // constant

    public function __construct(string $brand) { // constructor
        $this->brand = $brand;
    }

    abstract public function move(): string; // abstract method

    public function getBrand(): string { // getter
        return $this->brand;
    }

    public function setBrand(string $brand): void { // setter
        $this->brand = $brand;
    }
}

// =======================
// Trait-like Static Helper
// =======================
class Counter {
    public static int $count = 0; // static property

    public static function increment() {
        self::$count++;
    }
}

// =======================
// Inheritance & Overriding
// =======================
class Car extends Vehicle implements LoggerInterface {
    private string $model; // property

    public function __construct(string $brand, string $model) {
        parent::__construct($brand);
        $this->model = $model;
        Counter::increment();
    }

    public function move(): string { // overriding abstract method
        return "Car {$this->brand} {$this->model} is driving";
    }

    public function log(string $message): void {
        echo "[LOG]: $message\n";
    }

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }
}

// =======================
// Another Child Class
// =======================
class Bike extends Vehicle {
    public function move(): string {
        return "Bike {$this->brand} is riding";
    }
}

// =======================
// Object Type Hinting
// =======================
class Garage {
    public function park(Vehicle $vehicle): void { // object type
        echo $vehicle->move() . " parked\n";
    }
}

// =======================
// IMPLEMENTATION
// =======================

$car = new Car("Toyota", "Corolla"); // object
$bike = new Bike("Polygon");

$garage = new Garage();
$garage->park($car);
$garage->park($bike);

$car->log("Car created");

echo "Brand: " . $car->getBrand() . "\n";
$car->setModel("Camry");
echo "Model updated: " . $car->getModel() . "\n";

echo "Total Vehicles: " . Counter::$count . "\n";

echo "Constant TYPE: " . Vehicle::TYPE . "\n";
