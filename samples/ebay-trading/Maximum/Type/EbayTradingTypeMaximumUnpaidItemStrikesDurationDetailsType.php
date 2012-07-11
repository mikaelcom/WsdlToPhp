<?php
/**
 * Class file for EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType
 * Documentation : [Selling] Defined time period for maximum unpaid items.
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : [Selling] The period is the number of days (last 60 days, last 180 days, etc.) during which the buyer's unpaid item strikes are calculated.
	 * @var EbayTradingTypePeriodCodeType
	 */
	public $Period;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : [Selling] The description of the period, such as 'month', 'quarter', or 'half a year'. The data in this field can be used as a label in your application's display.
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
	 * @param EbayTradingTypePeriodCodeType Period
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesDurationDetailsType
	 */
	public function __construct($_Period = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('Period'=>$_Period,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set Period
	 * @param PeriodCodeType Period
	 * @return PeriodCodeType
	 */
	public function setPeriod($_Period)
	{
		return ($this->Period = EbayTradingTypePeriodCodeType::valueIsValid($_Period)?$_Period:null);
	}
	/**
	 * Get Period
	 * @return EbayTradingTypePeriodCodeType
	 */
	public function getPeriod()
	{
		return $this->Period;
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