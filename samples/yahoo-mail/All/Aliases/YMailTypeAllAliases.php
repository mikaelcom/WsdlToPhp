<?php
/**
 * Class file for YMailTypeAllAliases
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAllAliases
 * @date 02/07/2012
 */
class YMailTypeAllAliases extends YMailWsdlClass
{
	/**
	 * The alias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeAlias
	 */
	public $alias;
	/**
	 * The aliasesTotal
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $aliasesTotal;
	/**
	 * Constructor
	 * @param YMailTypeAlias alias
	 * @param int aliasesTotal
	 * @return YMailTypeAllAliases
	 */
	public function __construct($_alias = null,$_aliasesTotal = null)
	{
		parent::__construct(array('alias'=>$_alias,'aliasesTotal'=>$_aliasesTotal));
	}
	/**
	 * Set alias
	 * @param Alias alias
	 * @return Alias
	 */
	public function setAlias($_alias)
	{
		return ($this->alias = $_alias);
	}
	/**
	 * Get alias
	 * @return YMailTypeAlias
	 */
	public function getAlias()
	{
		return $this->alias;
	}
	/**
	 * Set aliasesTotal
	 * @param int aliasesTotal
	 * @return int
	 */
	public function setAliasesTotal($_aliasesTotal)
	{
		return ($this->aliasesTotal = $_aliasesTotal);
	}
	/**
	 * Get aliasesTotal
	 * @return int
	 */
	public function getAliasesTotal()
	{
		return $this->aliasesTotal;
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