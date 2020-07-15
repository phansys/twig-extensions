UPGRADE 1.x
===========

UPGRADE FROM 0.x to 1.0
=======================

### Moved SonataTwigBundle

`Sonata\Twig\Bridge\Symfony\Bundle\SonataTwigBundle` has been deprecated. Use `Sonata\Twig\Bridge\Symfony\SonataTwigBundle` instead.

Before:
```php
return [
    //...
    Sonata\Twig\Bridge\Symfony\Bundle\SonataTwigBundle::class => ['all' => true],
    //...
];
```

After:
```php
return [
    //...
    Sonata\Twig\Bridge\Symfony\SonataTwigBundle::class => ['all' => true],
    //...
];
```
