<?php
/**
 * Class file for XiGlobalmasterTypeListMICToLegacyExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListMICToLegacyExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListMICToLegacyExchangeResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The ListMICToLegacyExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfLegacyExchangeMapping
	 */
	public $ListMICToLegacyExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfLegacyExchangeMapping ListMICToLegacyExchangeResult
	 * @return XiGlobalmasterTypeListMICToLegacyExchangeResponse
	 */
	public function __construct($_ListMICToLegacyExchangeResult = null)
	{
		parent::__construct(array('ListMICToLegacyExchangeResult'=>new XiGlobalmasterTypeArrayOfLegacyExchangeMapping($_ListMICToLegacyExchangeResult)));
	}
	/**
	 * Set ListMICToLegacyExchangeResult
	 * @param ArrayOfLegacyExchangeMapping ListMICToLegacyExchangeResult
	 * @return ArrayOfLegacyExchangeMapping
	 */
	public function setListMICToLegacyExchangeResult($_ListMICToLegacyExchangeResult)
	{
		return ($this->ListMICToLegacyExchangeResult = $_ListMICToLegacyExchangeResult);
	}
	/**
	 * Get ListMICToLegacyExchangeResult
	 * @return XiGlobalmasterTypeArrayOfLegacyExchangeMapping
	 */
	public function getListMICToLegacyExchangeResult()
	{
		return $this->ListMICToLegacyExchangeResult;
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