<?php
/**
 * Class file for EbayTradingTypeVeROReportPacketStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportPacketStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportPacketStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Received'
	 * Meta informations :
	 * 	- documentation : (out) The packet has been received by eBay.
	 * @return string 'Received'
	 */
	const VALUE_RECEIVED = 'Received';
	/**
	 * Constant for value 'InProcess'
	 * Meta informations :
	 * 	- documentation : (out) The packet is being processed by eBay.
	 * @return string 'InProcess'
	 */
	const VALUE_INPROCESS = 'InProcess';
	/**
	 * Constant for value 'Processed'
	 * Meta informations :
	 * 	- documentation : (out) The packet has been processed by eBay. Each item within the packet has a status of Removed, SubmissionFailed, or ClarificationRequired.
	 * @return string 'Processed'
	 */
	const VALUE_PROCESSED = 'Processed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeVeROReportPacketStatusCodeType
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
		return in_array($_value,array(self::VALUE_RECEIVED,self::VALUE_INPROCESS,self::VALUE_PROCESSED,self::VALUE_CUSTOMCODE));
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