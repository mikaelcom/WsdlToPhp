<?php
/**
 * Class file for EbayTradingTypeConditionValuesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeConditionValuesType
 * Documentation : Fields in this type provide condition values and display names.
 * @date 04/07/2012
 */
class EbayTradingTypeConditionValuesType extends EbayTradingWsdlClass
{
	/**
	 * The Condition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines an item condition that a category supports.
	 * @var EbayTradingTypeConditionType
	 */
	public $Condition;
	/**
	 * The ConditionHelpURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to the eBay Web site's item condition help for the category. This may include policies about how to assess the condition of an item in the category. To reduce item-not-as-described disputes, we recommend that you refer sellers (and buyers) to these help pages. These help pages may vary for some categories.<br> <br> The Sandbox might not return valid help URLs.
	 * @var anyURI
	 */
	public $ConditionHelpURL;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeConditionType Condition
	 * @param anyURI ConditionHelpURL
	 * @param DOMDocument any
	 * @return EbayTradingTypeConditionValuesType
	 */
	public function __construct($_Condition = null,$_ConditionHelpURL = null,$_any = null)
	{
		parent::__construct(array('Condition'=>$_Condition,'ConditionHelpURL'=>$_ConditionHelpURL,'any'=>$_any));
	}
	/**
	 * Set Condition
	 * @param ConditionType Condition
	 * @return ConditionType
	 */
	public function setCondition($_Condition)
	{
		return ($this->Condition = $_Condition);
	}
	/**
	 * Get Condition
	 * @return EbayTradingTypeConditionType
	 */
	public function getCondition()
	{
		return $this->Condition;
	}
	/**
	 * Set ConditionHelpURL
	 * @param anyURI ConditionHelpURL
	 * @return anyURI
	 */
	public function setConditionHelpURL($_ConditionHelpURL)
	{
		return ($this->ConditionHelpURL = $_ConditionHelpURL);
	}
	/**
	 * Get ConditionHelpURL
	 * @return anyURI
	 */
	public function getConditionHelpURL()
	{
		return $this->ConditionHelpURL;
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