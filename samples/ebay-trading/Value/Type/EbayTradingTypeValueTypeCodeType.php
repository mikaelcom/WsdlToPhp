<?php
/**
 * Class file for EbayTradingTypeValueTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValueTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeValueTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Decimal'
	 * Meta informations :
	 * 	- documentation : A number with a possible decimal point, e.g. -3.14159. (Item Specifics don't distinguish between float and double.)
	 * @return string 'Decimal'
	 */
	const VALUE_DECIMAL = 'Decimal';
	/**
	 * Constant for value 'Text'
	 * Meta informations :
	 * 	- documentation : Free-form text. This is the default. Max length 50 (see GeteBayDetails).
	 * @return string 'Text'
	 */
	const VALUE_TEXT = 'Text';
	/**
	 * Constant for value 'ISBN'
	 * Meta informations :
	 * 	- documentation : International Standard Book Number (ISBN). ISBNs can contain either 10 or 13 characters. Max length 13.
	 * @return string 'ISBN'
	 */
	const VALUE_ISBN = 'ISBN';
	/**
	 * Constant for value 'UPC'
	 * Meta informations :
	 * 	- documentation : Universal Product Code. Max length 12.
	 * @return string 'UPC'
	 */
	const VALUE_UPC = 'UPC';
	/**
	 * Constant for value 'EAN'
	 * Meta informations :
	 * 	- documentation : European Article Number. Max length 13.
	 * @return string 'EAN'
	 */
	const VALUE_EAN = 'EAN';
	/**
	 * Constant for value 'Date'
	 * Meta informations :
	 * 	- documentation : A Date value, which can assume one of these formats: YYYYMMDD, YYYYMM, or YYYY. See ValueFormat for the recommended format to use in listings.
	 * @return string 'Date'
	 */
	const VALUE_DATE = 'Date';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeValueTypeCodeType
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
		return in_array($_value,array(self::VALUE_DECIMAL,self::VALUE_TEXT,self::VALUE_ISBN,self::VALUE_UPC,self::VALUE_EAN,self::VALUE_DATE,self::VALUE_CUSTOMCODE));
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