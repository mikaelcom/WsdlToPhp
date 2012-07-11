<?php
/**
 * Class file for SPListDataRetrievalTypeServerParameter
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeServerParameter
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeServerParameter extends SPListDataRetrievalWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Null
	 * @var boolean
	 */
	public $Null;
	/**
	 * Constructor
	 * @param string _
	 * @param string Name
	 * @param boolean Null
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function __construct($__ = null,$_Name = null,$_Null = null)
	{
		parent::__construct(array('_'=>$__,'Name'=>$_Name,'Null'=>$_Null));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Null
	 * @param boolean Null
	 * @return boolean
	 */
	public function setNull($_Null)
	{
		return ($this->Null = $_Null);
	}
	/**
	 * Get Null
	 * @return boolean
	 */
	public function getNull()
	{
		return $this->Null;
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