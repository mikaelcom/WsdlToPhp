<?php
/**
 * Class file for PaylineWebPaymentTypeAuthentication3DSecure
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeAuthentication3DSecure
 * Documentation : This element contains element for a 3DSecure transaction
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeAuthentication3DSecure extends PaylineWebPaymentWsdlClass
{
	/**
	 * The md
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $md;
	/**
	 * The pares
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $pares;
	/**
	 * The xid
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $xid;
	/**
	 * The eci
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $eci;
	/**
	 * The cavv
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cavv;
	/**
	 * The cavvAlgorithm
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cavvAlgorithm;
	/**
	 * The vadsResult
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $vadsResult;
	/**
	 * The typeSecurisation
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $typeSecurisation;
	/**
	 * Constructor
	 * @param string md
	 * @param string pares
	 * @param string xid
	 * @param string eci
	 * @param string cavv
	 * @param string cavvAlgorithm
	 * @param string vadsResult
	 * @param string typeSecurisation
	 * @return PaylineWebPaymentTypeAuthentication3DSecure
	 */
	public function __construct($_md = null,$_pares = null,$_xid = null,$_eci = null,$_cavv = null,$_cavvAlgorithm = null,$_vadsResult = null,$_typeSecurisation = null)
	{
		parent::__construct(array('md'=>$_md,'pares'=>$_pares,'xid'=>$_xid,'eci'=>$_eci,'cavv'=>$_cavv,'cavvAlgorithm'=>$_cavvAlgorithm,'vadsResult'=>$_vadsResult,'typeSecurisation'=>$_typeSecurisation));
	}
	/**
	 * Set md
	 * @param string md
	 * @return string
	 */
	public function setMd($_md)
	{
		return ($this->md = $_md);
	}
	/**
	 * Get md
	 * @return string
	 */
	public function getMd()
	{
		return $this->md;
	}
	/**
	 * Set pares
	 * @param string pares
	 * @return string
	 */
	public function setPares($_pares)
	{
		return ($this->pares = $_pares);
	}
	/**
	 * Get pares
	 * @return string
	 */
	public function getPares()
	{
		return $this->pares;
	}
	/**
	 * Set xid
	 * @param string xid
	 * @return string
	 */
	public function setXid($_xid)
	{
		return ($this->xid = $_xid);
	}
	/**
	 * Get xid
	 * @return string
	 */
	public function getXid()
	{
		return $this->xid;
	}
	/**
	 * Set eci
	 * @param string eci
	 * @return string
	 */
	public function setEci($_eci)
	{
		return ($this->eci = $_eci);
	}
	/**
	 * Get eci
	 * @return string
	 */
	public function getEci()
	{
		return $this->eci;
	}
	/**
	 * Set cavv
	 * @param string cavv
	 * @return string
	 */
	public function setCavv($_cavv)
	{
		return ($this->cavv = $_cavv);
	}
	/**
	 * Get cavv
	 * @return string
	 */
	public function getCavv()
	{
		return $this->cavv;
	}
	/**
	 * Set cavvAlgorithm
	 * @param string cavvAlgorithm
	 * @return string
	 */
	public function setCavvAlgorithm($_cavvAlgorithm)
	{
		return ($this->cavvAlgorithm = $_cavvAlgorithm);
	}
	/**
	 * Get cavvAlgorithm
	 * @return string
	 */
	public function getCavvAlgorithm()
	{
		return $this->cavvAlgorithm;
	}
	/**
	 * Set vadsResult
	 * @param string vadsResult
	 * @return string
	 */
	public function setVadsResult($_vadsResult)
	{
		return ($this->vadsResult = $_vadsResult);
	}
	/**
	 * Get vadsResult
	 * @return string
	 */
	public function getVadsResult()
	{
		return $this->vadsResult;
	}
	/**
	 * Set typeSecurisation
	 * @param string typeSecurisation
	 * @return string
	 */
	public function setTypeSecurisation($_typeSecurisation)
	{
		return ($this->typeSecurisation = $_typeSecurisation);
	}
	/**
	 * Get typeSecurisation
	 * @return string
	 */
	public function getTypeSecurisation()
	{
		return $this->typeSecurisation;
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