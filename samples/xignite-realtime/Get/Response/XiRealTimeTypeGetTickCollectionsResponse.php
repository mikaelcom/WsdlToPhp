<?php
/**
 * Class file for XiRealTimeTypeGetTickCollectionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetTickCollectionsResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetTickCollectionsResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetTickCollectionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfTicks
	 */
	public $GetTickCollectionsResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeArrayOfTicks GetTickCollectionsResult
	 * @return XiRealTimeTypeGetTickCollectionsResponse
	 */
	public function __construct($_GetTickCollectionsResult = null)
	{
		parent::__construct(array('GetTickCollectionsResult'=>new XiRealTimeTypeArrayOfTicks($_GetTickCollectionsResult)));
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
	 * @return XiRealTimeTypeArrayOfTicks
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