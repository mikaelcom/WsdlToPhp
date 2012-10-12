<?php
/**
 * Class file for ConeSearchTypeTABLE
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeTABLE
 * @date 13/10/2012
 */
class ConeSearchTypeTABLE extends ConeSearchWsdlClass
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
	 * The PARAM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypePARAM
	 */
	public $PARAM;
	/**
	 * The FIELD
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeFIELD
	 */
	public $FIELD;
	/**
	 * The GROUP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeGROUP
	 */
	public $GROUP;
	/**
	 * The LINK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeLINK
	 */
	public $LINK;
	/**
	 * The DATA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeDATA
	 */
	public $DATA;
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The name
	 * @var token
	 */
	public $name;
	/**
	 * The ref
	 * @var IDREF
	 */
	public $ref;
	/**
	 * Constructor
	 * @param ConeSearchTypeAnyTEXT DESCRIPTION
	 * @param ConeSearchTypePARAM PARAM
	 * @param ConeSearchTypeFIELD FIELD
	 * @param ConeSearchTypeGROUP GROUP
	 * @param ConeSearchTypeLINK LINK
	 * @param ConeSearchTypeDATA DATA
	 * @param ID ID
	 * @param token name
	 * @param IDREF ref
	 * @return ConeSearchTypeTABLE
	 */
	public function __construct($_DESCRIPTION = null,$_PARAM = null,$_FIELD = null,$_GROUP = null,$_LINK = null,$_DATA = null,$_ID = null,$_name = null,$_ref = null)
	{
		parent::__construct(array('DESCRIPTION'=>$_DESCRIPTION,'PARAM'=>$_PARAM,'FIELD'=>$_FIELD,'GROUP'=>$_GROUP,'LINK'=>$_LINK,'DATA'=>$_DATA,'ID'=>$_ID,'name'=>$_name,'ref'=>$_ref));
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
	 * Set FIELD
	 * @param FIELD FIELD
	 * @return FIELD
	 */
	public function setFIELD($_FIELD)
	{
		return ($this->FIELD = $_FIELD);
	}
	/**
	 * Get FIELD
	 * @return ConeSearchTypeFIELD
	 */
	public function getFIELD()
	{
		return $this->FIELD;
	}
	/**
	 * Set GROUP
	 * @param GROUP GROUP
	 * @return GROUP
	 */
	public function setGROUP($_GROUP)
	{
		return ($this->GROUP = $_GROUP);
	}
	/**
	 * Get GROUP
	 * @return ConeSearchTypeGROUP
	 */
	public function getGROUP()
	{
		return $this->GROUP;
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
	 * Set DATA
	 * @param DATA DATA
	 * @return DATA
	 */
	public function setDATA($_DATA)
	{
		return ($this->DATA = $_DATA);
	}
	/**
	 * Get DATA
	 * @return ConeSearchTypeDATA
	 */
	public function getDATA()
	{
		return $this->DATA;
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
	 * Set ref
	 * @param IDREF ref
	 * @return IDREF
	 */
	public function setRef($_ref)
	{
		return ($this->ref = $_ref);
	}
	/**
	 * Get ref
	 * @return IDREF
	 */
	public function getRef()
	{
		return $this->ref;
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