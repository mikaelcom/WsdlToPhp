<?php
/**
 * Class file for AmazonAlexaTypeErrorType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeErrorType
 * @date 10/07/2012
 */
class AmazonAlexaTypeErrorType extends AmazonAlexaWsdlClass
{
	/**
	 * The ErrorCode
	 * @var token
	 */
	public $ErrorCode;
	/**
	 * The ErrorMessage
	 * @var token
	 */
	public $ErrorMessage;
	/**
	 * The Service
	 * @var token
	 */
	public $Service;
	/**
	 * Constructor
	 * @param token ErrorCode
	 * @param token ErrorMessage
	 * @param token Service
	 * @return AmazonAlexaTypeErrorType
	 */
	public function __construct($_ErrorCode = null,$_ErrorMessage = null,$_Service = null)
	{
		parent::__construct(array('ErrorCode'=>$_ErrorCode,'ErrorMessage'=>$_ErrorMessage,'Service'=>$_Service));
	}
	/**
	 * Set ErrorCode
	 * @param token ErrorCode
	 * @return token
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return token
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ErrorMessage
	 * @param token ErrorMessage
	 * @return token
	 */
	public function setErrorMessage($_ErrorMessage)
	{
		return ($this->ErrorMessage = $_ErrorMessage);
	}
	/**
	 * Get ErrorMessage
	 * @return token
	 */
	public function getErrorMessage()
	{
		return $this->ErrorMessage;
	}
	/**
	 * Set Service
	 * @param token Service
	 * @return token
	 */
	public function setService($_Service)
	{
		return ($this->Service = $_Service);
	}
	/**
	 * Get Service
	 * @return token
	 */
	public function getService()
	{
		return $this->Service;
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