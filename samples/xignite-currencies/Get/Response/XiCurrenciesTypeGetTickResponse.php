<?php
/**
 * Class file for XiCurrenciesTypeGetTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetTickResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetTickResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeSingleTick
	 */
	public $GetTickResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeSingleTick GetTickResult
	 * @return XiCurrenciesTypeGetTickResponse
	 */
	public function __construct($_GetTickResult = null)
	{
		parent::__construct(array('GetTickResult'=>$_GetTickResult));
	}
	/**
	 * Set GetTickResult
	 * @param SingleTick GetTickResult
	 * @return SingleTick
	 */
	public function setGetTickResult($_GetTickResult)
	{
		return ($this->GetTickResult = $_GetTickResult);
	}
	/**
	 * Get GetTickResult
	 * @return XiCurrenciesTypeSingleTick
	 */
	public function getGetTickResult()
	{
		return $this->GetTickResult;
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