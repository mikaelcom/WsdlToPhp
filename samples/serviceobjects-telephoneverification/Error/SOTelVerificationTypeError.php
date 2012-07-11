<?php
/**
 * Class file for SOTelVerificationTypeError
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeError
 * @date 08/07/2012
 */
class SOTelVerificationTypeError extends SOTelVerificationWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The TypeCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TypeCode;
	/**
	 * The Desc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Desc;
	/**
	 * The DescCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DescCode;
	/**
	 * Constructor
	 * @param string Type
	 * @param string TypeCode
	 * @param string Desc
	 * @param string DescCode
	 * @return SOTelVerificationTypeError
	 */
	public function __construct($_Type = null,$_TypeCode = null,$_Desc = null,$_DescCode = null)
	{
		parent::__construct(array('Type'=>$_Type,'TypeCode'=>$_TypeCode,'Desc'=>$_Desc,'DescCode'=>$_DescCode));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set TypeCode
	 * @param string TypeCode
	 * @return string
	 */
	public function setTypeCode($_TypeCode)
	{
		return ($this->TypeCode = $_TypeCode);
	}
	/**
	 * Get TypeCode
	 * @return string
	 */
	public function getTypeCode()
	{
		return $this->TypeCode;
	}
	/**
	 * Set Desc
	 * @param string Desc
	 * @return string
	 */
	public function setDesc($_Desc)
	{
		return ($this->Desc = $_Desc);
	}
	/**
	 * Get Desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->Desc;
	}
	/**
	 * Set DescCode
	 * @param string DescCode
	 * @return string
	 */
	public function setDescCode($_DescCode)
	{
		return ($this->DescCode = $_DescCode);
	}
	/**
	 * Get DescCode
	 * @return string
	 */
	public function getDescCode()
	{
		return $this->DescCode;
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