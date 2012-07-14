<?php
/**
 * Class file for PayPalTypeErrorType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeErrorType
 * @date 14/07/2012
 */
class PayPalTypeErrorType extends PayPalWsdlClass
{
	/**
	 * The ShortMessage
	 * @var string
	 */
	public $ShortMessage;
	/**
	 * The LongMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $LongMessage;
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- documentation : Error code can be used by a receiving application to debugging a response message. These codes will need to be uniquely defined for each application.
	 * @var token
	 */
	public $ErrorCode;
	/**
	 * The SeverityCode
	 * Meta informations :
	 * 	- documentation : SeverityCode indicates whether the error is an application level error or if it is informational error, i.e., warning.
	 * @var PayPalTypeSeverityCodeType
	 */
	public $SeverityCode;
	/**
	 * The ErrorParameters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This optional element may carry additional application-specific error variables that indicate specific information about the error condition particularly in the cases where there are multiple instances of the ErrorType which require additional context.
	 * @var PayPalTypeErrorParameterType
	 */
	public $ErrorParameters;
	/**
	 * Constructor
	 * @param string ShortMessage
	 * @param string LongMessage
	 * @param token ErrorCode
	 * @param PayPalTypeSeverityCodeType SeverityCode
	 * @param PayPalTypeErrorParameterType ErrorParameters
	 * @return PayPalTypeErrorType
	 */
	public function __construct($_ShortMessage = null,$_LongMessage = null,$_ErrorCode = null,$_SeverityCode = null,$_ErrorParameters = null)
	{
		parent::__construct(array('ShortMessage'=>$_ShortMessage,'LongMessage'=>$_LongMessage,'ErrorCode'=>$_ErrorCode,'SeverityCode'=>$_SeverityCode,'ErrorParameters'=>$_ErrorParameters));
	}
	/**
	 * Set ShortMessage
	 * @param string ShortMessage
	 * @return string
	 */
	public function setShortMessage($_ShortMessage)
	{
		return ($this->ShortMessage = $_ShortMessage);
	}
	/**
	 * Get ShortMessage
	 * @return string
	 */
	public function getShortMessage()
	{
		return $this->ShortMessage;
	}
	/**
	 * Set LongMessage
	 * @param string LongMessage
	 * @return string
	 */
	public function setLongMessage($_LongMessage)
	{
		return ($this->LongMessage = $_LongMessage);
	}
	/**
	 * Get LongMessage
	 * @return string
	 */
	public function getLongMessage()
	{
		return $this->LongMessage;
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
	 * Set SeverityCode
	 * @param SeverityCodeType SeverityCode
	 * @return SeverityCodeType
	 */
	public function setSeverityCode($_SeverityCode)
	{
		return ($this->SeverityCode = PayPalTypeSeverityCodeType::valueIsValid($_SeverityCode)?$_SeverityCode:null);
	}
	/**
	 * Get SeverityCode
	 * @return PayPalTypeSeverityCodeType
	 */
	public function getSeverityCode()
	{
		return $this->SeverityCode;
	}
	/**
	 * Set ErrorParameters
	 * @param ErrorParameterType ErrorParameters
	 * @return ErrorParameterType
	 */
	public function setErrorParameters($_ErrorParameters)
	{
		return ($this->ErrorParameters = $_ErrorParameters);
	}
	/**
	 * Get ErrorParameters
	 * @return PayPalTypeErrorParameterType
	 */
	public function getErrorParameters()
	{
		return $this->ErrorParameters;
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