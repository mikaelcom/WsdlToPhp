<?php
/**
 * Class file for SPListDataRetrievalTypeField
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeField
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeField extends SPListDataRetrievalWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Alias
	 * @return SPListDataRetrievalTypeField
	 */
	public function __construct($_Name = null,$_Alias = null)
	{
		parent::__construct(array('Name'=>$_Name,'Alias'=>$_Alias));
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
	 * Set Alias
	 * @param string Alias
	 * @return string
	 */
	public function setAlias($_Alias)
	{
		return ($this->Alias = $_Alias);
	}
	/**
	 * Get Alias
	 * @return string
	 */
	public function getAlias()
	{
		return $this->Alias;
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