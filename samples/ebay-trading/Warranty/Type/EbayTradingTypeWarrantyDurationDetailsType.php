<?php
/**
 * Class file for EbayTradingTypeWarrantyDurationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarrantyDurationDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeWarrantyDurationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The WarrantyDurationOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The warranty period. This value can be passed in the AddItem family of calls.
	 * @var token
	 */
	public $WarrantyDurationOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present WarrantyDurationOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use WarrantyDurationOption instead.)
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
	 * @param token WarrantyDurationOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeWarrantyDurationDetailsType
	 */
	public function __construct($_WarrantyDurationOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('WarrantyDurationOption'=>$_WarrantyDurationOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set WarrantyDurationOption
	 * @param token WarrantyDurationOption
	 * @return token
	 */
	public function setWarrantyDurationOption($_WarrantyDurationOption)
	{
		return ($this->WarrantyDurationOption = $_WarrantyDurationOption);
	}
	/**
	 * Get WarrantyDurationOption
	 * @return token
	 */
	public function getWarrantyDurationOption()
	{
		return $this->WarrantyDurationOption;
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