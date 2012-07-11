<?php
/**
 * Class file for XiEstimatesTypeListResearchFieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeListResearchFieldsResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeListResearchFieldsResponse extends XiEstimatesWsdlClass
{
	/**
	 * The ListResearchFieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public $ListResearchFieldsResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeArrayOfEstimatesResearchField ListResearchFieldsResult
	 * @return XiEstimatesTypeListResearchFieldsResponse
	 */
	public function __construct($_ListResearchFieldsResult = null)
	{
		parent::__construct(array('ListResearchFieldsResult'=>new XiEstimatesTypeArrayOfEstimatesResearchField($_ListResearchFieldsResult)));
	}
	/**
	 * Set ListResearchFieldsResult
	 * @param ArrayOfEstimatesResearchField ListResearchFieldsResult
	 * @return ArrayOfEstimatesResearchField
	 */
	public function setListResearchFieldsResult($_ListResearchFieldsResult)
	{
		return ($this->ListResearchFieldsResult = $_ListResearchFieldsResult);
	}
	/**
	 * Get ListResearchFieldsResult
	 * @return XiEstimatesTypeArrayOfEstimatesResearchField
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