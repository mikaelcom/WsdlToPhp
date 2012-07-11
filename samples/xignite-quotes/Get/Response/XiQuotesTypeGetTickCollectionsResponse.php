<?php
/**
 * Class file for XiQuotesTypeGetTickCollectionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTickCollectionsResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTickCollectionsResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTickCollectionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfTicks
	 */
	public $GetTickCollectionsResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfTicks GetTickCollectionsResult
	 * @return XiQuotesTypeGetTickCollectionsResponse
	 */
	public function __construct($_GetTickCollectionsResult = null)
	{
		parent::__construct(array('GetTickCollectionsResult'=>new XiQuotesTypeArrayOfTicks($_GetTickCollectionsResult)));
	}
	/**
	 * Set GetTickCollectionsResult
	 * @param ArrayOfTicks GetTickCollectionsResult
	 * @return ArrayOfTicks
	 */
	public function setGetTickCollectionsResult($_GetTickCollectionsResult)
	{
		return ($this->GetTickCollectionsResult = $_GetTickCollectionsResult);
	}
	/**
	 * Get GetTickCollectionsResult
	 * @return XiQuotesTypeArrayOfTicks
	 */
	public function getGetTickCollectionsResult()
	{
		return $this->GetTickCollectionsResult;
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