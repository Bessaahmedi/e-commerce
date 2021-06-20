<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache\Region; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\Common\Cache\MultiGetCache; use MailPoetVendor\Doctrine\ORM\Cache\CacheEntry; use MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheEntry; class DefaultMultiGetRegion extends \MailPoetVendor\Doctrine\ORM\Cache\Region\DefaultRegion { protected $cache; public function __construct($name, \MailPoetVendor\Doctrine\Common\Cache\MultiGetCache $cache, $lifetime = 0) { parent::__construct($name, $cache, $lifetime); } public function getMultiple(\MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheEntry $collection) { $keysToRetrieve = []; foreach ($collection->identifiers as $index => $key) { $keysToRetrieve[$index] = $this->getCacheEntryKey($key); } $items = $this->cache->fetchMultiple($keysToRetrieve); if (\count($items) !== \count($keysToRetrieve)) { return null; } $returnableItems = []; foreach ($keysToRetrieve as $index => $key) { if (!$items[$key] instanceof \MailPoetVendor\Doctrine\ORM\Cache\CacheEntry) { return null; } $returnableItems[$index] = $items[$key]; } return $returnableItems; } } 