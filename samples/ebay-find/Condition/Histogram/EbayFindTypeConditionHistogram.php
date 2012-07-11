<?php
/**
 * Class file for EbayFindTypeConditionHistogram
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeConditionHistogram
 * Documentation : Container for histogram fields.
 * @date 04/07/2012
 */
class EbayFindTypeConditionHistogram extends EbayFindWsdlClass
{
	/**
	 * The condition
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : The ID and name of a condition that was found in the item results.
	 * @var EbayFindTypeCondition
	 */
	public $condition;
	/**
	 * The count
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : The number of items found that match the condition. Only counts items where the seller specified the condition by using item.conditionId.
	 * @var int
	 */
	public $count;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayFindTypeCondition condition
	 * @param int count
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeConditionHistogram
	 */
	public function __construct($_condition,$_count,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('condition'=>$_condition,'count'=>$_count,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set condition
	 * @param Condition condition
	 * @return Condition
	 */
	public function setCondition($_condition)
	{
		return ($this->condition = $_condition);
	}
	/**
	 * Get condition
	 * @return EbayFindTypeCondition
	 */
	public function getCondition()
	{
		return $this->condition;
	}
	/**
	 * Set count
	 * @param int count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return int
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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