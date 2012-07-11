<?php
/**
 * Class file for PPInvoiceTypeErrorData
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeErrorData
 * Documentation : This type contains the detailed error information resulting from the service operation.
 * @date 02/07/2012
 */
class PPInvoiceTypeErrorData extends PPInvoiceWsdlClass
{
	/**
	 * The errorId
	 * @var long
	 */
	public $errorId;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The subdomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $subdomain;
	/**
	 * The severity
	 * @var PPInvoiceTypeErrorSeverity
	 */
	public $severity;
	/**
	 * The category
	 * @var PPInvoiceTypeErrorCategory
	 */
	public $category;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * The exceptionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var token
	 */
	public $exceptionId;
	/**
	 * The parameter
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var PPInvoiceTypeErrorParameter
	 */
	public $parameter;
	/**
	 * Constructor
	 * @param long errorId
	 * @param string domain
	 * @param string subdomain
	 * @param PPInvoiceTypeErrorSeverity severity
	 * @param PPInvoiceTypeErrorCategory category
	 * @param string message
	 * @param token exceptionId
	 * @param PPInvoiceTypeErrorParameter parameter
	 * @return PPInvoiceTypeErrorData
	 */
	public function __construct($_errorId = null,$_domain = null,$_subdomain = null,$_severity = null,$_category = null,$_message = null,$_exceptionId = null,$_parameter = null)
	{
		parent::__construct(array('errorId'=>$_errorId,'domain'=>$_domain,'subdomain'=>$_subdomain,'severity'=>$_severity,'category'=>$_category,'message'=>$_message,'exceptionId'=>$_exceptionId,'parameter'=>$_parameter));
	}
	/**
	 * Set errorId
	 * @param long errorId
	 * @return long
	 */
	public function setErrorId($_errorId)
	{
		return ($this->errorId = $_errorId);
	}
	/**
	 * Get errorId
	 * @return long
	 */
	public function getErrorId()
	{
		return $this->errorId;
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set subdomain
	 * @param string subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get subdomain
	 * @return string
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set severity
	 * @param ErrorSeverity severity
	 * @return ErrorSeverity
	 */
	public function setSeverity($_severity)
	{
		return ($this->severity = PPInvoiceTypeErrorSeverity::valueIsValid($_severity)?$_severity:null);
	}
	/**
	 * Get severity
	 * @return PPInvoiceTypeErrorSeverity
	 */
	public function getSeverity()
	{
		return $this->severity;
	}
	/**
	 * Set category
	 * @param ErrorCategory category
	 * @return ErrorCategory
	 */
	public function setCategory($_category)
	{
		return ($this->category = PPInvoiceTypeErrorCategory::valueIsValid($_category)?$_category:null);
	}
	/**
	 * Get category
	 * @return PPInvoiceTypeErrorCategory
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set exceptionId
	 * @param token exceptionId
	 * @return token
	 */
	public function setExceptionId($_exceptionId)
	{
		return ($this->exceptionId = $_exceptionId);
	}
	/**
	 * Get exceptionId
	 * @return token
	 */
	public function getExceptionId()
	{
		return $this->exceptionId;
	}
	/**
	 * Set parameter
	 * @param ErrorParameter parameter
	 * @return ErrorParameter
	 */
	public function setParameter($_parameter)
	{
		return ($this->parameter = $_parameter);
	}
	/**
	 * Get parameter
	 * @return PPInvoiceTypeErrorParameter
	 */
	public function getParameter()
	{
		return $this->parameter;
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