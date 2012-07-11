<?php
/**
 * Class file for SPEmailWsTypeDeleteContact
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeDeleteContact
 * @date 06/07/2012
 */
class SPEmailWsTypeDeleteContact extends SPEmailWsWsdlClass
{
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * Constructor
	 * @param string Alias
	 * @return SPEmailWsTypeDeleteContact
	 */
	public function __construct($_Alias = null)
	{
		parent::__construct(array('Alias'=>$_Alias));
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