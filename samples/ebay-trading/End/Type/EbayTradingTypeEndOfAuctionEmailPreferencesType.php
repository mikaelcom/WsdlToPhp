<?php
/**
 * Class file for EbayTradingTypeEndOfAuctionEmailPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndOfAuctionEmailPreferencesType
 * Documentation : Contains the seller's preferences for the email sent to the buyer after the creation of the order line item.
 * @date 04/07/2012
 */
class EbayTradingTypeEndOfAuctionEmailPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The TemplateText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The text of the custom message for the email.
	 * @var string
	 */
	public $TemplateText;
	/**
	 * The LogoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the logo to include in the customized email.
	 * @var anyURI
	 */
	public $LogoURL;
	/**
	 * The LogoType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of logo to include in the customized email.
	 * @var EbayTradingTypeEndOfAuctionLogoTypeCodeType
	 */
	public $LogoType;
	/**
	 * The EmailCustomized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the seller wishes to send a customized email to winning buyers.
	 * @var boolean
	 */
	public $EmailCustomized;
	/**
	 * The TextCustomized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the text of the customized message will be customized.
	 * @var boolean
	 */
	public $TextCustomized;
	/**
	 * The LogoCustomized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the seller wishes to include a logo in the customized email.
	 * @var boolean
	 */
	public $LogoCustomized;
	/**
	 * The CopyEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the seller wishes to receive a copy of the customized email sent to the winning buyer.
	 * @var boolean
	 */
	public $CopyEmail;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string TemplateText
	 * @param anyURI LogoURL
	 * @param EbayTradingTypeEndOfAuctionLogoTypeCodeType LogoType
	 * @param boolean EmailCustomized
	 * @param boolean TextCustomized
	 * @param boolean LogoCustomized
	 * @param boolean CopyEmail
	 * @param DOMDocument any
	 * @return EbayTradingTypeEndOfAuctionEmailPreferencesType
	 */
	public function __construct($_TemplateText = null,$_LogoURL = null,$_LogoType = null,$_EmailCustomized = null,$_TextCustomized = null,$_LogoCustomized = null,$_CopyEmail = null,$_any = null)
	{
		parent::__construct(array('TemplateText'=>$_TemplateText,'LogoURL'=>$_LogoURL,'LogoType'=>$_LogoType,'EmailCustomized'=>$_EmailCustomized,'TextCustomized'=>$_TextCustomized,'LogoCustomized'=>$_LogoCustomized,'CopyEmail'=>$_CopyEmail,'any'=>$_any));
	}
	/**
	 * Set TemplateText
	 * @param string TemplateText
	 * @return string
	 */
	public function setTemplateText($_TemplateText)
	{
		return ($this->TemplateText = $_TemplateText);
	}
	/**
	 * Get TemplateText
	 * @return string
	 */
	public function getTemplateText()
	{
		return $this->TemplateText;
	}
	/**
	 * Set LogoURL
	 * @param anyURI LogoURL
	 * @return anyURI
	 */
	public function setLogoURL($_LogoURL)
	{
		return ($this->LogoURL = $_LogoURL);
	}
	/**
	 * Get LogoURL
	 * @return anyURI
	 */
	public function getLogoURL()
	{
		return $this->LogoURL;
	}
	/**
	 * Set LogoType
	 * @param EndOfAuctionLogoTypeCodeType LogoType
	 * @return EndOfAuctionLogoTypeCodeType
	 */
	public function setLogoType($_LogoType)
	{
		return ($this->LogoType = EbayTradingTypeEndOfAuctionLogoTypeCodeType::valueIsValid($_LogoType)?$_LogoType:null);
	}
	/**
	 * Get LogoType
	 * @return EbayTradingTypeEndOfAuctionLogoTypeCodeType
	 */
	public function getLogoType()
	{
		return $this->LogoType;
	}
	/**
	 * Set EmailCustomized
	 * @param boolean EmailCustomized
	 * @return boolean
	 */
	public function setEmailCustomized($_EmailCustomized)
	{
		return ($this->EmailCustomized = $_EmailCustomized);
	}
	/**
	 * Get EmailCustomized
	 * @return boolean
	 */
	public function getEmailCustomized()
	{
		return $this->EmailCustomized;
	}
	/**
	 * Set TextCustomized
	 * @param boolean TextCustomized
	 * @return boolean
	 */
	public function setTextCustomized($_TextCustomized)
	{
		return ($this->TextCustomized = $_TextCustomized);
	}
	/**
	 * Get TextCustomized
	 * @return boolean
	 */
	public function getTextCustomized()
	{
		return $this->TextCustomized;
	}
	/**
	 * Set LogoCustomized
	 * @param boolean LogoCustomized
	 * @return boolean
	 */
	public function setLogoCustomized($_LogoCustomized)
	{
		return ($this->LogoCustomized = $_LogoCustomized);
	}
	/**
	 * Get LogoCustomized
	 * @return boolean
	 */
	public function getLogoCustomized()
	{
		return $this->LogoCustomized;
	}
	/**
	 * Set CopyEmail
	 * @param boolean CopyEmail
	 * @return boolean
	 */
	public function setCopyEmail($_CopyEmail)
	{
		return ($this->CopyEmail = $_CopyEmail);
	}
	/**
	 * Get CopyEmail
	 * @return boolean
	 */
	public function getCopyEmail()
	{
		return $this->CopyEmail;
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