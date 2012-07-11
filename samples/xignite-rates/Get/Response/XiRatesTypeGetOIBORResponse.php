<?php
/**
 * Class file for XiRatesTypeGetOIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetOIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetOIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetOIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeOIBORRate
	 */
	public $GetOIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeOIBORRate GetOIBORResult
	 * @return XiRatesTypeGetOIBORResponse
	 */
	public function __construct($_GetOIBORResult = null)
	{
		parent::__construct(array('GetOIBORResult'=>$_GetOIBORResult));
	}
	/**
	 * Set GetOIBORResult
	 * @param OIBORRate GetOIBORResult
	 * @return OIBORRate
	 */
	public function setGetOIBORResult($_GetOIBORResult)
	{
		return ($this->GetOIBORResult = $_GetOIBORResult);
	}
	/**
	 * Get GetOIBORResult
	 * @return XiRatesTypeOIBORRate
	 */
	public function getGetOIBORResult()
	{
		return $this->GetOIBORResult;
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