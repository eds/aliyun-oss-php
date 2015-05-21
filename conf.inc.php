<?php
// ACCESS_ID, ACCESS_KEY
// defined('OSS_ACCESS_ID') || define('OSS_ACCESS_ID', '');
// defined('OSS_ACCESS_KEY') || define('OSS_ACCESS_KEY', '');

// 是否记录日志
defined('ALI_LOG') || define('ALI_LOG', false);

// 日志路径，默认使用oss目录下的./logs/
defined('ALI_LOG_PATH') || define('ALI_LOG_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR);
if (!is_dir(ALI_LOG_PATH)){
  mkdir(ALI_LOG_PATH, 0755, true);
}

// 是否显示LOG输出
defined('ALI_DISPLAY_LOG') || define('ALI_DISPLAY_LOG', false);

// 语言设置
defined('ALI_LANG') || define('ALI_LANG', 'zh');
