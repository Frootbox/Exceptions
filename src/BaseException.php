<?php 
/**
 * 
 */

namespace Frootbox\Exceptions;

/**
 * 
 */
abstract class BaseException extends \Exception implements Interfaces\Exception
{
    private $properties;
    private $previous;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $message = null, array $properties = null, \Throwable $previous = null)
    {
        $this->message = $message;
        $this->properties = $properties;
        $this->previous = $previous;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(): array
    {
        return !empty($this->properties) ? $this->properties : [ ];
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        $message = str_replace('\\', '.', substr(get_class($this), 9));

        if (!empty($this->message)) {
            $message .= '.' . $this->message;
        }

        return $message;
    }
}
