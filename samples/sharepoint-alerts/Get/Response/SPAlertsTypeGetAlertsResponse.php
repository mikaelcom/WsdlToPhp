<?php
/**
 * Class file for SPAlertsTypeGetAlertsResponse
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeGetAlertsResponse
 * @date 06/07/2012
 */
class SPAlertsTypeGetAlertsResponse extends SPAlertsWsdlClass
{
	/**
	 * The GetAlertsResult
	 * @var SPAlertsTypeAlertInfo
	 */
	public $GetAlertsResult;
	/**
	 * Constructor
	 * @param SPAlertsTypeAlertInfo GetAlertsResult
	 * @return SPAlertsTypeGetAlertsResponse
	 */
	public function __construct($_GetAlertsResult = null)
	{
		parent::__construct(array('GetAlertsResult'=>$_GetAlertsResult));
	}
	/**
	 * Set GetAlertsResult
	 * @param AlertInfo GetAlertsResult
	 * @return AlertInfo
	 */
	public function setGetAlertsResult($_GetAlertsResult)
	{
		return ($this->GetAlertsResult = $_GetAlertsResult);
	}
	/**
	 * Get GetAlertsResult
	 * @return SPAlertsTypeAlertInfo
	 */
	public function getGetAlertsResult()
	{
		return $this->GetAlertsResult;
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