<?php
class Model{
    public static $conn='';
    function __construct()
    {
        $serverName='localhost';
        $userName='root';
        $password='';
        $dbName='digi_mvc';
        $dsn="mysql:host=$serverName;dbname=$dbName";
        self::$conn=new PDO($dsn,$userName,$password);
    }
    public  static  function getOption(){
        $sql='select * from tbl_option';
        $options=self::doSelect($sql);
        $options_new=[];
        foreach ($options as $option){
            $setting=$option['setting'];
            $value=$option['value'];
            $options_new[$setting]=$value;
        }
        return $options_new;

    }


    function calculateDiscount($price,$discount){
        $priceDiscount=($price*$discount)/100;
        $priceTotal=$price-$priceDiscount;
        return [$priceDiscount,$priceTotal];
    }


    function doSelect($sql,$values=[],$fetch='',$fetchStyle=PDO::FETCH_ASSOC){
        $stmt=self::$conn->prepare($sql);
        foreach ($values as $key=>$value){
            $stmt->bindValue($key+1,$value);

        }
        $stmt->execute();
        if($fetch==''){
            $result=$stmt->fetchAll($fetchStyle);
        }
        else{
            $result=$stmt->fetch($fetchStyle);
        }

        return $result;
    }

}
