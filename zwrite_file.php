<?

$tit_1="1111111111111111";
$desc_1="111111111111111";
$vid_1="111111111111111";
$des_post_1="1111111111111";

$tit_2="HOLA BLABLABALBAL";
$desc_2="BLABABALABA";
$vid_2="sdfsdfblablavla";
$des_post_2="blablavla";

$tit_3="XXXXXXXXXXXXXX";
$desc_3="xxxxxxxxxxxx";
$vid_3="xxxxxxxxxxxxxxxxx";
$des_post_3="xxxxxxxxxxxxxxxx";


$tit_4="";
$desc_4="";
$vid_4="";
$des_post_4="";

$tit_5="";
$desc_5="";
$vid_5="";
$des_post_5="";

//$cont_X="cont_7";
//$directory='_CONT_TFF/cont_7/';


function write($directory, $cont_X)
{
global $tit_1, $tit_2, $tit_3, $tit_4, $tit_5;
global $desc_1, $desc_2, $desc_3, $desc_4, $desc_5;
global $vid_1, $vid_2, $vid_3, $vid_4, $vid_5;
global $des_post_1, $des_post_2, $des_post_3, $des_post_4, $des_post_5;

for($arch=1;$arch<=5;$arch++ )
{


    $file_name_tit ="{$directory}tit_{$arch}.php"; 
    $file_name_desc ="{$directory}desc_{$arch}.php"; 
    $file_name_vid ="{$directory}vid_{$arch}.php"; 
    $file_name_des_post ="{$directory}des_post_{$arch}.php"; 

$tit='tit_'.$arch;
$desc='desc_'.$arch;
$vid='vid_'.$arch;
$des_post='des_post_'.$arch;

    if($archivo = fopen($file_name_tit, "w"))
    {

       if(fwrite($archivo,"{$$tit}"))
        {
            echo "Se ha escrito en $directory  del archivo  $file_name_tit del contenido $cont_X ejecutado correctamente <br>";
        }
        else
        {
            echo "  $file_name_tit    del    $directory   del   $cont_X  Problema al escribir el archivo<br> ";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo "  $file_name_tit    del    $directory   del   $cont_X   problema al crear el archivo <br>";
    }




    if($archivo = fopen($file_name_desc, "w"))
    {
        if(fwrite($archivo, "{$$desc}"))
        {
            echo "Se ha escrito en $directory  el archivo  $file_name_desc del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo " $file_name_desc   del    $directory   del   $cont_X  problema al escribir en el archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo " $file_name_desc  del    $directory   del   $cont_X  problema al crear el archivo<br>";
    }




    if($archivo = fopen($file_name_vid, "w"))
    {
        if(fwrite($archivo,"{$$vid}"))
        {
             echo "Se ha escrito en $directory  el archivo  $file_name_vid del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo "   $file_name_vid    del    $directory   del   $cont_X  problema al escribir en el archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo "  $file_name_vid    del    $directory   del   $cont_X  problema al crear el archivo<br>";
    }



    if($archivo = fopen($file_name_des_post, "w"))
    {
        if(fwrite($archivo,"{$$des_post}"))
        {
            echo "Se ha escrito en $directory  el archivo  $file_name_des_post del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo " $file_name_des_post    del    $directory   del   $cont_X   problema al escribir archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo " $file_name_des_post    del    $directory   del   $cont_X    problema al crear el archivo<br>";
    }


}
}

//write($directory)

?>