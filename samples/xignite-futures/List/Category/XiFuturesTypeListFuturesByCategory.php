<?php
/**
 * Class file for XiFuturesTypeListFuturesByCategory
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFuturesByCategory
 * @date 08/07/2012
 */
class XiFuturesTypeListFuturesByCategory extends XiFuturesWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Category;
	/**
	 * Constructor
	 * @param string Category
	 * @return XiFuturesTypeListFuturesByCategory
	 */
	public function __construct($_Category = null)
	{
		parent::__construct(array('Category'=>$_Category));
	}
	/**
	 * Set Category
	 * @param string Category
	 * @return string
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->Category;
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