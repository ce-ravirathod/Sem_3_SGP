<?php
     Session_start();
    $tid=$_GET['tid'];
    $ttl=$_GET['total'];
    $tdate =$_GET['tdate'];
    $bill = $_GET['billno'];
    // echo $ttl;
    require('fpdf.php');
    include "dbcon.php";

    $qry="select * from cart where table_id='$tid'";
    $cmd=mysqli_query($con, $qry);
        

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);

    $pdf->Cell(115, 10, "NHP's Restro",0,1,'C');
    $pdf->Cell(115, 7, "F1, Arayaraj aspire, University Rd, VVN-388120",0,1,'C');
    // $pdf->Cell(115, 10, "Mo. No :",0,1,'C');
    $pdf->Cell(35, 10, "Date: $tdate",0,0,'C');
    $pdf->Cell(115, 10, "Table No : $tid",0,1,'C');
    $pdf->Cell(115, 10, "Bill No: $bill",0,1,'L');
    $pdf->Cell(40, 10, 'Item Name',0,0,'C');
    $pdf->Cell(20, 10, 'Quantity',0,0,'C');
    $pdf->Cell(20, 10, 'Price',0,0,'C');
    $pdf->Cell(25, 10, 'Net Price',0,0,'C');
    $pdf->Ln();
    while ($row = mysqli_fetch_assoc($cmd)) {
        $price=$row['price'];
        $qty=$row['quantity'];
        $total= $qty * $price;
        $pdf->Cell(40,7, $row['item_name'],0);
        $pdf->Cell(20,7, $row['quantity'],0,0,'C');
        $pdf->Cell(20,7, $row['price'],0,0,'C');
            
        $pdf->Cell(25, 7, $total,0,0,'C');
        $pdf->Ln();
    }
    $pdf->cell(115,7,"Sub Total : $ttl",0,1,'R');
    $sgst=$ttl%3;
    $cgst=$ttl % 2.5;
    // echo $ttl;
    // echo $sgst;
    // $pdf->Cell(55, 7, "SGST         2.5%",0,1,'R');
    // $pdf->Cell(55, 7, "CGST         2.5%",0,1,'R');
    $pdf->SetFont('Arial','B',13);
    // $gttl=$sgst + $cgst + $ttl;
    $pdf->cell(115,10,"Grand Total : $ttl",0,0,$align ='R');
    // $pdf->Output('users.pdf', 'F');

    $pdfname='bill/'.$bill.'.pdf';
    // echo $pdfname;
    $pdf->Output('F',$pdfname);
    // $pdf->Output();

    $bill_name= $bill.".pdf";
    $mth=null;
    $_SESSION['tid']=$tid;
    $query="insert into bill values ('$bill','$tdate','$ttl','$tid','$bill_name','$mth')";
    $cmd=mysqli_query($con, $query);
    if($cmd){
            header('location:checkout.php?tid='.$_SESSION['tid']);
    }
?>