<?php
/**
 * Class file for GGAdwordsTypePage
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypePage
 * Documentation : Contains the results from a get call.
 * @date 03/07/2012
 */
class GGAdwordsTypePage extends GGAdwordsWsdlClass
{
	/**
	 * The totalNumEntries
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of entries in the result that this page is a part of.
	 * @var int
	 */
	public $totalNumEntries;
	/**
	 * The PageType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of Page. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $PageType;
	/**
	 * Constructor
	 * @param int totalNumEntries
	 * @param string PageType
	 * @return GGAdwordsTypePage
	 */
	public function __construct($_totalNumEntries = null,$_PageType = null)
	{
		parent::__construct(array('totalNumEntries'=>$_totalNumEntries,'PageType'=>$_PageType));
	}
	/**
	 * Set totalNumEntries
	 * @param int totalNumEntries
	 * @return int
	 */
	public function setTotalNumEntries($_totalNumEntries)
	{
		return ($this->totalNumEntries = $_totalNumEntries);
	}
	/**
	 * Get totalNumEntries
	 * @return int
	 */
	public function getTotalNumEntries()
	{
		return $this->totalNumEntries;
	}
	/**
	 * Set PageType
	 * @param string PageType
	 * @return string
	 */
	public function setPageType($_PageType)
	{
		return ($this->PageType = $_PageType);
	}
	/**
	 * Get PageType
	 * @return string
	 */
	public function getPageType()
	{
		return $this->PageType;
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