<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache\Region; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\Common\Cache\Cache as CacheAdapter; use MailPoetVendor\Doctrine\Common\Cache\ClearableCache; use MailPoetVendor\Doctrine\ORM\Cache\CacheEntry; use MailPoetVendor\Doctrine\ORM\Cache\CacheKey; use MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheEntry; use MailPoetVendor\Doctrine\ORM\Cache\Lock; use MailPoetVendor\Doctrine\ORM\Cache\Region; class DefaultRegion implements \MailPoetVendor\Doctrine\ORM\Cache\Region { const REGION_KEY_SEPARATOR = '_'; protected $cache; protected $name; protected $lifetime = 0; public function __construct($name, \MailPoetVendor\Doctrine\Common\Cache\Cache $cache, $lifetime = 0) { $this->cache = $cache; $this->name = (string) $name; $this->lifetime = (int) $lifetime; } public function getName() { return $this->name; } public function getCache() { return $this->cache; } public function contains(\MailPoetVendor\Doctrine\ORM\Cache\CacheKey $key) { return $this->cache->contains($this->getCacheEntryKey($key)); } public function get(\MailPoetVendor\Doctrine\ORM\Cache\CacheKey $key) { $entry = $this->cache->fetch($this->getCacheEntryKey($key)); if (!$entry instanceof \MailPoetVendor\Doctrine\ORM\Cache\CacheEntry) { return null; } return $entry; } public function getMultiple(\MailPoetVendor\Doctrine\ORM\Cache\CollectionCacheEntry $collection) { $result = []; foreach ($collection->identifiers as $key) { $entryKey = $this->getCacheEntryKey($key); $entryValue = $this->cache->fetch($entryKey); if (!$entryValue instanceof \MailPoetVendor\Doctrine\ORM\Cache\CacheEntry) { return null; } $result[] = $entryValue; } return $result; } protected function getCacheEntryKey(\MailPoetVendor\Doctrine\ORM\Cache\CacheKey $key) { return $this->name . self::REGION_KEY_SEPARATOR . $key->hash; } public function put(\MailPoetVendor\Doctrine\ORM\Cache\CacheKey $key, \MailPoetVendor\Doctrine\ORM\Cache\CacheEntry $entry, \MailPoetVendor\Doctrine\ORM\Cache\Lock $lock = null) { return $this->cache->save($this->getCacheEntryKey($key), $entry, $this->lifetime); } public function evict(\MailPoetVendor\Doctrine\ORM\Cache\CacheKey $key) { return $this->cache->delete($this->getCacheEntryKey($key)); } public function evictAll() { if (!$this->cache instanceof \MailPoetVendor\Doctrine\Common\Cache\ClearableCache) { throw new \BadMethodCallException(\sprintf('Clearing all cache entries is not supported by the supplied cache adapter of type %s', \get_class($this->cache))); } return $this->cache->deleteAll(); } } 