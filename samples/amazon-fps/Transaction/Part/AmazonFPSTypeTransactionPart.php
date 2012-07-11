<?php
/**
 * Class file for AmazonFPSTypeTransactionPart
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTransactionPart
 * @date 10/07/2012
 */
class AmazonFPSTypeTransactionPart extends AmazonFPSWsdlClass
{
	/**
	 * The InstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $InstrumentId;
	/**
	 * The Role
	 * @var AmazonFPSTypeTransactionalRole
	 */
	public $Role;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Reference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Reference;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The FeesPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $FeesPaid;
	/**
	 * Constructor
	 * @param string InstrumentId
	 * @param AmazonFPSTypeTransactionalRole Role
	 * @param string Name
	 * @param string Reference
	 * @param string Description
	 * @param AmazonFPSTypeAmount FeesPaid
	 * @return AmazonFPSTypeTransactionPart
	 */
	public function __construct($_InstrumentId = null,$_Role = null,$_Name = null,$_Reference = null,$_Description = null,$_FeesPaid = null)
	{
		parent::__construct(array('InstrumentId'=>$_InstrumentId,'Role'=>$_Role,'Name'=>$_Name,'Reference'=>$_Reference,'Description'=>$_Description,'FeesPaid'=>$_FeesPaid));
	}
	/**
	 * Set InstrumentId
	 * @param string InstrumentId
	 * @return string
	 */
	public function setInstrumentId($_InstrumentId)
	{
		return ($this->InstrumentId = $_InstrumentId);
	}
	/**
	 * Get InstrumentId
	 * @return string
	 */
	public function getInstrumentId()
	{
		return $this->InstrumentId;
	}
	/**
	 * Set Role
	 * @param TransactionalRole Role
	 * @return TransactionalRole
	 */
	public function setRole($_Role)
	{
		return ($this->Role = AmazonFPSTypeTransactionalRole::valueIsValid($_Role)?$_Role:null);
	}
	/**
	 * Get Role
	 * @return AmazonFPSTypeTransactionalRole
	 */
	public function getRole()
	{
		return $this->Role;
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
	 * Set Reference
	 * @param string Reference
	 * @return string
	 */
	public function setReference($_Reference)
	{
		return ($this->Reference = $_Reference);
	}
	/**
	 * Get Reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->Reference;
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
	 * Set FeesPaid
	 * @param Amount FeesPaid
	 * @return Amount
	 */
	public function setFeesPaid($_FeesPaid)
	{
		return ($this->FeesPaid = $_FeesPaid);
	}
	/**
	 * Get FeesPaid
	 * @return AmazonFPSTypeAmount
	 */
	public function getFeesPaid()
	{
		return $this->FeesPaid;
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