<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  dlds\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class NotificationAsset extends AssetBundle
{
    public $sourcePath = '@dlds/metronic/assets';
    public $js = [
        'plugins/bootstrap-toastr/toastr.min.js',
    ];

    public $css = [
        'plugins/bootstrap-toastr/toastr.min.css',
    ];

    public $depends = [
        'dlds\metronic\bundles\CoreAsset',
    ];
}
