<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $xq = M('xq');
        $xqinfo = $xq ->order('id desc')->select();
        $this->assign('xqinfo',$xqinfo );

        $client = M('client');
        $headImgUrl = $client ->field(headimg)->select();
        $this->assign('headImgUrl',$headImgUrl );
//        $this->display('/index');
        $this->display('/index');
}

    public function upload(){

        if(isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Application/Common/Common/Uploads/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件
            $info   =   $upload->upload();
//            if(!$info) {// 上传错误提示错误信息
//                $this->error($upload->getError());
//            }else{// 上传成功



//                var_dump($info);
//                var_dump($info['0']['savename']);
//                var_dump($info['0']['savepath']);
//                var_dump($info['1']['savename']);
//                var_dump($info['1']['savename']);



                $model = M('xq');
                $data['title'] = $_POST['title'];
                $data['update_time'] = date('Y-m-d');
                $data['content'] = $_POST['content'];
                $timeLength = $_POST['timeLength'];
                $data['overtime'] = date('Y-m-d',time() + 3600*24*$timeLength);

                $data['savename0'] = $info['0']['savename'];//这个是文件名被处理后的名字，上传的文件的保存名称
                $data['path0'] = $info['0']['savepath'];
                $data['savename1'] = $info['1']['savename'];//这个是文件名被处理后的名字，上传的文件的保存名称
                $data['path1'] = $info['1']['savepath'];

                $data['cate'] = $_POST['cate'];

                $right = $model->add($data);
                if($right){
//                    echo "添加到数据库成功";
//                    echo "<br>";
                    $this->success('发布成功');
                }else{
//                    echo "添加到数据库失败";
//                    echo "<br>";
                    $this->success('发布失败');
                }
//                $this->success('上传成功！');
//            }
        }else{
            echo "提交失败";
        }
    }


    public function logout(){
        $_SESSION = array(null); // 把session清空。
        session_destroy();   // 彻底销毁session
//        echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['name']."&nbsp;&nbsp;"."注销成功"."<br>";
//        echo  "<a href='http://123.207.83.243/updown/index.php'>点此返回主页</a>";
        $this->success('注销成功');
    }
}