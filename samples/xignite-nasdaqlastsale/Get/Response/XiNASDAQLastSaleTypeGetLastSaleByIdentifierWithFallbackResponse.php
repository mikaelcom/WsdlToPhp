<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallbackResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallbackResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallbackResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleByIdentifierWithFallbackResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public $GetLastSaleByIdentifierWithFallbackResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeLastSaleQuote GetLastSaleByIdentifierWithFallbackResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallbackResponse
	 */
	public function __construct($_GetLastSaleByIdentifierWithFallbackResult = null)
	{
		parent::__construct(array('GetLastSaleByIdentifierWithFallbackResult'=>$_GetLastSaleByIdentifierWithFallbackResult));
	}
	/**
	 * Set GetLastSaleByIdentifierWithFallbackResult
	 * @param LastSaleQuote GetLastSaleByIdentifierWithFallbackResult
	 * @return LastSaleQuote
	 */
	public function setGetLastSaleByIdentifierWithFallbackResult($_GetLastSaleByIdentifierWithFallbackResult)
	{
		return ($this->GetLastSaleByIdentifierWithFallbackResult = $_GetLastSaleByIdentifierWithFallbackResult);
	}
	/**
	 * Get GetLastSaleByIdentifierWithFallbackResult
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function getGetLastSaleByIdentifierWithFallbackResult()
	{
		return $this->GetLastSaleByIdentifierWithFallbackResult;
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