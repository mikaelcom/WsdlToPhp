<?php
/**
 * Class file for SPListDataRetrievalTypeOrderField
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeOrderField
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeOrderField extends SPListDataRetrievalWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Direction
	 * @var OrderDirection
	 */
	public $Direction;
	/**
	 * Constructor
	 * @param string Name
	 * @param OrderDirection Direction
	 * @return SPListDataRetrievalTypeOrderField
	 */
	public function __construct($_Name = null,$_Direction = null)
	{
		parent::__construct(array('Name'=>$_Name,'Direction'=>$_Direction));
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
	 * Set Direction
	 * @param OrderDirection Direction
	 * @return OrderDirection
	 */
	public function setDirection($_Direction)
	{
		return ($this->Direction = $_Direction);
	}
	/**
	 * Get Direction
	 * @return OrderDirection
	 */
	public function getDirection()
	{
		return $this->Direction;
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