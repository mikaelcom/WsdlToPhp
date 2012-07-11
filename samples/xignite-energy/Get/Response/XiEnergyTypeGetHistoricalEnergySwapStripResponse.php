<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergySwapStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergySwapStripResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergySwapStripResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergySwapStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeStrip
	 */
	public $GetHistoricalEnergySwapStripResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeStrip GetHistoricalEnergySwapStripResult
	 * @return XiEnergyTypeGetHistoricalEnergySwapStripResponse
	 */
	public function __construct($_GetHistoricalEnergySwapStripResult = null)
	{
		parent::__construct(array('GetHistoricalEnergySwapStripResult'=>$_GetHistoricalEnergySwapStripResult));
	}
	/**
	 * Set GetHistoricalEnergySwapStripResult
	 * @param Strip GetHistoricalEnergySwapStripResult
	 * @return Strip
	 */
	public function setGetHistoricalEnergySwapStripResult($_GetHistoricalEnergySwapStripResult)
	{
		return ($this->GetHistoricalEnergySwapStripResult = $_GetHistoricalEnergySwapStripResult);
	}
	/**
	 * Get GetHistoricalEnergySwapStripResult
	 * @return XiEnergyTypeStrip
	 */
	public function getGetHistoricalEnergySwapStripResult()
	{
		return $this->GetHistoricalEnergySwapStripResult;
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