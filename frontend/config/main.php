<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language'=>'zh-CN',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'common' => 'common.php',
                    ],
                ],
                'power' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'power' => 'power.php',
                    ],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            //���ڱ���urlManager�Ƿ�����URL�������ܣ���Yii1.1�г�Ϊpath��ʽURL��
            // Yii2.0�иĳ�������
            // Ĭ�ϲ����á���ʵ��ʹ���У��ر��ǲ�Ʒ������һ�㶼�����á�
            'enablePrettyUrl' => true,
            // �Ƿ������ϸ�������������ϸ������Ҫ��ǰ����Ӧ����ƥ��1��·�ɹ���
            // ������Ϊ����Ч·�ɡ�
            // ���ѡ����� enablePrettyUrl ���ú����Ч��
            'enableStrictParsing' => false,
            // �Ƿ���URL����ʾ��ڽű����Ƕ��������ܵĽ�һ�����䡣
            'showScriptName' => false,
            // ָ��������URL�����һ����׺���� .html ֮��ġ����� enablePrettyUrl ����ʱ��Ч��
            'suffix' => '',
            'rules' => [
                "<controller:\w+>/<id:\d+>"=>"<controller>/view",
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>"
            ],
        ],
    ],
    'params' => $params,
];
