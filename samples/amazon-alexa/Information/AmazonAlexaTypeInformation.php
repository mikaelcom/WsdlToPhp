<?php
/**
 * Class file for AmazonAlexaTypeInformation
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeInformation
 * @date 10/07/2012
 */
class AmazonAlexaTypeInformation extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeRequest
	 */
	public $Request;
	/**
	 * The OperationInformation
	 * @var AmazonAlexaTypeOperationInformation
	 */
	public $OperationInformation;
	/**
	 * The ResponseGroupInformation
	 * @var AmazonAlexaTypeResponseGroupInformation
	 */
	public $ResponseGroupInformation;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeRequest Request
	 * @param AmazonAlexaTypeOperationInformation OperationInformation
	 * @param AmazonAlexaTypeResponseGroupInformation ResponseGroupInformation
	 * @return AmazonAlexaTypeInformation
	 */
	public function __construct($_Request = null,$_OperationInformation = null,$_ResponseGroupInformation = null)
	{
		parent::__construct(array('Request'=>$_Request,'OperationInformation'=>$_OperationInformation,'ResponseGroupInformation'=>$_ResponseGroupInformation));
	}
	/**
	 * Set Request
	 * @param Request Request
	 * @return Request
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeRequest
	 */
	public function getRequest()
	{
		return $this->Request;
	}
	/**
	 * Set OperationInformation
	 * @param OperationInformation OperationInformation
	 * @return OperationInformation
	 */
	public function setOperationInformation($_OperationInformation)
	{
		return ($this->OperationInformation = $_OperationInformation);
	}
	/**
	 * Get OperationInformation
	 * @return AmazonAlexaTypeOperationInformation
	 */
	public function getOperationInformation()
	{
		return $this->OperationInformation;
	}
	/**
	 * Set ResponseGroupInformation
	 * @param ResponseGroupInformation ResponseGroupInformation
	 * @return ResponseGroupInformation
	 */
	public function setResponseGroupInformation($_ResponseGroupInformation)
	{
		return ($this->ResponseGroupInformation = $_ResponseGroupInformation);
	}
	/**
	 * Get ResponseGroupInformation
	 * @return AmazonAlexaTypeResponseGroupInformation
	 */
	public function getResponseGroupInformation()
	{
		return $this->ResponseGroupInformation;
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