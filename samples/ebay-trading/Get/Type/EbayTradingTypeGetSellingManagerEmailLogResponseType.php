<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerEmailLogResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerEmailLogResponseType
 * Documentation : Returns the log of emails not sent.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerEmailLogResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The EmailLog
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Email logs associated with this order.
	 * @var EbayTradingTypeSellingManagerEmailLogType
	 */
	public $EmailLog;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerEmailLogType EmailLog
	 * @return EbayTradingTypeGetSellingManagerEmailLogResponseType
	 */
	public function __construct($_EmailLog = null)
	{
		EbayTradingWsdlClass::__construct(array('EmailLog'=>$_EmailLog));
	}
	/**
	 * Set EmailLog
	 * @param SellingManagerEmailLogType EmailLog
	 * @return SellingManagerEmailLogType
	 */
	public function setEmailLog($_EmailLog)
	{
		return ($this->EmailLog = $_EmailLog);
	}
	/**
	 * Get EmailLog
	 * @return EbayTradingTypeSellingManagerEmailLogType
	 */
	public function getEmailLog()
	{
		return $this->EmailLog;
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