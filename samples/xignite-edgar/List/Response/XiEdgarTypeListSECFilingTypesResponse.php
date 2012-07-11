<?php
/**
 * Class file for XiEdgarTypeListSECFilingTypesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeListSECFilingTypesResponse
 * @date 08/07/2012
 */
class XiEdgarTypeListSECFilingTypesResponse extends XiEdgarWsdlClass
{
	/**
	 * The ListSECFilingTypesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfSubmission
	 */
	public $ListSECFilingTypesResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeArrayOfSubmission ListSECFilingTypesResult
	 * @return XiEdgarTypeListSECFilingTypesResponse
	 */
	public function __construct($_ListSECFilingTypesResult = null)
	{
		parent::__construct(array('ListSECFilingTypesResult'=>new XiEdgarTypeArrayOfSubmission($_ListSECFilingTypesResult)));
	}
	/**
	 * Set ListSECFilingTypesResult
	 * @param ArrayOfSubmission ListSECFilingTypesResult
	 * @return ArrayOfSubmission
	 */
	public function setListSECFilingTypesResult($_ListSECFilingTypesResult)
	{
		return ($this->ListSECFilingTypesResult = $_ListSECFilingTypesResult);
	}
	/**
	 * Get ListSECFilingTypesResult
	 * @return XiEdgarTypeArrayOfSubmission
	 */
	public function getListSECFilingTypesResult()
	{
		return $this->ListSECFilingTypesResult;
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