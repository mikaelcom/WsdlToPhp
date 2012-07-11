<?php
/**
 * Class file for EbayTradingTypeShippingCategoryDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingCategoryDetailsType
 * Documentation : This type defines the <b>ShippingCategoryDetails</b> container. When the <b>DetailName</b> field is set to ShippingCategoryDetails in a GeteBayDetails request, one <b>ShippingCategoryDetails</b> container is returned for each valid shipping category used on the eBay site. Besides being useful to view the list of valid shipping categories, this container is also useful to discover when the last update to shipping categories was made by eBay.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingCategoryDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more information on these shipping categories, and which services fall into which category, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
	 * @var token
	 */
	public $ShippingCategory;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A brief description of the shipping category. This field is localized per site.
	 * @var string
	 */
	public $Description;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current version number for shipping categories. Sellers can compare this version number to their version number to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the time of the last version update.
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
	 * @param token ShippingCategory
	 * @param string Description
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingCategoryDetailsType
	 */
	public function __construct($_ShippingCategory = null,$_Description = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('ShippingCategory'=>$_ShippingCategory,'Description'=>$_Description,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set ShippingCategory
	 * @param token ShippingCategory
	 * @return token
	 */
	public function setShippingCategory($_ShippingCategory)
	{
		return ($this->ShippingCategory = $_ShippingCategory);
	}
	/**
	 * Get ShippingCategory
	 * @return token
	 */
	public function getShippingCategory()
	{
		return $this->ShippingCategory;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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