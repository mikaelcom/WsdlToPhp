<?php
/**
 * Class file for XiRatesTypeGetSTIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetSTIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetSTIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetSTIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSTIBORRate
	 */
	public $GetSTIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeSTIBORRate GetSTIBORResult
	 * @return XiRatesTypeGetSTIBORResponse
	 */
	public function __construct($_GetSTIBORResult = null)
	{
		parent::__construct(array('GetSTIBORResult'=>$_GetSTIBORResult));
	}
	/**
	 * Set GetSTIBORResult
	 * @param STIBORRate GetSTIBORResult
	 * @return STIBORRate
	 */
	public function setGetSTIBORResult($_GetSTIBORResult)
	{
		return ($this->GetSTIBORResult = $_GetSTIBORResult);
	}
	/**
	 * Get GetSTIBORResult
	 * @return XiRatesTypeSTIBORRate
	 */
	public function getGetSTIBORResult()
	{
		return $this->GetSTIBORResult;
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