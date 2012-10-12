<?php
/**
 * Class file for ConeSearchTypeVOTABLE
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeVOTABLE
 * @date 13/10/2012
 */
class ConeSearchTypeVOTABLE extends ConeSearchWsdlClass
{
	/**
	 * The DESCRIPTION
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeAnyTEXT
	 */
	public $DESCRIPTION;
	/**
	 * The DEFINITIONS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeArrayOfChoice1
	 */
	public $DEFINITIONS;
	/**
	 * The INFO
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeINFO
	 */
	public $INFO;
	/**
	 * The RESOURCE
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeRESOURCE
	 */
	public $RESOURCE;
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The version
	 * @var ConeSearchTypeVOTABLEVersion
	 */
	public $version;
	/**
	 * Constructor
	 * @param ConeSearchTypeAnyTEXT DESCRIPTION
	 * @param ConeSearchTypeArrayOfChoice1 DEFINITIONS
	 * @param ConeSearchTypeINFO INFO
	 * @param ConeSearchTypeRESOURCE RESOURCE
	 * @param ID ID
	 * @param ConeSearchTypeVOTABLEVersion version
	 * @return ConeSearchTypeVOTABLE
	 */
	public function __construct($_DESCRIPTION = null,$_DEFINITIONS = null,$_INFO = null,$_RESOURCE = null,$_ID = null,$_version = null)
	{
		parent::__construct(array('DESCRIPTION'=>$_DESCRIPTION,'DEFINITIONS'=>new ConeSearchTypeArrayOfChoice1($_DEFINITIONS),'INFO'=>$_INFO,'RESOURCE'=>$_RESOURCE,'ID'=>$_ID,'version'=>$_version));
	}
	/**
	 * Set DESCRIPTION
	 * @param anyTEXT DESCRIPTION
	 * @return anyTEXT
	 */
	public function setDESCRIPTION($_DESCRIPTION)
	{
		return ($this->DESCRIPTION = $_DESCRIPTION);
	}
	/**
	 * Get DESCRIPTION
	 * @return ConeSearchTypeanyTEXT
	 */
	public function getDESCRIPTION()
	{
		return $this->DESCRIPTION;
	}
	/**
	 * Set DEFINITIONS
	 * @param ArrayOfChoice1 DEFINITIONS
	 * @return ArrayOfChoice1
	 */
	public function setDEFINITIONS($_DEFINITIONS)
	{
		return ($this->DEFINITIONS = $_DEFINITIONS);
	}
	/**
	 * Get DEFINITIONS
	 * @return ConeSearchTypeArrayOfChoice1
	 */
	public function getDEFINITIONS()
	{
		return $this->DEFINITIONS;
	}
	/**
	 * Set INFO
	 * @param INFO INFO
	 * @return INFO
	 */
	public function setINFO($_INFO)
	{
		return ($this->INFO = $_INFO);
	}
	/**
	 * Get INFO
	 * @return ConeSearchTypeINFO
	 */
	public function getINFO()
	{
		return $this->INFO;
	}
	/**
	 * Set RESOURCE
	 * @param RESOURCE RESOURCE
	 * @return RESOURCE
	 */
	public function setRESOURCE($_RESOURCE)
	{
		return ($this->RESOURCE = $_RESOURCE);
	}
	/**
	 * Get RESOURCE
	 * @return ConeSearchTypeRESOURCE
	 */
	public function getRESOURCE()
	{
		return $this->RESOURCE;
	}
	/**
	 * Set ID
	 * @param ID ID
	 * @return ID
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return ID
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set version
	 * @param VOTABLEVersion version
	 * @return VOTABLEVersion
	 */
	public function setVersion($_version)
	{
		return ($this->version = ConeSearchTypeVOTABLEVersion::valueIsValid($_version)?$_version:null);
	}
	/**
	 * Get version
	 * @return ConeSearchTypeVOTABLEVersion
	 */
	public function getVersion()
	{
		return $this->version;
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