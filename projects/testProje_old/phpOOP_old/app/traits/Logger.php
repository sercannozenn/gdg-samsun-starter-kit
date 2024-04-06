<?php
namespace app\traits;
trait Logger
{
    public string $name;

    private function loglamaYap()
    {
        echo "Loglama yapıldı";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}