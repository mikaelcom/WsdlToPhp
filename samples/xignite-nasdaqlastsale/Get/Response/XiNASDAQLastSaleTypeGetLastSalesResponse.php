<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSalesResponse
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSalesResponse
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSalesResponse extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The GetLastSalesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeArrayOfLastSaleQuote
	 */
	public $GetLastSalesResult;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeArrayOfLastSaleQuote GetLastSalesResult
	 * @return XiNASDAQLastSaleTypeGetLastSalesResponse
	 */
	public function __construct($_GetLastSalesResult = null)
	{
		parent::__construct(array('GetLastSalesResult'=>new XiNASDAQLastSaleTypeArrayOfLastSaleQuote($_GetLastSalesResult)));
	}
	/**
	 * Set GetLastSalesResult
	 * @param ArrayOfLastSaleQuote GetLastSalesResult
	 * @return ArrayOfLastSaleQuote
	 */
	public function setGetLastSalesResult($_GetLastSalesResult)
	{
		return ($this->GetLastSalesResult = $_GetLastSalesResult);
	}
	/**
	 * Get GetLastSalesResult
	 * @return XiNASDAQLastSaleTypeArrayOfLastSaleQuote
	 */
	public function getGetLastSalesResult()
	{
		return $this->GetLastSalesResult;
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