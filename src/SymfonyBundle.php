<?php declare(strict_types=1);

namespace Heptacom\OpenAuth;

if (\class_exists(\Symfony\Component\HttpKernel\Bundle\Bundle::class)) {
    class SymfonyBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
    {
        protected $name = 'HeptacomOpenAuth';
    }
} else {
    class SymfonyBundle
    {
    }
}
