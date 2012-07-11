<?php
/**
 * Class file for XiEnergyTypeGetFutureOptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetFutureOptionResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetFutureOptionResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetFutureOptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureOption
	 */
	public $GetFutureOptionResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureOption GetFutureOptionResult
	 * @return XiEnergyTypeGetFutureOptionResponse
	 */
	public function __construct($_GetFutureOptionResult = null)
	{
		parent::__construct(array('GetFutureOptionResult'=>$_GetFutureOptionResult));
	}
	/**
	 * Set GetFutureOptionResult
	 * @param FutureOption GetFutureOptionResult
	 * @return FutureOption
	 */
	public function setGetFutureOptionResult($_GetFutureOptionResult)
	{
		return ($this->GetFutureOptionResult = $_GetFutureOptionResult);
	}
	/**
	 * Get GetFutureOptionResult
	 * @return XiEnergyTypeFutureOption
	 */
	public function getGetFutureOptionResult()
	{
		return $this->GetFutureOptionResult;
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