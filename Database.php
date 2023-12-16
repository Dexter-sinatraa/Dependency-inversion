<?php
// Низькорівневий клас, який працює з базою даних
class Database {
    public function readData() {
        // Логіка для зчитування даних з бази
        return "Data from database";
    }
}

// Високорівневий клас, який використовує базу даних
class DataManager {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function processData() {
        $data = $this->database->readData();
        // Логіка обробки даних
        echo "Processing data: $data";
    }
}

// Інтерфейс для бази даних
interface DatabaseInterface {
    public function readData();
}

// Реалізація інтерфейсу для конкретної бази даних
class DatabaseWithInterface implements DatabaseInterface {
    public function readData() {
        // Логіка для зчитування даних з бази
        return "Data from database";
    }
}

// Високорівневий клас, який використовує інтерфейс бази даних
class DataManagerWithInterface {
    private $database;

    public function __construct(DatabaseInterface $database) {
        $this->database = $database;
    }

    public function processData() {
        $data = $this->database->readData();
        // Логіка обробки даних
        echo "Processing data: $data";
    }
}

// Використання конкретної реалізації без інтерфейсу
$database = new Database();
$dataManager = new DataManager($database);
$dataManager->processData();

// Використання інтерфейсу
$databaseWithInterface = new DatabaseWithInterface();
$dataManagerWithInterface = new DataManagerWithInterface($databaseWithInterface);
$dataManagerWithInterface->processData();
