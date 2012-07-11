<?php
/**
 * Class file for XiVWAPTypeGetHistoricalMonthlyVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalMonthlyVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalMonthlyVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetHistoricalMonthlyVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPs
	 */
	public $GetHistoricalMonthlyVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeHistoricalVWAPs GetHistoricalMonthlyVWAPResult
	 * @return XiVWAPTypeGetHistoricalMonthlyVWAPResponse
	 */
	public function __construct($_GetHistoricalMonthlyVWAPResult = null)
	{
		parent::__construct(array('GetHistoricalMonthlyVWAPResult'=>$_GetHistoricalMonthlyVWAPResult));
	}
	/**
	 * Set GetHistoricalMonthlyVWAPResult
	 * @param HistoricalVWAPs GetHistoricalMonthlyVWAPResult
	 * @return HistoricalVWAPs
	 */
	public function setGetHistoricalMonthlyVWAPResult($_GetHistoricalMonthlyVWAPResult)
	{
		return ($this->GetHistoricalMonthlyVWAPResult = $_GetHistoricalMonthlyVWAPResult);
	}
	/**
	 * Get GetHistoricalMonthlyVWAPResult
	 * @return XiVWAPTypeHistoricalVWAPs
	 */
	public function getGetHistoricalMonthlyVWAPResult()
	{
		return $this->GetHistoricalMonthlyVWAPResult;
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