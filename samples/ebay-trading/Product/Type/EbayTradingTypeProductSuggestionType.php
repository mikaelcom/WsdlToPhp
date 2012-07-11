<?php
/**
 * Class file for EbayTradingTypeProductSuggestionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductSuggestionType
 * Documentation : Identifies an individual product suggestion. The product details include the EPID, Title, Stock photo url and if it is an exact match.
 * @date 04/07/2012
 */
class EbayTradingTypeProductSuggestionType extends EbayTradingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the product from the eBay catalog.
	 * @var string
	 */
	public $Title;
	/**
	 * The EPID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The product reference Id of the product The eBay Product ID, a global reference ID for an eBay catalog product. The ePID is a fixed reference to a product (regardless of version).
	 * @var string
	 */
	public $EPID;
	/**
	 * The StockPhoto
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for a stock image (if any) that is associated with the eBay catalog product. The URL is for the image eBay usually displays in product search results (usually 70px tall). It may be helpful to calculate the dimensions of the photo programmatically before displaying it.
	 * @var string
	 */
	public $StockPhoto;
	/**
	 * The Recommended
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the product is an exact match, suitable for listing the item.
	 * @var boolean
	 */
	public $Recommended;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Title
	 * @param string EPID
	 * @param string StockPhoto
	 * @param boolean Recommended
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductSuggestionType
	 */
	public function __construct($_Title = null,$_EPID = null,$_StockPhoto = null,$_Recommended = null,$_any = null)
	{
		parent::__construct(array('Title'=>$_Title,'EPID'=>$_EPID,'StockPhoto'=>$_StockPhoto,'Recommended'=>$_Recommended,'any'=>$_any));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set EPID
	 * @param string EPID
	 * @return string
	 */
	public function setEPID($_EPID)
	{
		return ($this->EPID = $_EPID);
	}
	/**
	 * Get EPID
	 * @return string
	 */
	public function getEPID()
	{
		return $this->EPID;
	}
	/**
	 * Set StockPhoto
	 * @param string StockPhoto
	 * @return string
	 */
	public function setStockPhoto($_StockPhoto)
	{
		return ($this->StockPhoto = $_StockPhoto);
	}
	/**
	 * Get StockPhoto
	 * @return string
	 */
	public function getStockPhoto()
	{
		return $this->StockPhoto;
	}
	/**
	 * Set Recommended
	 * @param boolean Recommended
	 * @return boolean
	 */
	public function setRecommended($_Recommended)
	{
		return ($this->Recommended = $_Recommended);
	}
	/**
	 * Get Recommended
	 * @return boolean
	 */
	public function getRecommended()
	{
		return $this->Recommended;
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