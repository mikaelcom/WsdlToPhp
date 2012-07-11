<?php
/**
 * Class file for AmazonFPSTypeMarketplaceRefundPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeMarketplaceRefundPolicy
 * @date 10/07/2012
 */
class AmazonFPSTypeMarketplaceRefundPolicy extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'MasterTxnOnly'
	 * @return string 'MasterTxnOnly'
	 */
	const VALUE_MASTERTXNONLY = 'MasterTxnOnly';
	/**
	 * Constant for value 'MarketplaceTxnOnly'
	 * @return string 'MarketplaceTxnOnly'
	 */
	const VALUE_MARKETPLACETXNONLY = 'MarketplaceTxnOnly';
	/**
	 * Constant for value 'MasterAndMarketplaceTxn'
	 * @return string 'MasterAndMarketplaceTxn'
	 */
	const VALUE_MASTERANDMARKETPLACETXN = 'MasterAndMarketplaceTxn';
	/**
	 * Constructor
	 * @return AmazonFPSTypeMarketplaceRefundPolicy
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
		return in_array($_value,array(self::VALUE_MASTERTXNONLY,self::VALUE_MARKETPLACETXNONLY,self::VALUE_MASTERANDMARKETPLACETXN));
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