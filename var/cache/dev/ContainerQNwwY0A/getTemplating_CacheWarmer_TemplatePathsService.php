<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.cache_warmer.template_paths' shared service.

return $this->privates['templating.cache_warmer.template_paths'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(($this->privates['templating.finder'] ?? $this->load(__DIR__.'/getTemplating_FinderService.php')), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
