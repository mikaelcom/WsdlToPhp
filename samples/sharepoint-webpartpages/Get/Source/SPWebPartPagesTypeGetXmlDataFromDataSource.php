<?php
/**
 * Class file for SPWebPartPagesTypeGetXmlDataFromDataSource
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetXmlDataFromDataSource
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetXmlDataFromDataSource extends SPWebPartPagesWsdlClass
{
	/**
	 * The queryXml
	 * @var string
	 */
	public $queryXml;
	/**
	 * Constructor
	 * @param string queryXml
	 * @return SPWebPartPagesTypeGetXmlDataFromDataSource
	 */
	public function __construct($_queryXml = null)
	{
		parent::__construct(array('queryXml'=>$_queryXml));
	}
	/**
	 * Set queryXml
	 * @param string queryXml
	 * @return string
	 */
	public function setQueryXml($_queryXml)
	{
		return ($this->queryXml = $_queryXml);
	}
	/**
	 * Get queryXml
	 * @return string
	 */
	public function getQueryXml()
	{
		return $this->queryXml;
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