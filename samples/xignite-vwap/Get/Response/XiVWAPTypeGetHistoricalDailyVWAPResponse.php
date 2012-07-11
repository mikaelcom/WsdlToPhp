<?php
/**
 * Class file for XiVWAPTypeGetHistoricalDailyVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalDailyVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalDailyVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetHistoricalDailyVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPs
	 */
	public $GetHistoricalDailyVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeHistoricalVWAPs GetHistoricalDailyVWAPResult
	 * @return XiVWAPTypeGetHistoricalDailyVWAPResponse
	 */
	public function __construct($_GetHistoricalDailyVWAPResult = null)
	{
		parent::__construct(array('GetHistoricalDailyVWAPResult'=>$_GetHistoricalDailyVWAPResult));
	}
	/**
	 * Set GetHistoricalDailyVWAPResult
	 * @param HistoricalVWAPs GetHistoricalDailyVWAPResult
	 * @return HistoricalVWAPs
	 */
	public function setGetHistoricalDailyVWAPResult($_GetHistoricalDailyVWAPResult)
	{
		return ($this->GetHistoricalDailyVWAPResult = $_GetHistoricalDailyVWAPResult);
	}
	/**
	 * Get GetHistoricalDailyVWAPResult
	 * @return XiVWAPTypeHistoricalVWAPs
	 */
	public function getGetHistoricalDailyVWAPResult()
	{
		return $this->GetHistoricalDailyVWAPResult;
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