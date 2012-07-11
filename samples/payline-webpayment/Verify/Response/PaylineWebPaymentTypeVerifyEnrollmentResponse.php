<?php
/**
 * Class file for PaylineWebPaymentTypeVerifyEnrollmentResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeVerifyEnrollmentResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeVerifyEnrollmentResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The actionUrl
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $actionUrl;
	/**
	 * The actionMethod
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $actionMethod;
	/**
	 * The pareqFieldName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $pareqFieldName;
	/**
	 * The pareqFieldValue
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $pareqFieldValue;
	/**
	 * The termUrlName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $termUrlName;
	/**
	 * The termUrlValue
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $termUrlValue;
	/**
	 * The mdFieldName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mdFieldName;
	/**
	 * The mdFieldValue
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mdFieldValue;
	/**
	 * The mpiResult
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mpiResult;
	/**
	 * The authentication3DSecure
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthentication3DSecure
	 */
	public $authentication3DSecure;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param string actionUrl
	 * @param string actionMethod
	 * @param string pareqFieldName
	 * @param string pareqFieldValue
	 * @param string termUrlName
	 * @param string termUrlValue
	 * @param string mdFieldName
	 * @param string mdFieldValue
	 * @param string mpiResult
	 * @param PaylineWebPaymentTypeAuthentication3DSecure authentication3DSecure
	 * @return PaylineWebPaymentTypeVerifyEnrollmentResponse
	 */
	public function __construct($_result = null,$_actionUrl = null,$_actionMethod = null,$_pareqFieldName = null,$_pareqFieldValue = null,$_termUrlName = null,$_termUrlValue = null,$_mdFieldName = null,$_mdFieldValue = null,$_mpiResult = null,$_authentication3DSecure = null)
	{
		parent::__construct(array('result'=>$_result,'actionUrl'=>$_actionUrl,'actionMethod'=>$_actionMethod,'pareqFieldName'=>$_pareqFieldName,'pareqFieldValue'=>$_pareqFieldValue,'termUrlName'=>$_termUrlName,'termUrlValue'=>$_termUrlValue,'mdFieldName'=>$_mdFieldName,'mdFieldValue'=>$_mdFieldValue,'mpiResult'=>$_mpiResult,'authentication3DSecure'=>$_authentication3DSecure));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set actionUrl
	 * @param string actionUrl
	 * @return string
	 */
	public function setActionUrl($_actionUrl)
	{
		return ($this->actionUrl = $_actionUrl);
	}
	/**
	 * Get actionUrl
	 * @return string
	 */
	public function getActionUrl()
	{
		return $this->actionUrl;
	}
	/**
	 * Set actionMethod
	 * @param string actionMethod
	 * @return string
	 */
	public function setActionMethod($_actionMethod)
	{
		return ($this->actionMethod = $_actionMethod);
	}
	/**
	 * Get actionMethod
	 * @return string
	 */
	public function getActionMethod()
	{
		return $this->actionMethod;
	}
	/**
	 * Set pareqFieldName
	 * @param string pareqFieldName
	 * @return string
	 */
	public function setPareqFieldName($_pareqFieldName)
	{
		return ($this->pareqFieldName = $_pareqFieldName);
	}
	/**
	 * Get pareqFieldName
	 * @return string
	 */
	public function getPareqFieldName()
	{
		return $this->pareqFieldName;
	}
	/**
	 * Set pareqFieldValue
	 * @param string pareqFieldValue
	 * @return string
	 */
	public function setPareqFieldValue($_pareqFieldValue)
	{
		return ($this->pareqFieldValue = $_pareqFieldValue);
	}
	/**
	 * Get pareqFieldValue
	 * @return string
	 */
	public function getPareqFieldValue()
	{
		return $this->pareqFieldValue;
	}
	/**
	 * Set termUrlName
	 * @param string termUrlName
	 * @return string
	 */
	public function setTermUrlName($_termUrlName)
	{
		return ($this->termUrlName = $_termUrlName);
	}
	/**
	 * Get termUrlName
	 * @return string
	 */
	public function getTermUrlName()
	{
		return $this->termUrlName;
	}
	/**
	 * Set termUrlValue
	 * @param string termUrlValue
	 * @return string
	 */
	public function setTermUrlValue($_termUrlValue)
	{
		return ($this->termUrlValue = $_termUrlValue);
	}
	/**
	 * Get termUrlValue
	 * @return string
	 */
	public function getTermUrlValue()
	{
		return $this->termUrlValue;
	}
	/**
	 * Set mdFieldName
	 * @param string mdFieldName
	 * @return string
	 */
	public function setMdFieldName($_mdFieldName)
	{
		return ($this->mdFieldName = $_mdFieldName);
	}
	/**
	 * Get mdFieldName
	 * @return string
	 */
	public function getMdFieldName()
	{
		return $this->mdFieldName;
	}
	/**
	 * Set mdFieldValue
	 * @param string mdFieldValue
	 * @return string
	 */
	public function setMdFieldValue($_mdFieldValue)
	{
		return ($this->mdFieldValue = $_mdFieldValue);
	}
	/**
	 * Get mdFieldValue
	 * @return string
	 */
	public function getMdFieldValue()
	{
		return $this->mdFieldValue;
	}
	/**
	 * Set mpiResult
	 * @param string mpiResult
	 * @return string
	 */
	public function setMpiResult($_mpiResult)
	{
		return ($this->mpiResult = $_mpiResult);
	}
	/**
	 * Get mpiResult
	 * @return string
	 */
	public function getMpiResult()
	{
		return $this->mpiResult;
	}
	/**
	 * Set authentication3DSecure
	 * @param authentication3DSecure authentication3DSecure
	 * @return authentication3DSecure
	 */
	public function setAuthentication3DSecure($_authentication3DSecure)
	{
		return ($this->authentication3DSecure = $_authentication3DSecure);
	}
	/**
	 * Get authentication3DSecure
	 * @return PaylineWebPaymentTypeauthentication3DSecure
	 */
	public function getAuthentication3DSecure()
	{
		return $this->authentication3DSecure;
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