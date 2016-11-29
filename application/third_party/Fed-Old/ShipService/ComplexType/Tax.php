<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Identifies each tax applied to the shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Tax
    extends AbstractComplexType
{
    protected $_name = 'Tax';

    /**
     * The type of tax applied to the shipment.
     *
     * @param TaxType $TaxType
     * return Tax
     */
    public function setTaxType(\FedEx\ShipService\SimpleType\TaxType $taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return Tax
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * The amount of the tax applied to the shipment.
     *
     * @param Money $Amount
     * return Tax
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}