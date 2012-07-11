<?php
/**
 * Class file for SPWebsTypeGetAllSubWebCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetAllSubWebCollectionResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetAllSubWebCollectionResponse extends SPWebsWsdlClass
{
	/**
	 * The GetAllSubWebCollectionResult
	 * @var SPWebsTypeGetAllSubWebCollectionResult
	 */
	public $GetAllSubWebCollectionResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetAllSubWebCollectionResult GetAllSubWebCollectionResult
	 * @return SPWebsTypeGetAllSubWebCollectionResponse
	 */
	public function __construct($_GetAllSubWebCollectionResult = null)
	{
		parent::__construct(array('GetAllSubWebCollectionResult'=>$_GetAllSubWebCollectionResult));
	}
	/**
	 * Set GetAllSubWebCollectionResult
	 * @param GetAllSubWebCollectionResult GetAllSubWebCollectionResult
	 * @return GetAllSubWebCollectionResult
	 */
	public function setGetAllSubWebCollectionResult($_GetAllSubWebCollectionResult)
	{
		return ($this->GetAllSubWebCollectionResult = $_GetAllSubWebCollectionResult);
	}
	/**
	 * Get GetAllSubWebCollectionResult
	 * @return SPWebsTypeGetAllSubWebCollectionResult
	 */
	public function getGetAllSubWebCollectionResult()
	{
		return $this->GetAllSubWebCollectionResult;
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