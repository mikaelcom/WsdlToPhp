<?php
/**
 * Class file for EbayTradingTypeShippingCostPaidByDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingCostPaidByDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeShippingCostPaidByDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingCostPaidByOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The party who pays the shipping cost for a returned item. This value can be passed in the AddItem family of calls.
	 * @var token
	 */
	public $ShippingCostPaidByOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present ShippingCostPaidByOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use ShippingCostPaidByOption instead.)
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
	 * @param token ShippingCostPaidByOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingCostPaidByDetailsType
	 */
	public function __construct($_ShippingCostPaidByOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('ShippingCostPaidByOption'=>$_ShippingCostPaidByOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set ShippingCostPaidByOption
	 * @param token ShippingCostPaidByOption
	 * @return token
	 */
	public function setShippingCostPaidByOption($_ShippingCostPaidByOption)
	{
		return ($this->ShippingCostPaidByOption = $_ShippingCostPaidByOption);
	}
	/**
	 * Get ShippingCostPaidByOption
	 * @return token
	 */
	public function getShippingCostPaidByOption()
	{
		return $this->ShippingCostPaidByOption;
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