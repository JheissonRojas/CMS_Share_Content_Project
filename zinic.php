<?

$tit_1="gsdfkdsjfhsjkdfbSDBFQSD";
$desc_1="HOLA COMO ESTAS";
$vid_1="BIEN Y TU ";
$des_post_1="ACA PASANDOLA ";

$tit_2="HOLA BLABLABALBAL";
$desc_2="BLABABALABA";
$vid_2="sdfsdfblablavla";
$des_post_2="blablavla";

$tit_3="XXXXXXXXXXXXXX";
$desc_3="xxxxxxxxxxxx";
$vid_3="xxxxxxxxxxxxxxxxx";
$des_post_3="xxxxxxxxxxxxxxxx";


$tit_4="eeeeeeeeeeeeeeeeeeeeee";
$desc_4="eeeeeeeeeeeeeeeeeee";
$vid_4="eeeeeeeeeeeeeeeeeee";
$des_post_4="eeeeeeeeeeeeeeeeeeeeeeeeeeee";

$tit_5="fffffffffffffffffffffff";
$desc_5="ffffffffffffffffffffff";
$vid_5="ffffffffffffffffffffffff";
$des_post_5="fffffffffffffffffffffffffffff";

$cont_X="cont_7";
$directory='_CONT_TFF/cont_7/';
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
            echo "Se ha escrito en $directory  el archivo  $file_name_tit del $cont_X ejecutado correctamente <br>";
        }
        else
        {
            echo "Ha habido un problema al escribir en  el archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo "Ha habido un problema al crear el archivo<br>";
    }




    if($archivo = fopen($file_name_desc, "w"))
    {
        if(fwrite($archivo, "{$$desc}"))
        {
            echo "Se ha escrito en $directory  el archivo  $file_name_desc del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo "Ha habido un problema al escribir en el archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo "Ha habido un problema al crear el archivo<br>";
    }




    if($archivo = fopen($file_name_vid, "w"))
    {
        if(fwrite($archivo,"{$$vid}"))
        {
             echo "Se ha escrito en $directory  el archivo  $file_name_vid del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo "Ha habido un problema al escribir en el archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo "Ha habido un problema al crear el archivo<br>";
    }



    if($archivo = fopen($file_name_des_post, "w"))
    {
        if(fwrite($archivo,"{$$des_post}"))
        {
            echo "Se ha escrito en $directory  el archivo  $file_name_des_post del $cont_X ejecutado correctamente<br>";
        }
        else
        {
            echo "Ha habido un problema al escribir archivo<br>";
        }
 
        fclose($archivo);
    }
    else
   { 
    echo "Ha habido un problema al crear el archivo<br>";
    }


}
}

write($directory, $cont_X);

?>