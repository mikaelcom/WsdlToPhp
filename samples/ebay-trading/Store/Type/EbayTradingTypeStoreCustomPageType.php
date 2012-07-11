<?php
/**
 * Class file for EbayTradingTypeStoreCustomPageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomPageType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomPageType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the Store custom page. This value is required if you are creating a new page (by not specifying a PageID). Note that you must include a Name for the page even if you are using the PreviewEnabled tag. However, since using the preview functionality means that the page will not be persisted, you can enter a dummy value for this field if you have not decided on a name for the page. The Name is used in links to the page.
	 * @var string
	 */
	public $Name;
	/**
	 * The PageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the Store custom page. When you are using SetStoreCustomPage, if you specify a valid PageID, the custom page is updated. If you do not specify a PageID, the custom page is added.
	 * @var long
	 */
	public $PageID;
	/**
	 * The URLPath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL path of the custom page. Only if you are using Chinese characters in the Name property for the custom page do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the URL path is normally derived from the Store custom page name, but it cannot be derived from the name of the custom page if it contains Chinese characters because URLs cannot contain Chinese characters. URLPath is included in the GetStoreCustomPage response when PageID is specified.
	 * @var string
	 */
	public $URLPath;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full URL of the Store custom page. URLPath is included in the GetStoreCustomPage response when PageID is specified in the request.
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of the custom page, active or inactive. Set Status to Delete with SetStoreCustomPage to delete the page.
	 * @var EbayTradingTypeStoreCustomPageStatusCodeType
	 */
	public $Status;
	/**
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The HTML content of the custom page. This field has a maximum size of 96 kilobytes. If PreviewEnabled is true, then this value is required. Otherwise, it is optional.
	 * @var string
	 */
	public $Content;
	/**
	 * The LeftNav
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the left navigation bar is visible on the page. LeftNav is included in the GetStoreCustomPage response when PageID is specified in the request.
	 * @var boolean
	 */
	public $LeftNav;
	/**
	 * The PreviewEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, then the other inputs are ignored, and the content of the page as it will be displayed within the Store is returned. If false, then the page is either modified or added, and the content of the page is not returned.
	 * @var boolean
	 */
	public $PreviewEnabled;
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Order in which the page is displayed in the list of custom pages.
	 * @var int
	 */
	public $Order;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param long PageID
	 * @param string URLPath
	 * @param anyURI URL
	 * @param EbayTradingTypeStoreCustomPageStatusCodeType Status
	 * @param string Content
	 * @param boolean LeftNav
	 * @param boolean PreviewEnabled
	 * @param int Order
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreCustomPageType
	 */
	public function __construct($_Name = null,$_PageID = null,$_URLPath = null,$_URL = null,$_Status = null,$_Content = null,$_LeftNav = null,$_PreviewEnabled = null,$_Order = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'PageID'=>$_PageID,'URLPath'=>$_URLPath,'URL'=>$_URL,'Status'=>$_Status,'Content'=>$_Content,'LeftNav'=>$_LeftNav,'PreviewEnabled'=>$_PreviewEnabled,'Order'=>$_Order,'any'=>$_any));
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
	 * Set PageID
	 * @param long PageID
	 * @return long
	 */
	public function setPageID($_PageID)
	{
		return ($this->PageID = $_PageID);
	}
	/**
	 * Get PageID
	 * @return long
	 */
	public function getPageID()
	{
		return $this->PageID;
	}
	/**
	 * Set URLPath
	 * @param string URLPath
	 * @return string
	 */
	public function setURLPath($_URLPath)
	{
		return ($this->URLPath = $_URLPath);
	}
	/**
	 * Get URLPath
	 * @return string
	 */
	public function getURLPath()
	{
		return $this->URLPath;
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
	 * Set Status
	 * @param StoreCustomPageStatusCodeType Status
	 * @return StoreCustomPageStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeStoreCustomPageStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeStoreCustomPageStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Content
	 * @param string Content
	 * @return string
	 */
	public function setContent($_Content)
	{
		return ($this->Content = $_Content);
	}
	/**
	 * Get Content
	 * @return string
	 */
	public function getContent()
	{
		return $this->Content;
	}
	/**
	 * Set LeftNav
	 * @param boolean LeftNav
	 * @return boolean
	 */
	public function setLeftNav($_LeftNav)
	{
		return ($this->LeftNav = $_LeftNav);
	}
	/**
	 * Get LeftNav
	 * @return boolean
	 */
	public function getLeftNav()
	{
		return $this->LeftNav;
	}
	/**
	 * Set PreviewEnabled
	 * @param boolean PreviewEnabled
	 * @return boolean
	 */
	public function setPreviewEnabled($_PreviewEnabled)
	{
		return ($this->PreviewEnabled = $_PreviewEnabled);
	}
	/**
	 * Get PreviewEnabled
	 * @return boolean
	 */
	public function getPreviewEnabled()
	{
		return $this->PreviewEnabled;
	}
	/**
	 * Set Order
	 * @param int Order
	 * @return int
	 */
	public function setOrder($_Order)
	{
		return ($this->Order = $_Order);
	}
	/**
	 * Get Order
	 * @return int
	 */
	public function getOrder()
	{
		return $this->Order;
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