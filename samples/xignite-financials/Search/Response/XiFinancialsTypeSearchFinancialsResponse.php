<?php
/**
 * Class file for XiFinancialsTypeSearchFinancialsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeSearchFinancialsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeSearchFinancialsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The SearchFinancialsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfDescription
	 */
	public $SearchFinancialsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfDescription SearchFinancialsResult
	 * @return XiFinancialsTypeSearchFinancialsResponse
	 */
	public function __construct($_SearchFinancialsResult = null)
	{
		parent::__construct(array('SearchFinancialsResult'=>new XiFinancialsTypeArrayOfDescription($_SearchFinancialsResult)));
	}
	/**
	 * Set SearchFinancialsResult
	 * @param ArrayOfDescription SearchFinancialsResult
	 * @return ArrayOfDescription
	 */
	public function setSearchFinancialsResult($_SearchFinancialsResult)
	{
		return ($this->SearchFinancialsResult = $_SearchFinancialsResult);
	}
	/**
	 * Get SearchFinancialsResult
	 * @return XiFinancialsTypeArrayOfDescription
	 */
	public function getSearchFinancialsResult()
	{
		return $this->SearchFinancialsResult;
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