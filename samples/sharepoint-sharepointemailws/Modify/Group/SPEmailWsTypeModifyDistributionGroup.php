<?php
/**
 * Class file for SPEmailWsTypeModifyDistributionGroup
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeModifyDistributionGroup
 * @date 06/07/2012
 */
class SPEmailWsTypeModifyDistributionGroup extends SPEmailWsWsdlClass
{
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * The ContactCN
	 * @var string
	 */
	public $ContactCN;
	/**
	 * The Info
	 * @var SPEmailWsTypeRequestInfo
	 */
	public $Info;
	/**
	 * The Flags
	 * @var DistributionGroupFlags
	 */
	public $Flags;
	/**
	 * Constructor
	 * @param string Alias
	 * @param string Name
	 * @param string Description
	 * @param string ContactCN
	 * @param SPEmailWsTypeRequestInfo Info
	 * @param DistributionGroupFlags Flags
	 * @return SPEmailWsTypeModifyDistributionGroup
	 */
	public function __construct($_Alias = null,$_Name = null,$_Description = null,$_ContactCN = null,$_Info = null,$_Flags = null)
	{
		parent::__construct(array('Alias'=>$_Alias,'Name'=>$_Name,'Description'=>$_Description,'ContactCN'=>$_ContactCN,'Info'=>$_Info,'Flags'=>$_Flags));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set ContactCN
	 * @param string ContactCN
	 * @return string
	 */
	public function setContactCN($_ContactCN)
	{
		return ($this->ContactCN = $_ContactCN);
	}
	/**
	 * Get ContactCN
	 * @return string
	 */
	public function getContactCN()
	{
		return $this->ContactCN;
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
	 * Set Flags
	 * @param DistributionGroupFlags Flags
	 * @return DistributionGroupFlags
	 */
	public function setFlags($_Flags)
	{
		return ($this->Flags = $_Flags);
	}
	/**
	 * Get Flags
	 * @return DistributionGroupFlags
	 */
	public function getFlags()
	{
		return $this->Flags;
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