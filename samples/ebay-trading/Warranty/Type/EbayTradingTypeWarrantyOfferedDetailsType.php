<?php
/**
 * Class file for EbayTradingTypeWarrantyOfferedDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarrantyOfferedDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeWarrantyOfferedDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The WarrantyOfferedOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the item includes a warranty. This value can be passed in the AddItem family of calls.
	 * @var token
	 */
	public $WarrantyOfferedOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present WarrantyOfferedOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use WarrantyOfferedOption instead.)
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
	 * @param token WarrantyOfferedOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeWarrantyOfferedDetailsType
	 */
	public function __construct($_WarrantyOfferedOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('WarrantyOfferedOption'=>$_WarrantyOfferedOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set WarrantyOfferedOption
	 * @param token WarrantyOfferedOption
	 * @return token
	 */
	public function setWarrantyOfferedOption($_WarrantyOfferedOption)
	{
		return ($this->WarrantyOfferedOption = $_WarrantyOfferedOption);
	}
	/**
	 * Get WarrantyOfferedOption
	 * @return token
	 */
	public function getWarrantyOfferedOption()
	{
		return $this->WarrantyOfferedOption;
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