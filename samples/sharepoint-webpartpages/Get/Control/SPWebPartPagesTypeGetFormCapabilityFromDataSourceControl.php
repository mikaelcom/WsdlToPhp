<?php
/**
 * Class file for SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl extends SPWebPartPagesWsdlClass
{
	/**
	 * The dscXml
	 * @var string
	 */
	public $dscXml;
	/**
	 * Constructor
	 * @param string dscXml
	 * @return SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl
	 */
	public function __construct($_dscXml = null)
	{
		parent::__construct(array('dscXml'=>$_dscXml));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>