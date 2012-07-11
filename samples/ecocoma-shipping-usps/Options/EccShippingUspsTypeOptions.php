<?php
/**
 * Class file for EccShippingUspsTypeOptions
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsTypeOptions
 * @date 03/07/2012
 */
class EccShippingUspsTypeOptions extends EccShippingUspsWsdlClass
{
	/**
	 * The Container
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Container;
	/**
	 * The Size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Size;
	/**
	 * The Machinable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Machinable;
	/**
	 * The MailType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MailType;
	/**
	 * The Mode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Mode;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sort;
	/**
	 * Constructor
	 * @param string Container
	 * @param string Size
	 * @param string Machinable
	 * @param string MailType
	 * @param string Mode
	 * @param string Sort
	 * @return EccShippingUspsTypeOptions
	 */
	public function __construct($_Container = null,$_Size = null,$_Machinable = null,$_MailType = null,$_Mode = null,$_Sort = null)
	{
		parent::__construct(array('Container'=>$_Container,'Size'=>$_Size,'Machinable'=>$_Machinable,'MailType'=>$_MailType,'Mode'=>$_Mode,'Sort'=>$_Sort));
	}
	/**
	 * Set Container
	 * @param string Container
	 * @return string
	 */
	public function setContainer($_Container)
	{
		return ($this->Container = $_Container);
	}
	/**
	 * Get Container
	 * @return string
	 */
	public function getContainer()
	{
		return $this->Container;
	}
	/**
	 * Set Size
	 * @param string Size
	 * @return string
	 */
	public function setSize($_Size)
	{
		return ($this->Size = $_Size);
	}
	/**
	 * Get Size
	 * @return string
	 */
	public function getSize()
	{
		return $this->Size;
	}
	/**
	 * Set Machinable
	 * @param string Machinable
	 * @return string
	 */
	public function setMachinable($_Machinable)
	{
		return ($this->Machinable = $_Machinable);
	}
	/**
	 * Get Machinable
	 * @return string
	 */
	public function getMachinable()
	{
		return $this->Machinable;
	}
	/**
	 * Set MailType
	 * @param string MailType
	 * @return string
	 */
	public function setMailType($_MailType)
	{
		return ($this->MailType = $_MailType);
	}
	/**
	 * Get MailType
	 * @return string
	 */
	public function getMailType()
	{
		return $this->MailType;
	}
	/**
	 * Set Mode
	 * @param string Mode
	 * @return string
	 */
	public function setMode($_Mode)
	{
		return ($this->Mode = $_Mode);
	}
	/**
	 * Get Mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->Mode;
	}
	/**
	 * Set Sort
	 * @param string Sort
	 * @return string
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = $_Sort);
	}
	/**
	 * Get Sort
	 * @return string
	 */
	public function getSort()
	{
		return $this->Sort;
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