<?php
/**
 * Class file for XiRatesTypeGetVILIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetVILIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetVILIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetVILIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeVILIBORRate
	 */
	public $GetVILIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeVILIBORRate GetVILIBORResult
	 * @return XiRatesTypeGetVILIBORResponse
	 */
	public function __construct($_GetVILIBORResult = null)
	{
		parent::__construct(array('GetVILIBORResult'=>$_GetVILIBORResult));
	}
	/**
	 * Set GetVILIBORResult
	 * @param VILIBORRate GetVILIBORResult
	 * @return VILIBORRate
	 */
	public function setGetVILIBORResult($_GetVILIBORResult)
	{
		return ($this->GetVILIBORResult = $_GetVILIBORResult);
	}
	/**
	 * Get GetVILIBORResult
	 * @return XiRatesTypeVILIBORRate
	 */
	public function getGetVILIBORResult()
	{
		return $this->GetVILIBORResult;
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