<?php

namespace Avtonom\CreoleBundle\Renderer;

class CreoleRenderer
{
    protected $creoleParser;

    /**
     * @param string $creoleParserClassName
     */
    public function __construct($creoleParserClassName)
    {
        $this->creoleParser = new $creoleParserClassName();
    }

    /**
     * Method for parsing the text using the full wiki language
     *
     * @param string $wikiText
     *
     * @return string
     */
    public function parse($wikiText)
    {
        return $this->creoleParser->parse($wikiText);
    }

    /**
     * Method to parse only inline elements (useful for one-line descriptions)
     *
     * @param string $wikiText
     *
     * @return string
     */
    public function parseParagraph($wikiText)
    {
        return $this->creoleParser->parseParagraph($wikiText);
    }
}
