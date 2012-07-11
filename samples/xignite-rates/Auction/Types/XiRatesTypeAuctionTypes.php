<?php
/**
 * Class file for XiRatesTypeAuctionTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeAuctionTypes
 * @date 08/07/2012
 */
class XiRatesTypeAuctionTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'TreasuryNote'
	 * @return string 'TreasuryNote'
	 */
	const VALUE_TREASURYNOTE = 'TreasuryNote';
	/**
	 * Constant for value 'TreasuryBond'
	 * @return string 'TreasuryBond'
	 */
	const VALUE_TREASURYBOND = 'TreasuryBond';
	/**
	 * Constant for value 'TreasuryBill'
	 * @return string 'TreasuryBill'
	 */
	const VALUE_TREASURYBILL = 'TreasuryBill';
	/**
	 * Constant for value 'TIPS'
	 * @return string 'TIPS'
	 */
	const VALUE_TIPS = 'TIPS';
	/**
	 * Constructor
	 * @return XiRatesTypeAuctionTypes
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
		return in_array($_value,array(self::VALUE_TREASURYNOTE,self::VALUE_TREASURYBOND,self::VALUE_TREASURYBILL,self::VALUE_TIPS));
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