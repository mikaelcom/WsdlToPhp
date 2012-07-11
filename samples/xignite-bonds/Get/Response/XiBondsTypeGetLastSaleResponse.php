<?php
/**
 * Class file for XiBondsTypeGetLastSaleResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetLastSaleResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetLastSaleResponse extends XiBondsWsdlClass
{
	/**
	 * The GetLastSaleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeLastSale
	 */
	public $GetLastSaleResult;
	/**
	 * Constructor
	 * @param XiBondsTypeLastSale GetLastSaleResult
	 * @return XiBondsTypeGetLastSaleResponse
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
	 * @return XiBondsTypeLastSale
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