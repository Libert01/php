<?php
class mySmarty {
    //源文件 目录
    var $template_dir="./templates/";
    
    //编译后的文件目录
    var $complie_dir="./templates_c/" ;
    
    //存放变量值 
    var $tpl_vars=array() ;
    
    //存放
    function assign($tpl_var,$val=null){
       
        if($tpl_var!=""){
            $this->tpl_vars[$tpl_var] = $val;
        }
    }
    
    //读取文件
    function display($tpl_file){
        //需要编译的 模板源文件
        $tpl_file_path = $this->template_dir.$tpl_file;
        //编译后文件
        $complie_file_path =$this->complie_dir."com_".$tpl_file.".php";
        
        if(!file_exists($tpl_file_path)){
            return false;
        }
        //编译后文件不存在  或源文件有修改 则编译
        if(!file_exists($complie_file_path) || filemtime($tpl_file_path)
            > filemtime($complie_file_path)){
            
            $tpl_file_con = file_get_contents($tpl_file_path);
            
            $pattern = array('/\{\s*\$([a-zA_Z_]\w*)\s*\}/i');
            
            $replace = array('<?php echo $this->tpl_vars["${1}"] ?>');
            
            $str = preg_replace($pattern, $replace, $tpl_file_con);
            
            file_put_contents($complie_file_path, $str);
        }
        
        //引入编译后文件
        include  $complie_file_path;
        
    }
     
    
}








?>
