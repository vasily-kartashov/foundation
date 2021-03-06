<?php
namespace core\response
{
    use core\entity\Entity;

    /**
     * Indicates that the resource has not been modified since the version specified by the request headers
     * If-Modified-Since or If-Match. This means that there is no need to retransmit the resource, since the client
     * still has a previously-downloaded copy.
     */
    class NotModifiedResponse extends Response
    {
        /**
         * @param Entity $entity
         */
        public function __construct(Entity $entity)
        {
            parent::__construct('304 Not Modified');
            $this->setEntity($entity, false);
        }
    }
}