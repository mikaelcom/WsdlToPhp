<?php
/**
 * Class file for EbayTradingTypeMaximumItemRequirementsDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaximumItemRequirementsDetailsType
 * Documentation : [Selling] A means of limiting unpaying or low feedback bidders
 * @date 04/07/2012
 */
class EbayTradingTypeMaximumItemRequirementsDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The MaximumItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] The maximum mumber of items allowed for this buyer.
	 * @var int
	 */
	public $MaximumItemCount;
	/**
	 * The MinimumFeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] The minimum feedback required for a buyer who wants to purchase this item..
	 * @var int
	 */
	public $MinimumFeedbackScore;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MaximumItemCount
	 * @param int MinimumFeedbackScore
	 * @param DOMDocument any
	 * @return EbayTradingTypeMaximumItemRequirementsDetailsType
	 */
	public function __construct($_MaximumItemCount = null,$_MinimumFeedbackScore = null,$_any = null)
	{
		parent::__construct(array('MaximumItemCount'=>$_MaximumItemCount,'MinimumFeedbackScore'=>$_MinimumFeedbackScore,'any'=>$_any));
	}
	/**
	 * Set MaximumItemCount
	 * @param int MaximumItemCount
	 * @return int
	 */
	public function setMaximumItemCount($_MaximumItemCount)
	{
		return ($this->MaximumItemCount = $_MaximumItemCount);
	}
	/**
	 * Get MaximumItemCount
	 * @return int
	 */
	public function getMaximumItemCount()
	{
		return $this->MaximumItemCount;
	}
	/**
	 * Set MinimumFeedbackScore
	 * @param int MinimumFeedbackScore
	 * @return int
	 */
	public function setMinimumFeedbackScore($_MinimumFeedbackScore)
	{
		return ($this->MinimumFeedbackScore = $_MinimumFeedbackScore);
	}
	/**
	 * Get MinimumFeedbackScore
	 * @return int
	 */
	public function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
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