<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE4OazOE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE4OazOE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE4OazOE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE4OazOE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE4OazOE\App_KernelDevDebugContainer([
    'container.build_hash' => 'E4OazOE',
    'container.build_id' => '51e2c8f9',
    'container.build_time' => 1670960851,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE4OazOE');
