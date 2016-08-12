<?php

namespace OneSheet\Style;

use OneSheet\Xml\StyleXml;

/**
 * Class Font
 *
 * @package OneSheet
 */
class Font
{
    /**
     * @var string
     */
    private $italic;

    /**
     * @var string
     */
    private $underline;

    /**
     * @var string
     */
    private $bold;

    /**
     * @var string
     */
    private $strikethrough;

    /**
     * @var string
     */
    private $name = 'Calibri';

    /**
     * @var int
     */
    private $size = 11;

    /**
     * @var string
     */
    private $color = '000000';

    /**
     * @var Style
     */
    private $style;

    /**
     * Font constructor.
     *
     * @param Style $style
     */
    public function __construct(Style $style)
    {
        $this->style = $style;
    }

    /**
     * @return Style
     */
    public function style()
    {
        return $this->style;
    }

    /**
     * @return Font
     */
    public function setItalic()
    {
        $this->italic = '<i/>';
        return $this;
    }

    /**
     * @return Font
     */
    public function setUnderline()
    {
        $this->underline = '<u/>';
        return $this;
    }

    /**
     * @return bool
     */
    public function isBold()
    {
        return null !== $this->bold;
    }

    /**
     * @return Font
     */
    public function setBold()
    {
        $this->bold = '<b/>';
        return $this;
    }

    /**
     * @return Font
     */
    public function setStrikethrough()
    {
        $this->strikethrough = '<s/>';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Font
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Font
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @param string $color
     * @return Font
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string
     */
    public function asXml()
    {
        return sprintf(
            StyleXml::FONT_DEFAULT_XML,
            $this->size,
            $this->color,
            $this->name,
            $this->bold,
            $this->italic,
            $this->underline,
            $this->strikethrough
        );
    }
}