<?php
 
namespace frontend\controllers;
 
use yii\web\Controller;
use Yii;
 
class SitemapController extends Controller
{
 
    public function actions()
{
    return array(
        'sitemap'=>array(
            'class'=>'ext.sitemap.ESitemapAction',
            'importListMethod'=>'getBaseSitePageList',
            'classConfig'=>array(
                array('baseModel'=>'Task',
                      'route'=>'/task/view',
                      'params'=>array('id'=>'taskId')),         
                array('baseModel'=>'Post',
                      'route'=>'/blog/post/view',
                      'params'=>array('id'=>'post_id')),
            ),     
            'import'=>array('blog.models.*')         
        ),
        'sitemapxml'=>array(
            'class'=>'ext.sitemap.ESitemapXMLAction',
            'classConfig'=>array(
                array('baseModel'=>'Task',
                      'route'=>'/task/view',
                      'params'=>array('id'=>'taskId')),        
                array('baseModel'=>'Post',
                      'route'=>'/blog/post/view',
                      'params'=>array('id'=>'post_id')),        
            ),
            //'bypassLogs'=>true, // if using yii debug toolbar enable this line
            'importListMethod'=>'getBaseSitePageList',
            'import'=>array('blog.models.*'),
        ),          
    );
}
}