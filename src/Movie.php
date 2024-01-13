<?php

class Movie
{
    private $title;
    private $classificationClass;

    public function __construct(string $title, string $classificationClass)
    {
        $this->title = $title;
        $this->classificationClass = $classificationClass;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getClassification(): string
    {
        return $this->classificationClass;
    }

    public function setClassification(string $newClassificationClass)
    {
        $this->classificationClass = $newClassificationClass;
    }
}
