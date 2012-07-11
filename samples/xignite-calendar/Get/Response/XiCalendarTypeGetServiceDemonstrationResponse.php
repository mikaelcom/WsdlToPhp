<?php
/**
 * Class file for XiCalendarTypeGetServiceDemonstrationResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetServiceDemonstrationResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetServiceDemonstrationResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetServiceDemonstrationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeDocumentationResult
	 */
	public $GetServiceDemonstrationResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeDocumentationResult GetServiceDemonstrationResult
	 * @return XiCalendarTypeGetServiceDemonstrationResponse
	 */
	public function __construct($_GetServiceDemonstrationResult = null)
	{
		parent::__construct(array('GetServiceDemonstrationResult'=>$_GetServiceDemonstrationResult));
	}
	/**
	 * Set GetServiceDemonstrationResult
	 * @param DocumentationResult GetServiceDemonstrationResult
	 * @return DocumentationResult
	 */
	public function setGetServiceDemonstrationResult($_GetServiceDemonstrationResult)
	{
		return ($this->GetServiceDemonstrationResult = $_GetServiceDemonstrationResult);
	}
	/**
	 * Get GetServiceDemonstrationResult
	 * @return XiCalendarTypeDocumentationResult
	 */
	public function getGetServiceDemonstrationResult()
	{
		return $this->GetServiceDemonstrationResult;
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