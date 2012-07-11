<?php
/**
 * Class file for EbayFindTypeErrorData
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeErrorData
 * Documentation : A container for error details.
 * @date 04/07/2012
 */
class EbayFindTypeErrorData extends EbayFindWsdlClass
{
	/**
	 * The errorId
	 * Meta informations :
	 * 	- documentation : A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
	 * @var long
	 */
	public $errorId;
	/**
	 * The domain
	 * Meta informations :
	 * 	- documentation : Name of the domain in which the error occurred. <dl> <dt> <strong>domain values:</strong> </dt> <dt> Marketplace </dt> <dd> A business or validation error occurred in the service. </dd> <dt> SOA </dt> <dd> An exception occurred in the Service Oriented Architecture (SOA) framework. </dd> </dl>
	 * @var string
	 */
	public $domain;
	/**
	 * The severity
	 * Meta informations :
	 * 	- documentation : Indicates whether the reported problem is fatal (an error) or is less- severe (a warning). Review the error message details for information on the cause. <br><br> If the request fails and the application is the source of the error (for example, a required element is missing), update the application before you retry the request. If the problem is due to incorrect user data, alert the end-user to the problem and provide the means for them to correct the data. Once the problem in the application or data is resolved, re-send the request to eBay. <br><br> If the source of the problem is on eBay's side, you can retry the request a reasonable number of times (eBay recommends you try the request twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, you can resend the request in its original form. <br><br> If a warning occurs, warning information is returned in addition to the business data. Normally, you do not need to resend the request (as the original request was successful). However, depending on the cause of the warning, you might need to contact the end user, or eBay, to effect a long term solution to the problem.
	 * @var EbayFindTypeErrorSeverity
	 */
	public $severity;
	/**
	 * The category
	 * Meta informations :
	 * 	- documentation : There are three categories of errors: request errors, application errors, and system errors.
	 * @var EbayFindTypeErrorCategory
	 */
	public $category;
	/**
	 * The message
	 * Meta informations :
	 * 	- documentation : A detailed description of the condition that caused in the error.
	 * @var string
	 */
	public $message;
	/**
	 * The subdomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the subdomain in which the error occurred. <dl> <dt> <strong>subdomain values:</strong> </dt> <dt> Finding </dt> <dd> The error is specific to the Finding service. </dd> <dt> MarketplaceCommon </dt> <dd> The error is common to all Marketplace services. </dd> </dl>
	 * @var string
	 */
	public $subdomain;
	/**
	 * The exceptionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an exception associated with an error.
	 * @var token
	 */
	public $exceptionId;
	/**
	 * The parameter
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * 	- documentation : Various warning and error messages return one or more variables that contain contextual information about the error. This is often the field or value that triggered the error.
	 * @var EbayFindTypeErrorParameter
	 */
	public $parameter;
	/**
	 * Constructor
	 * @param long errorId
	 * @param string domain
	 * @param EbayFindTypeErrorSeverity severity
	 * @param EbayFindTypeErrorCategory category
	 * @param string message
	 * @param string subdomain
	 * @param token exceptionId
	 * @param EbayFindTypeErrorParameter parameter
	 * @return EbayFindTypeErrorData
	 */
	public function __construct($_errorId = null,$_domain = null,$_severity = null,$_category = null,$_message = null,$_subdomain = null,$_exceptionId = null,$_parameter = null)
	{
		parent::__construct(array('errorId'=>$_errorId,'domain'=>$_domain,'severity'=>$_severity,'category'=>$_category,'message'=>$_message,'subdomain'=>$_subdomain,'exceptionId'=>$_exceptionId,'parameter'=>$_parameter));
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
	 * Set severity
	 * @param ErrorSeverity severity
	 * @return ErrorSeverity
	 */
	public function setSeverity($_severity)
	{
		return ($this->severity = EbayFindTypeErrorSeverity::valueIsValid($_severity)?$_severity:null);
	}
	/**
	 * Get severity
	 * @return EbayFindTypeErrorSeverity
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
		return ($this->category = EbayFindTypeErrorCategory::valueIsValid($_category)?$_category:null);
	}
	/**
	 * Get category
	 * @return EbayFindTypeErrorCategory
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
	 * @return EbayFindTypeErrorParameter
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