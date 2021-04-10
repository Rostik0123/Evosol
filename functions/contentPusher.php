<?php

/**
 * @param array $data
 * @param string $template
 * @return false|string|string[]
 */
function contentPusher(array $data, string $template)
{
    $content = '';
    try {
        $content = file_get_contents($template);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

    if ($content === false) {
        return false;
    }

    $keys = array_keys($data);

    for ($i = 0; $i < count($keys); $i++) {
        $keys[$i] = sprintf('{{%s}}', $keys[$i]);
    }

    return str_replace($keys, array_values($data), $content);
}