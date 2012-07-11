<?php
/**
 * Class file for SPSitesTypeArrayOfTemplate
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeArrayOfTemplate
 * @date 06/07/2012
 */
class SPSitesTypeArrayOfTemplate extends SPSitesWsdlClass
{
	/**
	 * The Template
	 * @var SPSitesTypeTemplate
	 */
	public $Template;
	/**
	 * Constructor
	 * @param SPSitesTypeTemplate Template
	 * @return SPSitesTypeArrayOfTemplate
	 */
	public function __construct($_Template = null)
	{
		parent::__construct(array('Template'=>$_Template));
	}
	/**
	 * Set Template
	 * @param Template Template
	 * @return Template
	 */
	public function setTemplate($_Template)
	{
		return ($this->Template = $_Template);
	}
	/**
	 * Get Template
	 * @return SPSitesTypeTemplate
	 */
	public function getTemplate()
	{
		return $this->Template;
	}
	/**
	 * Returns the current element
	 * @see SPSitesWsdlClass::current()
	 * @return SPSitesTypeTemplate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPSitesWsdlClass::item()
	 * @param int
	 * @return SPSitesTypeTemplate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPSitesWsdlClass::first()
	 * @return SPSitesTypeTemplate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPSitesWsdlClass::last()
	 * @return SPSitesTypeTemplate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPSitesWsdlClass::offsetGet()
	 * @param int
	 * @return SPSitesTypeTemplate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Template'
	 */
	public function getAttributeName()
	{
		return 'Template';
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