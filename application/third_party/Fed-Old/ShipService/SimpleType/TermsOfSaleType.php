<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
            Required for dutiable international express or ground shipment. This field is not applicable to an international PIB (document) or a non-document which does not require a commercial invoice express shipment.
            CFR_OR_CPT (Cost and Freight/Carriage Paid TO)
            CIF_OR_CIP (Cost Insurance and Freight/Carraige Insurance Paid)
            DDP (Delivered Duty Paid)
            DDU (Delivered Duty Unpaid)
            EXW (Ex Works)
            FOB_OR_FCA (Free On Board/Free Carrier)
          
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class TermsOfSaleType
    extends AbstractSimpleType
{
    const _CFR_OR_CPT = 'CFR_OR_CPT';
    const _CIF_OR_CIP = 'CIF_OR_CIP';
    const _DDP = 'DDP';
    const _DDU = 'DDU';
    const _EXW = 'EXW';
    const _FOB_OR_FCA = 'FOB_OR_FCA';
}