<?php
print_r($challan);
/*foreach ($challan as $mychallan) {
	echo $mychallan['roll_number'];
	echo $mychallan['RegistrationFeealreadyChargedatthereception'];
}*/

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Challan Form</title>
    <style type="text/css">
     td {
        font-size: 0.875em;
      }
    </style>
  </head>

  <body>
   
    <div class="col-md-12">
     
    
    <table style="float: left;" border="1">
      
    <tbody>
 
  <tr >
    <th colspan="2">
     <img src="<?php echo base_url(). 'assets/img/Challan1.PNG' ?>"/>
   </th>
  </tr>
  <tr style="border-bottom: none;">
    <td style="width: 230px;">
      Admission Fee
    </td>

    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $challan['AdmissionFee']; ?>
    </td>
  </tr>
    <tr style="border-bottom: none;">
     <td>
      Security (Refundable)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Tuition Fee
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MFee']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Computer Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MCompCh']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Lab Charges (Per Lab)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MLabCh']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Security Services
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Annual Fund
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Annual Stationery Fund
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
     Exam Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Registration Charges
    </td>
    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      House Shirt Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
    <tr style="border-bottom: none;">
    <td>
      Less: DEFERRED (IF ANY)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
    <tr>
    <td>
      Less: RECEIVED (IF ANY)
    </td>
    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>

  </tr>
  
    <tr>
    <td style="margin-left: 90px;">
      TOTAL
    </td>
    <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 632436</td>
  </tr>
  
     
    </tbody>
  
    </table>

      <table style="float: left;" border="1" >
    <tbody>
 <tr>
    <th colspan="4">
    <img src="<?php echo base_url(). 'assets/img/Challan2.PNG' ?>"/>
    </th>
</tr>

  <tr>
   <td style="width: 100px;">
     Payment Date 
    </td>
  <td>
      tytyuu
    </td>
  </tr>
  <tr>
    <td>
     Cheque No.
    </td>
    <td>
      tytsad
    </td>
  </tr>
  <tr>
    <td>
     Bank 
    </td>
    <td>
      tytyuu
    </td>
  </tr>
   <tr style="border-bottom: none;">
  <td></td>
  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <u> PEGUINS Branch </u></td>
</tr>
  <tr style="border-bottom: none;">
    <td>
     Name
    </td>
    <td>
      <?php echo $challan['Name']; ?>
    </td>
  </tr>
<tr style="border-bottom: none;">
    <td>
     Class 
    </td>
    <td>
      <?php echo $challan['Class']; ?>
    </td>
  </tr> 
  <tr style="border-bottom: none;">
    <td>
     Issue Date  
    </td>
    <td>
      tytyuu
    </td>
  </tr>
  <tr>
    <td>
     Fee Period 
    </td>
    <td>
      tytyuu
    </td>
  </tr>
  <tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Amount payable within Due Date</td>
</tr>
<tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
</tr>
<tr>
  <td>Date</td>
  <td>
    8th to 12th &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 13th to 18th &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 19th to 25th
  </td>
  
</tr>
<tr style="height: 47px;">

  <td>656</td>
  <td> 100 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 300 &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 500
  </td>
 
</tr>
<tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
</tr>
    
    </tbody>
  </table>
      <table style="border-left: none;" border="1" >
    <tbody>
       <tr>
    <th colspan="2">
    <img src="<?php echo base_url(). 'assets/img/Challan3.PNG' ?>"/>
    </th>
</tr>
<tr>
  <td>Date</td>
  <td>3/8/2018</td>
</tr>
<tr>
  <td colspan="2"> Roll No. Not Yet Issued </td>
</tr>
<tr style="height: 50px;text-align: center;background-color: black;color: white;">
  <td colspan="2"> NEW ADMISSION </td>
</tr>
<tr>
  <td style="text-align: center;" colspan="2"> Due Date </td>
</tr>
<tr style="height: 74px;">
  <td style="text-align: center;" colspan="2">  </td>
</tr>
<tr>
  <td style="text-align: center;" colspan="2"><b> #VALUE! </b></td>
</tr>
<tr style="height: 95px;">
  <td style="text-align: center;" colspan="2">  </td>
</tr>
<tr>
  <td style="text-align: center;background-color: grey;" colspan="2"><b> BANK COPY </b></td>
</tr>
 </tbody>
  </table>
   </div>
   
    
      <div class="col-md-12">
    <b>---------------------------------------------------------------------------------------------------------------------------------------------------------</b>
    
    </div>
    <div class="col-md-12">
    
    
    <table style="float: left;" border="1">
      
    <tbody>
 
  <tr >
    <th colspan="2">
     <img src="<?php echo base_url(). 'assets/img/Challan1.PNG' ?>"/>
   </th>
  </tr>
  <tr style="border-bottom: none;">
    <td style="width: 230px;">
      Admission Fee
    </td>

    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $challan['AdmissionFee']; ?>
    </td>
  </tr>
    <tr style="border-bottom: none;">
     <td>
      Security (Refundable)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Tuition Fee
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MFee']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Computer Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MCompCh']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Lab Charges (Per Lab)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MLabCh']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Security Services
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Annual Fund
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Annual Stationery Fund
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
     Exam Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Registration Charges
    </td>
    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      House Shirt Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
    <tr style="border-bottom: none;">
    <td>
      Less: DEFERRED (IF ANY)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
    <tr>
    <td>
      Less: RECEIVED (IF ANY)
    </td>
    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>

  </tr>
  
    <tr>
    <td style="margin-left: 90px;">
      TOTAL
    </td>
    <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 632436</td>
  </tr>
  
     
    </tbody>
  
    </table>

      <table style="float: left;" border="1" >
    <tbody>
 <tr>
    <th colspan="4">
    <img src="<?php echo base_url(). 'assets/img/Challan2.PNG' ?>"/>
    </th>
</tr>

  <tr>
   <td style="width: 100px;">
     Payment Date 
    </td>
  <td>
      tytyuu
    </td>
  </tr>
  <tr>
    <td>
     Cheque No.
    </td>
    <td>
      tytsad
    </td>
  </tr>
  <tr>
    <td>
     Bank 
    </td>
    <td>
      tytyuu
    </td>
  </tr>
   <tr style="border-bottom: none;">
  <td></td>
  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <u> PEGUINS Branch </u></td>
</tr>
  <tr style="border-bottom: none;">
    <td>
     Name
    </td>
    <td>
      <?php echo $challan['Name']; ?>
    </td>
  </tr>
<tr style="border-bottom: none;">
    <td>
     Class 
    </td>
    <td>
      <?php echo $challan['Class']; ?>
    </td>
  </tr> 
  <tr style="border-bottom: none;">
    <td>
     Issue Date  
    </td>
    <td>
      tytyuu
    </td>
  </tr>
  <tr>
    <td>
     Fee Period 
    </td>
    <td>
      tytyuu
    </td>
  </tr>
  <tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Amount payable within Due Date</td>
</tr>
<tr>
  <td colspan="2"> <b>FINE after expiry of due date: (To be calculated by Bank)</b> </td>
</tr>
<tr>
  <td>Date</td>
  <td>
    8th to 12th &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 13th to 18th &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 19th to 25th
  </td>
  
</tr>
<tr style="height: 47px;">

  <td>656</td>
  <td> 100 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 300 &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 500
  </td>
 
</tr>
<tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
</tr>
    
    </tbody>
  </table>
      <table style="border-left: none;" border="1" >
    <tbody>
       <tr>
    <th colspan="2">
    <img src="<?php echo base_url(). 'assets/img/Challan3.PNG' ?>"/>
    </th>
</tr>
<tr>
  <td>Date</td>
  <td>3/8/2018</td>
</tr>
<tr>
  <td colspan="2"> Roll No. Not Yet Issued </td>
</tr>
<tr style="height: 50px;text-align: center;background-color: black;color: white;">
  <td colspan="2"> NEW ADMISSION </td>
</tr>
<tr>
  <td style="text-align: center;" colspan="2"> Due Date </td>
</tr>
<tr style="height: 74px;">
  <td style="text-align: center;" colspan="2">  </td>
</tr>
<tr>
  <td style="text-align: center;" colspan="2"><b> #VALUE! </b></td>
</tr>
<tr style="height: 95px;">
  <td style="text-align: center;" colspan="2">  </td>
</tr>
<tr>
  <td style="text-align: center;background-color: grey;" colspan="2"><b> SCHOOL COPY </b></td>
</tr>
 </tbody>
  </table>
   </div>
   
    
      <div class="col-md-12">
    <b>---------------------------------------------------------------------------------------------------------------------------------------------------------</b>
    
    </div>
     <div class="col-md-12">
    
    
    <table style="float: left;" border="1">
      
    <tbody>
 
  <tr >
    <th colspan="2">
     <img src="<?php echo base_url(). 'assets/img/Challan1.PNG' ?>"/>
   </th>
  </tr>
  <tr style="border-bottom: none;">
    <td style="width: 230px;">
      Admission Fee
    </td>

    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <?php echo $challan['AdmissionFee']; ?>
    </td>
  </tr>
    <tr style="border-bottom: none;">
     <td>
      Security (Refundable)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Tuition Fee
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MFee']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Computer Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MCompCh']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Lab Charges (Per Lab)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $challan['MLabCh']; ?>
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Security Services
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Annual Fund
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Annual Stationery Fund
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
     Exam Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      Registration Charges
    </td>
    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>
  </tr>
   <tr style="border-bottom: none;">
    <td>
      House Shirt Charges
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
    <tr style="border-bottom: none;">
    <td>
      Less: DEFERRED (IF ANY)
    </td>
    <td>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0
    </td>
  </tr>
    <tr>
    <td>
      Less: RECEIVED (IF ANY)
    </td>
    <td>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  0
    </td>

  </tr>
  
    <tr>
    <td style="margin-left: 90px;">
      TOTAL
    </td>
    <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 632436</td>
  </tr>
  
     
    </tbody>
  
    </table>

      <table style="float: left;" border="1" >
    <tbody>
 <tr>
    <th colspan="4">
    <img src="<?php echo base_url(). 'assets/img/Challan2.PNG' ?>"/>
    </th>
</tr>

  <tr>
   <td style="width: 100px;">
     Payment Date 
    </td>
  <td>
      tytyuu
    </td>
  </tr>
  <tr>
    <td>
     Cheque No.
    </td>
    <td>
      tytsad
    </td>
  </tr>
  <tr>
    <td>
     Bank 
    </td>
    <td>
      tytyuu
    </td>
  </tr>
   <tr style="border-bottom: none;">
  <td></td>
  <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <u> PEGUINS Branch </u></td>
</tr>
  <tr style="border-bottom: none;">
    <td>
     Name
    </td>
    <td>
      <?php echo $challan['Name']; ?>
    </td>
  </tr>
<tr style="border-bottom: none;">
    <td>
     Class 
    </td>
    <td>
      <?php echo $challan['Class']; ?>
    </td>
  </tr> 
  <tr style="border-bottom: none;">
    <td>
     Issue Date  
    </td>
    <td>
      tytyuu
    </td>
  </tr>
  <tr>
    <td>
     Fee Period 
    </td>
    <td>
      tytyuu
    </td>
  </tr>
  <tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Amount payable within Due Date</td>
</tr>
<tr>
  <td colspan="2"> <b>FINE after expiry of due date: (To be calculated by Bank)</b> </td>
</tr>
<tr>
  <td>Date</td>
  <td>
    8th to 12th &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 13th to 18th &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp 19th to 25th
  </td>
  
</tr>
<tr style="height: 47px;">

  <td>656</td>
  <td> 100 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 300 &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 500
  </td>
 
</tr>
<tr>
  <td colspan="2"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
</tr>
    
    </tbody>
  </table>
      <table style="border-left: none;" border="1" >
    <tbody>
       <tr>
    <th colspan="2">
    <img src="<?php echo base_url(). 'assets/img/Challan3.PNG' ?>"/>
    </th>
</tr>
<tr>
  <td>Date</td>
  <td>3/8/2018</td>
</tr>
<tr>
  <td colspan="2"> Roll No. Not Yet Issued </td>
</tr>
<tr style="height: 50px;text-align: center;background-color: black;color: white;">
  <td colspan="2"> NEW ADMISSION </td>
</tr>
<tr>
  <td style="text-align: center;" colspan="2"> Due Date </td>
</tr>
<tr style="height: 74px;">
  <td style="text-align: center;" colspan="2">  </td>
</tr>
<tr>
  <td style="text-align: center;" colspan="2"><b> #VALUE! </b></td>
</tr>
<tr style="height: 95px;">
  <td style="text-align: center;" colspan="2">  </td>
</tr>
<tr>
  <td style="text-align: center;background-color: grey;" colspan="2"><b> STUDENT COPY </b></td>
</tr>
 </tbody>
  </table>
  <input type="text" name="" style="width: 988px;" placeholder="Note:ALL Charges except Security are Non Refundable">
   </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>