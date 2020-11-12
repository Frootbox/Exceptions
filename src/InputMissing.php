<?php
/**
 *
 */

namespace Frootbox\Exceptions;

/**
 *
 */
class InputMissing extends BaseException
{
    /**
     * {@inheritdoc}
     */
    public function __construct ( string $message = null, array $properties = null, \Throwable $previous = null )
    {
        if ($message === null and !empty($properties)) {
            $message = 'Field';
        }

        parent::__construct($message, $properties, $previous);
    }
}