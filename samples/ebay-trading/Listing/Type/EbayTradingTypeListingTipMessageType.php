<?php
/**
 * Class file for EbayTradingTypeListingTipMessageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingTipMessageType
 * Documentation : Contains the message portion of a listing tip that is returned by the Listing Analyzer engine.
 * @date 04/07/2012
 */
class EbayTradingTypeListingTipMessageType extends EbayTradingWsdlClass
{
	/**
	 * The ListingTipMessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier for the tip message. Primarily for internal use. This value may change over time.
	 * @var string
	 */
	public $ListingTipMessageID;
	/**
	 * The ShortMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Brief version of the tip message.
	 * @var string
	 */
	public $ShortMessage;
	/**
	 * The LongMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Detailed version of the tip message.
	 * @var string
	 */
	public $LongMessage;
	/**
	 * The HelpURLPath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Path part of a URL for a "Learn More" link that points to a relevant eBay Web site online help page. The path is relative to http://pages.ebay.XX, where XX is the 2-letter site code (e.g., http://pages.ebay.de for the eBay Germany site). Applications should append the URL to the appropriate path for the user's site.
	 * @var string
	 */
	public $HelpURLPath;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ListingTipMessageID
	 * @param string ShortMessage
	 * @param string LongMessage
	 * @param string HelpURLPath
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingTipMessageType
	 */
	public function __construct($_ListingTipMessageID = null,$_ShortMessage = null,$_LongMessage = null,$_HelpURLPath = null,$_any = null)
	{
		parent::__construct(array('ListingTipMessageID'=>$_ListingTipMessageID,'ShortMessage'=>$_ShortMessage,'LongMessage'=>$_LongMessage,'HelpURLPath'=>$_HelpURLPath,'any'=>$_any));
	}
	/**
	 * Set ListingTipMessageID
	 * @param string ListingTipMessageID
	 * @return string
	 */
	public function setListingTipMessageID($_ListingTipMessageID)
	{
		return ($this->ListingTipMessageID = $_ListingTipMessageID);
	}
	/**
	 * Get ListingTipMessageID
	 * @return string
	 */
	public function getListingTipMessageID()
	{
		return $this->ListingTipMessageID;
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
	 * Set HelpURLPath
	 * @param string HelpURLPath
	 * @return string
	 */
	public function setHelpURLPath($_HelpURLPath)
	{
		return ($this->HelpURLPath = $_HelpURLPath);
	}
	/**
	 * Get HelpURLPath
	 * @return string
	 */
	public function getHelpURLPath()
	{
		return $this->HelpURLPath;
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