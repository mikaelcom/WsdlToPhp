<?php
/**
 * Class file for EbayShoppingTypeAbstractResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeAbstractResponseType
 * Documentation : Base type definition of a response payload that can carry any type of payload content with following optional elements:<br> - timestamp of response message<br> - application-level acknowledgement<br> - application-level (business-level) errors and warnings
 * @date 05/07/2012
 */
class EbayShoppingTypeAbstractResponseType extends EbayShoppingWsdlClass
{
	/**
	 * The Timestamp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value represents the date and time when eBay processed the request. The time zone of this value is <a href="types/simpleTypes.html#dateTime">GMT</a> and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about this time format and converting to and from the GMT time zone.
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Ack
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the call was successfully processed by eBay.
	 * @var EbayShoppingTypeAckCodeType
	 */
	public $Ack;
	/**
	 * The Errors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
	 * @var EbayShoppingTypeErrorType
	 */
	public $Errors;
	/**
	 * The Build
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This refers to the particular software build that eBay used when processing the request and generating the response. This includes the version number plus additional information. eBay Developer Support may request the build information when helping you resolve technical issues.
	 * @var string
	 */
	public $Build;
	/**
	 * The Version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The release version that eBay used to process the request. <br> <br> <span class="tablenote"><b>Note:</b> This is usually the latest release version, as specified in the release notes. (eBay releases the API to international sites about a week after we release it to the US site.) </span><br> <br> If a field in the response returns the token "CustomCode", it usually means that the field is a code type (a token or enumeration), and that in your request URL (or HTTP header) you specified a version that is older than the version in which the token was added to the call.
	 * @var string
	 */
	public $Version;
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If you pass a value in MessageID in a request, we will return the same value in CorrelationID in the response. You can use this for tracking that a response is returned for every request and to match particular responses to particular requests. Only returned if MessageID was used.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime Timestamp
	 * @param EbayShoppingTypeAckCodeType Ack
	 * @param EbayShoppingTypeErrorType Errors
	 * @param string Build
	 * @param string Version
	 * @param string CorrelationID
	 * @param DOMDocument any
	 * @return EbayShoppingTypeAbstractResponseType
	 */
	public function __construct($_Timestamp = null,$_Ack = null,$_Errors = null,$_Build = null,$_Version = null,$_CorrelationID = null,$_any = null)
	{
		parent::__construct(array('Timestamp'=>$_Timestamp,'Ack'=>$_Ack,'Errors'=>$_Errors,'Build'=>$_Build,'Version'=>$_Version,'CorrelationID'=>$_CorrelationID,'any'=>$_any));
	}
	/**
	 * Set Timestamp
	 * @param dateTime Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_Timestamp)
	{
		return ($this->Timestamp = $_Timestamp);
	}
	/**
	 * Get Timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Ack
	 * @param AckCodeType Ack
	 * @return AckCodeType
	 */
	public function setAck($_Ack)
	{
		return ($this->Ack = EbayShoppingTypeAckCodeType::valueIsValid($_Ack)?$_Ack:null);
	}
	/**
	 * Get Ack
	 * @return EbayShoppingTypeAckCodeType
	 */
	public function getAck()
	{
		return $this->Ack;
	}
	/**
	 * Set Errors
	 * @param ErrorType Errors
	 * @return ErrorType
	 */
	public function setErrors($_Errors)
	{
		return ($this->Errors = $_Errors);
	}
	/**
	 * Get Errors
	 * @return EbayShoppingTypeErrorType
	 */
	public function getErrors()
	{
		return $this->Errors;
	}
	/**
	 * Set Build
	 * @param string Build
	 * @return string
	 */
	public function setBuild($_Build)
	{
		return ($this->Build = $_Build);
	}
	/**
	 * Get Build
	 * @return string
	 */
	public function getBuild()
	{
		return $this->Build;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set CorrelationID
	 * @param string CorrelationID
	 * @return string
	 */
	public function setCorrelationID($_CorrelationID)
	{
		return ($this->CorrelationID = $_CorrelationID);
	}
	/**
	 * Get CorrelationID
	 * @return string
	 */
	public function getCorrelationID()
	{
		return $this->CorrelationID;
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