<?
#  @package phpproxy
#  @author stephen yabziz(�Ų���)<ywyhnchina@163.com>
#  @copyright Copyright (c) 2004
#  @version 2.0 - 21/05/2004 17:55:36 - config.php
#  @access public
#  @homepage http://opentools.uni.cc/mambo
#  @suport http://members.lycos.co.uk/dotop/phpBB2
?>
<?
//�Ƿ񹫿����phpproxy����������������phpproxyֱ����������$show_homepage_url
//if you set $is_public=true,anyone can use your phpproxy to surf!
$is_public=true;
//ȱʡ����
//default language
$default_lang="Chinese";
//���$is_public����Ϊfalse���������$show_homepage_url����������
//if $is_public=false,you need specialfied the url;open phpproxy,you will directly browser $show_homepage_url.
$show_homepage_url="http://sourceforge.net";
//�Ƿ��������ô���
//permit users to set proxyhost;
$permit_proxy=true;
$proxy_host="216.17.167.116";
$proxy_port="80";
//�Ƿ�ȥ��script
//disabled javascript?
$disabled_js=false;
//��ֹ��js����
//list javascript functions that you want to be baned
$disabled_js_funcs="";
//��ֹ�������ڵ�url
//list urls,eg: $block_popup_url=array("ads.com");that will block any url that contains "ads.com"
$block_popup_url=array();
//���ý������滻url���ļ�����
//list filetypes which do not need to be parsed for changing url
$all_objects = array('.jpg','.jpeg','.gif','.png','.css','.swf','.js','.zip','.gz','.tar','.rar','.exe','.pdf','.xls','.doc','.ppt','.mpg','.mpeg','.mp3','.mid','.midi','.wav','.java','.jar','.class','.xml');
//��ֹ���ļ����ͣ���������ɼ�����ҳ�������ٶȣ�
//list filetype baned,this may accelerate the speed of browsering
$ban_objects=array();

//�����һ�㲻���޸�
//generally,do not change anything below
$tag_attributes = array("A" => "HREF",
                            "LINK" => "HREF",
                            "IMG" => "SRC",
                            "FORM" => "ACTION",
                            "TD"  =>"BACKGROUND",
                            "BODY"  =>"BACKGROUND",
                            "TABLE"  =>"BACKGROUND",
                            "META" => "URL",
                            "SCRIPT" => "SRC"
                            );

//replace $key($url)
$tag_script = array("open"=> "(",
                    ".action"=> "="
                    //"href"=> "=",
                    );
//replace $key($url)
$tag_style = array("url"=> "("
                   );


?>
