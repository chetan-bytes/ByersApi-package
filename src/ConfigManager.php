<?php

namespace Bytesopensource\Buyers;

class ConfigManager
{

    public static function handleCLI()
    {

        try {
            $data = ['app_url' => '', 'cake_post' => 'server_post'];
            $configFilePath = './config/configBuyer.php';
            $configContent = "<?php\n\nreturn " . var_export($data, true) . ";\n";
            file_put_contents($configFilePath, $configContent);
            echo "Configuration file created at {$configFilePath}\n";
        } catch (\Exception $e) {
            echo "Caught exception: " . $e->getMessage();
        }
    }
}
