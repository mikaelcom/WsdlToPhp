<?php
/**
 * Class file for EbayTradingTypeWarrantyTypeDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarrantyTypeDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeWarrantyTypeDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The WarrantyTypeOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The source or type of the warranty. This value can be passed in the AddItem family of calls.
	 * @var token
	 */
	public $WarrantyTypeOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present WarrantyTypeOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use WarrantyTypeOption instead.)
	 * @var string
	 */
	public $Description;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token WarrantyTypeOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeWarrantyTypeDetailsType
	 */
	public function __construct($_WarrantyTypeOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('WarrantyTypeOption'=>$_WarrantyTypeOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set WarrantyTypeOption
	 * @param token WarrantyTypeOption
	 * @return token
	 */
	public function setWarrantyTypeOption($_WarrantyTypeOption)
	{
		return ($this->WarrantyTypeOption = $_WarrantyTypeOption);
	}
	/**
	 * Get WarrantyTypeOption
	 * @return token
	 */
	public function getWarrantyTypeOption()
	{
		return $this->WarrantyTypeOption;
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