<?php

declare(strict_types=1);

namespace Growthdev\DesignPatterns\Structural\Composite\Html;

abstract class TagComponent
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(TagComponent $tagComponent): void
    {
        throw new \BadMethodCallException('Method not implemented');
    }

    public function getChild(TagComponent $tagComponent): TagComponent
    {
        throw new \BadMethodCallException('Method not implemented');
    }

    abstract public function display(): void;
}