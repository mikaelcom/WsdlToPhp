<?php
/**
 * Class file for XiRatesTypeGetCIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetCIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetCIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetCIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeCIBORRate
	 */
	public $GetCIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeCIBORRate GetCIBORResult
	 * @return XiRatesTypeGetCIBORResponse
	 */
	public function __construct($_GetCIBORResult = null)
	{
		parent::__construct(array('GetCIBORResult'=>$_GetCIBORResult));
	}
	/**
	 * Set GetCIBORResult
	 * @param CIBORRate GetCIBORResult
	 * @return CIBORRate
	 */
	public function setGetCIBORResult($_GetCIBORResult)
	{
		return ($this->GetCIBORResult = $_GetCIBORResult);
	}
	/**
	 * Get GetCIBORResult
	 * @return XiRatesTypeCIBORRate
	 */
	public function getGetCIBORResult()
	{
		return $this->GetCIBORResult;
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