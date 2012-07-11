<?php
/**
 * Class file for AmazonAlexaTypeResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeResponse
 * @date 10/07/2012
 */
class AmazonAlexaTypeResponse extends AmazonAlexaWsdlClass
{
	/**
	 * The OperationRequest
	 * @var AmazonAlexaTypeOperationRequest
	 */
	public $OperationRequest;
	/**
	 * The CategoryBrowseResult
	 * @var AmazonAlexaTypeCategoryBrowseResult
	 */
	public $CategoryBrowseResult;
	/**
	 * The ResponseStatus
	 * @var AmazonAlexaTypeResponseStatus
	 */
	public $ResponseStatus;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeOperationRequest OperationRequest
	 * @param AmazonAlexaTypeCategoryBrowseResult CategoryBrowseResult
	 * @param AmazonAlexaTypeResponseStatus ResponseStatus
	 * @return AmazonAlexaTypeResponse
	 */
	public function __construct($_OperationRequest = null,$_CategoryBrowseResult = null,$_ResponseStatus = null)
	{
		parent::__construct(array('OperationRequest'=>$_OperationRequest,'CategoryBrowseResult'=>$_CategoryBrowseResult,'ResponseStatus'=>$_ResponseStatus));
	}
	/**
	 * Set OperationRequest
	 * @param OperationRequest OperationRequest
	 * @return OperationRequest
	 */
	public function setOperationRequest($_OperationRequest)
	{
		return ($this->OperationRequest = $_OperationRequest);
	}
	/**
	 * Get OperationRequest
	 * @return AmazonAlexaTypeOperationRequest
	 */
	public function getOperationRequest()
	{
		return $this->OperationRequest;
	}
	/**
	 * Set CategoryBrowseResult
	 * @param CategoryBrowseResult CategoryBrowseResult
	 * @return CategoryBrowseResult
	 */
	public function setCategoryBrowseResult($_CategoryBrowseResult)
	{
		return ($this->CategoryBrowseResult = $_CategoryBrowseResult);
	}
	/**
	 * Get CategoryBrowseResult
	 * @return AmazonAlexaTypeCategoryBrowseResult
	 */
	public function getCategoryBrowseResult()
	{
		return $this->CategoryBrowseResult;
	}
	/**
	 * Set ResponseStatus
	 * @param ResponseStatus ResponseStatus
	 * @return ResponseStatus
	 */
	public function setResponseStatus($_ResponseStatus)
	{
		return ($this->ResponseStatus = $_ResponseStatus);
	}
	/**
	 * Get ResponseStatus
	 * @return AmazonAlexaTypeResponseStatus
	 */
	public function getResponseStatus()
	{
		return $this->ResponseStatus;
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