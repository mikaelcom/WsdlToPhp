<?php
/**
 * Class file for EbayTradingTypeItemCompatibilityEnabledDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemCompatibilityEnabledDefinitionType
 * Documentation : Defines the parts compatibility feature. If the field is present, the corresponding feature applies to the site. The field is returned as an empty element (e.g., a boolean value is not returned). <br><br> Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used. <br><br> There are two ways to enter parts compatibility: by application and by specification. <ul> <li> Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item. </li> <li>Entering parts compatibility by specification involves specifying the part's relevant dimensions and characteristics necessary to determine the assemblies with which the part is compatible (e.g., Section Width, Aspect Ratio, Rim Diammeter, Load Index, and Speed Rating values for a tire) using attributes.</li> </ul>
 * @date 04/07/2012
 */
class EbayTradingTypeItemCompatibilityEnabledDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemCompatibilityEnabledDefinitionType
	 */
	public function __construct($_any = null)
	{
		parent::__construct(array('any'=>$_any));
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