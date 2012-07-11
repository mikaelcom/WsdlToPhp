<?php
/**
 * Class file for XiRatesTypeGetHIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHIBORRate
	 */
	public $GetHIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHIBORRate GetHIBORResult
	 * @return XiRatesTypeGetHIBORResponse
	 */
	public function __construct($_GetHIBORResult = null)
	{
		parent::__construct(array('GetHIBORResult'=>$_GetHIBORResult));
	}
	/**
	 * Set GetHIBORResult
	 * @param HIBORRate GetHIBORResult
	 * @return HIBORRate
	 */
	public function setGetHIBORResult($_GetHIBORResult)
	{
		return ($this->GetHIBORResult = $_GetHIBORResult);
	}
	/**
	 * Get GetHIBORResult
	 * @return XiRatesTypeHIBORRate
	 */
	public function getGetHIBORResult()
	{
		return $this->GetHIBORResult;
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