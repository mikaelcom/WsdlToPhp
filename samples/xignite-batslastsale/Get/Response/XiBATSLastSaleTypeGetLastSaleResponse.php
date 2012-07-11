<?php
/**
 * Class file for XiBATSLastSaleTypeGetLastSaleResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeGetLastSaleResponse
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeGetLastSaleResponse extends XiBATSLastSaleWsdlClass
{
	/**
	 * The GetLastSaleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSLastSaleTypeLastSaleQuote
	 */
	public $GetLastSaleResult;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeLastSaleQuote GetLastSaleResult
	 * @return XiBATSLastSaleTypeGetLastSaleResponse
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
	 * @return XiBATSLastSaleTypeLastSaleQuote
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