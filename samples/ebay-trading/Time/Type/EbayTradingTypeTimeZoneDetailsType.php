<?php
/**
 * Class file for EbayTradingTypeTimeZoneDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTimeZoneDetailsType
 * Documentation : Time zone details about a region or location to which the seller is willing to ship.
 * @date 04/07/2012
 */
class EbayTradingTypeTimeZoneDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The TimeZoneID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for a given time zone. This ID does not change for a given time zone, even if the time zone supports both standard and daylight saving time variants. Valid values for TimeZoneID correspond to OLSON IDs. These IDs provide not only the information as to the offset from GMT (UTC), but also daylight saving time information. Thus, for example, America/Phoenix is distinct from America/Denver because they have different daylight saving time behavior. This value is not localized.
	 * @var string
	 */
	public $TimeZoneID;
	/**
	 * The StandardLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of a time zone in its standard (non-daylight saving) time representation. This value is localized and returned in the language for the site specified in the request (i.e., the numeric site ID that you specify in the request URL for the SOAP API or the X-EBAY-API-SITEID header for the XML API).
	 * @var string
	 */
	public $StandardLabel;
	/**
	 * The StandardOffset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The offset in hours from GMT for a time zone when it is not adjusted for daylight saving time.
	 * @var string
	 */
	public $StandardOffset;
	/**
	 * The DaylightSavingsLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of a time zone in its daylight saving time representation. This element is emitted for time zones that support daylight saving time only. The value is localized and returned in the language for the site specified in the request.
	 * @var string
	 */
	public $DaylightSavingsLabel;
	/**
	 * The DaylightSavingsOffset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The offset in hours from GMT for a time zone when it is on daylight saving time. This element is emitted for time zones that support daylight saving time only.
	 * @var string
	 */
	public $DaylightSavingsOffset;
	/**
	 * The DaylightSavingsInEffect
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the time zone is currently on daylight saving time. A value of true indicates that the time zone is on daylights savings time. This element is emitted for time zones that support daylight saving time only.
	 * @var boolean
	 */
	public $DaylightSavingsInEffect;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string TimeZoneID
	 * @param string StandardLabel
	 * @param string StandardOffset
	 * @param string DaylightSavingsLabel
	 * @param string DaylightSavingsOffset
	 * @param boolean DaylightSavingsInEffect
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeTimeZoneDetailsType
	 */
	public function __construct($_TimeZoneID = null,$_StandardLabel = null,$_StandardOffset = null,$_DaylightSavingsLabel = null,$_DaylightSavingsOffset = null,$_DaylightSavingsInEffect = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('TimeZoneID'=>$_TimeZoneID,'StandardLabel'=>$_StandardLabel,'StandardOffset'=>$_StandardOffset,'DaylightSavingsLabel'=>$_DaylightSavingsLabel,'DaylightSavingsOffset'=>$_DaylightSavingsOffset,'DaylightSavingsInEffect'=>$_DaylightSavingsInEffect,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set TimeZoneID
	 * @param string TimeZoneID
	 * @return string
	 */
	public function setTimeZoneID($_TimeZoneID)
	{
		return ($this->TimeZoneID = $_TimeZoneID);
	}
	/**
	 * Get TimeZoneID
	 * @return string
	 */
	public function getTimeZoneID()
	{
		return $this->TimeZoneID;
	}
	/**
	 * Set StandardLabel
	 * @param string StandardLabel
	 * @return string
	 */
	public function setStandardLabel($_StandardLabel)
	{
		return ($this->StandardLabel = $_StandardLabel);
	}
	/**
	 * Get StandardLabel
	 * @return string
	 */
	public function getStandardLabel()
	{
		return $this->StandardLabel;
	}
	/**
	 * Set StandardOffset
	 * @param string StandardOffset
	 * @return string
	 */
	public function setStandardOffset($_StandardOffset)
	{
		return ($this->StandardOffset = $_StandardOffset);
	}
	/**
	 * Get StandardOffset
	 * @return string
	 */
	public function getStandardOffset()
	{
		return $this->StandardOffset;
	}
	/**
	 * Set DaylightSavingsLabel
	 * @param string DaylightSavingsLabel
	 * @return string
	 */
	public function setDaylightSavingsLabel($_DaylightSavingsLabel)
	{
		return ($this->DaylightSavingsLabel = $_DaylightSavingsLabel);
	}
	/**
	 * Get DaylightSavingsLabel
	 * @return string
	 */
	public function getDaylightSavingsLabel()
	{
		return $this->DaylightSavingsLabel;
	}
	/**
	 * Set DaylightSavingsOffset
	 * @param string DaylightSavingsOffset
	 * @return string
	 */
	public function setDaylightSavingsOffset($_DaylightSavingsOffset)
	{
		return ($this->DaylightSavingsOffset = $_DaylightSavingsOffset);
	}
	/**
	 * Get DaylightSavingsOffset
	 * @return string
	 */
	public function getDaylightSavingsOffset()
	{
		return $this->DaylightSavingsOffset;
	}
	/**
	 * Set DaylightSavingsInEffect
	 * @param boolean DaylightSavingsInEffect
	 * @return boolean
	 */
	public function setDaylightSavingsInEffect($_DaylightSavingsInEffect)
	{
		return ($this->DaylightSavingsInEffect = $_DaylightSavingsInEffect);
	}
	/**
	 * Get DaylightSavingsInEffect
	 * @return boolean
	 */
	public function getDaylightSavingsInEffect()
	{
		return $this->DaylightSavingsInEffect;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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