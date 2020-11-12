<?php 
/**
 * 
 */

namespace Frootbox\Exceptions\Interfaces;

/**
 * 
 */
interface Exception
{
    /**
     * Exception constructor.
     *
     * This constructor is *not* compatible with the general exception class of php.
     *
     * @param string|null $message
     * @param array|null $properties
     * @param \Throwable|null $previous
     */
    public function __construct(string $message = null, array $properties = null, \Throwable $previous = null);

    /**
     *
     */
    public function getProperties(): array;

    /**
     * Generate error message from exception object
     *
     * The error message is composed to be compatible
     * to be used in combination with \Frootbox\Translation\Translator
     */
    public function toString(): string;
}