<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHyp2dL2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHyp2dL2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHyp2dL2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHyp2dL2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHyp2dL2\App_KernelDevDebugContainer([
    'container.build_hash' => 'Hyp2dL2',
    'container.build_id' => 'd98e1de7',
    'container.build_time' => 1650788721,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHyp2dL2');
