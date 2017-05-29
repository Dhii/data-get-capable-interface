<?php

namespace Dhii\Data;

/**
 * Represents something that can have data retrieved by key.
 *
 * @since [*next-version*]
 */
interface GetCapableInterface
{
    /**
     * Gets something that corresponds to the key.
     *
     * @since [*next-version*]
     *
     * @param string $key The key to retrieve the data for.
     *
     * @throws NotFoundExceptionInterface If data for key is not found.
     */
    public function get($key);
}
