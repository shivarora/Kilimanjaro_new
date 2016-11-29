<?php
//	require_once('include/menu.php');
	//require_once('include/db_connect.php');
	
	//echo "<h1>Shipment results</h1>";
	
	// if have post	
	
		require_once('include/fedex-common.php');
	
	class FeSubmitShipping
{
	
	public function __construct()
	{
		
		# code...
	}	
		function addShipper($input)
		{
			$shipper = array(
				'Contact' => array(
					'PersonName' => 'Rubaiet M',
					'CompanyName' => 'ELS',
					'PhoneNumber' => '019130191355'
				),
				'Address' => getProperty('address1')
			);
			return $shipper;
		} // end of function addShipper
		
		function addRecipient($input)
		{
			$recipient = array
			(
				'Contact' => array
				(
					'PersonName' => $input['PersonName'],
					//'CompanyName' => $input['CompanyName'],
					'PhoneNumber' => $input['PhoneNumber']
				),
				'Address' => array(
					'StreetLines' => array($input['StreetLines']),
					'City' => $input['City'],
					'StateOrProvinceCode' => $input['StateOrProvinceCode'],
					'PostalCode' => $input['PostalCode'],
					'CountryCode' => $input['CountryCode'],
					'Residential' => 1
				)
			);
			return $recipient;	                                    
		} // end of function addRecipient
		
		function addShippingChargesPayment($input)
		{
			$shippingChargesPayment = array
			(	'PaymentType' => 'SENDER',
				'Payor' => array
				(
					'ResponsibleParty' => array
					(
						'AccountNumber' => getProperty('billaccount'),
						'Contact' => null,
						'Address' => array
						(
							'CountryCode' => 'US'
						)
					)
				)
			);
			return $shippingChargesPayment;
		} // end of function addShippingChargesPayment
		
		function addLabelSpecification($input)
		{
			$labelSpecification = array
			(
				'LabelFormatType' => 'COMMON2D', // valid values COMMON2D, LABEL_DATA_ONLY
				'ImageType' => 'PDF',  // valid values DPL, EPL2, PDF, ZPLII and PNG
				'LabelStockType' => 'PAPER_7X4.75'
			);
			return $labelSpecification;
		} // end of function addLabelSpecification
		
		function addCustomClearanceDetail($input)
		{
			$customerClearanceDetail = array
			(
				'DutiesPayment' => array
				(
					'PaymentType' => 'SENDER', // valid values RECIPIENT, SENDER and THIRD_PARTY
					'Payor' => array
					(
						'ResponsibleParty' => array
						(
							'AccountNumber' => getProperty('dutyaccount'),
							'Contact' => null,
							'Address' => array
							(
								'CountryCode' => 'US'
							)
						)
					)
				),
				'DocumentContent' => 'NON_DOCUMENTS',
				'CustomsValue' => array
				(
					'Currency' => 'USD', 
					'Amount' => 400.0
				),
				'Commodities' => array
				(
					'0' => array
					(
						'NumberOfPieces' => 1,
						'Description' => 'Books',
						'CountryOfManufacture' => 'US',
						'Weight' => array
						(
							'Units' => 'LB', 
							'Value' => 1.0
						),
						'Quantity' => 4,
						'QuantityUnits' => 'EA',
						'UnitPrice' => array
						(
							'Currency' => 'USD', 
							'Amount' => 100.000000
						),
						'CustomsValue' => array
						(
							'Currency' => 'USD', 
							'Amount' => 400.000000
						)
					)
				),
				'ExportDetail' => array
				(
					'B13AFilingOption' => 'NOT_REQUIRED'
				)
			);
			return $customerClearanceDetail;
		} // end of function addCustomClearanceDetail
		
		function addSmartPostDetail($input)
		{
			$smartPostDetail = array
			( 
				'Indicia' => 'PARCEL_SELECT',
				'AncillaryEndorsement' => 'CARRIER_LEAVE_IF_NO_RESPONSE',
				'SpecialServices' => 'USPS_DELIVERY_CONFIRMATION',
				'HubId' => getProperty('hubid'),
				'CustomerManifestId' => 'XXX'
			);
			return $smartPostDetail;
		} // end of function addSmartPostDetail
		
		function addPackageLineItem($input)
		{
			$packageLineItem = array
			( 
				'SequenceNumber' => 1,
				'GroupPackageCount' => 1,
				'Weight' => array
				(
					'Value' => $input['Weight'],
					'Units' => 'LB'
				),
				'Dimensions' => array
				(
					'Length' => $input['Length'],
					'Width' => $input['Width'],
					'Height' => $input['Height'],
					'Units' => 'IN'
				)
			);
			return $packageLineItem;
		} // end of function addPackageLineItem


	public function submitShipping($data){
				
						$input = array();

			$input['PersonName'] = $data['uadd_recipient'];
			$input['PhoneNumber'] = $data['uadd_phone'];
			$input['StreetLines'] = $data['uadd_address_01'];
			$input['City'] = $data['uadd_city'];
			$input['StateOrProvinceCode'] = $data['uadd_county'];
			$input['PostalCode'] = $data['uadd_post_code'];
			$input['CountryCode'] = 'US';
			$input['Weight'] = $data['Weight'];
			$input['Length'] = $data['Length'];
			$input['Height'] = $data['Height'];
			$input['Width'] = $data['Width'];
			$input['service_type'] = $data['service_type'];




			$newline = "<br />";
		//The WSDL is not included with the sample code.
		//Please include and reference in $path_to_wsdl variable.
		$path_to_wsdl = realpath(dirname(__FILE__) . '/wsdl/ShipService_v17.wsdl');
		
		$pdf_file_name = "shipexpresslabel" . rand(1, 50000) . ".pdf";

		$pdf_file = BASEPATH . "../upload/fedex_pdf/". $pdf_file_name;
		
		define('SHIP_LABEL', $pdf_file);  // PDF label file. Change to file-extension .pdf for creating a PDF label (e.g. shiplabel.pdf)

		ini_set("soap.wsdl_cache_enabled", "0");
		 
		$client = new SoapClient($path_to_wsdl, array('trace' => 1)); // Refer to http://us3.php.net/manual/en/ref.soap.php for more information

		$request['WebAuthenticationDetail'] = array
		(
			'ParentCredential' => array
			(
				'Key' => getProperty('parentkey'),
				'Password' => getProperty('parentpassword')
			),
			'UserCredential' =>array
			(
				'Key' => getProperty('key'), 
				'Password' => getProperty('password')
			)
		); 
		$request['ClientDetail'] = array
		(
			'AccountNumber' => getProperty('shipaccount'), 
			'MeterNumber' => getProperty('meter')
		);
		$request['TransactionDetail'] = array('CustomerTransactionId' => '*** Express International Shipping Request using PHP ***');
		$request['Version'] = array
		(
			'ServiceId' => 'ship', 
			'Major' => '17', 
			'Intermediate' => '0', 
			'Minor' => '0'
		);
		
		$request['RequestedShipment'] = array
		(
			'ShipTimestamp' => date('c'),
			'DropoffType' => 'REGULAR_PICKUP', // valid values REGULAR_PICKUP, REQUEST_COURIER, DROP_BOX, BUSINESS_SERVICE_CENTER and STATION
			'ServiceType' => $input['service_type'], // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
			'PackagingType' => 'YOUR_PACKAGING', // valid values FEDEX_BOX, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING, ...
			'Shipper' => $this->addShipper($input),
			'Recipient' => $this->addRecipient($input),
			'ShippingChargesPayment' => $this->addShippingChargesPayment($input),
			'CustomsClearanceDetail' => $this->addCustomClearanceDetail($input),
			'LabelSpecification' => $this->addLabelSpecification($input),
			'CustomerSpecifiedDetail' => array
			(
				'MaskedData'=> 'SHIPPER_ACCOUNT_NUMBER'
			), 
			'PackageCount' => 1,
			'RequestedPackageLineItems' => array
			(
				'0' => $this->addPackageLineItem($input)
			),
			'CustomerReferences' => array
			(
				'0' => array
				(
					'CustomerReferenceType' => 'CUSTOMER_REFERENCE', 
					'Value' => 'TC007_07_PT1_ST01_PK01_SNDUS_RCPCA_POS'
				)
			)
		);
		
		try
		{
			if(setEndpoint('changeEndpoint'))
			{
				$newLocation = $client->__setLocation(setEndpoint('endpoint'));
			}
			
			$response = $client->processShipment($request); // FedEx web service invocation

			if ($response->HighestSeverity != 'FAILURE' && $response->HighestSeverity != 'ERROR')
			{
				// // add into database
				// $address = $_POST['StreetLines'] . '<br>' . $_POST['City'] . '<br>' . $_POST['StateOrProvinceCode'] . '<br>' . 
				// $_POST['PostalCode'] . '<br>'  . $_POST['CountryCode'];
				 $token = $response->CompletedShipmentDetail->CompletedPackageDetails->TrackingIds->TrackingNumber;
				// $sql = "INSERT INTO shipments (length, width, height, weight, receiver, receiver_company, receiver_phone, receiver_address, service_type, token, status)
				// VALUES ('".$_POST['Length']."', '".$_POST['Width']."', '".$_POST['Height']."', '".$_POST['Weight']."', '".$_POST['PersonName']."', '".$_POST['CompanyName']."', '".$_POST['PhoneNumber']."', '".$address."', '".$_POST['ServiceType']."', '".$token."', '1')";

				// $conn->query($sql);
				
				//echo 'Shipment created successfully! <br> Tracking Number: ' . $token . '<br>';
				
				// printSuccess($client, $response);

				// Create PNG or PDF label
				// Set LabelSpecification.ImageType to 'PDF' for generating a PDF label
				$fp = fopen(SHIP_LABEL, 'wb');   
				fwrite($fp, ($response->CompletedShipmentDetail->CompletedPackageDetails->Label->Parts->Image));
				fclose($fp);
				//echo 'Label <a target="_blank" href="./'.SHIP_LABEL.'">'.SHIP_LABEL.'</a> was generated.';            
                                $return['status'] = "ok";
				 $return['token'] = $token;
				 $return['pdffile'] = $pdf_file_name;
			}
			else
			{
				//printError($client, $response);
                              $return['status'] = "Error";
				$return['response'] = $response;
			}
                         return $return;
			//writeToLog($client);    // Write to log file
		} 
		catch (SoapFault $exception) 
		{
		         $return['status'] = "Exp";
			$return['exception'] = $exception;
			//printFault($exception, $client);
			return $return;
		}
	}
}