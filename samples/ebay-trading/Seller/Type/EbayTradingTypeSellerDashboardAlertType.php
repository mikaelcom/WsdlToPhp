<?php
/**
 * Class file for EbayTradingTypeSellerDashboardAlertType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerDashboardAlertType
 * Documentation : A message to help the you understand your status as a seller (PowerSeller status, policy compliance status, etc.).
 * @date 04/07/2012
 */
class EbayTradingTypeSellerDashboardAlertType extends EbayTradingWsdlClass
{
	/**
	 * The Severity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The severity level helps you understand whether the alert is identifying a problem (a warning or strong warning) or if it is informational in nature. This field is present if an alert has been issued to your account.
	 * @var EbayTradingTypeSellerDashboardAlertSeverityCodeType
	 */
	public $Severity;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The warning or informational alert text. When you parse this text, note that some alerts may use plain text while others can include HTML. Returned only if the seller has been issued an alert.
	 * @var string
	 */
	public $Text;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellerDashboardAlertSeverityCodeType Severity
	 * @param string Text
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerDashboardAlertType
	 */
	public function __construct($_Severity = null,$_Text = null,$_any = null)
	{
		parent::__construct(array('Severity'=>$_Severity,'Text'=>$_Text,'any'=>$_any));
	}
	/**
	 * Set Severity
	 * @param SellerDashboardAlertSeverityCodeType Severity
	 * @return SellerDashboardAlertSeverityCodeType
	 */
	public function setSeverity($_Severity)
	{
		return ($this->Severity = EbayTradingTypeSellerDashboardAlertSeverityCodeType::valueIsValid($_Severity)?$_Severity:null);
	}
	/**
	 * Get Severity
	 * @return EbayTradingTypeSellerDashboardAlertSeverityCodeType
	 */
	public function getSeverity()
	{
		return $this->Severity;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
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