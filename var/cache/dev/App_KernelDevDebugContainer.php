<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP3XHqCZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP3XHqCZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP3XHqCZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP3XHqCZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerP3XHqCZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'P3XHqCZ',
    'container.build_id' => 'd1e6dfda',
    'container.build_time' => 1665828276,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP3XHqCZ');
