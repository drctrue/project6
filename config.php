<?php

/**
 * Used to store website configuration information.
 *
 * @param string $key
 *
 * @return mixed|null
 */
function config($key = '') {
  $config = [
    'name' => 'HOSTING.com',
    'nav_menu' => [
      'hosting' => 'Hosting',
      'services' => 'Services',
      'support' => 'Support',
      'contact' => 'Contact',
      'sign_up' => 'Sign up',
    ],
    'template_path' => 'template',
    'content_path' => 'pages',
  ];
  return isset($config[$key]) ? $config[$key] : NULL;
}