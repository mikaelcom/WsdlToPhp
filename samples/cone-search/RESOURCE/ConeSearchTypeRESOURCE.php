<?php
/**
 * Class file for ConeSearchTypeRESOURCE
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeRESOURCE
 * @date 13/10/2012
 */
class ConeSearchTypeRESOURCE extends ConeSearchWsdlClass
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
	 * The COOSYS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeCOOSYS
	 */
	public $COOSYS;
	/**
	 * The INFO
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeINFO
	 */
	public $INFO;
	/**
	 * The PARAM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypePARAM
	 */
	public $PARAM;
	/**
	 * The LINK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeLINK
	 */
	public $LINK;
	/**
	 * The TABLE
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeTABLE
	 */
	public $TABLE;
	/**
	 * The RESOURCE
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeRESOURCE
	 */
	public $RESOURCE;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The name
	 * @var token
	 */
	public $name;
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The type
	 * Meta informations :
	 * 	- default : results
	 * @var ConeSearchTypeRESOURCEType
	 */
	public $type;
	/**
	 * Constructor
	 * @param ConeSearchTypeAnyTEXT DESCRIPTION
	 * @param ConeSearchTypeCOOSYS COOSYS
	 * @param ConeSearchTypeINFO INFO
	 * @param ConeSearchTypePARAM PARAM
	 * @param ConeSearchTypeLINK LINK
	 * @param ConeSearchTypeTABLE TABLE
	 * @param ConeSearchTypeRESOURCE RESOURCE
	 * @param DOMDocument any
	 * @param token name
	 * @param ID ID
	 * @param ConeSearchTypeRESOURCEType type
	 * @return ConeSearchTypeRESOURCE
	 */
	public function __construct($_DESCRIPTION = null,$_COOSYS = null,$_INFO = null,$_PARAM = null,$_LINK = null,$_TABLE = null,$_RESOURCE = null,$_any = null,$_name = null,$_ID = null,$_type = 'results')
	{
		parent::__construct(array('DESCRIPTION'=>$_DESCRIPTION,'COOSYS'=>$_COOSYS,'INFO'=>$_INFO,'PARAM'=>$_PARAM,'LINK'=>$_LINK,'TABLE'=>$_TABLE,'RESOURCE'=>$_RESOURCE,'any'=>$_any,'name'=>$_name,'ID'=>$_ID,'type'=>$_type));
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
	 * Set COOSYS
	 * @param COOSYS COOSYS
	 * @return COOSYS
	 */
	public function setCOOSYS($_COOSYS)
	{
		return ($this->COOSYS = $_COOSYS);
	}
	/**
	 * Get COOSYS
	 * @return ConeSearchTypeCOOSYS
	 */
	public function getCOOSYS()
	{
		return $this->COOSYS;
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
	 * Set PARAM
	 * @param PARAM PARAM
	 * @return PARAM
	 */
	public function setPARAM($_PARAM)
	{
		return ($this->PARAM = $_PARAM);
	}
	/**
	 * Get PARAM
	 * @return ConeSearchTypePARAM
	 */
	public function getPARAM()
	{
		return $this->PARAM;
	}
	/**
	 * Set LINK
	 * @param LINK LINK
	 * @return LINK
	 */
	public function setLINK($_LINK)
	{
		return ($this->LINK = $_LINK);
	}
	/**
	 * Get LINK
	 * @return ConeSearchTypeLINK
	 */
	public function getLINK()
	{
		return $this->LINK;
	}
	/**
	 * Set TABLE
	 * @param TABLE TABLE
	 * @return TABLE
	 */
	public function setTABLE($_TABLE)
	{
		return ($this->TABLE = $_TABLE);
	}
	/**
	 * Get TABLE
	 * @return ConeSearchTypeTABLE
	 */
	public function getTABLE()
	{
		return $this->TABLE;
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
	}
	/**
	 * Set name
	 * @param token name
	 * @return token
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return token
	 */
	public function getName()
	{
		return $this->name;
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
	 * Set type
	 * @param RESOURCEType type
	 * @return RESOURCEType
	 */
	public function setType($_type)
	{
		return ($this->type = ConeSearchTypeRESOURCEType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return ConeSearchTypeRESOURCEType
	 */
	public function getType()
	{
		return $this->type;
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