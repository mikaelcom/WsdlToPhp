<?php
/**
 * Class file for EbayTradingTypeContextSearchAssetType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeContextSearchAssetType
 * Documentation : Score and rank for a keyword identified for a web page.
 * @date 04/07/2012
 */
class EbayTradingTypeContextSearchAssetType extends EbayTradingWsdlClass
{
	/**
	 * The Keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The keyword.
	 * @var string
	 */
	public $Keyword;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay category in which the keyword is used.
	 * @var EbayTradingTypeCategoryType
	 */
	public $Category;
	/**
	 * The Ranking
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ranking of this keyword and category relative to other keywords and categories (when scores are sorted).
	 * @var int
	 */
	public $Ranking;
	/**
	 * Constructor
	 * @param string Keyword
	 * @param EbayTradingTypeCategoryType Category
	 * @param int Ranking
	 * @return EbayTradingTypeContextSearchAssetType
	 */
	public function __construct($_Keyword = null,$_Category = null,$_Ranking = null)
	{
		parent::__construct(array('Keyword'=>$_Keyword,'Category'=>$_Category,'Ranking'=>$_Ranking));
	}
	/**
	 * Set Keyword
	 * @param string Keyword
	 * @return string
	 */
	public function setKeyword($_Keyword)
	{
		return ($this->Keyword = $_Keyword);
	}
	/**
	 * Get Keyword
	 * @return string
	 */
	public function getKeyword()
	{
		return $this->Keyword;
	}
	/**
	 * Set Category
	 * @param CategoryType Category
	 * @return CategoryType
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return EbayTradingTypeCategoryType
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set Ranking
	 * @param int Ranking
	 * @return int
	 */
	public function setRanking($_Ranking)
	{
		return ($this->Ranking = $_Ranking);
	}
	/**
	 * Get Ranking
	 * @return int
	 */
	public function getRanking()
	{
		return $this->Ranking;
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