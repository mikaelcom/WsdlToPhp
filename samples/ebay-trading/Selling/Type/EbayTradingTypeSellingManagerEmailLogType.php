<?php
/**
 * Class file for EbayTradingTypeSellingManagerEmailLogType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerEmailLogType
 * Documentation : Contains list of Email log.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerEmailLogType extends EbayTradingWsdlClass
{
	/**
	 * The EmailType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of Selling Manager email.
	 * @var EbayTradingTypeSellingManagerEmailTypeCodeType
	 */
	public $EmailType;
	/**
	 * The CustomEmailName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Template name of the custom email.
	 * @var string
	 */
	public $CustomEmailName;
	/**
	 * The EmailState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Success or failure state of this email.
	 * @var EbayTradingTypeSellingManagerEmailSentStatusCodeType
	 */
	public $EmailState;
	/**
	 * The EventTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date on which this email event occurred.
	 * @var dateTime
	 */
	public $EventTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerEmailTypeCodeType EmailType
	 * @param string CustomEmailName
	 * @param EbayTradingTypeSellingManagerEmailSentStatusCodeType EmailState
	 * @param dateTime EventTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerEmailLogType
	 */
	public function __construct($_EmailType = null,$_CustomEmailName = null,$_EmailState = null,$_EventTime = null,$_any = null)
	{
		parent::__construct(array('EmailType'=>$_EmailType,'CustomEmailName'=>$_CustomEmailName,'EmailState'=>$_EmailState,'EventTime'=>$_EventTime,'any'=>$_any));
	}
	/**
	 * Set EmailType
	 * @param SellingManagerEmailTypeCodeType EmailType
	 * @return SellingManagerEmailTypeCodeType
	 */
	public function setEmailType($_EmailType)
	{
		return ($this->EmailType = EbayTradingTypeSellingManagerEmailTypeCodeType::valueIsValid($_EmailType)?$_EmailType:null);
	}
	/**
	 * Get EmailType
	 * @return EbayTradingTypeSellingManagerEmailTypeCodeType
	 */
	public function getEmailType()
	{
		return $this->EmailType;
	}
	/**
	 * Set CustomEmailName
	 * @param string CustomEmailName
	 * @return string
	 */
	public function setCustomEmailName($_CustomEmailName)
	{
		return ($this->CustomEmailName = $_CustomEmailName);
	}
	/**
	 * Get CustomEmailName
	 * @return string
	 */
	public function getCustomEmailName()
	{
		return $this->CustomEmailName;
	}
	/**
	 * Set EmailState
	 * @param SellingManagerEmailSentStatusCodeType EmailState
	 * @return SellingManagerEmailSentStatusCodeType
	 */
	public function setEmailState($_EmailState)
	{
		return ($this->EmailState = EbayTradingTypeSellingManagerEmailSentStatusCodeType::valueIsValid($_EmailState)?$_EmailState:null);
	}
	/**
	 * Get EmailState
	 * @return EbayTradingTypeSellingManagerEmailSentStatusCodeType
	 */
	public function getEmailState()
	{
		return $this->EmailState;
	}
	/**
	 * Set EventTime
	 * @param dateTime EventTime
	 * @return dateTime
	 */
	public function setEventTime($_EventTime)
	{
		return ($this->EventTime = $_EventTime);
	}
	/**
	 * Get EventTime
	 * @return dateTime
	 */
	public function getEventTime()
	{
		return $this->EventTime;
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