<?php
/**
 * Class file for EbayTradingTypeBidAssistantListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidAssistantListType
 * Documentation : Defines how a list of BidAssistant items should be returned.
 * @date 04/07/2012
 */
class EbayTradingTypeBidAssistantListType extends EbayTradingWsdlClass
{
	/**
	 * The BidGroupID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this element to specify the bid group id for the Bid Assistant items that you want information about.
	 * @var long
	 */
	public $BidGroupID;
	/**
	 * The IncludeNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes in the response.
	 * @var boolean
	 */
	public $IncludeNotes;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long BidGroupID
	 * @param boolean IncludeNotes
	 * @param DOMDocument any
	 * @return EbayTradingTypeBidAssistantListType
	 */
	public function __construct($_BidGroupID = null,$_IncludeNotes = null,$_any = null)
	{
		parent::__construct(array('BidGroupID'=>$_BidGroupID,'IncludeNotes'=>$_IncludeNotes,'any'=>$_any));
	}
	/**
	 * Set BidGroupID
	 * @param long BidGroupID
	 * @return long
	 */
	public function setBidGroupID($_BidGroupID)
	{
		return ($this->BidGroupID = $_BidGroupID);
	}
	/**
	 * Get BidGroupID
	 * @return long
	 */
	public function getBidGroupID()
	{
		return $this->BidGroupID;
	}
	/**
	 * Set IncludeNotes
	 * @param boolean IncludeNotes
	 * @return boolean
	 */
	public function setIncludeNotes($_IncludeNotes)
	{
		return ($this->IncludeNotes = $_IncludeNotes);
	}
	/**
	 * Get IncludeNotes
	 * @return boolean
	 */
	public function getIncludeNotes()
	{
		return $this->IncludeNotes;
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