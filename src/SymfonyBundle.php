<?php declare(strict_types=1);

namespace Heptacom\OpenAuth;

if (\class_exists(\Symfony\Component\HttpKernel\Bundle\Bundle::class)) {
    class SymfonyBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
    {
        protected $name = 'HeptacomOpenAuth';

        public function build(\Symfony\Component\DependencyInjection\ContainerBuilder $container): void
        {
            parent::build($container);

            $fileLocator = new \Symfony\Component\Config\FileLocator($this->getPath());
            (new \Symfony\Component\DependencyInjection\Loader\YamlFileLoader($container, $fileLocator))
                ->load($this->getPath() . '/Resources/config/services.yml');
        }
    }
} else {
    class SymfonyBundle
    {
    }
}
