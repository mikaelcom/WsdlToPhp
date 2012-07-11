<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public $GetLastSaleResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeLastSaleQuote GetLastSaleResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleResponse
	 */
	public function __construct($_GetLastSaleResult = null)
	{
		parent::__construct(array('GetLastSaleResult'=>$_GetLastSaleResult));
	}
	/**
	 * Set GetLastSaleResult
	 * @param LastSaleQuote GetLastSaleResult
	 * @return LastSaleQuote
	 */
	public function setGetLastSaleResult($_GetLastSaleResult)
	{
		return ($this->GetLastSaleResult = $_GetLastSaleResult);
	}
	/**
	 * Get GetLastSaleResult
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function getGetLastSaleResult()
	{
		return $this->GetLastSaleResult;
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