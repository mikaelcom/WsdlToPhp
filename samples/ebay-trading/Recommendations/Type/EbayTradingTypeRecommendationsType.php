<?php
/**
 * Class file for EbayTradingTypeRecommendationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRecommendationsType
 * Documentation : Defines details about recommended names and values for custom Item Specifics.
 * @date 04/07/2012
 */
class EbayTradingTypeRecommendationsType extends EbayTradingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The leaf category in which the associated Item Specifics are popular. This is always a category that you specified in the request.<br> <br> Only returned for categories that have popular Item Specifics, or when you also pass in the Name field.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The NameRecommendation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains an Item Specific that eBay recommends as popular within the specified category. Only returned if recommendations are found.
	 * @var EbayTradingTypeNameRecommendationType
	 */
	public $NameRecommendation;
	/**
	 * The Updated
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the recommended Item Specifics for this category have changed since the time you specified (in LastUpdateTime). (In this case, we suggest you retrieve the latest data for the category.) If false, the recommended Item Specifics for this category have not changed since the time you specified.<br> <br> Only returned when you pass LastUpdateTime in the request.
	 * @var boolean
	 */
	public $Updated;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param EbayTradingTypeNameRecommendationType NameRecommendation
	 * @param boolean Updated
	 * @param DOMDocument any
	 * @return EbayTradingTypeRecommendationsType
	 */
	public function __construct($_CategoryID = null,$_NameRecommendation = null,$_Updated = null,$_any = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'NameRecommendation'=>$_NameRecommendation,'Updated'=>$_Updated,'any'=>$_any));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set NameRecommendation
	 * @param NameRecommendationType NameRecommendation
	 * @return NameRecommendationType
	 */
	public function setNameRecommendation($_NameRecommendation)
	{
		return ($this->NameRecommendation = $_NameRecommendation);
	}
	/**
	 * Get NameRecommendation
	 * @return EbayTradingTypeNameRecommendationType
	 */
	public function getNameRecommendation()
	{
		return $this->NameRecommendation;
	}
	/**
	 * Set Updated
	 * @param boolean Updated
	 * @return boolean
	 */
	public function setUpdated($_Updated)
	{
		return ($this->Updated = $_Updated);
	}
	/**
	 * Get Updated
	 * @return boolean
	 */
	public function getUpdated()
	{
		return $this->Updated;
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