<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRfXp25l\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRfXp25l/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRfXp25l.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRfXp25l\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRfXp25l\App_KernelDevDebugContainer([
    'container.build_hash' => 'RfXp25l',
    'container.build_id' => 'a3900d42',
    'container.build_time' => 1670852739,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRfXp25l');