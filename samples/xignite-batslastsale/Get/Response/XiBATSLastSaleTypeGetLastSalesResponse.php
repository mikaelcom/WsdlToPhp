<?php
/**
 * Class file for XiBATSLastSaleTypeGetLastSalesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeGetLastSalesResponse
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeGetLastSalesResponse extends XiBATSLastSaleWsdlClass
{
	/**
	 * The GetLastSalesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSLastSaleTypeArrayOfLastSaleQuote
	 */
	public $GetLastSalesResult;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeArrayOfLastSaleQuote GetLastSalesResult
	 * @return XiBATSLastSaleTypeGetLastSalesResponse
	 */
	public function __construct($_GetLastSalesResult = null)
	{
		parent::__construct(array('GetLastSalesResult'=>new XiBATSLastSaleTypeArrayOfLastSaleQuote($_GetLastSalesResult)));
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
	 * @return XiBATSLastSaleTypeArrayOfLastSaleQuote
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