<?php
/**
 * Class file for XiBATSLastSaleTypeGetLastSaleByIdentifierResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeGetLastSaleByIdentifierResponse
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeGetLastSaleByIdentifierResponse extends XiBATSLastSaleWsdlClass
{
	/**
	 * The GetLastSaleByIdentifierResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSLastSaleTypeLastSaleQuote
	 */
	public $GetLastSaleByIdentifierResult;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeLastSaleQuote GetLastSaleByIdentifierResult
	 * @return XiBATSLastSaleTypeGetLastSaleByIdentifierResponse
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
	 * @return XiBATSLastSaleTypeLastSaleQuote
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