<?php
/**
 * Class file for EbayTradingTypeSellingManagerTemplateDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerTemplateDetailsType
 * Documentation : Describes a Selling Manager Template
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerTemplateDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the template.
	 * @var string
	 */
	public $SaleTemplateID;
	/**
	 * The SaleTemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the template.
	 * @var string
	 */
	public $SaleTemplateName;
	/**
	 * The SuccessPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Success ratio.
	 * @var float
	 */
	public $SuccessPercent;
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the product that this template belongs to.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * The Template
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ItemType object that contains the data for the specified template.
	 * @var EbayTradingTypeItemType
	 */
	public $Template;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string SaleTemplateID
	 * @param string SaleTemplateName
	 * @param float SuccessPercent
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @param EbayTradingTypeItemType Template
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerTemplateDetailsType
	 */
	public function __construct($_SaleTemplateID = null,$_SaleTemplateName = null,$_SuccessPercent = null,$_SellingManagerProductDetails = null,$_Template = null,$_any = null)
	{
		parent::__construct(array('SaleTemplateID'=>$_SaleTemplateID,'SaleTemplateName'=>$_SaleTemplateName,'SuccessPercent'=>$_SuccessPercent,'SellingManagerProductDetails'=>$_SellingManagerProductDetails,'Template'=>$_Template,'any'=>$_any));
	}
	/**
	 * Set SaleTemplateID
	 * @param string SaleTemplateID
	 * @return string
	 */
	public function setSaleTemplateID($_SaleTemplateID)
	{
		return ($this->SaleTemplateID = $_SaleTemplateID);
	}
	/**
	 * Get SaleTemplateID
	 * @return string
	 */
	public function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * Set SaleTemplateName
	 * @param string SaleTemplateName
	 * @return string
	 */
	public function setSaleTemplateName($_SaleTemplateName)
	{
		return ($this->SaleTemplateName = $_SaleTemplateName);
	}
	/**
	 * Get SaleTemplateName
	 * @return string
	 */
	public function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
	}
	/**
	 * Set SuccessPercent
	 * @param float SuccessPercent
	 * @return float
	 */
	public function setSuccessPercent($_SuccessPercent)
	{
		return ($this->SuccessPercent = $_SuccessPercent);
	}
	/**
	 * Get SuccessPercent
	 * @return float
	 */
	public function getSuccessPercent()
	{
		return $this->SuccessPercent;
	}
	/**
	 * Set SellingManagerProductDetails
	 * @param SellingManagerProductDetailsType SellingManagerProductDetails
	 * @return SellingManagerProductDetailsType
	 */
	public function setSellingManagerProductDetails($_SellingManagerProductDetails)
	{
		return ($this->SellingManagerProductDetails = $_SellingManagerProductDetails);
	}
	/**
	 * Get SellingManagerProductDetails
	 * @return EbayTradingTypeSellingManagerProductDetailsType
	 */
	public function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * Set Template
	 * @param ItemType Template
	 * @return ItemType
	 */
	public function setTemplate($_Template)
	{
		return ($this->Template = $_Template);
	}
	/**
	 * Get Template
	 * @return EbayTradingTypeItemType
	 */
	public function getTemplate()
	{
		return $this->Template;
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