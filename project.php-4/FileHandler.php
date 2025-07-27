<?php


trait FileHandler {

    private $fileName = __DIR__ . '/../../../data/vehicles.json';

    public function readFile() {
        if (!file_exists($this->fileName)) {
            file_put_contents($this->fileName, json_encode([]));
        }
        $jsonData = file_get_contents($this->fileName);
        return json_decode($jsonData, true);
    }

    public function writeFile($data) {
        file_put_contents($this->fileName, json_encode($data, JSON_PRETTY_PRINT));
    }
}
