<?php
/**
 * Class file for XiRatesTypeGetEURIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetEURIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetEURIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetEURIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeEURIBORRate
	 */
	public $GetEURIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeEURIBORRate GetEURIBORResult
	 * @return XiRatesTypeGetEURIBORResponse
	 */
	public function __construct($_GetEURIBORResult = null)
	{
		parent::__construct(array('GetEURIBORResult'=>$_GetEURIBORResult));
	}
	/**
	 * Set GetEURIBORResult
	 * @param EURIBORRate GetEURIBORResult
	 * @return EURIBORRate
	 */
	public function setGetEURIBORResult($_GetEURIBORResult)
	{
		return ($this->GetEURIBORResult = $_GetEURIBORResult);
	}
	/**
	 * Get GetEURIBORResult
	 * @return XiRatesTypeEURIBORRate
	 */
	public function getGetEURIBORResult()
	{
		return $this->GetEURIBORResult;
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