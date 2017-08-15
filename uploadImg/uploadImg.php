<?php
/**
 * Created by PhpStorm.
 * User: GUO
 * Date: 2017/8/9
 * Time: 17:19
 */
$file = $_FILES["uploadFile"];
if ($file["type"] )
{
    if ($file["error"] > 0)
    {
//        echo "Return Code: " . $file["error"] . "<br />";
        echo json_encode(array('code'=>400, 'msg'=>$file["error"]));

    }
    else
    {
//        echo "Upload: " . $file["name"] . "<br />";
//        echo "Type: " . $file["type"] . "<br />";
//        echo "Size: " . ($file["size"] / 1024) . " Kb<br />";
//        echo "Temp file: " . $file["tmp_name"] . "<br />";

        if (file_exists( $file["name"]))
        {
//            echo $file["name"] . " already exists. ";
            echo json_encode(array('code'=>400, 'msg'=>$file["name"] . " already exists. "));

        }
        else
        {
            move_uploaded_file($file["tmp_name"],
                 $file["name"]);
            echo json_encode(array('code'=>200, 'msg'=>$file['name']));
        }
    }
}
else
{

}