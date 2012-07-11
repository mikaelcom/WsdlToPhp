<?php
/**
 * Class file for EbayTradingTypeFaultDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFaultDetailsType
 * Documentation : SOAP faults are used to indicate that an infrastructure error has occurred, such as a problem on eBay's side with database or server going down, or a problem with the client or server-side SOAP framework.
 * @date 04/07/2012
 */
class EbayTradingTypeFaultDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Error code can be used by a receiving application to debug a SOAP response message that contains one or more SOAP fault details. Each error code is uniquely defined for each fault scenario. See the eBay documentation for more information. Your application can use error codes as identifiers in your customized error-handling algorithms.
	 * @var string
	 */
	public $ErrorCode;
	/**
	 * The Severity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the error is a severe error (causing the request to fail) or an informational error (a warning).
	 * @var string
	 */
	public $Severity;
	/**
	 * The DetailedMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description of the condition that caused the SOAP fault.
	 * @var string
	 */
	public $DetailedMessage;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ErrorCode
	 * @param string Severity
	 * @param string DetailedMessage
	 * @param DOMDocument any
	 * @return EbayTradingTypeFaultDetailsType
	 */
	public function __construct($_ErrorCode = null,$_Severity = null,$_DetailedMessage = null,$_any = null)
	{
		parent::__construct(array('ErrorCode'=>$_ErrorCode,'Severity'=>$_Severity,'DetailedMessage'=>$_DetailedMessage,'any'=>$_any));
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