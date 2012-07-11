<?php
/**
 * Class file for XiBondsRealTimeTypeGetLastSalesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetLastSalesResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetLastSalesResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetLastSalesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfLastSale
	 */
	public $GetLastSalesResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfLastSale GetLastSalesResult
	 * @return XiBondsRealTimeTypeGetLastSalesResponse
	 */
	public function __construct($_GetLastSalesResult = null)
	{
		parent::__construct(array('GetLastSalesResult'=>new XiBondsRealTimeTypeArrayOfLastSale($_GetLastSalesResult)));
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
	 * @return XiBondsRealTimeTypeArrayOfLastSale
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