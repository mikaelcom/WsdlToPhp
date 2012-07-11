<?php
/**
 * Class file for XiSecurityTypeGetCUSIPFundResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetCUSIPFundResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetCUSIPFundResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetCUSIPFundResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeCusip
	 */
	public $GetCUSIPFundResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeCusip GetCUSIPFundResult
	 * @return XiSecurityTypeGetCUSIPFundResponse
	 */
	public function __construct($_GetCUSIPFundResult = null)
	{
		parent::__construct(array('GetCUSIPFundResult'=>$_GetCUSIPFundResult));
	}
	/**
	 * Set GetCUSIPFundResult
	 * @param Cusip GetCUSIPFundResult
	 * @return Cusip
	 */
	public function setGetCUSIPFundResult($_GetCUSIPFundResult)
	{
		return ($this->GetCUSIPFundResult = $_GetCUSIPFundResult);
	}
	/**
	 * Get GetCUSIPFundResult
	 * @return XiSecurityTypeCusip
	 */
	public function getGetCUSIPFundResult()
	{
		return $this->GetCUSIPFundResult;
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