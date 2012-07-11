<?php
/**
 * Class file for XiGlobalmasterTypeListMICToLegacySuffixResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListMICToLegacySuffixResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListMICToLegacySuffixResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The ListMICToLegacySuffixResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfLegacyExchangeMapping
	 */
	public $ListMICToLegacySuffixResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfLegacyExchangeMapping ListMICToLegacySuffixResult
	 * @return XiGlobalmasterTypeListMICToLegacySuffixResponse
	 */
	public function __construct($_ListMICToLegacySuffixResult = null)
	{
		parent::__construct(array('ListMICToLegacySuffixResult'=>new XiGlobalmasterTypeArrayOfLegacyExchangeMapping($_ListMICToLegacySuffixResult)));
	}
	/**
	 * Set ListMICToLegacySuffixResult
	 * @param ArrayOfLegacyExchangeMapping ListMICToLegacySuffixResult
	 * @return ArrayOfLegacyExchangeMapping
	 */
	public function setListMICToLegacySuffixResult($_ListMICToLegacySuffixResult)
	{
		return ($this->ListMICToLegacySuffixResult = $_ListMICToLegacySuffixResult);
	}
	/**
	 * Get ListMICToLegacySuffixResult
	 * @return XiGlobalmasterTypeArrayOfLegacyExchangeMapping
	 */
	public function getListMICToLegacySuffixResult()
	{
		return $this->ListMICToLegacySuffixResult;
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