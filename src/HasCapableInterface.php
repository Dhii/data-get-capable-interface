<?php

namespace Dhii\Data;

/**
 * Represents something that can have data checked for by key.
 *
 * @since [*next-version*]
 */
interface HasCapableInterface
{
    /**
     * Checks whether this instance has data for a key.
     *
     * @since [*next-version*]
     *
     * @param string $key The key to check for.
     *
     * @return bool True if data exists for the key; otherwise false.
     */
    public function has($key);
}
