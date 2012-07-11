<?php
/**
 * Class file for EbayTradingTypeListingDurationDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingDurationDefinitionType
 * Documentation : Identifies the type of listing to which the set of durations applies. The durationSetID value corresponds to the listing types returned in Category.ListingDuration (also in the call response).
 * @date 04/07/2012
 */
class EbayTradingTypeListingDurationDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The Duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the length of time an auction can be open, in days. The allowed durations vary according to the type of listing. The value GTC means Good Til Canceled.
	 * @var token
	 */
	public $Duration;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The durationSetID
	 * @var int
	 */
	public $durationSetID;
	/**
	 * Constructor
	 * @param token Duration
	 * @param DOMDocument any
	 * @param int durationSetID
	 * @return EbayTradingTypeListingDurationDefinitionType
	 */
	public function __construct($_Duration = null,$_any = null,$_durationSetID = null)
	{
		parent::__construct(array('Duration'=>$_Duration,'any'=>$_any,'durationSetID'=>$_durationSetID));
	}
	/**
	 * Set Duration
	 * @param token Duration
	 * @return token
	 */
	public function setDuration($_Duration)
	{
		return ($this->Duration = $_Duration);
	}
	/**
	 * Get Duration
	 * @return token
	 */
	public function getDuration()
	{
		return $this->Duration;
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
	 * Set durationSetID
	 * @param int durationSetID
	 * @return int
	 */
	public function setDurationSetID($_durationSetID)
	{
		return ($this->durationSetID = $_durationSetID);
	}
	/**
	 * Get durationSetID
	 * @return int
	 */
	public function getDurationSetID()
	{
		return $this->durationSetID;
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