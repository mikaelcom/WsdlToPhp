<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoListType
 * Documentation : Provides information about an automated listing rule. Automated listing rules cannot be combined with automated relisting rules. A template can have one set of information per automated listing rule specified.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoListType extends EbayTradingWsdlClass
{
	/**
	 * The SourceSaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The source template ID for the rule that was retrieved. In the case of automated listing rules retrieved for an item, even if the item does not have an associated automation rule, an automated listing rule is inherited from the source template.
	 * @var long
	 */
	public $SourceSaleTemplateID;
	/**
	 * The KeepMinActive
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an automated listing rule that keeps a minimum number of listings on the site.
	 * @var EbayTradingTypeSellingManagerAutoListMinActiveItemsType
	 */
	public $KeepMinActive;
	/**
	 * The ListAccordingToSchedule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an automated listing rule that lists items according to a specified schedule.
	 * @var EbayTradingTypeSellingManagerAutoListAccordingToScheduleType
	 */
	public $ListAccordingToSchedule;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long SourceSaleTemplateID
	 * @param EbayTradingTypeSellingManagerAutoListMinActiveItemsType KeepMinActive
	 * @param EbayTradingTypeSellingManagerAutoListAccordingToScheduleType ListAccordingToSchedule
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerAutoListType
	 */
	public function __construct($_SourceSaleTemplateID = null,$_KeepMinActive = null,$_ListAccordingToSchedule = null,$_any = null)
	{
		parent::__construct(array('SourceSaleTemplateID'=>$_SourceSaleTemplateID,'KeepMinActive'=>$_KeepMinActive,'ListAccordingToSchedule'=>$_ListAccordingToSchedule,'any'=>$_any));
	}
	/**
	 * Set SourceSaleTemplateID
	 * @param long SourceSaleTemplateID
	 * @return long
	 */
	public function setSourceSaleTemplateID($_SourceSaleTemplateID)
	{
		return ($this->SourceSaleTemplateID = $_SourceSaleTemplateID);
	}
	/**
	 * Get SourceSaleTemplateID
	 * @return long
	 */
	public function getSourceSaleTemplateID()
	{
		return $this->SourceSaleTemplateID;
	}
	/**
	 * Set KeepMinActive
	 * @param SellingManagerAutoListMinActiveItemsType KeepMinActive
	 * @return SellingManagerAutoListMinActiveItemsType
	 */
	public function setKeepMinActive($_KeepMinActive)
	{
		return ($this->KeepMinActive = $_KeepMinActive);
	}
	/**
	 * Get KeepMinActive
	 * @return EbayTradingTypeSellingManagerAutoListMinActiveItemsType
	 */
	public function getKeepMinActive()
	{
		return $this->KeepMinActive;
	}
	/**
	 * Set ListAccordingToSchedule
	 * @param SellingManagerAutoListAccordingToScheduleType ListAccordingToSchedule
	 * @return SellingManagerAutoListAccordingToScheduleType
	 */
	public function setListAccordingToSchedule($_ListAccordingToSchedule)
	{
		return ($this->ListAccordingToSchedule = $_ListAccordingToSchedule);
	}
	/**
	 * Get ListAccordingToSchedule
	 * @return EbayTradingTypeSellingManagerAutoListAccordingToScheduleType
	 */
	public function getListAccordingToSchedule()
	{
		return $this->ListAccordingToSchedule;
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