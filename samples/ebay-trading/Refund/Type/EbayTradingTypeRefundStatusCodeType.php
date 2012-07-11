<?php
/**
 * Class file for EbayTradingTypeRefundStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Successful'
	 * Meta informations :
	 * 	- documentation : The refund request was successful.<br/><br/> <span class="tablenote"> <strong>Note:</strong> The RefundStatus value is returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'Successful'
	 */
	const VALUE_SUCCESSFUL = 'Successful';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : The refund request is being processed.<br/><br/> <span class="tablenote"> <strong>Note:</strong> The RefundStatus value is returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Failed'
	 * Meta informations :
	 * 	- documentation : The refund request was rejected.<br/><br/> <span class="tablenote"> <strong>Note:</strong> The RefundStatus value is returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundStatusCodeType
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
		return in_array($_value,array(self::VALUE_SUCCESSFUL,self::VALUE_PENDING,self::VALUE_FAILED,self::VALUE_CUSTOMCODE));
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