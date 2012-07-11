<?php
/**
 * Class file for XiBondsTypeGetLastSalesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetLastSalesResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetLastSalesResponse extends XiBondsWsdlClass
{
	/**
	 * The GetLastSalesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfLastSale
	 */
	public $GetLastSalesResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfLastSale GetLastSalesResult
	 * @return XiBondsTypeGetLastSalesResponse
	 */
	public function __construct($_GetLastSalesResult = null)
	{
		parent::__construct(array('GetLastSalesResult'=>new XiBondsTypeArrayOfLastSale($_GetLastSalesResult)));
	}
	/**
	 * Set GetLastSalesResult
	 * @param ArrayOfLastSale GetLastSalesResult
	 * @return ArrayOfLastSale
	 */
	public function setGetLastSalesResult($_GetLastSalesResult)
	{
		return ($this->GetLastSalesResult = $_GetLastSalesResult);
	}
	/**
	 * Get GetLastSalesResult
	 * @return XiBondsTypeArrayOfLastSale
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