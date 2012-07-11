<?php
/**
 * Class file for XiAnalystsTypeListResearchFieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeListResearchFieldsResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeListResearchFieldsResponse extends XiAnalystsWsdlClass
{
	/**
	 * The ListResearchFieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public $ListResearchFieldsResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeArrayOfAnalystsResearchField ListResearchFieldsResult
	 * @return XiAnalystsTypeListResearchFieldsResponse
	 */
	public function __construct($_ListResearchFieldsResult = null)
	{
		parent::__construct(array('ListResearchFieldsResult'=>new XiAnalystsTypeArrayOfAnalystsResearchField($_ListResearchFieldsResult)));
	}
	/**
	 * Set ListResearchFieldsResult
	 * @param ArrayOfAnalystsResearchField ListResearchFieldsResult
	 * @return ArrayOfAnalystsResearchField
	 */
	public function setListResearchFieldsResult($_ListResearchFieldsResult)
	{
		return ($this->ListResearchFieldsResult = $_ListResearchFieldsResult);
	}
	/**
	 * Get ListResearchFieldsResult
	 * @return XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public function getListResearchFieldsResult()
	{
		return $this->ListResearchFieldsResult;
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