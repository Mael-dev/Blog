<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ5qWm3M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ5qWm3M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ5qWm3M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ5qWm3M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJ5qWm3M\App_KernelDevDebugContainer([
    'container.build_hash' => 'J5qWm3M',
    'container.build_id' => '05dd3d02',
    'container.build_time' => 1607011028,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ5qWm3M');
