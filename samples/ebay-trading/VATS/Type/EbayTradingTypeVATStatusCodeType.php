<?php
/**
 * Class file for EbayTradingTypeVATStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVATStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeVATStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NoVATTax'
	 * Meta informations :
	 * 	- documentation : (out) VAT is not applicable
	 * @return string 'NoVATTax'
	 */
	const VALUE_NOVATTAX = 'NoVATTax';
	/**
	 * Constant for value 'VATTax'
	 * Meta informations :
	 * 	- documentation : (out) Residence in a country with VAT and user is not registered as VAT-exempt
	 * @return string 'VATTax'
	 */
	const VALUE_VATTAX = 'VATTax';
	/**
	 * Constant for value 'VATExempt'
	 * Meta informations :
	 * 	- documentation : (out) Residence in a country with VAT and user is registered as VAT-exempt
	 * @return string 'VATExempt'
	 */
	const VALUE_VATEXEMPT = 'VATExempt';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeVATStatusCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_NOVATTAX,self::VALUE_VATTAX,self::VALUE_VATEXEMPT,self::VALUE_CUSTOMCODE));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>