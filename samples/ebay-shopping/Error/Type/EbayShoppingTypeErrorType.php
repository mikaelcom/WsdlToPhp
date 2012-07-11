<?php
/**
 * Class file for EbayShoppingTypeErrorType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeErrorType
 * Documentation : These are request errors (as opposed to system errors) that occur due to problems with business-level data (e.g., an invalid combination of arguments) that the application passed in.
 * @date 05/07/2012
 */
class EbayShoppingTypeErrorType extends EbayShoppingWsdlClass
{
	/**
	 * The ShortMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A brief description of the condition that raised the error.
	 * @var string
	 */
	public $ShortMessage;
	/**
	 * The LongMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A more detailed description of the condition that raised the error.
	 * @var string
	 */
	public $LongMessage;
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
	 * @var token
	 */
	public $ErrorCode;
	/**
	 * The UserDisplayHint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is not currently in use for eBay Shopping Web Services. Indicates whether the error message text is intended to be displayed to an end user or intended only to be parsed by the application. If true or not present (the default), the message text is intended for the end user. If false, the message text is intended for the application, and the application should translate the error into a more appropriate message.
	 * @var boolean
	 */
	public $UserDisplayHint;
	/**
	 * The SeverityCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the error caused the request to fail.<br> <br> If the request fails and the source of the problem is within the application (such as a missing required element), please change the application before you retry the request. If the problem is due to end-user input data, please alert the end-user to the problem and provide the means for them to correct the data. Once the problem in the application or data is resolved, you can attempt to re-send the request to eBay.<br> <br> If the source of the problem is on eBay's side, you can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the request may be resent in its original form.<br> <br> When a warning occurs, the error is returned in addition to the business data. In this case, you do not need to retry the request (as the original request was successful). However, depending on the cause or nature of the warning, you might need to contact either the end user or eBay to effect a long term solution to the problem to prevent it from reoccurring in the future.
	 * @var EbayShoppingTypeSeverityCodeType
	 */
	public $SeverityCode;
	/**
	 * The ErrorParameters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Some warning and error messages return one or more variables that contain contextual information about the error. This is often the field or value that triggered the error. You can usually predict where these will occur by looking at the "replaceable_value" indicators in our Errors by Number page.
	 * @var EbayShoppingTypeErrorParameterType
	 */
	public $ErrorParameters;
	/**
	 * The ErrorClassification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : API errors are divided between two classes: system errors and request errors.
	 * @var EbayShoppingTypeErrorClassificationCodeType
	 */
	public $ErrorClassification;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ShortMessage
	 * @param string LongMessage
	 * @param token ErrorCode
	 * @param boolean UserDisplayHint
	 * @param EbayShoppingTypeSeverityCodeType SeverityCode
	 * @param EbayShoppingTypeErrorParameterType ErrorParameters
	 * @param EbayShoppingTypeErrorClassificationCodeType ErrorClassification
	 * @param DOMDocument any
	 * @return EbayShoppingTypeErrorType
	 */
	public function __construct($_ShortMessage = null,$_LongMessage = null,$_ErrorCode = null,$_UserDisplayHint = null,$_SeverityCode = null,$_ErrorParameters = null,$_ErrorClassification = null,$_any = null)
	{
		parent::__construct(array('ShortMessage'=>$_ShortMessage,'LongMessage'=>$_LongMessage,'ErrorCode'=>$_ErrorCode,'UserDisplayHint'=>$_UserDisplayHint,'SeverityCode'=>$_SeverityCode,'ErrorParameters'=>$_ErrorParameters,'ErrorClassification'=>$_ErrorClassification,'any'=>$_any));
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
	 * Set UserDisplayHint
	 * @param boolean UserDisplayHint
	 * @return boolean
	 */
	public function setUserDisplayHint($_UserDisplayHint)
	{
		return ($this->UserDisplayHint = $_UserDisplayHint);
	}
	/**
	 * Get UserDisplayHint
	 * @return boolean
	 */
	public function getUserDisplayHint()
	{
		return $this->UserDisplayHint;
	}
	/**
	 * Set SeverityCode
	 * @param SeverityCodeType SeverityCode
	 * @return SeverityCodeType
	 */
	public function setSeverityCode($_SeverityCode)
	{
		return ($this->SeverityCode = EbayShoppingTypeSeverityCodeType::valueIsValid($_SeverityCode)?$_SeverityCode:null);
	}
	/**
	 * Get SeverityCode
	 * @return EbayShoppingTypeSeverityCodeType
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
	 * @return EbayShoppingTypeErrorParameterType
	 */
	public function getErrorParameters()
	{
		return $this->ErrorParameters;
	}
	/**
	 * Set ErrorClassification
	 * @param ErrorClassificationCodeType ErrorClassification
	 * @return ErrorClassificationCodeType
	 */
	public function setErrorClassification($_ErrorClassification)
	{
		return ($this->ErrorClassification = EbayShoppingTypeErrorClassificationCodeType::valueIsValid($_ErrorClassification)?$_ErrorClassification:null);
	}
	/**
	 * Get ErrorClassification
	 * @return EbayShoppingTypeErrorClassificationCodeType
	 */
	public function getErrorClassification()
	{
		return $this->ErrorClassification;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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