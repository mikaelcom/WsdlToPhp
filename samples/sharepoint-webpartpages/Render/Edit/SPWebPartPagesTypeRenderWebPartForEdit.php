<?php
/**
 * Class file for SPWebPartPagesTypeRenderWebPartForEdit
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeRenderWebPartForEdit
 * @date 06/07/2012
 */
class SPWebPartPagesTypeRenderWebPartForEdit extends SPWebPartPagesWsdlClass
{
	/**
	 * The webPartXml
	 * @var string
	 */
	public $webPartXml;
	/**
	 * Constructor
	 * @param string webPartXml
	 * @return SPWebPartPagesTypeRenderWebPartForEdit
	 */
	public function __construct($_webPartXml = null)
	{
		parent::__construct(array('webPartXml'=>$_webPartXml));
	}
	/**
	 * Set webPartXml
	 * @param string webPartXml
	 * @return string
	 */
	public function setWebPartXml($_webPartXml)
	{
		return ($this->webPartXml = $_webPartXml);
	}
	/**
	 * Get webPartXml
	 * @return string
	 */
	public function getWebPartXml()
	{
		return $this->webPartXml;
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