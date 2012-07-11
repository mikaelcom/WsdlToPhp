<?php
/**
 * Class file for XiBATSLastSaleTypeGetLastSaleByIdentifiersResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeGetLastSaleByIdentifiersResponse
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeGetLastSaleByIdentifiersResponse extends XiBATSLastSaleWsdlClass
{
	/**
	 * The GetLastSaleByIdentifiersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSLastSaleTypeArrayOfLastSaleQuote
	 */
	public $GetLastSaleByIdentifiersResult;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeArrayOfLastSaleQuote GetLastSaleByIdentifiersResult
	 * @return XiBATSLastSaleTypeGetLastSaleByIdentifiersResponse
	 */
	public function __construct($_GetLastSaleByIdentifiersResult = null)
	{
		parent::__construct(array('GetLastSaleByIdentifiersResult'=>new XiBATSLastSaleTypeArrayOfLastSaleQuote($_GetLastSaleByIdentifiersResult)));
	}
	/**
	 * Set GetLastSaleByIdentifiersResult
	 * @param ArrayOfLastSaleQuote GetLastSaleByIdentifiersResult
	 * @return ArrayOfLastSaleQuote
	 */
	public function setGetLastSaleByIdentifiersResult($_GetLastSaleByIdentifiersResult)
	{
		return ($this->GetLastSaleByIdentifiersResult = $_GetLastSaleByIdentifiersResult);
	}
	/**
	 * Get GetLastSaleByIdentifiersResult
	 * @return XiBATSLastSaleTypeArrayOfLastSaleQuote
	 */
	public function getGetLastSaleByIdentifiersResult()
	{
		return $this->GetLastSaleByIdentifiersResult;
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