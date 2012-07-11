<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSalesWithFallbackResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSalesWithFallbackResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSalesWithFallbackResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSalesWithFallbackResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeArrayOfLastSaleQuote
	 */
	public $GetLastSalesWithFallbackResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeArrayOfLastSaleQuote GetLastSalesWithFallbackResult
	 * @return XiNASDAQLastSaleTypeGetLastSalesWithFallbackResponse
	 */
	public function __construct($_GetLastSalesWithFallbackResult = null)
	{
		parent::__construct(array('GetLastSalesWithFallbackResult'=>new XiNASDAQLastSaleTypeArrayOfLastSaleQuote($_GetLastSalesWithFallbackResult)));
	}
	/**
	 * Set GetLastSalesWithFallbackResult
	 * @param ArrayOfLastSaleQuote GetLastSalesWithFallbackResult
	 * @return ArrayOfLastSaleQuote
	 */
	public function setGetLastSalesWithFallbackResult($_GetLastSalesWithFallbackResult)
	{
		return ($this->GetLastSalesWithFallbackResult = $_GetLastSalesWithFallbackResult);
	}
	/**
	 * Get GetLastSalesWithFallbackResult
	 * @return XiNASDAQLastSaleTypeArrayOfLastSaleQuote
	 */
	public function getGetLastSalesWithFallbackResult()
	{
		return $this->GetLastSalesWithFallbackResult;
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