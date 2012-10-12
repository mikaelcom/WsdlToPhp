<?php
/**
 * Class file for ConeSearchTypeGROUP
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeGROUP
 * @date 13/10/2012
 */
class ConeSearchTypeGROUP extends ConeSearchWsdlClass
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
	 * The PARAMref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypePARAMref
	 */
	public $PARAMref;
	/**
	 * The PARAM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypePARAM
	 */
	public $PARAM;
	/**
	 * The FIELDref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeFIELDref
	 */
	public $FIELDref;
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
	 * The ucd
	 * @var token
	 */
	public $ucd;
	/**
	 * The utype
	 * @var string
	 */
	public $utype;
	/**
	 * Constructor
	 * @param ConeSearchTypeAnyTEXT DESCRIPTION
	 * @param ConeSearchTypePARAMref PARAMref
	 * @param ConeSearchTypePARAM PARAM
	 * @param ConeSearchTypeFIELDref FIELDref
	 * @param ConeSearchTypeFIELD FIELD
	 * @param ConeSearchTypeGROUP GROUP
	 * @param ID ID
	 * @param token name
	 * @param IDREF ref
	 * @param token ucd
	 * @param string utype
	 * @return ConeSearchTypeGROUP
	 */
	public function __construct($_DESCRIPTION = null,$_PARAMref = null,$_PARAM = null,$_FIELDref = null,$_FIELD = null,$_GROUP = null,$_ID = null,$_name = null,$_ref = null,$_ucd = null,$_utype = null)
	{
		parent::__construct(array('DESCRIPTION'=>$_DESCRIPTION,'PARAMref'=>$_PARAMref,'PARAM'=>$_PARAM,'FIELDref'=>$_FIELDref,'FIELD'=>$_FIELD,'GROUP'=>$_GROUP,'ID'=>$_ID,'name'=>$_name,'ref'=>$_ref,'ucd'=>$_ucd,'utype'=>$_utype));
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
	 * Set PARAMref
	 * @param PARAMref PARAMref
	 * @return PARAMref
	 */
	public function setPARAMref($_PARAMref)
	{
		return ($this->PARAMref = $_PARAMref);
	}
	/**
	 * Get PARAMref
	 * @return ConeSearchTypePARAMref
	 */
	public function getPARAMref()
	{
		return $this->PARAMref;
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
	 * Set FIELDref
	 * @param FIELDref FIELDref
	 * @return FIELDref
	 */
	public function setFIELDref($_FIELDref)
	{
		return ($this->FIELDref = $_FIELDref);
	}
	/**
	 * Get FIELDref
	 * @return ConeSearchTypeFIELDref
	 */
	public function getFIELDref()
	{
		return $this->FIELDref;
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
	 * Set ucd
	 * @param token ucd
	 * @return token
	 */
	public function setUcd($_ucd)
	{
		return ($this->ucd = $_ucd);
	}
	/**
	 * Get ucd
	 * @return token
	 */
	public function getUcd()
	{
		return $this->ucd;
	}
	/**
	 * Set utype
	 * @param string utype
	 * @return string
	 */
	public function setUtype($_utype)
	{
		return ($this->utype = $_utype);
	}
	/**
	 * Get utype
	 * @return string
	 */
	public function getUtype()
	{
		return $this->utype;
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