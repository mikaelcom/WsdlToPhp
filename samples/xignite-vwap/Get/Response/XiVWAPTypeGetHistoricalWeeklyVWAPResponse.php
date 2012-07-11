<?php
/**
 * Class file for XiVWAPTypeGetHistoricalWeeklyVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalWeeklyVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalWeeklyVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetHistoricalWeeklyVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPs
	 */
	public $GetHistoricalWeeklyVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeHistoricalVWAPs GetHistoricalWeeklyVWAPResult
	 * @return XiVWAPTypeGetHistoricalWeeklyVWAPResponse
	 */
	public function __construct($_GetHistoricalWeeklyVWAPResult = null)
	{
		parent::__construct(array('GetHistoricalWeeklyVWAPResult'=>$_GetHistoricalWeeklyVWAPResult));
	}
	/**
	 * Set GetHistoricalWeeklyVWAPResult
	 * @param HistoricalVWAPs GetHistoricalWeeklyVWAPResult
	 * @return HistoricalVWAPs
	 */
	public function setGetHistoricalWeeklyVWAPResult($_GetHistoricalWeeklyVWAPResult)
	{
		return ($this->GetHistoricalWeeklyVWAPResult = $_GetHistoricalWeeklyVWAPResult);
	}
	/**
	 * Get GetHistoricalWeeklyVWAPResult
	 * @return XiVWAPTypeHistoricalVWAPs
	 */
	public function getGetHistoricalWeeklyVWAPResult()
	{
		return $this->GetHistoricalWeeklyVWAPResult;
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