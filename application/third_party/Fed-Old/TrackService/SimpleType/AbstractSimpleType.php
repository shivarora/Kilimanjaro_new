<?php
namespace FedEx\TrackService\SimpleType;

/**
 * Abstract class for all simple data types
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
abstract class AbstractSimpleType
{
    /**
     *
     * @var string
     */
    protected $_value;

    /**
     * Constructor
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    /**
     * __toString() implementation
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->_value;
    }
}
