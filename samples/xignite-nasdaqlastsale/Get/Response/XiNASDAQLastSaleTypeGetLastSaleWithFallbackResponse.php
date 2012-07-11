<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleWithFallbackResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleWithFallbackResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleWithFallbackResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleWithFallbackResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public $GetLastSaleWithFallbackResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeLastSaleQuote GetLastSaleWithFallbackResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleWithFallbackResponse
	 */
	public function __construct($_GetLastSaleWithFallbackResult = null)
	{
		parent::__construct(array('GetLastSaleWithFallbackResult'=>$_GetLastSaleWithFallbackResult));
	}
	/**
	 * Set GetLastSaleWithFallbackResult
	 * @param LastSaleQuote GetLastSaleWithFallbackResult
	 * @return LastSaleQuote
	 */
	public function setGetLastSaleWithFallbackResult($_GetLastSaleWithFallbackResult)
	{
		return ($this->GetLastSaleWithFallbackResult = $_GetLastSaleWithFallbackResult);
	}
	/**
	 * Get GetLastSaleWithFallbackResult
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function getGetLastSaleWithFallbackResult()
	{
		return $this->GetLastSaleWithFallbackResult;
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