<?php
/**
 * Class file for EbayTradingTypeReturnsAcceptedDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReturnsAcceptedDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeReturnsAcceptedDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ReturnsAcceptedOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller allows the buyer to return the item. This value can be passed in the AddItem family of calls.
	 * @var token
	 */
	public $ReturnsAcceptedOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present ReturnsAcceptedOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
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
	 * @param token ReturnsAcceptedOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeReturnsAcceptedDetailsType
	 */
	public function __construct($_ReturnsAcceptedOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('ReturnsAcceptedOption'=>$_ReturnsAcceptedOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set ReturnsAcceptedOption
	 * @param token ReturnsAcceptedOption
	 * @return token
	 */
	public function setReturnsAcceptedOption($_ReturnsAcceptedOption)
	{
		return ($this->ReturnsAcceptedOption = $_ReturnsAcceptedOption);
	}
	/**
	 * Get ReturnsAcceptedOption
	 * @return token
	 */
	public function getReturnsAcceptedOption()
	{
		return $this->ReturnsAcceptedOption;
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