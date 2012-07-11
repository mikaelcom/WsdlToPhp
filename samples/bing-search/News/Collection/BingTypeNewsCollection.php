<?php
/**
 * Class file for BingTypeNewsCollection
 * @date 02/07/2012
 */
/**
 * Class BingTypeNewsCollection
 * @date 02/07/2012
 */
class BingTypeNewsCollection extends BingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The NewsArticles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfNewsArticle
	 */
	public $NewsArticles;
	/**
	 * Constructor
	 * @param string Name
	 * @param BingTypeArrayOfNewsArticle NewsArticles
	 * @return BingTypeNewsCollection
	 */
	public function __construct($_Name = null,$_NewsArticles = null)
	{
		parent::__construct(array('Name'=>$_Name,'NewsArticles'=>new BingTypeArrayOfNewsArticle($_NewsArticles)));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set NewsArticles
	 * @param ArrayOfNewsArticle NewsArticles
	 * @return ArrayOfNewsArticle
	 */
	public function setNewsArticles($_NewsArticles)
	{
		return ($this->NewsArticles = $_NewsArticles);
	}
	/**
	 * Get NewsArticles
	 * @return BingTypeArrayOfNewsArticle
	 */
	public function getNewsArticles()
	{
		return $this->NewsArticles;
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