<?php
/**
 * Class file for XiBondsRealTimeTypeGetLastSaleResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetLastSaleResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetLastSaleResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetLastSaleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeLastSale
	 */
	public $GetLastSaleResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeLastSale GetLastSaleResult
	 * @return XiBondsRealTimeTypeGetLastSaleResponse
	 */
	public function __construct($_GetLastSaleResult = null)
	{
		parent::__construct(array('GetLastSaleResult'=>$_GetLastSaleResult));
	}
	/**
	 * Set GetLastSaleResult
	 * @param LastSale GetLastSaleResult
	 * @return LastSale
	 */
	public function setGetLastSaleResult($_GetLastSaleResult)
	{
		return ($this->GetLastSaleResult = $_GetLastSaleResult);
	}
	/**
	 * Get GetLastSaleResult
	 * @return XiBondsRealTimeTypeLastSale
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