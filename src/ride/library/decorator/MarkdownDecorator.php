<?php

namespace ride\library\decorator;

use Michelf\MarkdownExtra;

/**
 * Decorator for markdown text
 */
class MarkdownDecorator implements Decorator {

    /**
     * Actual markdown parser
     * @var \dflydev\markdown\MarkdownExtraParser
     */
    protected $parser;

    /**
     * Constructs a new markdown decorator
     * @param \Michelf\MarkdownExtra $parser
     * @return null
     */
    public function __construct(MarkdownExtra $parser) {
        $this->parser = $parser;
    }

    /**
     * Decorate a value for another context
     * @param mixed $value
     * @return mixed decorated value
     */
    public function decorate($value) {
        if (!is_string($value)) {
            return $value;
        }

        return $this->parser->transform($value);
    }

}
