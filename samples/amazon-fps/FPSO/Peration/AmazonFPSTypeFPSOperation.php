<?php
/**
 * Class file for AmazonFPSTypeFPSOperation
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeFPSOperation
 * @date 10/07/2012
 */
class AmazonFPSTypeFPSOperation extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Pay'
	 * @return string 'Pay'
	 */
	const VALUE_PAY = 'Pay';
	/**
	 * Constant for value 'Refund'
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'Settle'
	 * @return string 'Settle'
	 */
	const VALUE_SETTLE = 'Settle';
	/**
	 * Constant for value 'SettleDebt'
	 * @return string 'SettleDebt'
	 */
	const VALUE_SETTLEDEBT = 'SettleDebt';
	/**
	 * Constant for value 'WriteOffDebt'
	 * @return string 'WriteOffDebt'
	 */
	const VALUE_WRITEOFFDEBT = 'WriteOffDebt';
	/**
	 * Constant for value 'FundPrepaid'
	 * @return string 'FundPrepaid'
	 */
	const VALUE_FUNDPREPAID = 'FundPrepaid';
	/**
	 * Constant for value 'Reserve'
	 * @return string 'Reserve'
	 */
	const VALUE_RESERVE = 'Reserve';
	/**
	 * Constructor
	 * @return AmazonFPSTypeFPSOperation
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
		return in_array($_value,array(self::VALUE_PAY,self::VALUE_REFUND,self::VALUE_SETTLE,self::VALUE_SETTLEDEBT,self::VALUE_WRITEOFFDEBT,self::VALUE_FUNDPREPAID,self::VALUE_RESERVE));
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