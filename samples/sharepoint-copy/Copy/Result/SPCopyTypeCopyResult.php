<?php
/**
 * Class file for SPCopyTypeCopyResult
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeCopyResult
 * @date 07/07/2012
 */
class SPCopyTypeCopyResult extends SPCopyWsdlClass
{
	/**
	 * The ErrorCode
	 * @var CopyErrorCode
	 */
	public $ErrorCode;
	/**
	 * The ErrorMessage
	 * @var string
	 */
	public $ErrorMessage;
	/**
	 * The DestinationUrl
	 * @var string
	 */
	public $DestinationUrl;
	/**
	 * Constructor
	 * @param CopyErrorCode ErrorCode
	 * @param string ErrorMessage
	 * @param string DestinationUrl
	 * @return SPCopyTypeCopyResult
	 */
	public function __construct($_ErrorCode = null,$_ErrorMessage = null,$_DestinationUrl = null)
	{
		parent::__construct(array('ErrorCode'=>$_ErrorCode,'ErrorMessage'=>$_ErrorMessage,'DestinationUrl'=>$_DestinationUrl));
	}
	/**
	 * Set ErrorCode
	 * @param CopyErrorCode ErrorCode
	 * @return CopyErrorCode
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return CopyErrorCode
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ErrorMessage
	 * @param string ErrorMessage
	 * @return string
	 */
	public function setErrorMessage($_ErrorMessage)
	{
		return ($this->ErrorMessage = $_ErrorMessage);
	}
	/**
	 * Get ErrorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->ErrorMessage;
	}
	/**
	 * Set DestinationUrl
	 * @param string DestinationUrl
	 * @return string
	 */
	public function setDestinationUrl($_DestinationUrl)
	{
		return ($this->DestinationUrl = $_DestinationUrl);
	}
	/**
	 * Get DestinationUrl
	 * @return string
	 */
	public function getDestinationUrl()
	{
		return $this->DestinationUrl;
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