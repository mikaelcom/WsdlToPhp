<?php
/**
 * Class file for EbayTradingTypeHandlingNameCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeHandlingNameCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeHandlingNameCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EachAdditionalAmount'
	 * Meta informations :
	 * 	- documentation : After eBay assigns the highest packaging/handling cost to the first item, the packaging/handling cost for each additional item is $n.
	 * @return string 'EachAdditionalAmount'
	 */
	const VALUE_EACHADDITIONALAMOUNT = 'EachAdditionalAmount';
	/**
	 * Constant for value 'EachAdditionalAmountOff'
	 * Meta informations :
	 * 	- documentation : After eBay assigns the highest packaging/handling cost to the first item, the packaging/handling cost for each additional item is to be reduced by amount N.
	 * @return string 'EachAdditionalAmountOff'
	 */
	const VALUE_EACHADDITIONALAMOUNTOFF = 'EachAdditionalAmountOff';
	/**
	 * Constant for value 'EachAdditionalPercentOff'
	 * Meta informations :
	 * 	- documentation : After eBay assigns the highest packaging/handling cost to the first item, the packaging/handling cost for each additional item is to be reduced by N percent.
	 * @return string 'EachAdditionalPercentOff'
	 */
	const VALUE_EACHADDITIONALPERCENTOFF = 'EachAdditionalPercentOff';
	/**
	 * Constant for value 'IndividualHandlingFee'
	 * Meta informations :
	 * 	- documentation : The total packaging/handling cost is to be the sum of the packaging/handling costs of the individual items.
	 * @return string 'IndividualHandlingFee'
	 */
	const VALUE_INDIVIDUALHANDLINGFEE = 'IndividualHandlingFee';
	/**
	 * Constant for value 'CombinedHandlingFee'
	 * Meta informations :
	 * 	- documentation : The packaging/handling cost is to be N for the entire order.
	 * @return string 'CombinedHandlingFee'
	 */
	const VALUE_COMBINEDHANDLINGFEE = 'CombinedHandlingFee';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeHandlingNameCodeType
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
		return in_array($_value,array(self::VALUE_EACHADDITIONALAMOUNT,self::VALUE_EACHADDITIONALAMOUNTOFF,self::VALUE_EACHADDITIONALPERCENTOFF,self::VALUE_INDIVIDUALHANDLINGFEE,self::VALUE_COMBINEDHANDLINGFEE,self::VALUE_CUSTOMCODE));
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