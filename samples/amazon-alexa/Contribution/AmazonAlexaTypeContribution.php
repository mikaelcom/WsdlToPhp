<?php
/**
 * Class file for AmazonAlexaTypeContribution
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeContribution
 * @date 10/07/2012
 */
class AmazonAlexaTypeContribution extends AmazonAlexaWsdlClass
{
	/**
	 * The PageViews
	 * @var string
	 */
	public $PageViews;
	/**
	 * The Users
	 * @var string
	 */
	public $Users;
	/**
	 * Constructor
	 * @param string PageViews
	 * @param string Users
	 * @return AmazonAlexaTypeContribution
	 */
	public function __construct($_PageViews = null,$_Users = null)
	{
		parent::__construct(array('PageViews'=>$_PageViews,'Users'=>$_Users));
	}
	/**
	 * Set PageViews
	 * @param string PageViews
	 * @return string
	 */
	public function setPageViews($_PageViews)
	{
		return ($this->PageViews = $_PageViews);
	}
	/**
	 * Get PageViews
	 * @return string
	 */
	public function getPageViews()
	{
		return $this->PageViews;
	}
	/**
	 * Set Users
	 * @param string Users
	 * @return string
	 */
	public function setUsers($_Users)
	{
		return ($this->Users = $_Users);
	}
	/**
	 * Get Users
	 * @return string
	 */
	public function getUsers()
	{
		return $this->Users;
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