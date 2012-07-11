<?php
/**
 * Class file for EbayTradingTypeTicketListingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTicketListingDetailsType
 * Documentation : Defines supported fields forTicketListingDetails.
 * @date 04/07/2012
 */
class EbayTradingTypeTicketListingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The EventTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the event, as shown on the ticket. Typically the headliner. There is no maximum number of words or characters. However, the words in the name must be an exact match (or a subset consisting of complete words) to the words in the product title in the catalog. The words in the name are matched using OR logic (the order of the words does not matter). As with all strings, you need to escape reserved characters such as ampersand. See the eBay Trading API Guide for more information about how to specify this value.
	 * @var string
	 */
	public $EventTitle;
	/**
	 * The Venue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the venue, as shown on the ticket. The validation rules are the same as the rules for the event name. In addition, eBay supports both US English and UK English spelling variations for typical words found on tickets (such as "theater" and "theatre"). As with all strings, you need to escape reserved characters such as ampersand.
	 * @var string
	 */
	public $Venue;
	/**
	 * The PrintedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date of the event, as shown on the ticket. Use the date shown on the ticket, without attempting to adjust it for a different time zone (such as Pacific time or GMT).<br> <br> In most cases, you should be able to specify any numeric date format in month/day/year order. eBay supports m or mm for the month, d or dd for the day, and yy or yyyy for the year, in all combinations. The delimiters must be forward slashes (/).
	 * @var string
	 */
	public $PrintedDate;
	/**
	 * The PrintedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time of the event, as shown on the ticket. Use the time value shown on the ticket, without attempting to convert it to a different time zone (such as Pacific time or GMT). Do not round the value up or down (e.g., do not round 7:01 PM to 7:00 PM).<br> <br> In most cases, you should be able to specify the time format exactly as shown on the ticket. For a list of formats that have been tested, see the eBay Trading API Guide.
	 * @var string
	 */
	public $PrintedTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string EventTitle
	 * @param string Venue
	 * @param string PrintedDate
	 * @param string PrintedTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeTicketListingDetailsType
	 */
	public function __construct($_EventTitle = null,$_Venue = null,$_PrintedDate = null,$_PrintedTime = null,$_any = null)
	{
		parent::__construct(array('EventTitle'=>$_EventTitle,'Venue'=>$_Venue,'PrintedDate'=>$_PrintedDate,'PrintedTime'=>$_PrintedTime,'any'=>$_any));
	}
	/**
	 * Set EventTitle
	 * @param string EventTitle
	 * @return string
	 */
	public function setEventTitle($_EventTitle)
	{
		return ($this->EventTitle = $_EventTitle);
	}
	/**
	 * Get EventTitle
	 * @return string
	 */
	public function getEventTitle()
	{
		return $this->EventTitle;
	}
	/**
	 * Set Venue
	 * @param string Venue
	 * @return string
	 */
	public function setVenue($_Venue)
	{
		return ($this->Venue = $_Venue);
	}
	/**
	 * Get Venue
	 * @return string
	 */
	public function getVenue()
	{
		return $this->Venue;
	}
	/**
	 * Set PrintedDate
	 * @param string PrintedDate
	 * @return string
	 */
	public function setPrintedDate($_PrintedDate)
	{
		return ($this->PrintedDate = $_PrintedDate);
	}
	/**
	 * Get PrintedDate
	 * @return string
	 */
	public function getPrintedDate()
	{
		return $this->PrintedDate;
	}
	/**
	 * Set PrintedTime
	 * @param string PrintedTime
	 * @return string
	 */
	public function setPrintedTime($_PrintedTime)
	{
		return ($this->PrintedTime = $_PrintedTime);
	}
	/**
	 * Get PrintedTime
	 * @return string
	 */
	public function getPrintedTime()
	{
		return $this->PrintedTime;
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