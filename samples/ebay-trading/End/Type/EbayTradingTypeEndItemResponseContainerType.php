<?php
/**
 * Class file for EbayTradingTypeEndItemResponseContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndItemResponseContainerType
 * Documentation : Includes the acknowledgement of date and time the auction was ended due to the call to EndItem.
 * @date 04/07/2012
 */
class EbayTradingTypeEndItemResponseContainerType extends EbayTradingWsdlClass
{
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date and time (returned in GMT) the specified item listing was ended. Also applicable to Half.com.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : CorrelationID is used to correlate a given EndItemRequestContainer in the request with the corresponding EndItemResponseContainer in the response. If you pass a message ID in a request container, the same value is returned in the CorrelationID field in the matching response container. You can use this for tracking that a response container is returned for every request container and to match particular responses to particular requests. If you do not pass MessageID in the request, CorrelationID is not returned.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The Errors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
	 * @var EbayTradingTypeErrorType
	 */
	public $Errors;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime EndTime
	 * @param string CorrelationID
	 * @param EbayTradingTypeErrorType Errors
	 * @param DOMDocument any
	 * @return EbayTradingTypeEndItemResponseContainerType
	 */
	public function __construct($_EndTime = null,$_CorrelationID = null,$_Errors = null,$_any = null)
	{
		parent::__construct(array('EndTime'=>$_EndTime,'CorrelationID'=>$_CorrelationID,'Errors'=>$_Errors,'any'=>$_any));
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
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
	 * @return EbayTradingTypeErrorType
	 */
	public function getErrors()
	{
		return $this->Errors;
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