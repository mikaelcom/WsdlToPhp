<?php
/**
 * Class file for EbayTradingTypeStoreLogoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreLogoType
 * Documentation : Store logo.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreLogoType extends EbayTradingWsdlClass
{
	/**
	 * The LogoID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
	 * @var int
	 */
	public $LogoID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store logo name. Provides a user-friendly name for the logo.
	 * @var string
	 */
	public $Name;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL of the logo. Must have a .gif or .jpg extention. Specified when you are using a customized logo.
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int LogoID
	 * @param string Name
	 * @param anyURI URL
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreLogoType
	 */
	public function __construct($_LogoID = null,$_Name = null,$_URL = null,$_any = null)
	{
		parent::__construct(array('LogoID'=>$_LogoID,'Name'=>$_Name,'URL'=>$_URL,'any'=>$_any));
	}
	/**
	 * Set LogoID
	 * @param int LogoID
	 * @return int
	 */
	public function setLogoID($_LogoID)
	{
		return ($this->LogoID = $_LogoID);
	}
	/**
	 * Get LogoID
	 * @return int
	 */
	public function getLogoID()
	{
		return $this->LogoID;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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