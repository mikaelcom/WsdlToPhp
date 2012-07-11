<?php
/**
 * Class file for XiInterBanksTypeGetHistoricalLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetHistoricalLIBORResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetHistoricalLIBORResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetHistoricalLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeHistoricalLIBORRates
	 */
	public $GetHistoricalLIBORResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeHistoricalLIBORRates GetHistoricalLIBORResult
	 * @return XiInterBanksTypeGetHistoricalLIBORResponse
	 */
	public function __construct($_GetHistoricalLIBORResult = null)
	{
		parent::__construct(array('GetHistoricalLIBORResult'=>$_GetHistoricalLIBORResult));
	}
	/**
	 * Set GetHistoricalLIBORResult
	 * @param HistoricalLIBORRates GetHistoricalLIBORResult
	 * @return HistoricalLIBORRates
	 */
	public function setGetHistoricalLIBORResult($_GetHistoricalLIBORResult)
	{
		return ($this->GetHistoricalLIBORResult = $_GetHistoricalLIBORResult);
	}
	/**
	 * Get GetHistoricalLIBORResult
	 * @return XiInterBanksTypeHistoricalLIBORRates
	 */
	public function getGetHistoricalLIBORResult()
	{
		return $this->GetHistoricalLIBORResult;
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