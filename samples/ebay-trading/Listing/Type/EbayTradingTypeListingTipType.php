<?php
/**
 * Class file for EbayTradingTypeListingTipType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingTipType
 * Documentation : A tip on improving a listing's details. Tips are returned from the Listing Analyzer engine.
 * @date 04/07/2012
 */
class EbayTradingTypeListingTipType extends EbayTradingWsdlClass
{
	/**
	 * The ListingTipID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier for the tip. Primarily for internal use. This value may change over time.
	 * @var string
	 */
	public $ListingTipID;
	/**
	 * The Priority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The rank of the tip. All tips are ranked by importance. Ranking varies for each site. The rank is always greater than 0.
	 * @var int
	 */
	public $Priority;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tip's message content.
	 * @var EbayTradingTypeListingTipMessageType
	 */
	public $Message;
	/**
	 * The Field
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item field that is associated with the tip.
	 * @var EbayTradingTypeListingTipFieldType
	 */
	public $Field;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ListingTipID
	 * @param int Priority
	 * @param EbayTradingTypeListingTipMessageType Message
	 * @param EbayTradingTypeListingTipFieldType Field
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingTipType
	 */
	public function __construct($_ListingTipID = null,$_Priority = null,$_Message = null,$_Field = null,$_any = null)
	{
		parent::__construct(array('ListingTipID'=>$_ListingTipID,'Priority'=>$_Priority,'Message'=>$_Message,'Field'=>$_Field,'any'=>$_any));
	}
	/**
	 * Set ListingTipID
	 * @param string ListingTipID
	 * @return string
	 */
	public function setListingTipID($_ListingTipID)
	{
		return ($this->ListingTipID = $_ListingTipID);
	}
	/**
	 * Get ListingTipID
	 * @return string
	 */
	public function getListingTipID()
	{
		return $this->ListingTipID;
	}
	/**
	 * Set Priority
	 * @param int Priority
	 * @return int
	 */
	public function setPriority($_Priority)
	{
		return ($this->Priority = $_Priority);
	}
	/**
	 * Get Priority
	 * @return int
	 */
	public function getPriority()
	{
		return $this->Priority;
	}
	/**
	 * Set Message
	 * @param ListingTipMessageType Message
	 * @return ListingTipMessageType
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return EbayTradingTypeListingTipMessageType
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set Field
	 * @param ListingTipFieldType Field
	 * @return ListingTipFieldType
	 */
	public function setField($_Field)
	{
		return ($this->Field = $_Field);
	}
	/**
	 * Get Field
	 * @return EbayTradingTypeListingTipFieldType
	 */
	public function getField()
	{
		return $this->Field;
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