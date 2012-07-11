<?php
/**
 * Class file for XiEnergyTypeGetFutureOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetFutureOptionChainResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetFutureOptionChainResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetFutureOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureOption
	 */
	public $GetFutureOptionChainResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureOption GetFutureOptionChainResult
	 * @return XiEnergyTypeGetFutureOptionChainResponse
	 */
	public function __construct($_GetFutureOptionChainResult = null)
	{
		parent::__construct(array('GetFutureOptionChainResult'=>new XiEnergyTypeArrayOfFutureOption($_GetFutureOptionChainResult)));
	}
	/**
	 * Set GetFutureOptionChainResult
	 * @param ArrayOfFutureOption GetFutureOptionChainResult
	 * @return ArrayOfFutureOption
	 */
	public function setGetFutureOptionChainResult($_GetFutureOptionChainResult)
	{
		return ($this->GetFutureOptionChainResult = $_GetFutureOptionChainResult);
	}
	/**
	 * Get GetFutureOptionChainResult
	 * @return XiEnergyTypeArrayOfFutureOption
	 */
	public function getGetFutureOptionChainResult()
	{
		return $this->GetFutureOptionChainResult;
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