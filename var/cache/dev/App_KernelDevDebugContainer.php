<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ61Pnlk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ61Pnlk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ61Pnlk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ61Pnlk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ61Pnlk\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q61Pnlk',
    'container.build_id' => 'bbe8d91d',
    'container.build_time' => 1666049055,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ61Pnlk');
