<?php
/**
 * Class file for EbayTradingTypeNumberOfPolicyViolationsDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNumberOfPolicyViolationsDetailsType
 * Documentation : [Selling] The number of policy violation(s) that are allowed by the site.
 * @date 04/07/2012
 */
class EbayTradingTypeNumberOfPolicyViolationsDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] Maximum allowed buyer policy violation reports against a buyer. If the limit has been reached reached, the buyer can not bid on this item.
	 * @var int
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int Count
	 * @param DOMDocument any
	 * @return EbayTradingTypeNumberOfPolicyViolationsDetailsType
	 */
	public function __construct($_Count = null,$_any = null)
	{
		parent::__construct(array('Count'=>$_Count,'any'=>$_any));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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