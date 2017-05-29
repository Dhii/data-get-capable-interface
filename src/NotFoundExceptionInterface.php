<?php

namespace Dhii\Data;

/**
 * Represents an exception which occurs when data requested for a key is not found.
 *
 * @since [*next-version*]
 */
interface NotFoundExceptionInterface
{
    /**
     * Retrieves the associated key.
     *
     * @since [*next-version*]
     *
     * @return string The key, for which data was requested.
     */
    public function getKey();
}
