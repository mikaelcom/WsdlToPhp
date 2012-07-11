<?php
/**
 * Class file for EbayFindTypeErrorParameter
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeErrorParameter
 * Documentation : The name of the input parameter returned with the error. Inspecting the parameter (or its input value) will often aid in understanding the cause of the error. Not all error messages contain this value.
 * @date 04/07/2012
 */
class EbayFindTypeErrorParameter extends EbayFindWsdlClass
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
	 * @return EbayFindTypeErrorParameter
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