<?php
/**
 * Class file for ConeSearchTypeFIELD
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeFIELD
 * @date 13/10/2012
 */
class ConeSearchTypeFIELD extends ConeSearchWsdlClass
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
	 * The VALUES
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeVALUES
	 */
	public $VALUES;
	/**
	 * The LINK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var ConeSearchTypeLINK
	 */
	public $LINK;
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The unit
	 * @var token
	 */
	public $unit;
	/**
	 * The datatype
	 * Meta informations :
	 * 	- use : required
	 * @var ConeSearchTypeDataType
	 */
	public $datatype;
	/**
	 * The precision
	 * @var token
	 */
	public $precision;
	/**
	 * The width
	 * @var positiveInteger
	 */
	public $width;
	/**
	 * The ref
	 * @var IDREF
	 */
	public $ref;
	/**
	 * The name
	 * @var token
	 */
	public $name;
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
	 * The arraysize
	 * @var string
	 */
	public $arraysize;
	/**
	 * Constructor
	 * @param ConeSearchTypeAnyTEXT DESCRIPTION
	 * @param ConeSearchTypeVALUES VALUES
	 * @param ConeSearchTypeLINK LINK
	 * @param ID ID
	 * @param token unit
	 * @param ConeSearchTypeDataType datatype
	 * @param token precision
	 * @param positiveInteger width
	 * @param IDREF ref
	 * @param token name
	 * @param token ucd
	 * @param string utype
	 * @param string arraysize
	 * @return ConeSearchTypeFIELD
	 */
	public function __construct($_DESCRIPTION = null,$_VALUES = null,$_LINK = null,$_ID = null,$_unit = null,$_datatype = null,$_precision = null,$_width = null,$_ref = null,$_name = null,$_ucd = null,$_utype = null,$_arraysize = null)
	{
		parent::__construct(array('DESCRIPTION'=>$_DESCRIPTION,'VALUES'=>$_VALUES,'LINK'=>$_LINK,'ID'=>$_ID,'unit'=>$_unit,'datatype'=>$_datatype,'precision'=>$_precision,'width'=>$_width,'ref'=>$_ref,'name'=>$_name,'ucd'=>$_ucd,'utype'=>$_utype,'arraysize'=>$_arraysize));
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
	 * Set VALUES
	 * @param VALUES VALUES
	 * @return VALUES
	 */
	public function setVALUES($_VALUES)
	{
		return ($this->VALUES = $_VALUES);
	}
	/**
	 * Get VALUES
	 * @return ConeSearchTypeVALUES
	 */
	public function getVALUES()
	{
		return $this->VALUES;
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
	 * Set unit
	 * @param token unit
	 * @return token
	 */
	public function setUnit($_unit)
	{
		return ($this->unit = $_unit);
	}
	/**
	 * Get unit
	 * @return token
	 */
	public function getUnit()
	{
		return $this->unit;
	}
	/**
	 * Set datatype
	 * @param dataType datatype
	 * @return dataType
	 */
	public function setDatatype($_datatype)
	{
		return ($this->datatype = ConeSearchTypedataType::valueIsValid($_datatype)?$_datatype:null);
	}
	/**
	 * Get datatype
	 * @return ConeSearchTypedataType
	 */
	public function getDatatype()
	{
		return $this->datatype;
	}
	/**
	 * Set precision
	 * @param token precision
	 * @return token
	 */
	public function setPrecision($_precision)
	{
		return ($this->precision = $_precision);
	}
	/**
	 * Get precision
	 * @return token
	 */
	public function getPrecision()
	{
		return $this->precision;
	}
	/**
	 * Set width
	 * @param positiveInteger width
	 * @return positiveInteger
	 */
	public function setWidth($_width)
	{
		return ($this->width = $_width);
	}
	/**
	 * Get width
	 * @return positiveInteger
	 */
	public function getWidth()
	{
		return $this->width;
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
	 * Set arraysize
	 * @param string arraysize
	 * @return string
	 */
	public function setArraysize($_arraysize)
	{
		return ($this->arraysize = $_arraysize);
	}
	/**
	 * Get arraysize
	 * @return string
	 */
	public function getArraysize()
	{
		return $this->arraysize;
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