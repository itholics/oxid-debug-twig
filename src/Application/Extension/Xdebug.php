<?php
declare(strict_types=1);

namespace ITholics\Oxid\Component\DebugTwig\Application\Extension;
use Twig\Extension\AbstractExtension;

class Xdebug extends AbstractExtension {
    public function getFunctions(): array {
        return [
            new \Twig\TwigFunction('xdebug_break', [$this, 'xdebug_break']),
            new \Twig\TwigFunction('var_dump', [$this, 'var_dump']),
            new \Twig\TwigFunction('print_r', [$this, 'print_r']),
        ];
    }

    public function xdebug_break(): void {
        xdebug_break();
    }

    public function var_dump(mixed $var, mixed ... $vars): void {
        ob_start();
        echo "<pre>";
        var_dump($var, ...$vars);
        echo "</pre>";
        ob_end_flush();
    }

    public function print_r(mixed $value): void {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
}