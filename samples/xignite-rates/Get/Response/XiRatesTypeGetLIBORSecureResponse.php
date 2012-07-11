<?php
/**
 * Class file for XiRatesTypeGetLIBORSecureResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLIBORSecureResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetLIBORSecureResponse extends XiRatesWsdlClass
{
	/**
	 * The GetLIBORSecureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORRate
	 */
	public $GetLIBORSecureResult;
	/**
	 * Constructor
	 * @param XiRatesTypeLIBORRate GetLIBORSecureResult
	 * @return XiRatesTypeGetLIBORSecureResponse
	 */
	public function __construct($_GetLIBORSecureResult = null)
	{
		parent::__construct(array('GetLIBORSecureResult'=>$_GetLIBORSecureResult));
	}
	/**
	 * Set GetLIBORSecureResult
	 * @param LIBORRate GetLIBORSecureResult
	 * @return LIBORRate
	 */
	public function setGetLIBORSecureResult($_GetLIBORSecureResult)
	{
		return ($this->GetLIBORSecureResult = $_GetLIBORSecureResult);
	}
	/**
	 * Get GetLIBORSecureResult
	 * @return XiRatesTypeLIBORRate
	 */
	public function getGetLIBORSecureResult()
	{
		return $this->GetLIBORSecureResult;
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