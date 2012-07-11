<?php
/**
 * Class file for EbayTradingTypeINEscrowWorkflowTimelineDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeINEscrowWorkflowTimelineDefinitionType
 * Documentation : Defines the escrow workflow version applicable for the given category on the India site, if the category supports PaisaPayFullEscrow. If this field is present, the corresponding feature applies to the category. The field is returned as an empty element.
 * @date 04/07/2012
 */
class EbayTradingTypeINEscrowWorkflowTimelineDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeINEscrowWorkflowTimelineDefinitionType
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