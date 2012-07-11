<?php
/**
 * Class file for XWebNewsTypeGetNewArticleIDResponse
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeGetNewArticleIDResponse
 * @date 09/07/2012
 */
class XWebNewsTypeGetNewArticleIDResponse extends XWebNewsWsdlClass
{
	/**
	 * The Article_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Article_ID;
	/**
	 * Constructor
	 * @param positiveInteger Article_ID
	 * @return XWebNewsTypeGetNewArticleIDResponse
	 */
	public function __construct($_Article_ID)
	{
		parent::__construct(array('Article_ID'=>$_Article_ID));
	}
	/**
	 * Set Article_ID
	 * @param positiveInteger Article_ID
	 * @return positiveInteger
	 */
	public function setArticle_ID($_Article_ID)
	{
		return ($this->Article_ID = $_Article_ID);
	}
	/**
	 * Get Article_ID
	 * @return positiveInteger
	 */
	public function getArticle_ID()
	{
		return $this->Article_ID;
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