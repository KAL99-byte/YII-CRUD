<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
       
        'css/all.min.css',
        // 'https://cdnjs.cloudflare.com/ajax/libs/onsen/2.10.10/css/font_awesome/css/all.min.css',
      'css/dataTables.bootstrap4.min.css',
      


      'https://fonts.gstatic.com',
      'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i',
    



      'assets/img/favicon.png',
     'assets/img/apple-touch-icon.png',
      'css/style.css',
      'assets/vendor/bootstrap/css/bootstrap.min.css',
      'assets/vendor/bootstrap-icons/bootstrap-icons.css',
     'assets/vendor/boxicons/css/boxicons.min.css',
     'assets/vendor/quill/quill.snow.css',
      'assets/vendor/quill/quill.bubble.css',
     'assets/vendor/remixicon/remixicon.css',
      'assets/vendor/simple-datatables/style.css',
      
      
      // 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css',



      // 'css/style.css',


    ];
    public $js = [
        'js/datatable.js',
        'js/jquery.dataTables.min.js',
        'js/dataTables.bootstrap4.min.js',



     

        'assets/vendor/apexcharts/apexcharts.min.js',
  'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
 'assets/vendor/chart.js/chart.umd.js',
  'assets/vendor/echarts/echarts.min.js',
  'assets/vendor/quill/quill.min.js',
  'assets/vendor/simple-datatables/simple-datatables.js',
  'assets/vendor/tinymce/tinymce.min.js',
  'assets/vendor/php-email-form/validate.js',
  'js/main.js',

        
       
        

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
       
    ];
}
