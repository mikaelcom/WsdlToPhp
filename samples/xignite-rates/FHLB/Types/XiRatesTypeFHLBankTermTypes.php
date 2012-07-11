<?php
/**
 * Class file for XiRatesTypeFHLBankTermTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeFHLBankTermTypes
 * @date 08/07/2012
 */
class XiRatesTypeFHLBankTermTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'Standard'
	 * @return string 'Standard'
	 */
	const VALUE_STANDARD = 'Standard';
	/**
	 * Constant for value 'CommunityInvestment'
	 * @return string 'CommunityInvestment'
	 */
	const VALUE_COMMUNITYINVESTMENT = 'CommunityInvestment';
	/**
	 * Constant for value 'LessThan200K'
	 * @return string 'LessThan200K'
	 */
	const VALUE_LESSTHAN200K = 'LessThan200K';
	/**
	 * Constant for value 'TwoHundredKTo1M'
	 * @return string 'TwoHundredKTo1M'
	 */
	const VALUE_TWOHUNDREDKTO1M = 'TwoHundredKTo1M';
	/**
	 * Constant for value 'OneMTo5M'
	 * @return string 'OneMTo5M'
	 */
	const VALUE_ONEMTO5M = 'OneMTo5M';
	/**
	 * Constant for value 'FiveMTo25M'
	 * @return string 'FiveMTo25M'
	 */
	const VALUE_FIVEMTO25M = 'FiveMTo25M';
	/**
	 * Constant for value 'MoreThan25M'
	 * @return string 'MoreThan25M'
	 */
	const VALUE_MORETHAN25M = 'MoreThan25M';
	/**
	 * Constant for value 'LessThan10M'
	 * @return string 'LessThan10M'
	 */
	const VALUE_LESSTHAN10M = 'LessThan10M';
	/**
	 * Constant for value 'SecureConnect'
	 * @return string 'SecureConnect'
	 */
	const VALUE_SECURECONNECT = 'SecureConnect';
	/**
	 * Constant for value 'NewEnglandFund'
	 * @return string 'NewEnglandFund'
	 */
	const VALUE_NEWENGLANDFUND = 'NewEnglandFund';
	/**
	 * Constant for value 'StandardAmortizing'
	 * @return string 'StandardAmortizing'
	 */
	const VALUE_STANDARDAMORTIZING = 'StandardAmortizing';
	/**
	 * Constructor
	 * @return XiRatesTypeFHLBankTermTypes
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
		return in_array($_value,array(self::VALUE_STANDARD,self::VALUE_COMMUNITYINVESTMENT,self::VALUE_LESSTHAN200K,self::VALUE_TWOHUNDREDKTO1M,self::VALUE_ONEMTO5M,self::VALUE_FIVEMTO25M,self::VALUE_MORETHAN25M,self::VALUE_LESSTHAN10M,self::VALUE_SECURECONNECT,self::VALUE_NEWENGLANDFUND,self::VALUE_STANDARDAMORTIZING));
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