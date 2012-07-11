<?php
/**
 * Class file for EbayTradingTypeCostGroupFlatCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCostGroupFlatCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCostGroupFlatCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Group1MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Shipping Service Cap Group 1.
	 * @return string 'Group1MaxFlatShippingCost'
	 */
	const VALUE_GROUP1MAXFLATSHIPPINGCOST = 'Group1MaxFlatShippingCost';
	/**
	 * Constant for value 'Group2MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Shipping Service Cap Group 2.
	 * @return string 'Group2MaxFlatShippingCost'
	 */
	const VALUE_GROUP2MAXFLATSHIPPINGCOST = 'Group2MaxFlatShippingCost';
	/**
	 * Constant for value 'Group3MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Shipping Service Cap Group 3.
	 * @return string 'Group3MaxFlatShippingCost'
	 */
	const VALUE_GROUP3MAXFLATSHIPPINGCOST = 'Group3MaxFlatShippingCost';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCostGroupFlatCodeType
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
		return in_array($_value,array(self::VALUE_GROUP1MAXFLATSHIPPINGCOST,self::VALUE_GROUP2MAXFLATSHIPPINGCOST,self::VALUE_GROUP3MAXFLATSHIPPINGCOST,self::VALUE_CUSTOMCODE));
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