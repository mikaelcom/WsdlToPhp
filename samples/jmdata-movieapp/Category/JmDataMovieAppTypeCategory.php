<?php
/**
 * Class file for JmDataMovieAppTypeCategory
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeCategory
 * @date 10/07/2012
 */
class JmDataMovieAppTypeCategory extends JmDataMovieAppWsdlClass
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * Constructor
	 * @param int ID
	 * @param string Name
	 * @return JmDataMovieAppTypeCategory
	 */
	public function __construct($_ID,$_Name = null)
	{
		parent::__construct(array('ID'=>$_ID,'Name'=>$_Name));
	}
	/**
	 * Set ID
	 * @param int ID
	 * @return int
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>