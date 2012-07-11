<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleByIdentifierResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleByIdentifierResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleByIdentifierResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSaleByIdentifierResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public $GetLastSaleByIdentifierResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeLastSaleQuote GetLastSaleByIdentifierResult
	 * @return XiNASDAQLastSaleTypeGetLastSaleByIdentifierResponse
	 */
	public function __construct($_GetLastSaleByIdentifierResult = null)
	{
		parent::__construct(array('GetLastSaleByIdentifierResult'=>$_GetLastSaleByIdentifierResult));
	}
	/**
	 * Set GetLastSaleByIdentifierResult
	 * @param LastSaleQuote GetLastSaleByIdentifierResult
	 * @return LastSaleQuote
	 */
	public function setGetLastSaleByIdentifierResult($_GetLastSaleByIdentifierResult)
	{
		return ($this->GetLastSaleByIdentifierResult = $_GetLastSaleByIdentifierResult);
	}
	/**
	 * Get GetLastSaleByIdentifierResult
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function getGetLastSaleByIdentifierResult()
	{
		return $this->GetLastSaleByIdentifierResult;
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