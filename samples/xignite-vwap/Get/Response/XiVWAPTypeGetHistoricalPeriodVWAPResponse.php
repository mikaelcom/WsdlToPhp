<?php
/**
 * Class file for XiVWAPTypeGetHistoricalPeriodVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetHistoricalPeriodVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetHistoricalPeriodVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetHistoricalPeriodVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeHistoricalVWAPs
	 */
	public $GetHistoricalPeriodVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeHistoricalVWAPs GetHistoricalPeriodVWAPResult
	 * @return XiVWAPTypeGetHistoricalPeriodVWAPResponse
	 */
	public function __construct($_GetHistoricalPeriodVWAPResult = null)
	{
		parent::__construct(array('GetHistoricalPeriodVWAPResult'=>$_GetHistoricalPeriodVWAPResult));
	}
	/**
	 * Set GetHistoricalPeriodVWAPResult
	 * @param HistoricalVWAPs GetHistoricalPeriodVWAPResult
	 * @return HistoricalVWAPs
	 */
	public function setGetHistoricalPeriodVWAPResult($_GetHistoricalPeriodVWAPResult)
	{
		return ($this->GetHistoricalPeriodVWAPResult = $_GetHistoricalPeriodVWAPResult);
	}
	/**
	 * Get GetHistoricalPeriodVWAPResult
	 * @return XiVWAPTypeHistoricalVWAPs
	 */
	public function getGetHistoricalPeriodVWAPResult()
	{
		return $this->GetHistoricalPeriodVWAPResult;
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