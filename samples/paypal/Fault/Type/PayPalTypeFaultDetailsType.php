<?php
/**
 * Class file for PayPalTypeFaultDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFaultDetailsType
 * @date 14/07/2012
 */
class PayPalTypeFaultDetailsType extends PayPalWsdlClass
{
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- documentation : Error code can be used by a receiving application to debugging a SOAP response message that contain one or more SOAP Fault detail objects, i.e., fault detail sub-elements. These codes will need to be uniquely defined for each fault scenario.
	 * @var string
	 */
	public $ErrorCode;
	/**
	 * The Severity
	 * Meta informations :
	 * 	- documentation : Severity indicates whether the error is a serious fault or if it is informational error, i.e., warning.
	 * @var string
	 */
	public $Severity;
	/**
	 * The DetailedMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DetailedMessage;
	/**
	 * Constructor
	 * @param string ErrorCode
	 * @param string Severity
	 * @param string DetailedMessage
	 * @return PayPalTypeFaultDetailsType
	 */
	public function __construct($_ErrorCode = null,$_Severity = null,$_DetailedMessage = null)
	{
		parent::__construct(array('ErrorCode'=>$_ErrorCode,'Severity'=>$_Severity,'DetailedMessage'=>$_DetailedMessage));
	}
	/**
	 * Set ErrorCode
	 * @param string ErrorCode
	 * @return string
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return string
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set Severity
	 * @param string Severity
	 * @return string
	 */
	public function setSeverity($_Severity)
	{
		return ($this->Severity = $_Severity);
	}
	/**
	 * Get Severity
	 * @return string
	 */
	public function getSeverity()
	{
		return $this->Severity;
	}
	/**
	 * Set DetailedMessage
	 * @param string DetailedMessage
	 * @return string
	 */
	public function setDetailedMessage($_DetailedMessage)
	{
		return ($this->DetailedMessage = $_DetailedMessage);
	}
	/**
	 * Get DetailedMessage
	 * @return string
	 */
	public function getDetailedMessage()
	{
		return $this->DetailedMessage;
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