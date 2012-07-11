<?php
/**
 * Class file for EbayTradingTypeReturnsWithinDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReturnsWithinDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeReturnsWithinDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ReturnsWithinOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value indicates the number of days that a buyer has to return an item from the day they receive the item. This value can be passed in the Add/Revise/Relist family of API calls. <br/> <br/> <span class="tablenote"><b>Note:</b> Beginning with version 771, listings created, revised, or relisted with deprecated <b>RefundOption</b> and/or <b>ReturnsWithinOption</b> values (using Add/Revise/Relist family of API calls) will start being blocked. <br/><br/> For <b>ReturnsWithinOption</b>, the deprecated values are <b>Days_3</b> and <b>Days_7</b>. Instead of these deprecated values, the seller must offer a 14-day, 30-day, or 60-day return window. </span> <br/>
	 * @var token
	 */
	public $ReturnsWithinOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present ReturnsWithinOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use ReturnsWithinOption instead.)
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
	 * @param token ReturnsWithinOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeReturnsWithinDetailsType
	 */
	public function __construct($_ReturnsWithinOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('ReturnsWithinOption'=>$_ReturnsWithinOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set ReturnsWithinOption
	 * @param token ReturnsWithinOption
	 * @return token
	 */
	public function setReturnsWithinOption($_ReturnsWithinOption)
	{
		return ($this->ReturnsWithinOption = $_ReturnsWithinOption);
	}
	/**
	 * Get ReturnsWithinOption
	 * @return token
	 */
	public function getReturnsWithinOption()
	{
		return $this->ReturnsWithinOption;
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