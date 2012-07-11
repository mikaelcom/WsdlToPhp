<?php
/**
 * Class file for SPWebPartPagesTypeGetDataFromDataSourceControl
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetDataFromDataSourceControl
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetDataFromDataSourceControl extends SPWebPartPagesWsdlClass
{
	/**
	 * The dscXml
	 * @var string
	 */
	public $dscXml;
	/**
	 * The contextUrl
	 * @var string
	 */
	public $contextUrl;
	/**
	 * Constructor
	 * @param string dscXml
	 * @param string contextUrl
	 * @return SPWebPartPagesTypeGetDataFromDataSourceControl
	 */
	public function __construct($_dscXml = null,$_contextUrl = null)
	{
		parent::__construct(array('dscXml'=>$_dscXml,'contextUrl'=>$_contextUrl));
	}
	/**
	 * Set dscXml
	 * @param string dscXml
	 * @return string
	 */
	public function setDscXml($_dscXml)
	{
		return ($this->dscXml = $_dscXml);
	}
	/**
	 * Get dscXml
	 * @return string
	 */
	public function getDscXml()
	{
		return $this->dscXml;
	}
	/**
	 * Set contextUrl
	 * @param string contextUrl
	 * @return string
	 */
	public function setContextUrl($_contextUrl)
	{
		return ($this->contextUrl = $_contextUrl);
	}
	/**
	 * Get contextUrl
	 * @return string
	 */
	public function getContextUrl()
	{
		return $this->contextUrl;
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