<?php
/**
 * Class file for YMailTypeCreateFolder
 * @date 02/07/2012
 */
/**
 * Class YMailTypeCreateFolder
 * @date 02/07/2012
 */
class YMailTypeCreateFolder extends YMailWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string name
	 * @return YMailTypeCreateFolder
	 */
	public function __construct($_name)
	{
		parent::__construct(array('name'=>$_name));
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