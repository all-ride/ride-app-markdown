<?php

namespace ride\library\decorator;

use dflydev\markdown\MarkdownExtraParser;

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
     * @param \dflydev\markdown\MarkdownExtraParser $parser
     * @return null
     */
    public function __construct(MarkdownExtraParser $parser) {
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

        return $this->parser->transformMarkdown($value);
    }

}