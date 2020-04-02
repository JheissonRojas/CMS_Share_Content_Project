<?


// publications days for each one area  
// if there are not publications, not add days not calculation dates


 include("zini_zhour_hour1.php");
 // include("zzflag_count_area.php");
include("z_write_cont.php");
 include("z_write_cont2.php");
// include("z_write_cont3.php");

/* 
 include("z_write_cont_tff.php");
 include("z_write_cont_tec.php");
 include("z_write_cont_wtf.php");
 include("z_write_cont_cur.php");
 include("z_write_cont_hea.php");
 include("z_write_cont_kno.php");
*/

$nday_ini_tff=94; // tff start day a day before
$nday_ini=94; // global start day 



//write_nday_tff; // tff start day a day before
//write_nday_tec; // 
//write_nday_wtf; // 
//write_nday_cur; // 
//write_nday_hea; //
//write_nday_kno; //


$nday=date(z); // actual day in year 
$sis_hour=(int)date(G);  //actual hour



$cont_base_tff=7;
$cont_base=6; // global cont base
/*
$cont_base_tec=4;
$cont_base_wtf=4;
$cont_base_cur=4;
$cont_base_hea=4;
$cont_base_kno=4;
*/

// $write_stop_cont     day no more content start in the = nday_ini
// $write_days_past_tff  start in 0


// echo"$nday<br>";

// $act_cont_tff=$act_cont_tec=$act_cont_wtf=$act_cont_cur=$act_cont_hea=$act_cont_kno=$write_cont;
if($last_day<$nday)
{
       $last_day+=1;
if($write_cont<$write_cont2)
{
    $write_cont+=1;
   // if ($hour1_g1_tff>$sis_hour)$act_cont_tff-=1;
   
   $act_cont_tff=$write_cont;
   $act_cont_tec=$write_cont;
   $act_cont_wtf=$write_cont;
   $act_cont_cur=$write_cont;
   $act_cont_hea=$write_cont;
   $act_cont_kno=$write_cont;
    $desc="<? \$write_cont={$write_cont}; \$last_day={$last_day};?>";
    $archivo = fopen("z_write_cont.php", "w");
     fwrite($archivo,"{$desc}");
     fclose($archivo);
   

}


}

$act_cont_tff=$write_cont;
$act_cont_tec=$write_cont;
$act_cont_wtf=$write_cont;
$act_cont_cur=$write_cont;
$act_cont_hea=$write_cont;
$act_cont_kno=$write_cont;


// $$$$$$$$$$$$$$$$$$$     TFF  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

/* $act_cont_tff=$nday-($nday_ini_tff+$write_days_past_tff)+$cont_base_tff+1;

if($write_cont_tff>=$act_cont_tff)
 {
 echo"blubli";
  if ($hour1_g1_tff>$sis_hour)$act_cont_tff-=1;
   if($write_day_tff+1==$nday)
   {
     $write_day_tff=$nday;
     $act_cont_tff=$nday-($nday_ini_tff+$write_days_past_tff)+$cont_base_tff+1;
     $desc="<? \$write_cont_tff={$write_cont_tff}; \$write_day_tff={$write_day_tff}; \$write_flag_count_tff=1; \$write_days_past_tff={$write_days_past_tff}; ?>";
    $archivo = fopen("z_write_cont_tff.php", "w");
     fwrite($archivo,"{$desc}");
     fclose($archivo);
    }

 }
 else
 { 
   echo"blsssssss";
   $act_cont_tff=$nday-($nday_ini_tff+$write_days_past_tff)+$cont_base_tff;
   if($write_day_tff+1==$nday)
    {
     $write_days_past_tff+=1;
    $write_day_tff=$nday;
    $act_cont_tff=$nday-($nday_ini_tff+$write_days_past_tff)+$cont_base_tff;

     $desc="<? \$write_cont_tff={$write_cont_tff}; \$write_day_tff={$write_day_tff}; \$write_flag_count_tff=1; \$write_days_past_tff={$write_days_past_tff}; ?>";
    $archivo = fopen("z_write_cont_tff.php", "w");
     fwrite($archivo,"{$desc}");
     fclose($archivo);
  }

}
*/
if ($hour1_g1_tff>$sis_hour)$act_cont_tff-=1;


//  $$$$$$$$$$$$$$$$$$$     WTF     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


   if ($hour1_g1_wtf>$sis_hour)$act_cont_wtf-=1;


//  $$$$$$$$$$$$$$$$$$$     TEC      $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

   if ($hour1_g1_tec>$sis_hour)$act_cont_tec-=1;


// $$$$$$$$$$$$$$$$$$$     HEA     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

   if ($hour1_g1_hea>$sis_hour)$act_cont_hea-=1;

//  $$$$$$$$$$$$$$$$$$$     CUR     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

   if ($hour1_g1_cur>$sis_hour)$act_cont_cur-=1;


//  $$$$$$$$$$$$$$$$$$$     KNO     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


   if ($hour1_g1_kno>$sis_hour)$act_cont_kno-=1;
  

//  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

$N_cont_tff='cont_'.$act_cont_tff;
$N_cont_tec='cont_'.$act_cont_tec;
$N_cont_wtf='cont_'.$act_cont_wtf;
$N_cont_cur='cont_'.$act_cont_cur;
//$N_cont_sto='cont_'.$act_cont_sto;
$N_cont_hea='cont_'.$act_cont_hea;
$N_cont_kno='cont_'.$act_cont_kno;

//header("refresh:2; url=$actual_file");

?>