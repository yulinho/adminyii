<?php
include_once('./vendor/autoload.php');
use Md5Crypt\Md5Crypt;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;
 

$excel = new PHPExcel();
var_dump($excel);

$cryptedpassword = Md5Crypt::unix   ("123456" ,"123");
$apachepassword  = Md5Crypt::apache ("123456" , "123");
 
echo $cryptedpassword;
echo '<br>';
echo $apachepassword;
 
 
// create a log channel
$log = new Logger('test');
$log->pushHandler(new StreamHandler('logs/your.log', Logger::WARNING));
 
// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');


    // 需要填写你的 Access Key 和 Secret Key
    $accessKey = 'NZQJ1NEq5u2UA1BynqTfB_jvSvaT3yVGE3ixzjBb';
    $secretKey = 'xrFc794kgiC0US1O7ty_r89D5GN9GM0TJk2MYoEz';
    
    // 构建鉴权对象
    $auth = new Auth($accessKey, $secretKey);
    
    // 要上传的空间
    $bucket = 'indare';

    // 生成上传 Token
    $token = $auth->uploadToken($bucket);
    
    $url='http://www.startmeup.hk/assets/images/SMUHK_LOGO_8SEPT.jpg';
    // 要上传文件的本地路径
    $filePath = 'file:///C:/Users/yulin_000/Pictures/banner_home01.jpg';

    // 上传到七牛后保存的文件名
    $key = 'test.png';

    // 初始化 UploadManager 对象并进行文件的上传。
    /*
    $uploadMgr = new UploadManager();
    list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
    echo "\n====> putFile result: \n";
    if ($err !== null) {
        var_dump($err);
    } else {
        var_dump($ret);
    }
*/

        /*
        $encodedSign=$auth->sign($bucket);
        $accessToken = "$APP_ACCESS_KEY:$encodedSign";

        $authorization="QBox $encodedSign";//Authorization
        $host="iovip.qbox.me";
        $encodedURL=base64_encode($url);
        $encodedEntryURI=base64_encode("$bucket:$key");
        $uri="/fetch/$encodedURL/to/$encodedEntryURI";
        //$headers=['Authorization'=>$authorization];
        $headr[] = ['Authorization: '.$authorization,'Content-Type: application/x-www-form-urlencoded'];
        $res=ApiController::curl("http://$host$uri",null,null,$headr);
        echo "$res";return;*/
        $key="test_fetch.png";
        $bucketManager = new BucketManager($auth);
        list($ret, $err) =$bucketManager->fetch($url, $bucket, $key);

        if ($err != null) {
          echo "fetch失败。错误消息：".$err->message();
          return null;
        } else {
          //echo "上传成功。Key：".$ret["key"];
          return "http://q.wuyubaike.com/$key";
        }


?>