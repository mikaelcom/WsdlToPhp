<?php
/**
 * Class file for EbayFindTypeCondition
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeCondition
 * Documentation : Information that describes an item's condition.
 * @date 04/07/2012
 */
class EbayFindTypeCondition extends EbayFindWsdlClass
{
	/**
	 * The conditionId
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The numeric ID (e.g., 1000) for the item condition.<br> <br> In item results, this is only returned when the seller listed the item with a condition ID. Some categories don't support or require condition IDs (e.g., most Antiques categories don't). Also, until spring 2011, some GTC listings may define the item condition in item specifics instead, so no ID is returned.<br> <br> If you specify Condition in itemFilter, the response returns items with the correctly matching condition(s), even if conditionId is not returned. For example, if you specify a value of "New" or "1000" in the item filter, the response only returns new items.
	 * @var int
	 */
	public $conditionId;
	/**
	 * The conditionDisplayName
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : The human-readable label for the item condition. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).<br> <br> In item results, this is only returned when the seller specified the item's condition using a structured format eBay recognizes (e.g., conditionId or an older item specifics format).<br> <br> <b>When conditionId is also present:</b> Most categories use the same display name for the same condition ID. Some categories may override the display name based on buyer expectations for items in the category. For example, condition ID 1000 could be called "New" in one category and "New with tags" in another. If an item is listed in two categories, the primary category controls the display name.<br> <br> Behind the scenes, eBay's search engine uses the ID (not the display name) to determine whether items are new, used, or refurbished. So, if you need to normalize the conditions across categories (such as to group items by condition), it may be easier to use the ID and then show the varying display names for reference.<br> <br> <b>In condition histograms:</b> If you search against a specific category and some items match based on their secondary category, the histogram only shows the display name if the secondary category supports the condition. (Condition IDs and names are dependent on the primary category.) However, the histogram shows the condition ID and item counts. This should only occur in a very small percent of results. Histograms may support display names in these cases later in 2011. As a workaround, you can fill in the missing name based on the "Item Condition IDs and Names" (link below) or based on the condition from an applicable item in the results.<br> <br> For example, suppose a seller lists a concert T-shirt in a clothing category with the condition "New without tags" (1500), and also in a music accessories secondary category (where "New without tags" isn't a recognized condition). If you specify the music accessories category in your request, the condition ID (1500) is shown in the histogram, but not the display name. However, the display name is shown within the items.
	 * @var string
	 */
	public $conditionDisplayName;
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
	 * @param int conditionId
	 * @param string conditionDisplayName
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeCondition
	 */
	public function __construct($_conditionId = null,$_conditionDisplayName,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('conditionId'=>$_conditionId,'conditionDisplayName'=>$_conditionDisplayName,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set conditionId
	 * @param int conditionId
	 * @return int
	 */
	public function setConditionId($_conditionId)
	{
		return ($this->conditionId = $_conditionId);
	}
	/**
	 * Get conditionId
	 * @return int
	 */
	public function getConditionId()
	{
		return $this->conditionId;
	}
	/**
	 * Set conditionDisplayName
	 * @param string conditionDisplayName
	 * @return string
	 */
	public function setConditionDisplayName($_conditionDisplayName)
	{
		return ($this->conditionDisplayName = $_conditionDisplayName);
	}
	/**
	 * Get conditionDisplayName
	 * @return string
	 */
	public function getConditionDisplayName()
	{
		return $this->conditionDisplayName;
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