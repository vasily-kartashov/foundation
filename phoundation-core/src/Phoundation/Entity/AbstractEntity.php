<?php

namespace Phoundation\Entity;

use Phoundation\Cache\CacheInterface;

abstract class AbstractEntity implements EntityInterface
{
    /**
     * @var array {
     *      mixed $content
     *      string $tag
     *      string $digest
     *      int $length
     *      int $modified
     *      int $expires
     * }
     */
    private $cacheEntry = null;

    public function getCachingTime()
    {
        return 0;
    }

    public function getContentLanguage()
    {
        return null;
    }

    public function load(CacheInterface $cache)
    {
        if (!is_null($this->cacheEntry)) {
            return $this->cacheEntry;
        }

        $key = $this->getKey();
        list($this->cacheEntry, $found) = $cache->get($key);
        $now = time();
        $expires = isset($this->cacheEntry['expires']) ? $this->cacheEntry['expires'] : 0;

        if (!$found or $now >= $expires) {
            $content = $this->getContent();
            $tag = md5($content);
            if (is_array($this->cacheEntry) and $tag == $this->cacheEntry['tag']) {
                $this->cacheEntry['expires'] = $now + $this->getCachingTime();
            } else {
                $this->cacheEntry = array(
                    'content' => $content,
                    'tag' => $tag,
                    'digest' => base64_encode(pack('H*', md5($content))),
                    'length' => strlen($content),
                    'modified' => $now,
                    'expires' => $now + $this->getCachingTime(),
                );
            }
            $cache->set($key, $this->cacheEntry);
        }

        return $this->cacheEntry;
    }
}