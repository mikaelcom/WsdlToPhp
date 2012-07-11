<?php
/**
 * Class file for SPEmailWsTypeRenameDistributionGroup
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeRenameDistributionGroup
 * @date 06/07/2012
 */
class SPEmailWsTypeRenameDistributionGroup extends SPEmailWsWsdlClass
{
	/**
	 * The OldAlias
	 * @var string
	 */
	public $OldAlias;
	/**
	 * The NewAlias
	 * @var string
	 */
	public $NewAlias;
	/**
	 * The Info
	 * @var SPEmailWsTypeRequestInfo
	 */
	public $Info;
	/**
	 * Constructor
	 * @param string OldAlias
	 * @param string NewAlias
	 * @param SPEmailWsTypeRequestInfo Info
	 * @return SPEmailWsTypeRenameDistributionGroup
	 */
	public function __construct($_OldAlias = null,$_NewAlias = null,$_Info = null)
	{
		parent::__construct(array('OldAlias'=>$_OldAlias,'NewAlias'=>$_NewAlias,'Info'=>$_Info));
	}
	/**
	 * Set OldAlias
	 * @param string OldAlias
	 * @return string
	 */
	public function setOldAlias($_OldAlias)
	{
		return ($this->OldAlias = $_OldAlias);
	}
	/**
	 * Get OldAlias
	 * @return string
	 */
	public function getOldAlias()
	{
		return $this->OldAlias;
	}
	/**
	 * Set NewAlias
	 * @param string NewAlias
	 * @return string
	 */
	public function setNewAlias($_NewAlias)
	{
		return ($this->NewAlias = $_NewAlias);
	}
	/**
	 * Get NewAlias
	 * @return string
	 */
	public function getNewAlias()
	{
		return $this->NewAlias;
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