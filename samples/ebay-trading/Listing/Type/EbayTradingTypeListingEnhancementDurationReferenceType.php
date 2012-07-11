<?php
/**
 * Class file for EbayTradingTypeListingEnhancementDurationReferenceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingEnhancementDurationReferenceType
 * Documentation : A container node for a set of durations that apply to a certain listing enhancements.
 * @date 04/07/2012
 */
class EbayTradingTypeListingEnhancementDurationReferenceType extends EbayTradingWsdlClass
{
	/**
	 * The Duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies a length of time that a listing enhancement can be used for a listing. The value Lifetime means the listing enhancment occurs for the lifetime of the listing. Instances of durations other than Lifetime can be purchased multiple times while the listing is active.
	 * @var token
	 */
	public $Duration;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token Duration
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingEnhancementDurationReferenceType
	 */
	public function __construct($_Duration = null,$_any = null)
	{
		parent::__construct(array('Duration'=>$_Duration,'any'=>$_any));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>