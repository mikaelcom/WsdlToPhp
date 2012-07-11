<?php
/**
 * Class file for XiEnergyTypeGetFutureOptionsByStrikePriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetFutureOptionsByStrikePriceResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetFutureOptionsByStrikePriceResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetFutureOptionsByStrikePriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureOption
	 */
	public $GetFutureOptionsByStrikePriceResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureOption GetFutureOptionsByStrikePriceResult
	 * @return XiEnergyTypeGetFutureOptionsByStrikePriceResponse
	 */
	public function __construct($_GetFutureOptionsByStrikePriceResult = null)
	{
		parent::__construct(array('GetFutureOptionsByStrikePriceResult'=>new XiEnergyTypeArrayOfFutureOption($_GetFutureOptionsByStrikePriceResult)));
	}
	/**
	 * Set GetFutureOptionsByStrikePriceResult
	 * @param ArrayOfFutureOption GetFutureOptionsByStrikePriceResult
	 * @return ArrayOfFutureOption
	 */
	public function setGetFutureOptionsByStrikePriceResult($_GetFutureOptionsByStrikePriceResult)
	{
		return ($this->GetFutureOptionsByStrikePriceResult = $_GetFutureOptionsByStrikePriceResult);
	}
	/**
	 * Get GetFutureOptionsByStrikePriceResult
	 * @return XiEnergyTypeArrayOfFutureOption
	 */
	public function getGetFutureOptionsByStrikePriceResult()
	{
		return $this->GetFutureOptionsByStrikePriceResult;
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