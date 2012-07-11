<?php
/**
 * Class file for EbayTradingTypeURLDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeURLDetailsType
 * Documentation : Details about a specific eBay URL.
 * @date 04/07/2012
 */
class EbayTradingTypeURLDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The URLType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A compressed, representative title for the eBay URL.
	 * @var EbayTradingTypeURLTypeCodeType
	 */
	public $URLType;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain types of applications. See your API license agreement. Also see this page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 * @var anyURI
	 */
	public $URL;
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
	 * @param EbayTradingTypeURLTypeCodeType URLType
	 * @param anyURI URL
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeURLDetailsType
	 */
	public function __construct($_URLType = null,$_URL = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('URLType'=>$_URLType,'URL'=>$_URL,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set URLType
	 * @param URLTypeCodeType URLType
	 * @return URLTypeCodeType
	 */
	public function setURLType($_URLType)
	{
		return ($this->URLType = EbayTradingTypeURLTypeCodeType::valueIsValid($_URLType)?$_URLType:null);
	}
	/**
	 * Get URLType
	 * @return EbayTradingTypeURLTypeCodeType
	 */
	public function getURLType()
	{
		return $this->URLType;
	}
	/**
	 * Set URL
	 * @param anyURI URL
	 * @return anyURI
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return anyURI
	 */
	public function getURL()
	{
		return $this->URL;
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