<?php
/**
 * AutoloadFile 
 * @date 09/07/2012
 */
/**
 * AutoloadFile
 * @date 09/07/2012
 */
require_once dirname(__FILE__) . '/XWeb1003WsdlClass.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsByDateRangeRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsPagedResponse.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsPagedRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsByDateRangeResponse.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsByDateRangePagedRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsByRepResponse.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsByRepRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsByDateRangePagedResponse.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsResponse.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationResponse.php';
require_once dirname(__FILE__) . '/Other_/Credits/XWeb1003TypeOther_Credits.php';
require_once dirname(__FILE__) . '/Transaction/Type/XWeb1003TypeTransactionType.php';
require_once dirname(__FILE__) . '/Credit/Type/XWeb1003TypeCreditReceivedType.php';
require_once dirname(__FILE__) . '/Other/Type/XWeb1003TypeOtherCreditType.php';
require_once dirname(__FILE__) . '/Declarations/Type/XWeb1003TypeDeclarationsType.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationRequest.php';
require_once dirname(__FILE__) . '/Government/Type/XWeb1003TypeGovernmentMonitoringType.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsByRepPagedRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsByRepPagedResponse.php';
require_once dirname(__FILE__) . '/Get/Response/XWeb1003TypeGetMISMOApplicationResponse.php';
require_once dirname(__FILE__) . '/Get/Request/XWeb1003TypeGetMISMOApplicationRequest.php';
require_once dirname(__FILE__) . '/Get/Response/XWeb1003TypeGetFannieMaeApplicationResponse.php';
require_once dirname(__FILE__) . '/Convert/Request/XWeb1003TypeConvertMISMOtoFannieMaeRequest.php';
require_once dirname(__FILE__) . '/Convert/Response/XWeb1003TypeConvertMISMOtoFannieMaeResponse.php';
require_once dirname(__FILE__) . '/Convert/Response/XWeb1003TypeConvertFannieMaetoMISMOResponse.php';
require_once dirname(__FILE__) . '/Convert/Request/XWeb1003TypeConvertFannieMaetoMISMORequest.php';
require_once dirname(__FILE__) . '/Get/Request/XWeb1003TypeGetFannieMaeApplicationRequest.php';
require_once dirname(__FILE__) . '/Process/Request/XWeb1003TypeProcessApplicationRequest.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsByRepAndDateRangeResponse.php';
require_once dirname(__FILE__) . '/Load/Request/XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest.php';
require_once dirname(__FILE__) . '/Load/Response/XWeb1003TypeLoadApplicationsByRepAndDateRangePagedResponse.php';
require_once dirname(__FILE__) . '/Add/Request/XWeb1003TypeAddApplicationRequest.php';
require_once dirname(__FILE__) . '/Delete/Request/XWeb1003TypeDeleteApplicationRequest.php';
require_once dirname(__FILE__) . '/Update/Request/XWeb1003TypeUpdateApplicationRequest.php';
require_once dirname(__FILE__) . '/Real/Type/XWeb1003TypeRealEstatePropertyType.php';
require_once dirname(__FILE__) . '/Job/Type/XWeb1003TypeJobRelatedExpenseType.php';
require_once dirname(__FILE__) . '/Employer/XWeb1003TypeEmployer.php';
require_once dirname(__FILE__) . '/Employment/Type/XWeb1003TypeEmploymentType.php';
require_once dirname(__FILE__) . '/Address/Type/XWeb1003TypeAddressType.php';
require_once dirname(__FILE__) . '/Income/Type/XWeb1003TypeIncomeType.php';
require_once dirname(__FILE__) . '/Other_/Sources/XWeb1003TypeOther_Income_Sources.php';
require_once dirname(__FILE__) . '/Expense/Type/XWeb1003TypeExpenseType.php';
require_once dirname(__FILE__) . '/Other/Type/XWeb1003TypeOtherIncomeType.php';
require_once dirname(__FILE__) . '/Employment_/Information/XWeb1003TypeEmployment_Information.php';
require_once dirname(__FILE__) . '/Addresses/XWeb1003TypeAddresses.php';
require_once dirname(__FILE__) . '/Property/Type/XWeb1003TypePropertyType.php';
require_once dirname(__FILE__) . '/Housing_/Expense/XWeb1003TypeHousing_Expense.php';
require_once dirname(__FILE__) . '/Borrowers/XWeb1003TypeBorrowers.php';
require_once dirname(__FILE__) . '/Purpose/Type/XWeb1003TypePurposeType.php';
require_once dirname(__FILE__) . '/Construction/Type/XWeb1003TypeConstructionType.php';
require_once dirname(__FILE__) . '/Borrower/Type/XWeb1003TypeBorrowerType.php';
require_once dirname(__FILE__) . '/Refinance/Type/XWeb1003TypeRefinanceType.php';
require_once dirname(__FILE__) . '/Assets/Type/XWeb1003TypeAssetsLiabilitiesType.php';
require_once dirname(__FILE__) . '/Cash_/Deposits/XWeb1003TypeCash_Deposits.php';
require_once dirname(__FILE__) . '/Checking/Type/XWeb1003TypeCheckingSavingsAccountType.php';
require_once dirname(__FILE__) . '/Cash/Type/XWeb1003TypeCashDepositType.php';
require_once dirname(__FILE__) . '/Credit_/Received/XWeb1003TypeCredit_Previously_Received.php';
require_once dirname(__FILE__) . '/Stocks/Type/XWeb1003TypeStocksBondsAccountType.php';
require_once dirname(__FILE__) . '/Automobile/Type/XWeb1003TypeAutomobileType.php';
require_once dirname(__FILE__) . '/Liability/Type/XWeb1003TypeLiabilityType.php';
require_once dirname(__FILE__) . '/Asset/Type/XWeb1003TypeAssetType.php';
require_once dirname(__FILE__) . '/Real_/Estate/XWeb1003TypeReal_Estate.php';
require_once dirname(__FILE__) . '/Job_/Expenses/XWeb1003TypeJob_Related_Expenses.php';
require_once dirname(__FILE__) . '/Life_/Insurance/XWeb1003TypeLife_Insurance.php';
require_once dirname(__FILE__) . '/Stocks_/Bonds/XWeb1003TypeStocks_Bonds.php';
require_once dirname(__FILE__) . '/Checking_/Savings/XWeb1003TypeChecking_Savings.php';
require_once dirname(__FILE__) . '/Automobiles/XWeb1003TypeAutomobiles.php';
require_once dirname(__FILE__) . '/Other_/Assets/XWeb1003TypeOther_Assets.php';
require_once dirname(__FILE__) . '/Alimony_/Support/XWeb1003TypeAlimony_Child_Support.php';
require_once dirname(__FILE__) . '/Liabilities/XWeb1003TypeLiabilities.php';
require_once dirname(__FILE__) . '/Application/XWeb1003TypeApplication.php';
require_once dirname(__FILE__) . '/Load/XWeb1003ServiceLoad.php';
require_once dirname(__FILE__) . '/Add/XWeb1003ServiceAdd.php';
require_once dirname(__FILE__) . '/Update/XWeb1003ServiceUpdate.php';
require_once dirname(__FILE__) . '/Delete/XWeb1003ServiceDelete.php';
require_once dirname(__FILE__) . '/Process/XWeb1003ServiceProcess.php';
require_once dirname(__FILE__) . '/Get/XWeb1003ServiceGet.php';
require_once dirname(__FILE__) . '/Convert/XWeb1003ServiceConvert.php';
require_once dirname(__FILE__) . '/XWeb1003ClassMap.php';
?>