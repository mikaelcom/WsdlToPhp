<?php
/**
 * Class file for PPInvoiceTypeErrorParameter
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeErrorParameter
 * @date 02/07/2012
 */
class PPInvoiceTypeErrorParameter extends PPInvoiceWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string _
	 * @param string name
	 * @return PPInvoiceTypeErrorParameter
	 */
	public function __construct($__ = null,$_name = null)
	{
		parent::__construct(array('_'=>$__,'name'=>$_name));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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