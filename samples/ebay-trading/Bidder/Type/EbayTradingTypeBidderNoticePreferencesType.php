<?php
/**
 * Class file for EbayTradingTypeBidderNoticePreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidderNoticePreferencesType
 * Documentation : Contains a seller's preferences for receiving bidder notices.
 * @date 04/07/2012
 */
class EbayTradingTypeBidderNoticePreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The UnsuccessfulBidderNoticeIncludeMyItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, sends the seller a notice containing the contact information for unsuccessful bidders.
	 * @var boolean
	 */
	public $UnsuccessfulBidderNoticeIncludeMyItems;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean UnsuccessfulBidderNoticeIncludeMyItems
	 * @param DOMDocument any
	 * @return EbayTradingTypeBidderNoticePreferencesType
	 */
	public function __construct($_UnsuccessfulBidderNoticeIncludeMyItems = null,$_any = null)
	{
		parent::__construct(array('UnsuccessfulBidderNoticeIncludeMyItems'=>$_UnsuccessfulBidderNoticeIncludeMyItems,'any'=>$_any));
	}
	/**
	 * Set UnsuccessfulBidderNoticeIncludeMyItems
	 * @param boolean UnsuccessfulBidderNoticeIncludeMyItems
	 * @return boolean
	 */
	public function setUnsuccessfulBidderNoticeIncludeMyItems($_UnsuccessfulBidderNoticeIncludeMyItems)
	{
		return ($this->UnsuccessfulBidderNoticeIncludeMyItems = $_UnsuccessfulBidderNoticeIncludeMyItems);
	}
	/**
	 * Get UnsuccessfulBidderNoticeIncludeMyItems
	 * @return boolean
	 */
	public function getUnsuccessfulBidderNoticeIncludeMyItems()
	{
		return $this->UnsuccessfulBidderNoticeIncludeMyItems;
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