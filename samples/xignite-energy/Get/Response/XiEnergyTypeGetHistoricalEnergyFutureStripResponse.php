<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureStripResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureStripResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeStrip
	 */
	public $GetHistoricalEnergyFutureStripResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeStrip GetHistoricalEnergyFutureStripResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureStripResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureStripResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureStripResult'=>$_GetHistoricalEnergyFutureStripResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureStripResult
	 * @param Strip GetHistoricalEnergyFutureStripResult
	 * @return Strip
	 */
	public function setGetHistoricalEnergyFutureStripResult($_GetHistoricalEnergyFutureStripResult)
	{
		return ($this->GetHistoricalEnergyFutureStripResult = $_GetHistoricalEnergyFutureStripResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureStripResult
	 * @return XiEnergyTypeStrip
	 */
	public function getGetHistoricalEnergyFutureStripResult()
	{
		return $this->GetHistoricalEnergyFutureStripResult;
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