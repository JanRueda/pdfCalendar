 <?php 

//========================================================================================
//
//  Funcion que pinta festivos y domingos de 2017
//  
//========================================================================================

 function fest_Dom($pdf, $dia_actual,$numero_dia, $cMonth){



 	//>> Enero  <<

    // 1 de enero pintado en Calendar.php por ser dia de primera linea

    //Reyes
    if( $dia_actual==6 && $cMonth==1 ){

    // Si es el dia 6 se pinta de rojo por ser Domingo
    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);

    }
    //San Anton
    elseif( $dia_actual==17 && $cMonth==1 ){

      // Es San Anton y se pinta de lila
      //$pdf->SetFillColor(2,157,116); y los ultimos parametros de cell 1 es para alterar color de fondo
      $pdf->SetFillColor(2,157,116);
      $pdf->SetTextColor(0,0,0);
      $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',1);
      // A partir de aqui el resto de las celdas estaran en negro
      $pdf->SetTextColor(0,0,0);
    } 

    //>> Marzo <<

    //San Patricio
    elseif( $dia_actual==17 && $cMonth==3 ){

      // Es San Patricio y se pinta de verde
      //$pdf->SetFillColor(2,157,116); y los ultimos parametros de cell 1 es para alterar color de fondo
      $pdf->SetFillColor(2,157,116);
      $pdf->SetTextColor(0,0,0);
      $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',1);
      // A partir de aqui el resto de las celdas estaran en negro
      $pdf->SetTextColor(0,0,0);
    }

    //>> Abril <<
    // Jueves santo 
    elseif( $dia_actual==13 && $cMonth==4 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }
   // Viernes santo 
    elseif( $dia_actual==14 && $cMonth==4 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }
    // Martes de Pascua
    elseif( $dia_actual==18 && $cMonth==4 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //>> Mayo << 

    // 1 de Mayo pintado en Calendar.php por ser dia de primera linea

    // Letras Galegas
    elseif( $dia_actual==17 && $cMonth==5 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //>> Junio <<

    //San Antonio
    elseif( $dia_actual==13 && $cMonth==6 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //>> Julio <<
    
    //D. Galicia 
    elseif( $dia_actual==25 && $cMonth==7 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //>> Agosto <<
    
    //Asunción de la Virgen  
    elseif( $dia_actual==15 && $cMonth==8 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //>> Octubre <<
    
    //Dia del Pilar   
    elseif( $dia_actual==12 && $cMonth==10 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //>> Noviembre <<
    
    //Shamain   
    // 1 de Noviembre pintado en Calendar.php por ser dia de primera linea

    //>> Diciembre <<

    //Constitucion   
    elseif( $dia_actual==6 && $cMonth==12 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //Inmaculada Concepcion   
    elseif( $dia_actual==8 && $cMonth==12 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //Navidad   
    elseif( $dia_actual==25 && $cMonth==12 ){

    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);
    }

    //Domingos
    elseif($numero_dia==6){

    // Si es el dia 6 se pinta de rojo por ser Domingo
    $pdf->SetTextColor(255,0,0);
    $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);
    // A partir de aqui el resto de las celdas estaran en negro
    $pdf->SetTextColor(0,0,0);

    } else {

      $pdf->Cell(40,11, $dia_actual,'LRT',0,'C',0);

    }

    //

 }

?>




