<?php
/**
 * Class file for XiFundDataTypeSearchFundReportsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeSearchFundReportsResponse
 * @date 08/07/2012
 */
class XiFundDataTypeSearchFundReportsResponse extends XiFundDataWsdlClass
{
	/**
	 * The SearchFundReportsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfQueryResult
	 */
	public $SearchFundReportsResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeArrayOfQueryResult SearchFundReportsResult
	 * @return XiFundDataTypeSearchFundReportsResponse
	 */
	public function __construct($_SearchFundReportsResult = null)
	{
		parent::__construct(array('SearchFundReportsResult'=>new XiFundDataTypeArrayOfQueryResult($_SearchFundReportsResult)));
	}
	/**
	 * Set SearchFundReportsResult
	 * @param ArrayOfQueryResult SearchFundReportsResult
	 * @return ArrayOfQueryResult
	 */
	public function setSearchFundReportsResult($_SearchFundReportsResult)
	{
		return ($this->SearchFundReportsResult = $_SearchFundReportsResult);
	}
	/**
	 * Get SearchFundReportsResult
	 * @return XiFundDataTypeArrayOfQueryResult
	 */
	public function getSearchFundReportsResult()
	{
		return $this->SearchFundReportsResult;
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