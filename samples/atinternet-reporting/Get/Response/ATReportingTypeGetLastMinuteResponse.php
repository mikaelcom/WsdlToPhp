<?php
/**
 * Class file for ATReportingTypeGetLastMinuteResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetLastMinuteResponse
 * @date 03/07/2012
 */
class ATReportingTypeGetLastMinuteResponse extends ATReportingWsdlClass
{
	/**
	 * The getLastMinuteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $getLastMinuteResult;
	/**
	 * Constructor
	 * @param string getLastMinuteResult
	 * @return ATReportingTypeGetLastMinuteResponse
	 */
	public function __construct($_getLastMinuteResult = null)
	{
		parent::__construct(array('getLastMinuteResult'=>$_getLastMinuteResult));
	}
	/**
	 * Set getLastMinuteResult
	 * @param string getLastMinuteResult
	 * @return string
	 */
	public function setGetLastMinuteResult($_getLastMinuteResult)
	{
		return ($this->getLastMinuteResult = $_getLastMinuteResult);
	}
	/**
	 * Get getLastMinuteResult
	 * @return string
	 */
	public function getGetLastMinuteResult()
	{
		return $this->getLastMinuteResult;
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