<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Twig\Bridge\Symfony;

use Symfony\Component\HttpKernel\Bundle\Bundle;

@trigger_error(sprintf(
    'The %s\SonataTwigBundle class is deprecated since version 1.x, to be removed in 2.0. Use %s instead.',
    __NAMESPACE__,
    SonataTwigSymfonyBundle::class
), E_USER_DEPRECATED);

if (false) {
    /**
     * NEXT_MAJOR: remove this class.
     *
     * @deprecated since version 1.x, to be removed in 2.0. Use Sonata\Twig\Bridge\Symfony\SonataTwigSymfonyBundle instead.
     *
     * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
     */
    final class SonataTwigBundle extends Bundle
    {
    }
}

class_alias(SonataTwigSymfonyBundle::class, SonataTwigBundle::class);
