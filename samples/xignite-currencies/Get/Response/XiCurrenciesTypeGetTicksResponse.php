<?php
/**
 * Class file for XiCurrenciesTypeGetTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetTicksResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetTicksResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeTicks
	 */
	public $GetTicksResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeTicks GetTicksResult
	 * @return XiCurrenciesTypeGetTicksResponse
	 */
	public function __construct($_GetTicksResult = null)
	{
		parent::__construct(array('GetTicksResult'=>$_GetTicksResult));
	}
	/**
	 * Set GetTicksResult
	 * @param Ticks GetTicksResult
	 * @return Ticks
	 */
	public function setGetTicksResult($_GetTicksResult)
	{
		return ($this->GetTicksResult = $_GetTicksResult);
	}
	/**
	 * Get GetTicksResult
	 * @return XiCurrenciesTypeTicks
	 */
	public function getGetTicksResult()
	{
		return $this->GetTicksResult;
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