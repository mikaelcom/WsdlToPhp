<?php
/**
 * Class file for SPEmailWsTypeDeleteDistributionGroup
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeDeleteDistributionGroup
 * @date 06/07/2012
 */
class SPEmailWsTypeDeleteDistributionGroup extends SPEmailWsWsdlClass
{
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * The Info
	 * @var SPEmailWsTypeRequestInfo
	 */
	public $Info;
	/**
	 * Constructor
	 * @param string Alias
	 * @param SPEmailWsTypeRequestInfo Info
	 * @return SPEmailWsTypeDeleteDistributionGroup
	 */
	public function __construct($_Alias = null,$_Info = null)
	{
		parent::__construct(array('Alias'=>$_Alias,'Info'=>$_Info));
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
	 * Set Info
	 * @param RequestInfo Info
	 * @return RequestInfo
	 */
	public function setInfo($_Info)
	{
		return ($this->Info = $_Info);
	}
	/**
	 * Get Info
	 * @return SPEmailWsTypeRequestInfo
	 */
	public function getInfo()
	{
		return $this->Info;
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